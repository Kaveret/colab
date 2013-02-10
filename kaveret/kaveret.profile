<?php
/**
 * @file
 * kaverte profile.
 */

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * Allows the profile to alter the site configuration form.
 */
function kaverte_form_install_configure_form_alter(&$form, $form_state) {
  // Pre-populate the site name with the server name.
  $form['site_information']['site_name']['#default_value'] = $_SERVER['SERVER_NAME'];
}

/**
 * Implements hook_install_tasks().
 */
function kaverte_install_tasks() {
  $tasks = array();

  $tasks['kaverte_setup_blocks'] = array(
    'display_name' => st('Setup Blocks'),
    'display' => FALSE,
  );

  $tasks['kaverte_set_permissions'] = array(
    'display_name' => st('Grant permissions'),
    'display' => FALSE,
  );

  return $tasks;
}

/**
 * Task callback; Setup blocks.
 *
 * @todo: Add blocks.
 */
function kaverte_setup_blocks() {
  return;

  $default_theme = variable_get('theme_default', 'kaverte_omega');

  $blocks = array();

  $blocks[] = array(
    'module' => 'panels_mini',
    'delta' => 'footer',
    'theme' => $default_theme,
    'status' => 1,
    'weight' => 0,
    'region' => 'footer',
    'pages' => '',
    'title' => '<none>',
    'cache' => DRUPAL_NO_CACHE,
  );

  drupal_static_reset();
  _block_rehash($default_theme);
  foreach ($blocks as $record) {
    $module = array_shift($record);
    $delta = array_shift($record);
    $theme = array_shift($record);
    db_update('block')
      ->fields($record)
      ->condition('module', $module)
      ->condition('delta', $delta)
      ->condition('theme', $theme)
      ->execute();
  }
}

/**
 * Task callback; Set user permissions.
 */
function kaverte_set_permissions() {
  $permissions = array(
    'access content',
    'access comments',
    'post comments',
    'skip comment approval',
    'access overlay',
    'access site-wide contact form',
  );
  user_role_grant_permissions(DRUPAL_ANONYMOUS_RID, $permissions);

  // Enable default permissions for system roles.
  // @todo: Following permissions don't work.
  $permissions += array(
    'create project content',
    'edit own project content',
  );

  user_role_grant_permissions(DRUPAL_AUTHENTICATED_RID, $permissions);
}
