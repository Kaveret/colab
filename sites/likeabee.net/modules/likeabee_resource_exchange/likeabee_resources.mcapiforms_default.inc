<?php

/*
 * Implements ctools hook mcapi_default_forms
 * N.B. Because ctools doesn't seem to run cache as well as might be expected, this is called any time a form is needed
 * Also: these are saved in the menu item arguments which may cause unexpected cacheing behaviour
 */
function likeabee_resources_mcapiforms_default_alter(&$mcapiforms) {
  $forms = array('1stparty', '3rdparty');
  foreach ($forms as $form_id) {
    $function = 'likeabee_default_'.$form_id;
    $mcapiforms[$form_id] = $function();
    if (function_exists('i18n_string_object_update')) {
      $strings = array('name' => $form_id) + $mcapiforms[$form_id]->data['experience'];
      //i18n_string_object_update('payform_experience', $strings);
    }
  }
}

function likeabee_default_1stparty() {
  $currencies = &drupal_static('currencies');
  $mcapiform = new stdClass;
  $mcapiform->disabled = FALSE; /* Edit this to true to make a default mcapi_form disabled initially */
  $mcapiform->api_version = 3;
  $mcapiform->name = '1stparty';
  $mcapiform->data = array(
    'info' => array(
      'name' => '1stparty',
    ),
    'perspective' => '1',
    'architecture' => array(
      'path' => 'transact/1stparty',
      'access' => 'user_chooser_permissions:transact',
      'menu_link' => MENU_DEFAULT_LOCAL_TASK,
      'use_block' => 1,
    ),
    'secondperson' => array(
      'preset' => '',
      'user_chooser_config' => 'user_chooser_permissions:transact',
      'strip' => 1,
    ),
    'direction' => array(
      'preset' => 'outgoing',
      'incoming' => 'Request',
      'outgoing' => 'Pay',
      'widget' => 'select',
      'strip' => 0,
    ),
    'transaction_description' => array(
      'preset' => array(
        0 => array(
          'value' => '',
        ),
      ),
      'strip' => 1,
    ),
    'worth' => array(
      'preset' => array(
        0 => array(
          'currcode' => 'def_drup',
          'quantity' => '0',
        )
      ),
      'strip' => 1,
    ),
    'submission' => array(
      'button' => 'Submit',
      'redirect' => '',
      'feedback' => ''
    ),
    'experience' => array(
      'title' => 'Make a payment',
      'template' => 'I want to [mcapiform:direction]
[mcapiform:secondperson] [mcapiform:worth]
For [mcapiform:transaction_description]',
      'sure_title' => 'Are you sure?',
      'sure_format' => 'certificate',
    )
  );
  return $mcapiform;
}

function likeabee_default_3rdparty() {
  $currencies = &drupal_static('currencies');
  $mcapiform = new stdClass;
  $mcapiform->disabled = FALSE; /* Edit this to true to make a default form disabled initially */
  $mcapiform->api_version = 3;
  $mcapiform->name = '3rdparty';
  $mcapiform->data = array(
    'info' => array(
      'name' => '3rdparty',
    ),
    'perspective' => '3',
    'architecture' => array(
      'path' => 'transact/3rdparty',
      'access' => 'user_chooser_permissions:transact',
      'menu_link' => MENU_LOCAL_TASK,
      'use_block' => 1,
    ),
    'payer' => array(
      'preset' => '',
      'user_chooser_config' => 'user_chooser_permissions:transact',
      'strip' => 1,
    ),
    'payee' => array(
      'preset' => '',
      'user_chooser_config' => 'user_chooser_permissions:transact',
      'strip' => 1,
    ),
    'transaction_description' => array(
      'preset' => array(
        0 => array(
          'value' => '',
        ),
      ),
      'strip' => 1,
    ),
    'worth' => array(
      'preset' => array(
        0 => array(
          'currcode' => 'def_drup',
          'quantity' => '0',
        ),
      ),
      'strip' => 1,
    ),
    'submission' => array(
      'button' => 'Submit',
      'redirect' => '',
      'feedback' => ''
    ),
    'experience' => array(
      'title' => 'Record a transaction',
      'template' => 'Payer: [mcapiform:payer]
Payee: [mcapiform:payee]
For [mcapiform:transaction_description]
[mcapiform:worth]',
      'sure_title' => 'Are you sure?',
      'sure_format' => 'certificate',
    ),
  );
  return $mcapiform;
}

