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

  $tasks['kaveret_setup_languages'] = array(
    'display_name' => st('Setup languages'),
    'display' => FALSE,
  );

  // Allow switching between single and multiple communities.
  $tasks['kaveret_community_form'] = array(
    'display_name' => st('Choose between single and multiple communities'),
    'type' => 'form'
  );

  $tasks['kaveret_set_permissions'] = array(
    'display_name' => st('Set Permissions'),
    'display' => FALSE,
  );

  $tasks['kaveret_set_variables'] = array(
    'display_name' => st('Set Variables'),
    'display' => FALSE,
  );

  $tasks['kaveret_menus_setup'] = array(
    'display_name' => st('Create menu items'),
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

  $tasks['kaveret_og_setup'] = array(
    'display_name' => st('Create OG fields'),
    'display' => FALSE,
  );

  $tasks['kaveret_i18n_setup'] = array(
    'display_name' => st('Import language files'),
    'display' => FALSE,
  );

  return $tasks;
}

/**
 * Task callback; Setup languages.
 */
function kaveret_setup_languages() {
  locale_add_language('he');

  $language_negotiation = array(
    'locale-url' => array(
      'callbacks' => array(
        'language' => 'locale_language_from_url',
        'switcher' => 'locale_language_switcher_url',
        'url_rewrite' => 'locale_language_url_rewrite_url',
      ),
      'file' => 'includes/locale.inc',
    ),
    'language-default' => array(
      'callbacks' => array(
        'language' => 'language_from_default',
      ),
    ),
  );
  variable_set('language_negotiation_language', $language_negotiation);
}

/**
 * Single/ multiple communities form.
 */
function kaveret_community_form($form, &$form_state) {
  $form['kaveret_og_single_community'] = array(
    '#title' => t('Single community'),
    '#type' => 'checkbox',
    '#default_value' => TRUE,
  );

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Next'),
  );

  return $form;
}

/**
 * Submit handler for single/ multiple communities form.
 */
function kaveret_community_form_submit($form, &$form_state) {
  if (!empty($form_state['values']['kaveret_og_single_community'])) {
    $context_handlers = array(
      'kaveret_og' => TRUE,
    );
  }
  else {
    $context_handlers = array(
      'url' => TRUE,
      'node' => TRUE,
      'og_purl' => TRUE,
    );

    module_enable(array('og_purl'));
  }

  // Set OG-context handlers.
  variable_set('og_context_negotiation_group_context', $context_handlers);
}

/**
 * Task callback; Setup blocks.
 */
function kaveret_setup_blocks() {
  $default_theme = 'bootstrap';

  $blocks = array();

  $blocks[] = array(
     'module' => 'views',
     'delta' => 'sig_blocks-my_sig_needed',
     'theme' => $default_theme,
     'status' => 1,
     'weight' => 0,
     'region' => 'content',
     'custom' => 0,
     'visibility' => 0,
     'pages' => '',
     'title' => '',
     'cache' => DRUPAL_NO_CACHE,
  );

  $blocks[] = array(
    'module' => 'panels_mini',
    'delta' => 'navbar',
    'theme' => $default_theme,
    'status' => 1,
    'weight' => 0,
    'region' => 'navigation',
    'custom' => 0,
    'visibility' => 0,
    'pages' => '',
    'title' => '',
    'cache' => DRUPAL_NO_CACHE,
  );

  $blocks[] = array(
    'module' => 'menu',
    'delta' => 'footer-links',
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

  $blocks[] = array(
    'module' => 'panels_mini',
    'delta' => 'sidebar',
    'theme' => $default_theme,
    'status' => 1,
    'weight' => 0,
    'region' => 'sidebar_second',
    'custom' => 0,
    'visibility' => 0,
    'pages' => '',
    'title' => '',
    'cache' => DRUPAL_NO_CACHE,
  );

  drupal_static_reset();
  _block_rehash($default_theme);
  foreach ($blocks as $record) {
    db_merge('block')
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
    'search content',
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
    'search content',
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
    'user_register' => USER_REGISTER_VISITORS,
    'user_email_verification' => FALSE,

    // Update the menu router information.
    'menu_rebuild_needed' => TRUE,
    'jquery_update_jquery_version' =>  '1.8',
    'page_manager_node_view_disabled' => FALSE,
    'mimemail_format' => 'full_html',
    // TODO: Currently, the attached CSS seems to break the email.
    'mimemail_sitestyle' => FALSE,
    'site_frontpage' => 'front',
    'kaveret_og_single_community' => TRUE,

    // Facebook OAuth settings.
    'fboauth_id' => '587884784574938',
    'fboauth_secret' => 'aa9f158d6e43ef26baee93efba6d5275',
    'fboauth_user_properties' => array('email'),

    // Translation settings.
    'entity_translation_entity_types' => array(
      'node' => 'node',
      'taxonomy_term' => 'taxonomy_term',
    ),

    // MCAPI settings.
    'user_chooser_threshhold' => 1,
    'mcapi_signatures_1stparty' => array(
      'participants' => TRUE,
      'countersignatories' => '',
      'notify' => TRUE,
    ),
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

/**
 * Profile task; Attach OG related fields.
 */
function kaveret_og_setup() {
  variable_set('og_features_ignore_og_fields', TRUE);

  // Group  type.
  og_create_field(OG_GROUP_FIELD, 'node', 'community');

  // Group content types.
  $bundles = array(
    'offer',
    'request',
  );

  foreach ($bundles as $bundle) {
    $og_field = og_fields_info(OG_AUDIENCE_FIELD);
    $og_field['instance']['label'] = 'Community';
      // Enable Entity-reference prepopulate.
    $og_field['instance']['settings']['behaviors']['prepopulate'] = array(
      'status' => TRUE,
      'action' => 'hide',
      'action_on_edit' => TRUE,
      'fallback' => 'redirect',
      'og_context' => TRUE,
    );

    og_create_field(OG_AUDIENCE_FIELD, 'node', $bundle, $og_field);
  }
}

/**
 * Profile task; create menu links.
 */
function kaveret_menus_setup() {
  // Add links to user menu.
  $item = array(
    'link_title' => 'Log in',
    'link_path' => 'user/login',
    'menu_name' => 'user-menu',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'Register',
    'link_path' => 'user/register',
    'menu_name' => 'user-menu',
  );
  menu_link_save($item);

  // Create the footer links menu.
  $menu = array(
    'menu_name' => 'footer-links',
    'title' => 'Footer links',
    'description' => 'Footer links',
    'i18n_mode' => I18N_MODE_MULTIPLE,
  );
  menu_save($menu);

  $item = array(
    'link_title' => 'Facebook',
    'link_path' => 'http://facebook.com/',
    'menu_name' => 'footer-links',
    'language' => 'en',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'Twitter',
    'link_path' => 'http://twitter.com/',
    'menu_name' => 'footer-links',
    'language' => 'en',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'RSS',
    'link_path' => '<front>',
    'menu_name' => 'footer-links',
    'language' => 'en',
  );
  menu_link_save($item);

// Hebrew translation.
  $item = array(
    'link_title' => 'פייסבוק',
    'link_path' => 'http://facebook.com/',
    'menu_name' => 'footer-links',
    'weight' => 30,
    'language' => 'he',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'טוויטר',
    'link_path' => 'http://twitter.com/',
    'menu_name' => 'footer-links',
    'weight' => 20,
    'language' => 'he',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'רססי מידע',
    'link_path' => '<front>',
    'menu_name' => 'footer-links',
    'weight' => 10,
    'language' => 'he',
  );
  menu_link_save($item);



  // Create the footer links menu.
  $menu = array(
    'menu_name' => 'side-menu',
    'title' => 'Side menu',
    'description' => 'Side pop-up menu',
    'i18n_mode' => I18N_MODE_MULTIPLE,
  );
  menu_save($menu);

  // Add main menu links.
  $item = array(
    'link_title' => 'Resource Exchange',
    'link_path' => '<front>',
    'menu_name' => 'side-menu',
    'expanded' => TRUE,
    'options' => array('attributes' => array('class' => array('main', 'resources'))),
    'weight' => 10,
    'language' => 'en',

  );
  $mlid = menu_link_save($item);

  $item = array(
    'link_title' => 'My Wallet',
    'link_path' => 'my-wallet',
    'menu_name' => 'side-menu',
    'plid' => $mlid,
    'customized' => TRUE,
    'language' => 'en',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'Directory',
    'link_path' => 'directory',
    'menu_name' => 'side-menu',
    'plid' => $mlid,
    'customized' => TRUE,
    'language' => 'en',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'Dreams Accelerator',
    'link_path' => '<front>',
    'menu_name' => 'side-menu',
    'expanded' => TRUE,
    'options' => array('attributes' => array('class' => array('main', 'dreams'))),
    'weight' => 20,
    'language' => 'en',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'Learning center',
    'link_path' => '<front>',
    'menu_name' => 'side-menu',
    'expanded' => TRUE,
    'options' => array('attributes' => array('class' => array('main', 'learning-center'))),
    'weight' => 30,
    'language' => 'en',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'Groups',
    'link_path' => '<front>',
    'menu_name' => 'side-menu',
    'expanded' => TRUE,
    'options' => array('attributes' => array('class' => array('main', 'communities'))),
    'weight' => 40,
    'language' => 'en',
  );
  menu_link_save($item);

  // Hebrew translation.
  $item = array(
    'link_title' => 'החלפת משאבים',
    'link_path' => '<front>',
    'menu_name' => 'side-menu',
    'expanded' => TRUE,
    'options' => array('attributes' => array('class' => array('main', 'resources'))),
    'weight' => 10,
    'language' => 'he',

  );
  $mlid = menu_link_save($item);

  $item = array(
    'link_title' => 'תקייה',
    'link_path' => 'directory',
    'menu_name' => 'side-menu',
    'plid' => $mlid,
    'customized' => TRUE,
    'weight' => 20,
    'language' => 'he',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'החשבון שלי',
    'link_path' => 'my-wallet',
    'menu_name' => 'side-menu',
    'plid' => $mlid,
    'customized' => TRUE,
    'weight' => 30,
    'language' => 'he',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'מאיץ החלומות',
    'link_path' => '<front>',
    'menu_name' => 'side-menu',
    'expanded' => TRUE,
    'options' => array('attributes' => array('class' => array('main', 'dreams'))),
    'weight' => 40,
    'language' => 'he',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'מרכז המידע',
    'link_path' => '<front>',
    'menu_name' => 'side-menu',
    'expanded' => TRUE,
    'options' => array('attributes' => array('class' => array('main', 'dreams'))),
    'weight' => 50,
    'language' => 'he',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'קבוצות',
    'link_path' => '<front>',
    'menu_name' => 'side-menu',
    'expanded' => TRUE,
    'options' => array('attributes' => array('class' => array('main', 'dreams'))),
    'weight' => 60,
    'language' => 'he',
  );
  menu_link_save($item);


  // Individual/ Community space menu.
  $menu = array(
    'menu_name' => 'space-menu',
    'title' => 'Individual / Community space menu',
    'description' => 'Individual / Community space menu',
    'i18n_mode' => I18N_MODE_MULTIPLE,
  );
  menu_save($menu);

// Hebrew translation.

  $item = array(
    'link_title' => 'מרחב קהילתי',
    'link_path' => '<front>',
    'menu_name' => 'space-menu',
    'expanded' => TRUE,
    'language' => 'he',
  );
  $mlid = menu_link_save($item);

  $item = array(
    'link_title' => 'הצעות',
    'link_path' => 'node/add/offer',
    'menu_name' => 'space-links',
    'plid' => $mlid,
    'customized' => TRUE,
    'weight' => 10,
    'language' => 'he',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'בקשות',
    'link_path' => 'node/add/request',
    'menu_name' => 'space-links',
    'plid' => $mlid,
    'customized' => TRUE,
    'weight' => 20,
    'language' => 'he',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'משתמש',
    'link_path' => 'user',
    'menu_name' => 'space-links',
    'plid' => $mlid,
    'customized' => TRUE,
    'weight' => 30,
    'language' => 'he',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'העברת כספים',
    'link_path' => 'my-wallet',
    'menu_name' => 'space-links',
    'plid' => $mlid,
    'customized' => TRUE,
    'weight' => 40,
    'language' => 'he',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'מרחב יחיד',
    'link_path' => '<front>',
    'menu_name' => 'space-menu',
    'expanded' => TRUE,
    'language' => 'he',
  );
  $mlid = menu_link_save($item);

  $item = array(
    'link_title' => 'פרופיל',
    'link_path' => 'user',
    'menu_name' => 'space-links',
    'plid' => $mlid,
    'customized' => TRUE,
    'weight' => 10,
    'language' => 'he',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'החשבון שלי',
    'link_path' => 'my-wallet',
    'menu_name' => 'space-links',
    'plid' => $mlid,
    'customized' => TRUE,
    'weight' => 20,
    'language' => 'he',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'התנתק',
    'link_path' => 'user/logout',
    'menu_name' => 'space-links',
    'plid' => $mlid,
    'customized' => TRUE,
    'weight' => 30,
    'language' => 'he',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'Community Space',
    'link_path' => '<front>',
    'menu_name' => 'space-menu',
    'expanded' => TRUE,
    'language' => 'en',
  );
  $mlid = menu_link_save($item);

  $item = array(
    'link_title' => 'Fund Transfers',
    'link_path' => 'my-wallet',
    'menu_name' => 'space-links',
    'plid' => $mlid,
    'customized' => TRUE,
    'weight' => 40,
    'language' => 'en',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'User',
    'link_path' => 'user',
    'menu_name' => 'space-links',
    'plid' => $mlid,
    'weight' => 30,
    'language' => 'en',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'Request',
    'link_path' => 'node/add/request',
    'menu_name' => 'space-links',
    'plid' => $mlid,
    'weight' => 20,
    'language' => 'en',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'Offer',
    'link_path' => 'node/add/offer',
    'menu_name' => 'space-links',
    'plid' => $mlid,
    'weight' => 10,
    'language' => 'en',
  );
  menu_link_save($item);

    $item = array(
    'link_title' => 'Individual Space',
    'link_path' => '<front>',
    'menu_name' => 'space-menu',
    'expanded' => TRUE,
    'language' => 'en',
  );
  $mlid = menu_link_save($item);

  $item = array(
    'link_title' => 'Logout',
    'link_path' => 'user/logout',
    'menu_name' => 'space-links',
    'plid' => $mlid,
    'customized' => TRUE,
    'weight' => 30,
    'language' => 'en',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'Balance',
    'link_path' => 'my-wallet',
    'menu_name' => 'space-links',
    'plid' => $mlid,
    'customized' => TRUE,
    'weight' => 20,
    'language' => 'en',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'Profile',
    'link_path' => 'user',
    'menu_name' => 'space-links',
    'plid' => $mlid,
    'customized' => TRUE,
    'weight' => 10,
    'language' => 'en',
  );
  menu_link_save($item);

  // Navigation menu.
  $menu = array(
    'menu_name' => 'navigation-menu',
    'title' => 'Navigation',
    'description' => 'Navigation',
    'i18n_mode' => I18N_MODE_MULTIPLE,
  );
  menu_save($menu);

  $item = array(
    'link_title' => 'My BeeZ',
    'link_path' => '<front>',
    'menu_name' => 'navigation-menu',
    'expanded' => TRUE,
    'language' => 'en',
  );
  $mlid = menu_link_save($item);

  $item = array(
    'link_title' => 'item',
    'link_path' => '<front>',
    'menu_name' => 'navigation-menu',
    'plid' => $mlid,
    'language' => 'en',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'BEEZIEST',
    'link_path' => '<front>',
    'menu_name' => 'navigation-menu',
    'expanded' => TRUE,
    'language' => 'en',
  );
  $mlid = menu_link_save($item);

  $item = array(
    'link_title' => 'item',
    'link_path' => '<front>',
    'menu_name' => 'navigation-menu',
    'plid' => $mlid,
    'language' => 'en',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'Marketplace',
    'link_path' => '<front>',
    'menu_name' => 'navigation-menu',
    'expanded' => TRUE,
    'language' => 'en',
  );
  $mlid = menu_link_save($item);

  $item = array(
    'link_title' => 'item',
    'link_path' => '<front>',
    'menu_name' => 'navigation-menu',
    'plid' => $mlid,
    'language' => 'en',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'Offers & Requests',
    'link_path' => '<front>',
    'menu_name' => 'navigation-menu',
    'expanded' => TRUE,
    'options' => array('attributes' => array('class' => array('offers'))),
    'language' => 'en',
  );
  $mlid = menu_link_save($item);

  $item = array(
    'link_title' => 'Add a new Offer',
    'link_path' => 'user/login',
    'menu_name' => 'navigation-menu',
    'plid' => $mlid,
    'options' => array('query' => array('destination' => 'node/add/offer')),
    'language' => 'en',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'Add a new Request',
    'link_path' => 'user/login',
    'menu_name' => 'navigation-menu',
    'plid' => $mlid,
    'options' => array('query' => array('destination' => 'node/add/request')),
    'language' => 'en',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'Add a new Offer',
    'link_path' => 'node/add/offer',
    'menu_name' => 'navigation-menu',
    'plid' => $mlid,
    'language' => 'en',
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'Add a new Request',
    'link_path' => 'node/add/request',
    'menu_name' => 'navigation-menu',
    'plid' => $mlid,
    'language' => 'en',
  );
  menu_link_save($item);

  // Navigation menu.
  $menu = array(
    'menu_name' => 'social-menu',
    'title' => 'Social links',
    'description' => 'Social links',
    'i18n_mode' => I18N_MODE_MULTIPLE,
  );
  menu_save($menu);

  $item = array(
    'link_title' => 'Facebook',
    'link_path' => '<front>',
    'menu_name' => 'social-menu',
    'options' => array('attributes' => array('class' => array('facebook'))),
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'Twitter',
    'link_path' => '<front>',
    'menu_name' => 'social-menu',
    'options' => array('attributes' => array('class' => array('twitter'))),
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'Email',
    'link_path' => '<front>',
    'menu_name' => 'social-menu',
    'options' => array('attributes' => array('class' => array('email'))),
  );
  menu_link_save($item);

  $item = array(
    'link_title' => 'Wordpress',
    'link_path' => '<front>',
    'menu_name' => 'social-menu',
    'options' => array('attributes' => array('class' => array('wordpress'))),
  );
  menu_link_save($item);
}

/**
 * Profile task; Import language files.
 */
function kaveret_i18n_setup() {
  // Find all po files.
  $path = drupal_get_path('profile', 'kaveret');
  $path .= '/localisation';
  $files = file_scan_directory($path, '/.+\.po/');
  foreach ($files as $file) {
    // Extract the langcode from the filename.
    $langcode = substr($file->name, -2);
    // Import the file.
    _locale_import_po($file, $langcode, LOCALE_IMPORT_KEEP, 'default');
  }
}
