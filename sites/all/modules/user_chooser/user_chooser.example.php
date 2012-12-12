<?php


/*
 * Demo form
 * this form shows one of each kind of user chooser element, one for
 */
function uchoo_demo_form() {
  $demo_form = array(
    'test_permission' => array(
      '#title' => t('Testfield: @type', array('@type' => $method)),
      '#type' => 'user_chooser_permission',
      '#multiple' => TRUE,
      '#status' => TRUE, //filter only for active users
      '#args' => array('administer nodes'),
    ),
    'test_roles' => array(
      '#title' => t('Testfield: @type', array('@type' => $method)),
      '#type' => 'user_chooser_roles',
      '#multiple' => TRUE,
      '#status' => TRUE,
      '#args' => array(3),
    ),
    'test_callback' => array(
      '#title' => t('Testfield: @type', array('@type' => $method)),
      '#type' => 'user_chooser_callback',
      '#multiple' => TRUE,
      '#status' => TRUE,
      '#args' => array('_test_callback', 'arg1'),
    ),
  );
  $demo_form['submit'] = array('#type' => 'submit', '#value' => t('submit'));
  return drupal_get_form($demo_form);
}

/*
 * Example callback function.
 * Should return a uid-keyed array of user objects
 * or least objects with uid, name and email
 */
function _test_callback($args) {
  //select from all active users
  $users = user_load_multiple(NULL, array('status' => 1));
  foreach ($users as $account) {
    $accounts[] = $account;
  }
  return $accounts;
}
