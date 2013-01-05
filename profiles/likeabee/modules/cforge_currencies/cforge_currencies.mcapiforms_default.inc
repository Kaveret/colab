<?php

/*
 * Implements ctools hook mcapi_default_forms_alter
 */
function cforge_currencies_mcapiforms_default_alter(&$mcapiforms) {
  foreach (array('1stparty', '3rdparty') as $form_id) {
    $function = 'cforge_default_'.$form_id;
    $function($mcapiforms[$form_id]->data);
  }
}

function cforge_default_1stparty(&$mcapiform) {
  $currencies = &drupal_static('currencies');
  $mcapiform['secondperson'] = array(
    'preset' => FALSE,
    'user_chooser_config' => 'user_chooser_permissions:transact',
    'strip' => 1,
  );
  $mcapiform['direction'] = array(
    'preset' => 'incoming',
    'incoming' => t('I am requesting'),
    'outgoing' => t('I am receiving'),
    'widget' => 'radios',
    'strip' => 1,
  );
  $mcapiform['worth'] = array(
    'preset' => array(
      0 => array(
        'currcode' => 'def_drup',
        'quantity' => '0',
      )
    ),
    'strip' => 1,
  );
  $mcapiform['transaction_description'] = array(
    'preset' => array(
      0 => array(
        'value' => '',
      )
    ),
    'strip' => 1,
  );

  $mcapiform['experience'] = array(
    'title' => t('Record an exchange'),
    'template' => 'Description of the exchange :
[mcapiform:transaction_description]
with
[mcapiform:secondperson]
[mcapiform:direction]
the sum of
[mcapiform:worth]
',
    'sure_title' => t('Are you sure?'),
    'sure_format' => 'certificate',
    'sure_template' => '',
  );
  $mcapiform['submission'] = array(
    'button' => t('Submit'),
    'redirect' => 'user/%user/statement',
    'feedback' => t('The transaction will be finalised when the other user signs it.')
  );
}

"L'échange sera conclu lorsque l'autre utilisateur aura confirmé.";


function cforge_default_3rdparty(&$mcapiform) {
  $mcapiform['payer'] = array(
    'preset' => FALSE,
    'strip' => 1,
    'user_chooser_config' => 'user_chooser_permissions:transact',
  );
  $mcapiform['payee'] = array(
    'preset' => '',
    'user_chooser_config' => 'user_chooser_permissions:transact',
    'strip' => 1,
  );
  $mcapiform['worth'] = array(
    'preset' => array(
      0 => array(
        'currcode' => 'def_drup',
        'quantity' => '0',
      ),
    ),
    'strip' => 1,
  );
  $mcapiform['transaction_description'] = array(
    'preset' => array(
      0 => array(
        'value' => '',
      ),
    ),
    'strip' => 1,
  );

  $mcapiform['experience'] = array(
    'title' => t('Record a transaction'),
    'template' => 'Payer: [mcapiform:payer]

Payee: [mcapiform:payee]

Description: [mcapiform:transaction_description]

[mcapiform:worth]
',
    'sure_title' => t('Are you sure?'),
    'sure_format' => 'certificate',
    'sure_template' => '',
  );
  $mcapiform['submission'] = array(
    'button' => t('Submit'),
    'redirect' => 'transaction/%transaction',
  );
}

