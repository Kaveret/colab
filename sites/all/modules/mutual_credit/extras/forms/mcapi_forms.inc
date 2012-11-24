<?php

/*
 * In this file we build the form, using the object cached in ctools
 */
module_load_include('inc', 'mcapi');

/*
 * main form builder, for this module, using the transaction_form as a base
 * build_info args are 0=> transaction, 1 => mcapi_form
 * $form['#settings'] is already defined
 * would have been nice to be able to build the transaction from the settings and pass it to transaction_form
 * then not worry about setting defaults here, which is really about shaping the form.
 */
function _mcapi_forms_form_mcapi_forms_form_alter(&$form, &$form_state, $form_id) {
  $settings = &$form['#settings'];
  $transaction = $form['#transaction'];
  //we need to store the step value in $form so that the theme system knows what to do
  $form['#step'] = $form_state['step'];
  $form['#theme'] = 'mcapi_form';
  //this might not be the way to build a 2 step form.
  //All the validation callbacks need to check the step because all the important fields are in step one only.
  if ($form['#step'] == 1) {
    $form['#template'] = mcapi_locale($settings['experience']['template'], 'template');
    $form['creator']['#type'] = 'hidden';
    $form['state']['#type'] = 'hidden';
    $form['state']['#value'] = TRANSACTION_STATE_FINISHED;
    $form['type']['#type'] = 'value';
    $form['type']['#value'] = $settings['info']['name'];

     //participants
    if ($settings['perspective'] == 3) {
      foreach (array('payer', 'payee') as $participant) {
        //specifies which user_chooser widget
        $form[$participant]['#type'] = strtok($settings[$participant]['user_chooser_config'], ':');
        $form[$participant]['#args'] = array(strtok(':'));
        //$form[$participant]['#default_value'] = $settings[$participant]['preset'];
        $form[$participant]['#allow_me'] = TRUE;//this could be put in the config
      }
    }
    else {
      //I-thou exchanges
      $form['secondperson'] = array(
        '#title' => t('Other person'), //this isn't supposed to be rendered
        '#default_value' => $transaction->secondperson
      ) + $form['payee'];
      //specifies which user_chooser widget
      $form['secondperson']['#type'] = strtok($settings['secondperson']['user_chooser_config'], ':');
      $form['secondperson']['#args'] = array(strtok(':'));
      $form['secondperson']['#required'] = TRUE;
      $form['secondperson']['#allow_me'] = FALSE;//this could be put in the config
      $type = $settings['direction']['widget'] ? $settings['direction']['widget'] : 'select';
      $options = ($type == 'select' && empty($settings['direction']['preset'])) ? array(t('Please choose...')) : array();
      $form['direction'] = array(
        '#title' => t('Direction'),
        '#type' => $type,
        '#options' => $options + array(
          'incoming' => $settings['direction']['incoming'],
          'outgoing' => $settings['direction']['outgoing']
        ),
        //if we are loading the page from blank, or rebuilding the form, we set the default values here,
        '#default_value' =>  $transaction->direction,
        '#required' => TRUE
      );
      unset($form['payer'], $form['payee']);
      //this validation function must run BEFORE the main one in the API, because its add payer and payee, which are required for normal validation
      array_unshift($form['#validate'], 'mcapi_forms_validate_secondperson');
    }
    //convert the zeros from the settings to empty strings in the actual form
    foreach (element_children($form['worth'][LANGUAGE_NONE]) as $delta) {
      if (empty($form['worth'][LANGUAGE_NONE][$delta]['#default_value']['quantity'])) {
        $form['worth'][LANGUAGE_NONE][$delta]['#default_value']['quantity'] = '';
      }
    }
  }
  elseif ($form['#step'] == 2) {
    drupal_set_title(mcapi_locale($settings['experience']['sure_title'], 'sure_title'));
    //we unset most of the fields so they don't display or change from what's in storage
    foreach(element_children($form) as $fieldname) {
      if (in_array($fieldname, array('buttons', 'form_id', 'form_build_id', 'form_token'))) continue;
      unset($form[$fieldname]);
    }
    //put the back button only for last step if there are values from step 1
    if (!empty($form_state['values'])) {//coming from step 1
      $form['#preview'] = transaction_view(
        $form_state['transactions'],
        mcapi_locale($settings['experience']['sure_format'], 'sure_format'),
        mcapi_locale(@$settings['experience']['sure_template'], 'sure_template')
      );
      mcapi_hide_tabs();
      $form['buttons']['back'] = array(
        '#type' => 'submit',
        '#value' => t('Back'),
        '#weight' => -1
      );
      array_unshift($form['#submit'], 'mcapi_forms_form_presubmit');
    }
    else {//landing directly on step 2
      $transaction = &$form_state['build_info']['args'][0];
      $form['#preview'] = transaction_view(array($transaction->xid => $transaction), $settings['experience']['sure_format']);
    }
    //the transaction properties were validated in step 1
    //bypass the default transaction validate function, transaction_form_validate which expects stuff in form_state['values]
    unset($form['#validate']);
  }
  //if we just put the strip at the top level of each element,
  //then it will get lost as the element-language-items go to theming
  foreach (element_children($form) as $fieldname) {
    if (isset($settings[$fieldname]['strip'])) {
      //not a very rigourous way to determine
      if(isset($form[$fieldname]['#title'])) {//normal fields
        $form[$fieldname]['#strip'] = $settings[$fieldname]['strip'];
      }
      else {//fieldAPI
        //I think we can get away with assuming that all transactions and
        //all fieldAPI fields on them are LANGUAGE_NONE
        $form[$fieldname][LANGUAGE_NONE]['#strip'] = $settings[$fieldname]['strip'];
      }
    }
  }
  //save button
  $form['buttons']['#type'] = 'actions';
  if (strpos($settings['submission']['button'], '/')) {
    $form['buttons']['submit']['#type'] = 'image_button';
    $form['buttons']['submit']['#src'] = $settings['submission']['button'];
  }
  else {
    $form['buttons']['submit']['#value'] = $settings['submission']['button'];
  }
  array_push($form['#submit'], 'mcapi_forms_form_postsubmit');//can't remember why use array_push and not just [] operator
  $form['#validate'][] = 'mcapi_forms_validate';
  $form['#attributes']['class'][] = 'step-'.$form['#step'];

  //this may help with the validation and submission
  //however it doesn't work because we need to rebuild the menu after editing the form
  //contextual links send the user back to this page,
  //but we are doing the rebuild as the form editing form returns to the admin/accounting/forms page
  //see list_table_header() in mcapi_forms_ui.class.php
  $form['#contextual_links']['mcapi_forms'] = array('admin/accounting/forms/list', array($settings['info']['name']));
}

/*
 * $variables consists of the usual suspects plus
 * $template
 * $mcapi_form_data
 */
function theme_mcapi_form($variables) {
  $form = &$variables['form'];
  $buttons = drupal_render($form['buttons']);
  //render the visible stuff first
  if ($form['#step'] == 1) {
    foreach (element_children($form) as $fieldname) {
      if (in_array($fieldname, array('payer', 'payee', 'secondperson', 'direction'))) {
        if (isset($form[$fieldname]['#strip']) && $form[$fieldname]['#strip']) {
          unset($form[$fieldname]['#theme_wrappers']);
          unset($form[$fieldname]['#title']);
          unset($form[$fieldname]['#description']);
        }
      }
      else {
        //strip the field API fields of their form-item wrappers
        if (!empty($form[$fieldname][LANGUAGE_NONE]['#strip'])) {
          //but they have different structures for radios, checkboxes and worths
          if (isset($form[$fieldname][LANGUAGE_NONE]['#entity'])) {
            unset($form[$fieldname][LANGUAGE_NONE]['#theme_wrappers']);
            //unset($form[$fieldname][LANGUAGE_NONE]['#title']);
            //unset($form[$fieldname][LANGUAGE_NONE]['#description']);
          }
          //compared to normal fields
          elseif(isset($form[$fieldname][LANGUAGE_NONE][0]['#entity'])) {
            mcapi_unset_recursive($form[$fieldname], '#theme_wrappers');
          }
          else drupal_set_message('Cannot strip field:: '.$fieldname);
        }
      }
    }
    return token_replace(
      $form['#template'],
      $form,
      array('sanitize' => FALSE)
    ) . '<br />'.$buttons;
  }
  elseif ($form['#step'] == 2) {
    $preview = drupal_render($form['#preview']);
    return drupal_render_children($form) . $buttons . $preview;
  }
}

/*
 * Form validation callback
 * set the payer and payee from the 2ndpeson and direction
 */
function mcapi_forms_validate_secondperson($form, &$form_state) {
  $values = &$form_state['values'];
  if (empty($values['secondperson'])) {//this is a rare situation, in which the user_chooser removed the value
    form_set_error('secondperson', t('Who was it with?'));
  }
  if ($values['direction'] == 'incoming') {
    $values['payer'] = $values['secondperson'];
    $values['payee'] = $GLOBALS['user']->uid;
  }
  elseif ($values['direction'] == 'outgoing') {
    $values['payer'] = $GLOBALS['user']->uid;
    $values['payee'] = $values['secondperson'];
  }
}

/*
 * form validation callback
 * handles the steps
 */
function mcapi_forms_validate($form, &$form_state) {
  if (!empty($form_state['clicked_button']['#submit']) && in_array('mcapi_transaction_undo_confirm_form', $form_state['clicked_button']['#submit'])) {
    return;
  }

  $form_state['rebuild'] = FALSE;
  //go back if that button was pressed
  if (isset($form_state['values']['back']) && $form_state['values']['op'] == $form_state['values']['back']) {
    $form_state['rebuild'] = TRUE;
    $form_state['step']--;
    $form_state['values'] = $form_state['storage'];
    unset($form_state['transactions']);
  }
  //if step 2 template is available add a step and rebuild the form
  elseif ($form['#settings']['experience']['sure_title']) {
    if (!form_get_errors() && $form['#step'] == 1) {
      $form_state['storage'] = $form_state['values'] + $form_state['storage'];
      $form_state['rebuild'] = TRUE;
      $form_state['step']++;
    }
  }

}



/*
 * First submit callback for default transaction form
 * copies anything in $form_state[storage] back to form_state[values]
 * the $form_state['values'] is step 2 were only needed to render the tokens
 * the actual transaction values were in $form_state['storage']
 */
function mcapi_forms_form_presubmit($form, &$form_state) {
  $form_state['values'] = $form_state['storage'];
}

/*
 * Last submit callback for default transaction form
 * this has to be after the transaction id is created and before the end of form processing
 */
function mcapi_forms_form_postsubmit($form, &$form_state) {
  $submission = &$form['#settings']['submission'];
  if ($submission['feedback']) {
    //this could be more sophisticated by using tokens and transaction_load_last()
    drupal_set_message($submission['feedback']);
  }
  //I'm finding $form_state['redirect'] doesn't work here
  if (empty($submission['redirect'])) {
    drupal_goto('transaction/' . $form_state['values']['serial']);
  }
  else {
    drupal_goto(str_replace('%user', $GLOBALS['user']->uid, $submission['redirect']));
  }
}


function mcapi_unset_recursive(array &$array, $prop) {
  unset($array[$prop]);
  foreach($array as $key => &$val) {
    if (is_array($val)) {
      mcapi_unset_recursive($val, $prop);
    }
  }
}


/*
 * pre php5.3
 */
if (!function_exists('array_replace_recursive')) {
  function array_replace_recursive($array, $array1) {
    // handle the arguments, merge one by one
    $args = func_get_args();
    $array = $args[0];
    if (!is_array($array)) {
      return $array;
    }
    for ($i = 1; $i < count($args); $i++) {
      if (is_array($args[$i])) {
        $array = recurse($array, $args[$i]);
      }
    }
    return $array;
  }
  function recurse($array, $array1) {
    foreach ($array1 as $key => $value) {
      // create new key in $array, if it is empty or not an array
      if (!isset($array[$key]) || (isset($array[$key]) && !is_array($array[$key]))) {
        $array[$key] = array();
      }
      // overwrite the value in the base array
      if (is_array($value)) {
        $value = recurse($array[$key], $value);
      }
      $array[$key] = $value;
    }
    return $array;
  }
}

function mcapi_locale(&$string, $key) {
  global $language;
  if ($language->language == 'en' || !function_exists('locale')) return $string;
  return locale($string, '', $language->language);
}