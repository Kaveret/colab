<?php

/**
 * Migrate offer categories terms.
 */
class KaveretOfferCategoriesTerms extends KaveretMigration {
  public $entityType = 'taxonomy_term';
  public $bundle = 'offer_categories';
}

/**
 * Migrate offer categories terms.
 */
class KaveretOfferStatusesTerms extends KaveretMigration {
  public $entityType = 'taxonomy_term';
  public $bundle = 'offer_statuses';
}
