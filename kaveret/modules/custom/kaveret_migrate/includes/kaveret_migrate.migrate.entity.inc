<?php

/**
 * @file
 * Populate distribution with some content.
 */

abstract class KaveretMigration extends Migration {

  public function __construct() {
    parent::__construct();

    // Make sure we can use it for node and term only.
    if (!in_array($this->entityType, array('node', 'taxonomy_term'))) {
      throw new Exception('KaveretMigration supports only nodes and terms.');
    }

    $this->description = t('Import @type - @bundle from CSV file.', array('@type' => $this->entityType, '@bundle' => $this->bundle));

    $this->csvColumns = !empty($this->csvColumns) ? $this->csvColumns : array();
    $csv_cols[] = array('id', 'Unique ID');
    if ($this->entityType == 'node') {
      $this->addFieldMapping('title', 'title');
      $class_name = 'MigrateDestinationNode';

      if (og_is_group_content_type('node', $this->bundle)) {
        $csv_cols[] = array(OG_AUDIENCE_FIELD, 'Community');
        $this->dependencies[] = 'KaveretCommunityNodes';

        $this
          ->addFieldMapping(OG_AUDIENCE_FIELD, 'og_group_ref')
          ->sourceMigration('KaveretCommunityNodes');
      }

      $csv_cols[] = array('title', 'Title');
    }
    elseif ($this->entityType == 'taxonomy_term') {
      $this->addFieldMapping('name', 'name');

      $this->addFieldMapping('language')
        ->defaultValue('en');

      $class_name = 'MigrateDestinationTerm';
      $csv_cols[] = array('name', 'Name');

      if (!empty($this->languages)) {
        foreach ($this->languages as $language) {
          foreach ($this->translated_fields as $field => $title) {
            $csv_cols[] = array($field . '_' . $language, $title . ' ' . $language);
          }
        }
      }
    }

    // Rebuild the csv columns array.
    $this->csvColumns = array_merge($csv_cols, $this->csvColumns);

    // Create a map object for tracking the relationships between source rows
    $key = array(
      'id' => array(
        'type' => 'varchar',
        'length' => 255,
        'not null' => TRUE,
      ),
    );

    $destination_handler = new MigrateDestinationEntityAPI($this->entityType, $this->bundle);
    $this->map = new MigrateSQLMap($this->machineName, $key, $destination_handler->getKeySchema($this->entityType));

    // Create a MigrateSource object.
    $this->source = new MigrateSourceCSV(drupal_get_path('module', 'kaveret_migrate') . '/csv/' . $this->entityType . '/' . $this->bundle . '.csv', $this->csvColumns, array('header_rows' => 1));
    $this->destination = new $class_name($this->bundle, array('text_format' => 'filtered_html'));
  }

  function prepareRow($row) {
    $row->uid = 1;

    // Set a default timezone on all date fields, assuming the imported data
    // is in the site's timezone instead of the default UTC.
    if (!empty($this->dateFields)) {
      foreach ($this->dateFields as $date_field) {
        $date_data = array(
          'from' => $row->{$date_field},
          'timezone' => date_default_timezone_get(),
        );
        $row->{$date_field} = drupal_json_encode($date_data);
      }
    }
  }

  /**
   * Add translated fields values.
   * We do it in complete() rather than in prepare() because the fields created
   * by the title module are not appearing on the entity in prepare().
   */
  function complete($entity, $row) {
    if (empty($this->languages)) {
      return;
    }

    foreach ($this->languages as $language) {
      foreach (array_keys($this->translated_fields) as $field) {
        $entity->{$field}[$language] = array(array('value' => $row->{$field . '_' . $language}));
      }
    }

    entity_save($this->entityType, $entity);

    // Update entity_translation table.
    // TODO: Find a cleaner way to do so. See commented out code below.
    foreach ($this->languages as $language) {
      $wrapper = entity_metadata_wrapper($this->entityType, $entity);
      $fields = array(
        'entity_type' => $this->entityType,
        'entity_id' => $wrapper->getIdentifier(),
        'language' => $language,
        'source' => 'en',
        'uid' => 1,
        'status' => 1,
        'translate' => 0,
        'created' => REQUEST_TIME,
        'changed' => REQUEST_TIME,
      );

      db_insert('entity_translation')
        ->fields($fields)
        ->execute();
    }
/*
    $handler = entity_translation_get_handler($this->entityType, $entity);
    $handler->initPathScheme();
    $handler->initTranslations();
    $handler->saveTranslations();*/
  }
}
