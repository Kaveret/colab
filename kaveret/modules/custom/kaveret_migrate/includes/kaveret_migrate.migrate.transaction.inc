<?php

/**
 * @file
 * Base class for MCAPI transactions migration.
 */

abstract class KaveretTransactionMigration extends Migration {

  public function __construct() {
    parent::__construct();

    // Make sure we can use it for node and term only.
    if ($this->entityType != 'transaction') {
      throw new Exception('KaveretTransactionMigration supports only transaction entities.');
    }

    $this->description = t('Import transaction entities from CSV file.');

    $this->csvColumns = !empty($this->csvColumns) ? $this->csvColumns : array();

    // Create a map object for tracking the relationships between source rows
    $key = array(
      'id' => array(
        'type' => 'varchar',
        'length' => 255,
        'not null' => TRUE,
      ),
    );
    $this->map = new MigrateSQLMap($this->machineName, $key, MigrateDestinationEntityAPI::getKeySchema('transaction'));

    // Create a MigrateSource object.
    $this->source = new MigrateSourceCSV(drupal_get_path('module', 'kaveret_migrate') . '/csv/transaction/transaction.csv', $this->csvColumns, array('header_rows' => 1));
    $this->destination = new MigrateDestinationEntityAPI('transaction', 'transaction');
  }
}
