<?php

/**
 * Migrate "Offer" categories terms.
 */
class KaveretOfferCategoriesTerms extends KaveretMigration {
  public $entityType = 'taxonomy_term';
  public $bundle = 'offer_categories';

  public $languages = array('he');
  public $translated_fields = array('name_field' => 'Name');
}

/**
 * Migrate "Offer" statuses terms.
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
    $this->addFieldMapping('field_category', 'field_category');
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
    $this->addFieldMapping('field_category', 'field_category');
  }
}


/**
 * Migrate Page nodes.
 */
class KaveretPageNodes extends KaveretMigration {
  public $csvColumns = array(
    array('language', 'Language'),
    array('path', 'Path'),
    array('link_weight', 'Link weight'),
    array('body', 'Body'),
  );

  public $entityType = 'node';
  public $bundle = 'page';



  public function __construct() {
    parent::__construct();

    $this->addFieldMapping('body', 'body')
      ->arguments(array('format' => 'full_html'));;

    $this->addFieldMapping('language', 'language');
    $this->addFieldMapping('path', 'path');
  }

  public function complete($entity, $row) {
    // update menu items for the page.
    $menus = menu_tree_all_data($menu_name = 'side-menu');
    foreach ($menus as $menu) {
      if ($menu['link']['link_title'] == $row->title) {
        $menu['link']['link_path'] = 'node/' . $entity->nid;
        menu_link_save($menu['link']);
      }
    }
  }
}

/**
 * Migrate "Community" nodes.
 */
class KaveretCommunityNodes extends KaveretMigration {
  public $entityType = 'node';
  public $bundle = 'community';

  public function __construct() {
    parent::__construct();
    $this->addFieldMapping(OG_GROUP_FIELD)->defaultValue(TRUE);
  }

  public function complete($entity, $row) {
    // Set the first community as the default community.
    if (!variable_get('kaveret_og_default_community')) {
      variable_set('kaveret_og_default_community', $entity->nid);
    }
  }
}

/**
 * Migrate users.
 */
class KaveretUsers extends Migration {
  /**
   * Map the field and properties to the CSV header.
   */
  public $csvColumns = array(
    array('id', 'Unique ID'),
    array('name', 'Username'),
    array('pass', 'Password'),
    array('mail', 'Email'),
  );

  public $entityType = 'user';

  public function __construct() {
    parent::__construct();
    $this->description = t('Import users from a CSV file.');

    $this->addFieldMapping('name', 'name');
    $this->addFieldMapping('pass', 'pass');
    $this->addFieldMapping('mail', 'mail');
    $this->addFieldMapping('roles')
         ->defaultValue(DRUPAL_AUTHENTICATED_RID);
    $this->addFieldMapping('status')
         ->defaultValue(TRUE);

    // Create a map object for tracking the relationships between source rows
    $key = array(
      'id' => array(
        'type' => 'varchar',
        'length' => 255,
        'not null' => TRUE,
      ),
    );
    $destination_handler = new MigrateDestinationUser();
    $this->map = new MigrateSQLMap($this->machineName, $key, $destination_handler->getKeySchema());

    // Create a MigrateSource object.
    $this->source = new MigrateSourceCSV(drupal_get_path('module', 'kaveret_migrate') . '/csv/' . $this->entityType . '/user.csv', $this->csvColumns, array('header_rows' => 1));
    $this->destination = new MigrateDestinationUser();
  }
}

/**
 * Migrate transaction entities.
 */
class KaveretTransaction extends KaveretTransactionMigration {

  public $entityType = 'transaction';
  public $bundle = 'transaction';

  public $csvColumns = array(
    array('id', 'Unique ID'),
    array('payer', 'Payer'),
    array('payee', 'Payee'),
    array('type', 'Type'),
    array('creator', 'Creator'),
    array('created', 'Created'),
    array('transaction_purpose', 'Purpose'),
    array('currency', 'Currency'),
    array('amount', 'Amount'),
  );

  public $dependencies = array(
    'KaveretUsers',
  );


  public function __construct() {
    parent::__construct();

    $this->addFieldMapping('type', 'type');
    $this->addFieldMapping('created', 'created');
    $this->addFieldMapping('transaction_purpose', 'transaction_purpose');
    $this
      ->addFieldMapping('payer', 'payer')
      ->sourceMigration('KaveretUsers');
    $this
      ->addFieldMapping('payee', 'payee')
      ->sourceMigration('KaveretUsers');
    $this
      ->addFieldMapping('creator', 'creator')
      ->sourceMigration('KaveretUsers');
  }

  public function prepare($entity, $row) {
    // Set the worth value.
    // TODO: See if it's possible to set it with ('worth:currcode', 'currency').
    $worth = array(
      'quantity' => $row->amount,
      'currcode' => $row->currency,
    );
    $entity->worth = array(LANGUAGE_NONE => array($worth));
  }


  public function complete($entity, $row) {
    // Re-set the created value, because it gets overridden, also when trying to
    // set it with entity_save.
    db_update('mcapi_transactions')
      ->fields(array('created' => $row->created,))
      ->condition('xid', $entity->xid)
      ->execute();
  }
}
