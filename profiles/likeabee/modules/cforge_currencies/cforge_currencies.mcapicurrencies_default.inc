<?php

/*
 * implements hook_mcapicurrencies_default
 * simply copies the currency in the default currency variable, used for single currency systems
 */
function cforge_currencies_mcapicurrencies_default_alter($currencies) {
  $currencies[DEFAULT_CURRENCY_NAME]->data->display = array(
    'format' => '@minus<strong>CC</strong>@integer:@subdivision',
    'divisions' => CURRENCY_DIVISION_MODE_CUSTOM,
    'divisions_setting' => "0|00\n25|15 mins\n50|30 mins\n75|45mins",
  );
  $currencies[DEFAULT_CURRENCY_NAME]->data->zero = TRUE;
  $currencies[DEFAULT_CURRENCY_NAME]->data->currency_access = array(
    'membership' => 'transact',
    'user_aggregated_view' => 'transact',
    'currency_aggregated_view' => 'transact',
  );
  $currencies[DEFAULT_CURRENCY_NAME]->data->transaction_access = array(
    TRANSACTION_STATE_FINISHED => array(
      'transaction_access_callback_perm_transact' => 'transaction_access_callback_perm_transact',
    ),
    TRANSACTION_STATE_ERASED => array(),
  );
  //upgraded sites won't be reading this
  $currencies[DEFAULT_CURRENCY_NAME]->data->limits = array(
    'limits_callback' => 'limits_personal',
    'limits_personal' => array(
      'min' => '-10',
      'max' => '10',
    ),
  );
  if (module_exists('mcapi_signatures')) {
    $currencies[DEFAULT_CURRENCY_NAME]->data->transaction_access[TRANSACTION_STATE_PENDING] = array(
      'mcapi_access_authenticated' => 'transaction_access_authenticated',
    );
  }
}