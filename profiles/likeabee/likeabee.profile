<?php


define('MENU_BLOCK_MAIN_MENU_ICONS', 3);
define('MENU_BLOCK_SECTION', 1);

function likeabee_help($path, $args) {
  if ($args[0] == 'resources') {
    //unhide the menu tabs!!!
    drupal_add_css('#page #main-menu{display:block;}', array('type' => 'inline'));
  }
  if ($path == 'resources') {
    $help[] = t('This is the local economy section. Here you can find what you need pay in Beez or in Shekels, or advertise yourself or your needs.');
    $help[] = t('Find out more about our currency, !beez', array('!beez' => l('Beez', 'help/beez')));
    return implode(' ', $help);
  }
}

/*
 * implements hook_menu
 */
function likeabee_menu() {
  $items['home'] = array(
    'title' => "Welcome to Likeabee",
    'page callback' => 'likeabee_home',
    'page arguments' => array(),
    'access callback' => TRUE,
    'access arguments' => array(),
    'file' => 'likeabee.inc'
  );
  //$items['groups'] is provided by default view list_of_groups
  $items['learning'] = array(
    'title' => 'Learning Centre',
    'description' => 'Buy, sell, pay, swop or gift!',
    'page callback' => 'likeabee_home',
    'access callback' => 'user_access',
    'access arguments' => array('transact'),
    'menu_name' => 'main-menu',
    'file' => 'likeabee.inc',
    'weight' => 2
  );
  $items['dreams'] = array(
    'title' => 'Dreams & Initiatives',
    'description' => 'Buy, sell, pay, swop or gift!',
    'page callback' => 'likeabee_home',
    'access callback' => 'user_access',
    'access arguments' => array('transact'),
    'menu_name' => 'main-menu',
    'file' => 'likeabee.inc',
    'weight' => 3
  );
  $items['resources'] = array(
    'title' => 'Resources Exchange',
    'description' => 'Buy, sell, pay, swop or gift!',
    'page callback' => 'likeabee_resources_default_page',
    'access callback' => 'user_access',
    'access arguments' => array('transact'),
    'menu_name' => 'main-menu',
    'file' => 'likeabee.inc',
    'weight' => 4
  );

  $items['resources/dashboard'] = array(
    'title' => 'Dashboard',
    'description' => 'Buy, sell, pay, swop or gift!',
    'page callback' => 'likeabee_resources_default_page',
    'access callback' => 'user_access',
    'access arguments' => array('transact'),
    'menu_name' => 'main-menu',
    'file' => 'likeabee.inc',
    'weight' => -5
  );
  $items['resources/marketplace'] = array(
    'title' => 'Marketplace',
    'description' => 'Buy, sell, pay, swop or gift!',
    'page callback' => 'likeabee_resources_marketplace',
    'access callback' => 'user_access',
    'access arguments' => array('transact'),
    'menu_name' => 'main-menu',
    'file' => 'likeabee.inc',
    'weight' => 5
  );
  return $items;
}

function menu_link_alter() {

}


/*
 * implements hook_node_view_alter
 * modifies the group node view
 */
function likeabee_node_view_alter(&$build, $node) {
  if ($build['#bundle'] != 'group') return; //this is needed to prevent nesting because group summary invokes a view with nodes in
  module_load_include('inc', 'likeabee');
  return _likeabee_node_view_alter($build, $node);
}

function likeabee_menu_alter(&$items) {

  unset($items['user/%/statement']); //actually should disable the view displays
  unset($items['user/%/income_expenditure']); //actually should disable the view displays, but its not in code in this module yet
  foreach ($items as $path => $item) {
    if (substr($path, 0, 6) == 'user/%')debug($path);
  }
}


function likeabee_theme() {
  $items['likeabee_groups_summary'] = array(
    'variables' => array(
      'title' => '',
      'type' => '',
      'view' => '',
      'gid' => 0
    ),
    'file' => 'likeabee.inc'//not needed really because the function which calls this is already in likeabee.inc
  );
  $items['userpic_social'] = array(
    'variables' => array(
      'account' => NULL
    ),
  );
  $items['username_description'] = array(
    'variables' => array(
      'account' => NULL
    ),
  );
  $items['my_content'] = array(
    'variables' => array(
      'account' => NULL
    )
  );
  return $items;
}

function likeabee_views_api() {
  return array(
    'api' => 3,
    'path' => drupal_get_path('module', 'likeabee'),
  );
}

function likeabee_block_info() {
  $blocks['my_content'] = array(
    'info' => t('Links to views of content by type and by user'),
    //these are default settings only. fixed settings are in likeabee_block_info_alter
    'pages' => 'user*',
    'visibility' => BLOCK_VISIBILITY_LISTED,
    'status' => 1,
    'region' => 'sidebar_second'
  );
  return $blocks;
}

function likeabee_block_view($delta) {
  //there might be a quicker wasy to ensure this only builds for my user profile pages
  if ($account = menu_get_object('user')) {
    if ($account->uid != $GLOBALS['user']->uid) return;
    module_load_include('inc', 'likeabee');
    return array(
      'subject' => t('My Content'),
      'content' => likeabee_my_content_links($account)
    );
  }
}

/*
 * implements hook_block_info_alter
 * hard code the block settings
 */
function likeabee_block_info_alter(&$blocks, $theme) {
  //debug($blocks, 0, 0);
  if ($theme != 'beezy') return;
  module_load_include('inc', 'likeabee');
  _likeabee_block_info_alter($blocks);
}

function template_preprocess_userpic_social(&$vars) {
  $account = $vars['account'];
  //Arggggh can only apply styling to 'managed' files with schema like public://
  //the default user picture is a plain url
  $style = 'thumbnail';//might need something even smaller
  if ($picture_fid = $account->picture) {
    $picture = file_load($picture_fid)->uri;
    if (file_valid_uri($picture_filepath)) {
      $picture = theme('image_style', array('style_name' => $style, 'path' => $picture_filepath));
    }
    else {
      $vars['picture'] = '';
      $args = array('@uid' => $account->uid, '@fid' => $picture_filepath);
      drupal_set_message(t('Invalid picture filepath for user @uid: @fid', $args));
      watchdog('likeabee.profile', 'Invalid picture filepath for user @uid: @fid', $args);
    }
  }
  else {//simulate the thumbnail styling of the default image
    $style = image_style_load($style);
    //assume the first effect is a scale - this is a core style after all
    $effect = current($style['effects']);
    $picture = theme('image', array(
      'path' => variable_get('user_picture_default', ''),
      'width' => $effect['data']['width'],
      'height' => $effect['data']['height']
    ));
  }
  $vars['picture'] = array(
    '#theme' => 'link',
    '#text' => $picture,
    '#path' => "user/$account->uid",
    '#options' => array('html' => TRUE, 'attributes' => array())
  );

  $vars['facebook'] = @$account->fb_home['und']['0']['value'];
  $vars['twitter'] = @$account->twitter['und']['0']['value'];
  $vars['email'] = $account->mail;
}

function theme_userpic_social(&$vars) {
  $output = drupal_render($vars['picture']);
  if ($vars['facebook']) {
    $output .= '<div class = "facebook">'.l(t('Facebook'), $vars['facebook']) . '</div>';
  }
  if ($vars['twitter']) {
    $output .= '<div class = "twitter">'.l(t('Twitter'), $vars['twitter']) . '</div>';
  }
  $output .= '<div class = "email">'.l(t('Email'), $vars['email']) . '</div>';
  return '<div id = "userpic-social">'.$output.'</div>';
}

function template_preprocess_username_description(&$vars) {
  $account = &$vars['account'];
  $vars['name'] = theme_username($account);
  $vars['description'] = $account->field_description[LANGUAGE_NONE]['0']['safe_value'];
}
function theme_username_description(&$vars) {
  $output = '<div id="username-description">';
  $output .= '<div class = "username">'.$vars['name'].'</div>';
  $output .= '</div>';
}

/*
 * implements theme hook_preprocess_page
 */
function likeabee_preprocess_page(&$vars) {
  if ($GLOBALS['user']->uid) {
    $vars['userpic_social'] = theme('userpic_social', array('account' => $GLOBALS['user']));
  }
  //prepare footer icons
  $block = menu_tree_build(menu_block_get_config(MENU_BLOCK_MAIN_MENU_ICONS));
  //carelessly designed menu_block module will only give us a full block
  //se we pull out the content
  $vars['footer_icons'] = $block['content'];


  $vars['share_icons'] = menu_tree('share-icons');
  $vars['share_icons']['#prefix'] = '<div id = "share-icons">';
  $vars['share_icons']['#suffix'] = '</div>';

}

/*
 * implements hook_styles_alter
 * all the styles in code and in data
 * before it goes into cache
 */
function likeabee_image_styles_alter(&$styles) {
  //change the size of the thumbnail
  $effect_id = key($styles['thumbnail']['effects']);
  $styles['thumbnail']['effects'][$effect_id]['data']['width'] = 32;
  $styles['thumbnail']['effects'][$effect_id]['data']['height'] = 32;
}
/*
 * implements hook_image_default_styles
 * declare new styles here
 *
 */
function likeabee_image_default_styles() {
  return array();
}


function likeabee_flag_default_flags() {
  module_load_include('inc', 'likeabee');
  return _likeabee_flag_default_flags();
}

