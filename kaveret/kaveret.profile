<?php
/**
 * @file
 * kaveret profile.
 */

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * Allows the profile to alter the site configuration form.
 */
function kaveret_form_install_configure_form_alter(&$form, $form_state) {
  // Pre-populate the site name with the server name.
  $form['site_information']['site_name']['#default_value'] = 'kaveret';
}

/**
 * Implements hook_install_tasks().
 */
function kaveret_install_tasks() {
  $tasks = array();

  $tasks['kaveret_set_permissions'] = array(
    'display_name' => st('Set Permissions'),
    'display' => FALSE,
  );

  $tasks['kaveret_set_variables'] = array(
    'display_name' => st('Set Variables'),
    'display' => FALSE,
  );

  $tasks['kaveret_setup_blocks'] = array(
    'display_name' => st('Setup Blocks'),
    'display' => FALSE,
  );

  $tasks['kaveret_set_text_formats'] = array(
    'display_name' => st('Set text formats'),
    'display' => FALSE,
  );

  return $tasks;
}

/**
 * Task callback; Setup blocks.
 */
function kaveret_setup_blocks() {
  $default_theme = 'bootstrap';

  $blocks = array();
  $blocks[] = array(
    'module' => 'panels_mini',
    'delta' => 'footer',
    'theme' => $default_theme,
    'status' => 1,
    'weight' => 0,
    'region' => 'footer',
    'custom' => 0,
    'visibility' => 0,
    'pages' => '',
    'title' => '<none>',
    'cache' => DRUPAL_NO_CACHE,
  );

  drupal_static_reset();
  _block_rehash($default_theme);
  foreach ($blocks as $record) {
    db_update('block')
      ->fields($record)
      ->condition('module', $record['module'])
      ->condition('delta', $record['delta'])
      ->condition('theme', $record['theme'])
      ->execute();
  }
}

/**
 * Task callback; Set permissions.
 */
function kaveret_set_permissions() {
  // Enable default permissions for system roles.
  $permissions = array(
    'access content',
    'access comments',
    'post comments',
    'skip comment approval',
  );
  // Add content permissions.
  foreach (array_keys(node_type_get_types()) as $content_type) {
    $content_permissions = array(
      "create $content_type content",
      "edit own $content_type content",
      "delete own $content_type content",
    );
    $permissions = array_merge($permissions, $content_permissions);
  }
  user_role_grant_permissions(DRUPAL_AUTHENTICATED_RID, $permissions);

  // Anonymous permissions.
  $permissions = array(
    'access content',
    'access comments',
  );
  user_role_grant_permissions(DRUPAL_ANONYMOUS_RID, $permissions);


  // Create a default role for site administrators, with all available permissions assigned.
  $admin_role = new stdClass();
  $admin_role->name = 'administrator';
  $admin_role->weight = 2;
  user_role_save($admin_role);
  user_role_grant_permissions($admin_role->rid, array_keys(module_invoke_all('permission')));
  // Set this as the administrator role.
  variable_set('user_admin_role', $admin_role->rid);
  // Assign user 1 the "administrator" role.
  db_insert('users_roles')
    ->fields(array('uid' => 1, 'rid' => $admin_role->rid))
    ->execute();

  node_access_rebuild(TRUE);
}

/**
 * Task callback; Set variables.
 */
function kaveret_set_variables() {
  $variables = array(
    // Set the default theme.
    'theme_default' => 'bootstrap',
    'admin_theme' => 'seven',
    // Date/Time settings.
    'date_default_timezone' => 'Asia/Jerusalem',
    'date_first_day' => 1,
    'date_format_medium' => 'D, Y-m-d H:i',
    'date_format_medium_no_time' => 'D, Y-m-d',
    'date_format_short' => 'Y-m-d',
    // Enable user picture support and set the default to a square thumbnail option.
    'user_pictures' => '1',
    'user_picture_dimensions' => '1024x1024',
    'user_picture_file_size' => '800',
    'user_picture_style' => 'thumbnail',
    // Allow visitor account creation with administrative approval.
    'user_register' => USER_REGISTER_VISITORS_ADMINISTRATIVE_APPROVAL,
    // Update the menu router information.
    'menu_rebuild_needed' => TRUE,
    'jquery_update_jquery_version' =>  '1.8',
    'page_manager_node_view_disabled' => FALSE,
  );

  foreach ($variables as $key => $value) {
    variable_set($key, $value);
  }
}

/**
 * Task callback; Set text formats.
 */
function kaveret_set_text_formats() {
  // Add text formats.
  $filtered_html_format = (object)array(
    'format' => 'filtered_html',
    'name' => 'Filtered HTML',
    'weight' => 0,
    'filters' => array(
      // URL filter.
      'filter_url' => array(
        'weight' => 0,
        'status' => 1,
      ),
      // HTML filter.
      'filter_html' => array(
        'weight' => 1,
        'status' => 1,
      ),
      // Line break filter.
      'filter_autop' => array(
        'weight' => 2,
        'status' => 1,
      ),
      // HTML corrector filter.
      'filter_htmlcorrector' => array(
        'weight' => 10,
        'status' => 1,
      ),
    ),
  );
  filter_format_save($filtered_html_format);

  $full_html_format = (object)array(
    'format' => 'full_html',
    'name' => 'Full HTML',
    'weight' => 1,
    'filters' => array(
      // URL filter.
      'filter_url' => array(
        'weight' => 0,
        'status' => 1,
      ),
      // Line break filter.
      'filter_autop' => array(
        'weight' => 1,
        'status' => 1,
      ),
      // HTML corrector filter.
      'filter_htmlcorrector' => array(
        'weight' => 10,
        'status' => 1,
      ),
    ),
  );
  filter_format_save($full_html_format);
}