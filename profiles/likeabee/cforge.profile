<?php
// $Id:
//
//roles
define('RID_TRADER', 3);
define('RID_COMMITTEE', 4);
define('RID_ACCOUNTANT', 5);
define('RID_SYSTEM', 7);
define('NODE_BROADCAST_FLAG', 'sticky');


/*
 * implements hook_user_login
 */
function cforge_user_login(&$edit, &$account, $category = NULL) {
  if (substr($_SERVER['SCRIPT_NAME'], -9) == 'index.php') {
    if (!isset($_POST['form_id']) || $_POST['form_id'] != 'user_pass_reset') {
      $_GET['destination'] = 'news';
    }
  }
}

function cf_vids($all = FALSE) {
  static $blocks;
  if (isset($blocks)) return $blocks;
  global $language;
  $langs = $all ? array_keys(language_list()) : array($language->language);
  $blocks = array();
  if (in_array('fr', $langs)) {
    $blocks['sel_promo'] = array(
      'url' => 'http://www.youtube.com/embed/fwy2sojt3ZM',
      'title' => '',
    );
    $blocks['decouvrir'] = array(
      //'url' => 'http://www.youtube.com/embed/videoseries?list=PLBA6ED7FC6AFC4A2A&amp;hl=en_US',
      'url' => 'http://www.youtube.com/embed/En1RWomDFgI',
      'title' => 'Video découvrir le site',
    );
  }
  if (in_array('es', $langs)) {
    $blocks['cf_training'] = array(
      'url' => 'http://www.youtube.com/embed/pEdk1gct0Iw?list=PL2C2A689416705667',
      'title' => 'Darse de alta en la Central de Talentos',
    );
  }
  if (in_array('en', $langs)) {
    $blocks['nitin'] = array(
      'url' => 'http://www.youtube.com/embed/YvegNqKcQ-g',
      'title' => 'Mutual Credit',
      'pages' => "<front>\nLETS\ncommit"
    );
  }
  return $blocks;
}

/*
 * implements hook_block_info
 */
function cforge_block_info() {
  //these blocks will appear for all languages.
  foreach (cf_vids(TRUE) as $delta => $data) {
    $blocks[$delta] = array(
      'info' => $delta,
      'visibility' => BLOCK_VISIBILITY_LISTED,
      'pages' => "<front>\nLETS\ncommit\nfaq\ngalleries",
      'status' => 1,
      'weight' => 10,
      'region' => 'sidebar_second'
    );
  }
  return $blocks;
}


/*
 * implements hook_block_view
 * put the menu blocks in place
 */
function cforge_block_view($delta) {
  $vids = cf_vids(FALSE);
  if (!isset($vids[$delta])) return array();
  return array(
    'title' => isset($vids[$delta]['title']) ? $vids[$delta]['title'] : '<none>',
    'content' => '<iframe width="248" height=184 src="'.$vids[$delta]['url'].'" frameborder="0" allowfullscreen></iframe>'
  );
}

/*
 * implements hook_block_view_alter
 * Change the title of the user block
 */
function cforge_block_view_alter(&$block) {
  if (isset($block['subject']) && $block['subject'] == t('User menu')) {
    $block['subject'] = format_username($GLOBALS['user']);
  }
}


/*
 * Implements views hook_views_api
 */
function cforge_views_api() {
  return array(
    'api' => 3,
    'path' => drupal_get_path('module', 'cforge'),
  );
}
/*
 * implements hook_cron
 */
function cforge_cron() {
  db_query("DELETE FROM {sessions} WHERE uid = 0 AND timestamp < '-1 day'");
  db_query("DELETE FROM {cache_form} WHERE expire != :cache AND expire < :time",
    array(':cache' => CACHE_PERMANENT, ':time' => REQUEST_TIME)
  );
}

/**
 * implements hook_init().
 */
function cforge_init() {
  drupal_add_css(drupal_get_path('module', 'cforge').'/cforge.css');
}

/**
 * Implements hook_element_info_alter().
 * this is all the code from the disablepwstrength module
 */
function cforge_element_info_alter(&$types) {
  if (isset($types['password_confirm']['#process']) && (($position = array_search('user_form_process_password_confirm', $types['password_confirm']['#process'])) !== FALSE)) {
    unset($types['password_confirm']['#process'][$position]);
  }
}

function cforge_menu() {
  return array('admin/config/cforge' => array(
    'title' => 'Cforge settings',
    'description' => 'settings not governed by other modules',
    'page callback' => 'drupal_get_form',
    'page arguments' => array('cforge_settings_form'),
    'access arguments' => array('administer nodes')
  ));
}

/**
 * implements hook_menu_alter
 */
function cforge_menu_alter(&$items) {
  //tweak the user tabs
  $items['user/%user/edit']['title'] = t('Account');
  $items['user/%user/contact']['weight'] = 5;
  $items['contact']['menu_name'] = 'secondary-links';
  $items['contact']['type'] = MENU_NORMAL_ITEM;
  $items['members']['menu_name'] = 'main-menu';
  //committee can re-arrange menu items but not add and remove them through the menu interface
  $items['admin/structure/menu/manage/%menu/add'] ['access arguments'] = array('access administration pages');
  $items['admin/structure/menu/manage/%menu/delete']['access arguments'] = array('access administration pages');

  //move stuff to the manage menu
  $items['admin/content']['menu_name'] = 'user-menu';
  $items['admin/content']['title'] = t('Manage content');
  $items['admin/content']['weight'] = 0;
  $items['node/add']['menu_name'] = 'user-menu';
  $items['node/add']['title'] = t('Create content');
  $items['node/add']['weight'] = 0;

  $items['admin/people']['menu_name'] = 'user-menu';
  $items['admin/people']['type'] = MENU_NORMAL_ITEM;
  $items['admin/people']['title'] = t('Manage people');
  $items['admin/people']['description'] = t("List, add and modify users");
  $items['admin/people']['weight'] = 0;
  $items['admin/config/system/backup_migrate/export']['type'] = MENU_NORMAL_ITEM;
  $items['admin/config/system/backup_migrate/export']['menu_name'] = 'user-menu';
  $items['admin/config/system/backup_migrate/export']['weight'] = 30;
  $items['user/logout']['weight'] = 50;
  $items['user/logout']['menu_name'] = 'user-menu';
  //community tasks
  $items['community_tasks']['menu_name'] = 'main-menu';
}

function cforge_settings_form() {
  $instances = field_read_instances(array('entity_type' => 'user'));
  foreach ($instances as $id => $instance) {
    if (in_array($instance['field_name'], array('profile_firstname', 'profile_familyname', 'profile_postal'))) {
      unset($instances[$id]);
    }
  }
  $defaults = variable_get('cf_profile_permissions', array());
  $form['cf_profile_permissions'] = array(
    '#title' => t('User profile field permissions'),
    '#description' => t('Determine which fields can be seen only by committee'),
    '#type' => 'fieldset',
    '#tree' => TRUE
  );
  foreach ($instances as $instance) {
    $form['cf_profile_permissions'][$instance['field_name']] = array(
      '#title' => $instance['label'],
      '#type' => 'radios',
      '#options' => array(
        1 => t('Visible to all members'),
        2 => t('Visible to user and committee'),
        3 => t('Visible to committee only')
      ),
      '#default_value' => isset($defaults[$instance['field_name']]) ? $defaults[$instance['field_name']] : 2,
      '#required' => TRUE
    );
  }
  return system_settings_form($form);
}


/*
 * implements hook_user_presave
 * implements a cforge version of username
 */
function cforge_user_presave(&$edit, &$account, $category = NULL) {
  if (!empty($account->is_new)) {
    //if the user is being created, add the trader role
    $edit['roles'][RID_TRADER] = RID_TRADER;
  }
  elseif ($account->uid == 1) {
    //ensure the user 1 name follows a pattern so I can log in without my brain hurting
    $edit['name'] = variable_get('site_name');
  }
  if (isset($edit['profile_firstname'][LANGUAGE_NONE][0]['value'])) {
    $edit['name'] = implode(' ', array_filter(array(
      $edit['profile_firstname'][LANGUAGE_NONE][0]['value'],
      @$edit['profile_familyname'][LANGUAGE_NONE][0]['value']
    )));
  }

}

/*
 * implements hook_permission
 */
function cforge_permission() {
  return array(
    'cf_broadcast' => array(
      'title' => t('Broadcast'),
      'description' => t('Email content to all members from the edit form.')
    )
  );
}

/*
 * implements hook_node_view_alter
 */
function cforge_node_view_alter(&$render_array, $view_mode) {
  $render_array['comments']['#weight'] = 19;
}

/*
 * implements hook_form_FORM_ID_alter
 */
function cforge_form_user_profile_form_alter(&$form, &$form_state) {
  //responsibility field should only show on the edit forms of committee members
  if (!in_array('committee', $form['#user']->roles)) {
    unset($form['profile_responsibility']);
  }
  //prevent editing of essential user 1 fields
  if ($form['#user']->uid == 1) {
    if ($GLOBALS['user']->uid != 1) {
      $form['account']['pass']['#access'] = FALSE;
      $form['account']['mail']['#access'] = FALSE;
      $form['account']['roles']['#access'] = FALSE;
    }
    $form['account']['status']['#access'] = FALSE;
  }
  //unrequire the firstname for user 1
  $form['profile_firstname'][LANGUAGE_NONE][0]['value']['#required'] = $form['#user']->uid != 1;
  _cf_modify_form_profile($form);
  //remove the current password validation
  // searches the #validate array for the current_pass validation function, and removes it
  $key = array_search('user_validate_current_pass', $form['#validate']);
  if ($key !== FALSE) {
    unset($form['#validate'][$key]);
  }
  // hide the current password fields
  $form['account']['current_pass_required_value']['#access'] = FALSE;
  $form['account']['current_pass']['#access'] = FALSE;
  //hide the fields which can only be seen by admin
  if (!user_access('administer users')) {
    foreach (variable_get('cf_profile_permissions') as $field_name => $setting) {
      if ($setting > 2) {
        unset($form[$field_name]);
      }
    }
  }
}

/*
 * implements hook_form_user_register_form_alter
 */
function cforge_form_user_register_form_alter(&$form) {
  _cf_modify_form_profile($form);
}

function _cf_modify_form_profile(&$form) {

  //advanced_help
  _cf_prefix_help($form['account']['name']['#description'], 'name');
  _cf_prefix_help($form['account']['pass']['#description'], 'pass');
  _cf_prefix_help($form['account']['mail']['#description'], 'mail');
  _cf_prefix_help($form['account']['status']['#title'], 'status');
  _cf_prefix_help($form['account']['roles']['#title'], 'roles');
  _cf_prefix_help($form['limits_personal']['#description'], 'balance_limits');

  $form['picture']['picture_upload']['#title'] .= ' ('.t('No spaces in filenames!').')';
  _cf_prefix_help($form['picture']['picture_upload']['#description'], 'image');

  $form['account']['name']['#access'] = FALSE;
  $form['account']['name']['#value'] = user_password();//just need something random until the form is submitted
  $form['contact']['#access'] = FALSE;
  $form['timezone']['#access'] = FALSE;

  //this system doesn't show usernames to anyone, but uses sky_seldulac_username() instead
  //prevent non-admin from editing account 1 login
  if ($form['#user']->uid == 1 && $GLOBALS['user']->uid != 1) {
    $form['account']['pass']['#type'] == 'hidden';
  }
  //not sure how fields added by user 1 will behave or what the default filter is,
  //but I'm hiding the filter selector anyway
  $form['profile_address'][LANGUAGE_NONE][0]['#format'] = 'plain_text';
  $form['profile_notes'][LANGUAGE_NONE][0]['#format'] = 'plain_text';
  _cf_hide_filter();
}

/*
 * implements hook_user_view
 */
function cforge_user_view($account) {
  $visibilities = array(
    1 => (bool)$GLOBALS['user']->uid,
    2 => user_access('administer users'),//users look at their own profile see what other users see
    3 => user_access('administer users')
  );
  foreach (variable_get('cf_profile_permissions', array()) as $field_name => $setting) {
    if (isset($account->content[$field_name])) {
      $account->content[$field_name]['#access'] = $visibilities[$setting];
    }
  }
  unset($account->content['profile_firstname']);
  unset($account->content['profile_familyname']);
  unset($account->content['profile_postal']);
  $account->content['user_picture']['#weight'] = -50;//this is also floating left
}

/*
 * implements hook_user_view_alter
 */
function cforge_user_view_alter(&$build) {
  unset($build['mimemail']);
  unset($build['summary']);
}

function cforge_hook_info() {
  return array(
    'cf_block_setup' => array(),
    'cf_role_permissions' => array()
  );
}

function _cf_prefix_help(&$text, $topic) {
  //put the linked helpicon at the start of the given text
  $text = theme('advanced_help_topic', array('module' => 'cforge', 'topic' => $topic)) . $text;
}
/*
 * implements hook_help
 */
function cforge_help($path, $args) {
  if (substr($path, 0, 6) == 'user/%') {
    drupal_set_title(format_username(user_load($args[1])));
  }
}
/*
 * implements hook_admin_paths_alter
 */
function cforge_admin_paths_alter(&$paths) {
  $paths['admin/structure/taxonomy/*'] = 1;
  unset($paths['user/*/edit']);
}

/*
 * implements hook_form_FORM_ID_alter
 */
function cforge_form_user_admin_settings_alter(&$form) {
  unset($form['registration_cancellation']['user_register']['#options'][1]);
  unset($form['registration_cancellation']['#description']);
  unset($form['registration_cancellation']['#type']);
  $form['registration_cancellation']['#weight'] = -5;
  $form['registration_cancellation']['user_register']['#title'] = t('How to add new members');
  $form['registration_cancellation']['user_register']['#options'][0] = t('Only committee can create accounts');
  $form['registration_cancellation']['user_register']['#options'][2] =t('Anyone can create an account, then a committee member must enable it');
  $form['registration_cancellation']['user_cancel_method']['#access'] = FALSE;

  unset($form['email_no_approval_required']['#access']);
  if ($GLOBALS['user']->uid != 1) {
    $form['registration_cancellation']['#description'] = $form['registration_cancellation']['user_email_verification']['#description'];
    $form['registration_cancellation']['user_email_verification'] = FALSE;
    $form['personalization']['#access'] = FALSE;
    $form['contact']['#access'] = FALSE;
    $form['admin_role']['#access'] = FALSE;
  }
}

/*
 * implements hook_form_FORM_ID_alter
 * adding context to the site-information page for local admins
 */
function cforge_form_system_site_information_settings_alter(&$form) {
  $form['front_page']['#access'] = FALSE;
  $form['error_page']['#access'] = FALSE;
  $form['cforge_mail_footer'] = array(
    '#title' => t('Mail footer'),
    '#description' => t('This will be appended to all automated emails. HTML is allowed.'),
    '#type' => 'textarea',
    '#rows' => 4,
    '#default_value' => variable_get('cforge_mail_footer', '')
  );
  $form['cforge_mail_tokens'] = array(
    '#theme' => 'token_tree',
    '#token_types' => array('user'),
    '#global_types' => FALSE,
    '#weight' => 5,
  );
}

/**
 * implements hook_form_comment_form_alter
 */
function cforge_form_comment_form_alter(&$form) {
  _cf_hide_filter();
  unset($form['author']['_author']);
}

function _cf_menu_options() {
  return db_query("SELECT CONCAT(menu_name,':0'), title
    FROM {menu_custom}
    WHERE menu_name IN ('main-menu', 'secondary-links', 'user-menu', 'visitors')"
  )->fetchAllKeyed();
}


/*
 * implements hook_form_FORM_ID_alter
 */
function cforge_form_node_form_alter(&$form, &$form_state) {
  //set the ckeditor according to node-type
  if (isset($form['body'])) {
    foreach (element_children($form['body']) as $lang) {
      foreach (element_children($form['body'][$lang]) as $delta) {
        $form['body'][$lang][$delta]['#format'] = in_array($form['#node']->type, array('page', 'story')) ? 'editor_full_html' : 'editor_filtered_html';
      }
    }
    _cf_hide_filter();
  }
  //forces users to put pages in one of the four flattened menus, and other node types have no menus at all
  if ($form['#node']->type == 'page') {
    //prevent changing the alias of the home page
    if ($GLOBALS['user']->uid != 1) {
      if ($form['path']['alias']['#default_value'] == '<front>') {
        $form['path']['#access'] = FALSE;
      }
    }
    //flatten the menu, so you can only put things at the top level
    foreach ($form['menu']['link']['parent']['#options'] as $key => $linkname) {
      if (substr($linkname, 0, 2) == '--') {
        unset($form['menu']['link']['parent']['#options'][$key]);
      }
    }
    $form['menu']['link']['parent']['#title'] = t('Put in menu');

    drupal_add_css('.form-item-menu-enabled{display:none;}', array('type' => 'inline'));
    $form['menu']['enabled']['#default_value'] = TRUE;
    $form['menu']['link']['link_title']['#required'] = TRUE;
  }
  else {
    unset($form['menu']);
  }
  //rename the url alias field and explain it better
  if (in_array($form['#node']->type, array('page', 'document', 'story', 'event', 'image'))) {
    $form['path']['alias']['#title'] = t('Friendly address');
    $form['path']['alias']['#description'] = t("Give your page a more memorable address. E.g. 'articles-of-association'");
  }
  else {
    $form['path']['#access'] = FALSE;
  }

  //the sticky flag is repurposed and hidden
  if ($GLOBALS['user']->uid != 1)$form['options'][NODE_BROADCAST_FLAG]['#type'] = 'hidden';
  //puts the broadcast button in for certain node-types
  if (user_access('cf_broadcast')) {
    if (in_array($form['#node']->type, array('proposition', 'story', 'document', 'event' ))) {
      if (!$form['#node']->{NODE_BROADCAST_FLAG}) {
        $form['actions']['broadcast'] = array(
          '#type' => 'submit',
          '#description' => t('Each item can be broadcast only once.'),
          '#value' => t('Save & Broadcast'),
          '#weight' => 10,
          '#submit' => array('node_broadcast_submit')
        );
        if (isset($form['image'])) {
          $form['actions']['nb'] = array(
            '#markup' => '<br />' . t('Images cannot be included in broadcast mails'),
            '#weight' => 100
          );
        }
      }
    }
    if ($form['#node']->type == 'story') {
      //expose and relable the node publish button
      //$form['options']['status']['#title'] = t("Include in the 'news' stream");
      $form['options']['status']['#description'] = t("You might want to broadcast this item but not to have it cluttering up your site");
      $form['options']['#weight'] = -1;
    }
  }
  else {
    $form['options']['promote']['#access'] = FALSE;
  }
}

/*
 * implement hook_form_FORM_ID_alter
 */
function cforge_form_taxonomy_overview_vocabularies_alter(&$form, &$form_state, $form_id) {
  foreach (element_children($form) as $key) {
    $form[$key]['edit']['#access'] = user_access('administer taxonomy');
  }
}

/*
 * implements hook_form_FORM_ID_alter
 * remove the title
 */
function cforge_form_search_block_form_alter(&$form) {
  if ($GLOBALS['user']->uid != 1) {
    $form['search_block_form']['#title'] = '';
  }
}

/*
 * implements hook_form_taxonomy_form_term_alter
 * hide the text formatting options for taxonomy_term form
 */
function cforge_form_taxonomy_form_term_alter(&$form) {
  $form['description']['#format'] = 'plain_text';
  _cf_hide_filter();
}
/*
 * Ensure that the user-visible menus are all flat
 */
function cforge_form_menu_edit_item_alter(&$form) {
  if ($GLOBALS['user']->uid == 1) return;
  $form['parent']['#options'] = _cf_menu_options();
}

/*
 * additional submit handler for node form
 */
function node_broadcast_submit($form, $form_state) {
  if (!user_access('cf_broadcast')) return;//this should never happen coz the button wouldn't appear
  $form_state['values'][NODE_BROADCAST_FLAG] = 1;
  node_form_submit($form, $form_state);
  global $language;
  $params = array('node' => node_load($form_state['values']['nid']));
  drupal_mail('cforge', 'broadcast', variable_get('site_mail', 'blah'), $language, $params);

}

/*
 * implements hook_mail
 * only one $key possible, which is broadcast
 */
function cforge_mail($key, &$message, $params) {
  $node = &$params['node'];
  $mails = db_query("SELECT mail FROM {users} u
    LEFT JOIN {users_roles} ur ON u.uid = ur.uid
    WHERE ur.rid = ". RID_TRADER)->fetchCol();
  $sender = user_load($node->uid);
  $message['subject'] = t('@site_name: @node_title',
    array('@site_name' => variable_get('site_name'), '@node_title' => $node->title)
  );
  $message['body'][] = t('@name posted a new @type.', array(
    '@name' => $sender->name,
    '@type' => node_type_get_type($node->type)->name
  ));

  $message['body'][] = drupal_render(node_view($node));
  $message['headers']['From'] = $sender->mail;
  $message['headers']['Bcc'] = implode(', ', $mails);

  if (isset($node->upload) && is_array($node->upload)) {
    $items = (array)reset($node->upload);
    foreach($items as $att) {
      if (!$att['fid']) continue;
      $file = file_load($att['fid']);
      $message['params']['attachments'][] = array(
        'uri' => $file->uri,
        'filecontent' => file_get_contents($file->uri),
        'filename' => $file->filename,
        'filemime' => file_get_mimetype($file->uri)
      );
    }
  }
}
/*
 * implements hook_mail_alter
 * add the mail footer
 */
function cforge_mail_alter(&$message) {
  if (@$message['params']['module'] == 'contact') return;
  $footer =  token_replace(
    variable_get('cforge_mail_footer', ''),
    $message['params'],
    array('language' => $message['language'], 'sanitize' => FALSE)
  );
  $message['body'][] = $footer;
}


/*
 * menu callback
 * shortcut to the backup & restore module download backup
 */
function backup_direct() {
  $tables = array('cache', 'cache_admin_menu', 'cache_block', 'cache_bootstrap', 'cache_field', 'cache_filter', 'cache_image', 'cache_menu', 'cache_page', 'cache_path', 'cache_update', 'cache_views', 'cache_views_data', 'watchdog');

  foreach($tables as $table) {
    $queries[] = "TRUNCATE {$table}";
  }
  db_query(implode(';', $queries));
  $form_state['values'] = array(
    'profile_id' => NULL,
    'destination_id' => 'download',
    'source_id' => NULL,
  );
  drupal_form_submit('backup_migrate_ui_manual_quick_backup_form', $form_state);
  drupal_goto(BACKUP_MIGRATE_MENU_PATH .'/restore');
}




//protect certain fields from being inadvertantly included in views
function __cforge_views_pre_render(&$view) {
  if (user_access('access user profiles')) return;
  debug($view->result, "stripping users' pictures, mail and name from view $view->name");
  $private = array(
    'users_picture' => '',
    'users_mail' => variable_get('site_mail', 'blah'),
    'users_name' => ''
  );
  foreach ($private as $field => $value) {
    foreach ($view->result as $key=>$row) {
      $view->result[$key]->$field = $value;
    }
  }
}


/*
 * overrides theme template_preprocess_username, which truncates the username to 15 chars
 */
function cforge_preprocess_username(&$vars) {
  $account = &$vars['account'];
  $vars['uid'] = (int) $account->uid;
  $vars['name'] = $vars['name_raw'] = check_plain(format_username($account));
  if ($account->uid && $vars['profile_access']) {
    // We are linking to a local user.
    $vars['link_attributes'] = array('title' => t('View user profile.'));
    $vars['link_path'] = 'user/' . $account->uid;
  }
}
/*
 * implements theme hook_process_username
 */
function cforge_process_username(&$vars) {
  if (!$GLOBALS['user']->uid) {
    $vars['name'] = t('Member @uid', array('@uid' => $vars['account']->uid));
  }
}

function _cf_hide_filter() {
  //the filter format chooser widget isn't added until hook_form_FORM_ID_alter, so we can hide it here with css
  drupal_add_css('fieldset.filter-wrapper{display:none;}', array('type' => 'inline'));
}

/*
 * implements hook_views_data_alter
 */
function cforge_views_data_alter(&$data) {
  unset($data['field_data_profile_firstname']['profile_firstname_value']['argument']['empty field name']);
  unset($data['field_data_profile_familyname']['profile_familyname_value']['argument']['empty field name']);
}
/*
 * implements hook_token_info_alter
 * remove the 'user:original' set of tokens, which is confusing
 */
function cforge_token_info_alter(&$items) {
  unset($items['tokens']['user']['original']);
}
