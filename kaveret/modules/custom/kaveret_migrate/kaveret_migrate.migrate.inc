<?php

/**
 * Migrate "Offer" categories terms.
 */
class KaveretOfferCategoriesTerms extends KaveretMigration {
  public $entityType = 'taxonomy_term';
  public $bundle = 'offer_categories';
}

/**
 * Migrate "Offer" categories terms.
 */
class KaveretOfferStatusesTerms extends KaveretMigration {
  public $entityType = 'taxonomy_term';
  public $bundle = 'offer_statuses';
}

/**
 * Migrate "Offer" nodes.
 */
class KaveretOfferNodes extends KaveretMigration {
  public $csvColumns = array(
    array('field_category', 'Category'),
    array('field_expiry_after', 'Delete after'),
    array('body', 'Body'),
    array('field_image', 'Image'),
  );

  public $entityType = 'node';
  public $bundle = 'offer';

  public $dependencies = array(
    'KaveretOfferCategoriesTerms',
  );

  public function __construct() {
    parent::__construct();

    $this->addFieldMapping('body', 'body')
      ->arguments(array('format' => 'plain_text'));;
    $this->addFieldMapping('field_expiry_after', 'field_expiry_after');
    $this->addFieldMapping('field_image', 'field_image');
    $this
      ->addFieldMapping('field_image:file_replace')
      ->defaultValue(FILE_EXISTS_REPLACE);
    $this
      ->addFieldMapping('field_image:source_dir')
      ->defaultValue(drupal_get_path('module', 'kaveret_migrate') . '/images');
    $this
      ->addFieldMapping('field_category', 'field_category')
      ->sourceMigration('KaveretOfferCategoriesTerms');
  }
}

/**
 * Migrate "Request" nodes.
 */
class KaveretRequestNodes extends KaveretMigration {
  public $csvColumns = array(
    array('field_category', 'Category'),
    array('field_expiry_after', 'Delete after'),
    array('body', 'Body'),
    array('field_image', 'Image'),
  );

  public $entityType = 'node';
  public $bundle = 'request';

  public $dependencies = array(
    'KaveretOfferCategoriesTerms',
  );

  public function __construct() {
    parent::__construct();

    $this->addFieldMapping('body', 'body')
      ->arguments(array('format' => 'plain_text'));;
    $this->addFieldMapping('field_expiry_after', 'field_expiry_after');
    $this->addFieldMapping('field_image', 'field_image');
    $this
      ->addFieldMapping('field_image:file_replace')
      ->defaultValue(FILE_EXISTS_REPLACE);
    $this
      ->addFieldMapping('field_image:source_dir')
      ->defaultValue(drupal_get_path('module', 'kaveret_migrate') . '/images');
    $this
      ->addFieldMapping('field_category', 'field_category')
      ->sourceMigration('KaveretOfferCategoriesTerms');
  }
}
