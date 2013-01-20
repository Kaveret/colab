<?php

/*
 * implements hook_mcapicurrencies_default
 * the 'default' currency is a local currency and later we will add a network-wide currency, Beez.
 */
function likeabee_resources_mcapicurrencies_default_alter(&$currencies) {
  $currency = new stdClass;
  $currency->disabled = FALSE; /* Edit this to true to make a default currency disabled initially */
  $currency->api_version = 3;
  $currency->currcode = DEFAULT_CURRENCY_NAME;
  $currency->data = (object)array(
    //default currency name is taken from the site_name at the moment it's first called
    'info' => array(//this wierd structure is for ctools benefit
      'currcode' => DEFAULT_CURRENCY_NAME,
    ),
    'human_name' =>  t('Beez'),
    'display' => array(
      'format' => '@minus<strong>BZ</strong>@integer',
      'divisions' => CURRENCY_DIVISION_MODE_NONE,
      'divisions_setting' => "0|00 Hours
25|15 mins
50|30 mins
75|45 mins",
    ),
    'uid' => 1,
    'currency_access' => array(
      'membership' => 'transact',
      'user_aggregated_view' => 'transact',
      'currency_aggregated_view' => 'transact',
    ),
    'transaction_view_access' => array(
      TRANSACTION_STATE_FINISHED => array(
        'transaction_access_callback_perm_transact' => 'transaction_access_callback_perm_transact',
        'transaction_access_callback_perm_manage_all' => 'transaction_access_callback_perm_manage_all',
      ),
      TRANSACTION_STATE_ERASED => array(
        'transaction_access_callback_perm_manage_all' => 'transaction_access_callback_perm_manage_all',
      ),
      TRANSACTION_STATE_PENDING => array(
        'transaction_access_callback_perm_manage_all' => 'transaction_access_callback_perm_manage_all',
        'transaction_access_callback_signatory' => 'transaction_access_callback_signatory',
      ),
      TRANSACTION_STATE_REVERSED => array(),
    ),
    'transaction_operation_access' => array(
      'undo' => array(
        'transaction_access_callback_perm_manage_all' => 'transaction_access_callback_perm_manage_all',
      ),
      'undo_pending' => array(
        'transaction_access_callback_perm_manage_all' => 'transaction_access_callback_perm_manage_all',
        'transaction_access_callback_signatory' => 'transaction_access_callback_signatory',
      )
    )
  );
  $currencies[DEFAULT_CURRENCY_NAME] = $currency;
}
