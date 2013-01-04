<?php
currencies_load();

/*
 * Implements ctools hook mcapi_default_forms
 * N.B. Because ctools doesn't seem to run cache as well as might be expected, this is called any time a form is needed
 * Also: these are saved in the menu item arguments which may cause unexpected cacheing behaviour
 */
function likeabee_dreams_mcapiforms_default_alter() {
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
    'worth' => array(
      'preset' => array(
        0 => array(
          'currcode' => key($currencies),
          'quantity' => '0',
        )
      ),
      'strip' => 0,
    ),
    'submission' => array(
      'button' => 'Submit',
      'redirect' => '',
      'feedback' => ''
    ),
    'experience' => array(
      'title' => 'Make a payment',
      'template' => 'I want to [mcapiform:direction]
[mcapiform:secondperson] [mcapiform:worth]',
      'sure_title' => 'Are you sure?',
      'sure_format' => 'certificate',
    )
  );
  $forms[$mcapiform['info']['name']] = $mcapiform;
  return $forms;
}

