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
    'human_name' =>  t('Hours'),
    'display' => array(
      'format' => '@minus<strong>H</strong>@integer',
      'divisions' => CURRENCY_DIVISION_MODE_CUSTOM,
      'divisions_setting' => "0|Hours
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
    'transaction_access' => array(
      TRANSACTION_STATE_FINISHED => array(
        'transaction_access_callback_perm_transact' => 'transaction_access_callback_perm_transact',
        'transaction_access_callback_perm_manage_all' => 'transaction_access_callback_perm_manage_all',
      ),
      TRANSACTION_STATE_ERASED => array(
        'transaction_access_callback_perm_manage_all' => 'transaction_access_callback_perm_manage_all',
      ),
      TRANSACTION_STATE_REVERSED => array(),
    ),
    'transaction_operations' => array()
  );
  if (module_exists('mcapi_signatures')) {
    $currency->data->transaction_access[TRANSACTION_STATE_PENDING] = array(
      'transaction_access_callback_perm_manage_all' => 'transaction_access_callback_perm_manage_all',
      'transaction_access_callback_signatory' => 'transaction_access_callback_signatory',
    );
  }
  $currencies[DEFAULT_CURRENCY_NAME] = $currency;
  return $currencies;
}
