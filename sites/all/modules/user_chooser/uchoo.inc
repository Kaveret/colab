<?php


function _process_uchoo($element, $form_state) {
  if (empty($element['#accepts'])) $element['#accepts'] = array('mail', 'uid', 'name');
  if (!isset($element['#allow_blocked']))$element['#allow_blocked'] = 0; //just to be explicit
  if (!isset($element['#allow_me']))$element['#allow_me'] = 0; //just to be explicit
  //for the preselect type, we use the 'select' widget with an option for each callback
  if ($element['#type'] == 'user_chooser_preselect') {
    $element['#options'] = module_invoke_all('user_chooser_preselect');
    $element['#theme'] = 'select';
  }
  //before anything, we have to work out how many users are valid
  elseif ($uids = uchoo_get_valid_uids($element)) {
    //then we build the widget according to the valid user threshhold.
    if (count($uids) < variable_get('user_chooser_threshhold', 50)) {
      $element['#theme'] = 'select';
      $element['#options'] = uchoo_display_all($uids);
      if (!$element['#multiple']) {
        $element['#options'] = array('' => t('Please choose...')) + $element['#options'];
      }
      $element = form_process_select($element);
      if (empty($element['#default_value']) && !empty($form_state['values'][$element['#name']])) {
        $element['#default_value'] = $form_state['values'][$element['#name']];
      }
      if (empty($element['#allow_me'])) {
        unset($element['#options'][$GLOBALS['user']->uid]);
      }
    }
    else {
      $element['#theme'] = 'textfield';
      $element['#autocomplete_path'] = 'system/ajax/uchoo/'.current_path() .'/'.$element['#name'];

      if (!empty($form_state['values'][$element['#name']])) {
        $element['#value'] = $form_state['values'][$element['#name']];
      }
      if (empty($element['#description'])) {
         if (in_array('uid', $element['#accepts'])) $accepts[] = t('user ID');
         if (in_array('username', $element['#accepts'])) $accepts[] = t('username');
         if (in_array('mail', $element['#accepts'])) $accepts[] = t('email');
         if ($element['#multiple']) {
           $element['#description'] =  t('Accepts @types', array('@types' => implode(', ', $accepts)));
         }
         else {
           $element['#description'] =  t('Accepts @types; comma separated', array('@types' => implode(', ', $accepts)));
         }
      }
    }
  }
  else {
    drupal_set_message($element, t("No users available to widget type '@type' with param @params", array(
      '@type' => $element['#type'],
      '@params' => implode(',', $element['#args'])
    )), 'warning');
    $element = array();
  }
  return $element;
}




/*
 * Settings form to set global restrictions
 */
function uchoo_config_form() {
  $form = array (
    'user_chooser_threshhold' => array(
      '#title' => t('Autocomplete threshhold'),
      '#description' => t('Below this number of items, a select box is shown, above it, an autocomplete field'),
      '#type' => 'textfield',
      '#size' => 3,
      '#maxlength' => 3,
      '#default_value' => variable_get('user_chooser_threshhold', 50),
      '#element_validate' => array('_element_validate_integer')
    ),
    'user_chooser_format' => array(
      '#title' => t('Display format'),
      '#description' => t('At least one of the following tokens must be used:') .implode(',', _uchoo_tokens()),
      '#type' => 'textfield',
      '#maxlength' => 64,
      '#default_value' => variable_get('user_chooser_format', '[user:name]'),
      '#element_validate' => array('uchoo_validate_format')
    ),
    'user_chooser_matching' => array(
      '#title' => t('Fields to match against'),
      '#description' => t('The autocomplete widget will get matches based on which fields?') .' '. t('Only applies to permission role and conditions based widgets.'),
      '#type' => 'checkboxes',
      '#options' => array(
        'u.uid' => t('user ID'),
        'u.name' => t('username'),
        'u.mail' => t('email'),
      ),
      '#default_value' => variable_get('user_chooser_matching', array('u.uid', 'u.name', 'u.mail')),
      '#weight' => 2
    ),
  );
  return system_settings_form($form);
}

//form element callback
//checks that all submited values are in fact in the list.
function user_chooser_validate(&$element, &$form_state) {
  if ($element['#type'] == 'user_chooser_preselect') {
    $function = isset($element['#value']) ? $element['#value'] : $element['#default_value'];
    //replace the submitted callback with the values it returns
    $element['#value'] = $function($element, $form_state);
    if (empty($element['#allow_me'])) {
      $key = array_search($GLOBALS['user']->uid, $element['#value']);
      if (is_integer($key)) unset($element['#value'][$key]);
    }
  }
  else {
    $values = is_array($element['#value']) ?  $element['#value'] : array_filter(array($element['#value']));
    $uids = array();
    $invalids = array();
    foreach ($values as $key => $string) {
      $conditions = db_or();
      foreach ($element['#accepts'] as $field) {
        $conditions->condition($field, $string);
      }
      $values[$key] = db_select('users', 'u')
        ->fields('u', array('uid'))
        ->condition('uid', 0, '!=')
        ->condition($conditions)
        ->execute()
        ->fetchField();
      if (!$values[$key]) {//users who don't exist
        $invalids[] = $string;
      }
    }
    if (empty($element['#allow_me'])) {
      //quietly remove me if I'm not allowed
      $key = array_search($GLOBALS['user']->uid, $values);
      if (is_integer($key)) {
        form_error($element, t("You can't put yourself in '@name'", array('@name' => $element['#title'])));
        return;
      }
    }
    $all_valid_uids = uchoo_get_valid_uids($element);
    foreach (array_filter($values) as $uid) {
      if (!in_array($uid, $all_valid_uids)) {
        //users who are filtered out
        $invalids[] = $uid;
      }
    }
    if (!empty($invalids)) {
      //owch I can't get the string for the invalid user here, I don't know where the element['#value'] changed
      form_error($element, t("Invalid user for field: @name", array('@name' => implode($invalids))));
      //set the contents of the field back to the errant value ready for the form rebuilding
      $element['#value'] = $form_state['values'][$element['#name']];
      return;
    }
    //if it passes validation, set the #value to the uid, which is usually expected.
    //however, this looks odd if some other form element fails validation
    $element['#value'] = is_array($element['#value']) ? $values : reset($values);
  }
  form_set_value($element, $element['#value'], $form_state);
}

//retrives an array of user ids according to the form widget parameters and optionally the string from the autocomplete field.
//note that the $args may be keyed, esp for user_chooser_conditions
//in a perfect world, the $element would been cached perhaps in the $form_state or {cache_form} table and we would have access to it here,
//instead, we are passing $args back and forth, and must deal with the #allow_me elsewhere.
function uchoo_get_valid_uids($element, $string = '', $limit = FALSE) {
  //deal with the types which do their own db queries
  switch ($element['#type']) {
    case 'user_chooser_callback':
    case 'user_chooser_preselect':
      //first arg has to be the callback function
      $callback = array_shift($element['#args']);
      $args = array_splice($element['#args'], 1);
      return call_user_func($callback, $args);
    case 'user_chooser_view':
      drupal_set_message("user_chooser_view' hasn't been written yet");
  }

  //if we're still here, the rest of the options use a query
  $query = db_select('users', 'u')->condition('u.uid', 0, '!=');
  if (strlen($string)) {
    $or = db_or();
    foreach (variable_get('user_chooser_matching', array('u.uid', 'u.name', 'u.mail')) as $field) {
      $query->condition($or->condition($field, db_like($string) . '%', 'LIKE'));
    }
  }
  if (!$element['#allow_blocked']) {
    $query->condition('u.status', TRUE);
  }
  switch ($element['#type']) {
    case 'user_chooser_permissions':
      $rids = array();
      foreach($element['#args'] as $perm) {
        $roles = user_roles(TRUE, $perm);
        foreach ($roles as $rid => $name) $rids[] = $rid;
      }
      if (!count($element['#args'])) continue;
      $element['#args'] = array_unique($rids);
      //then use the roles method
    case 'user_chooser_roles':
      $pos = array_search(DRUPAL_AUTHENTICATED_RID, $element['#args']);
      if (is_numeric($pos) || empty($element['#args'])) { //role 2 means all known users
        unset($element['#args'][$pos]);
      }
      else {
        $query->join('users_roles', 'ur', 'ur.uid = u.uid');
        $query->condition('ur.rid', $element['#args']);
      }
      break;
    default:
      drupal_set_message('Unsupported user_chooser element #type:'. $element['#type']);
  }
  if ($limit) {
    $query->range(0, variable_get('user_chooser_threshhold', 50));
  }
  //return $query->fields('u', array('uid', 'name', 'mail'))->execute()->fetchAllAssoc('uid');
  return $query->fields('u', array('uid'))->execute()->fetchCol();
}


/*
 * validation callback for settings form element
 */
function uchoo_validate_format(&$element, $form_state) {
  foreach (_uchoo_tokens() as $token) {
    if (is_numeric(strpos($element['#value'], $token))) return;
  }
  form_error($element, t('At least one of the following tokens must be used:') .implode(',', _uchoo_tokens()));
}



/*
 * NOT an implementation of hook_tokens, just a local utility
 */
function _uchoo_tokens() {
  return array('[user:name]', '[user:mail]', '[user:uid]');
}


//takes an array of pseudo users and formats them for display
function uchoo_display_all($uids, $use_uid = TRUE) {
  $names = array();
  foreach (user_load_multiple($uids) as $account) {
    //could use format_username, but that is very hard to match against
    $names[$account->uid] = $account->name;
  }
  return $names;
}
