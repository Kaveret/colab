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
 * implements hook_node_view_alter
 * modifies the group node view to put all the previews under it
 */
function likeabee_node_view_alter(&$build, $node) {
  if ($build['#bundle'] != 'group') return; //this is needed to prevent nesting because group summary invokes a view with nodes in
  module_load_include('inc', 'likeabee');
  return _likeabee_node_view_alter($build, $node);
}

function likeabee_menu_alter(&$items) {
  unset($items['user/%/statement']); //actually should disable the view displays
  unset($items['user/%/income_expenditure']); //actually should disable the view displays, but its not in code in this module yet
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

  $items['username_description'] = array(
    'variables' => array(
      'account' => NULL
    ),
  );
  return $items;
}

function likeabee_views_api() {
  return array(
    'api' => 3,
    'path' => drupal_get_path('module', 'likeabee'),
  );
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


function likeabee_flag_default_flags() {
  module_load_include('inc', 'likeabee');
  return _likeabee_flag_default_flags();
}

