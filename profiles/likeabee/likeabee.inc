<?php

/*
 * menu_callback
 * home page contains a nice pic and the top level menu items, which are put there by a block
 */
function likeabee_home() {
  $build = array();
  _view_groups_content_summary($build);
  return $build;
}

function _likeabee_node_view_alter(&$build) {
  _view_groups_content_summary($build, $build['#node']->nid);
}

function _view_groups_content_summary(&$build, $gid = NULL) {
  $build['preview_events'] = group_summary($gid, t("Group's events"), 'event');
  $build['preview_poll'] = group_summary($gid, t("Group's polls"), 'poll');
  $build['preview_video'] = group_summary($gid, t("Group's videos"), 'video');
  $build['preview_discussion'] = group_summary($gid, t("Group's discussions"), 'discussion');
  $build['preview_documents'] = group_summary($gid, t("Group's documents"), 'document');
}

//a page section including a view that shows a summary of a content type for a group
function group_summary($gid, $title, $type) {
  static $w = 1;
  $view = views_embed_view('groups_content_preview', 'groups_choice', $type, $gid);
  //there's no proper way to ascertain if a view is empty after it is themed
  if (strlen($view) < 200) return array();
  return array(
    '#theme' => 'likeabee_groups_summary',
    '#weight' => $w++,
    '#title' => $title,
    '#type' => $type,
    '#view' => $view,
    '#gid' => $gid
  );
}

function theme_likeabee_groups_summary($variables) {
  static $flip = 'even';
  $type = &$variables['type'];
  $flip = $flip == 'even' ? 'odd' : 'even';
  $output[] = "<div class = \"group-summary-$type $flip\" ><h2>".$variables['title'].'</h2>';
  $output[] = '<div class = "link-all">'. l('See All', "content/group/$type/". $variables['gid']) . '</div>';//we need a consistent name for the 'all display'
  $output[] = $variables['view'];
  return implode("\n", $output) .'</div><!--End group summary-->';
}


function _likeabee_block_info_alter(&$blocks) {

  //the menu icons block, which appears on the left (this menu_block is reused in the footer)
  $blocks['menu_block'][MENU_BLOCK_MAIN_MENU_ICONS] = array(
    'status' => '1',
    'region' => 'sidebar_second',
    'visibility' => BLOCK_VISIBILITY_LISTED,
    'pages' => "<front>\nresources*\ngroups*",
    'title' => '<none>',
  ) + $blocks['menu_block'][MENU_BLOCK_MAIN_MENU_ICONS];

  $blocks['search']['form']['region'] = 'header';
  $blocks['search']['form']['status'] = 1;

  return;//this block isn't made yet
  $blocks['menu']['menu-individual-space']['region'] = 'header';
  $blocks['menu']['menu-individual-space']['status'] = 1;
  $blocks['menu']['menu-community-space']['region'] = 'header';
  $blocks['menu']['menu-community-space']['status'] = 1;
  $blocks['menu']['menu-log-in']['region'] = 'header';
  $blocks['menu']['menu-log-in']['status'] = 1;
}


//see http://likeabee.net/admin/structure/block/manage/views/individual_space-block_3/configure
function likeabee_my_content_links($account) {
  $names = node_type_get_names();
  $path = 'user/'.$account->uid.'/content/';
  $render = array(
    '#theme' => 'links'
  );
  $types = db_query("SELECT DISTINCT type FROM {node} WHERE uid = :uid ORDER BY type", array(':uid' => $account->uid))->fetchCol();
  foreach ($types as $type) {
    $render['#links'][] = array(
      'title' => $names[$type],
      'href' => $path.$type
    );
  }
  //hopefully won't matter if its empty...
  return $render;
}



function likeabee_resources_default_page() {
  //on this page is the payment form, the balances and beeziest traders and pending transactions
  $build[] = siteoverride_embed_block('mcapi', 'balances');
  $build[] = siteoverride_embed_block('mcapi_forms', '1stparty');
  $build[] = siteoverride_embed_block('views', 'user_rankings-block_volumes');
  return $build;
}
//kudos to keithm
function siteoverride_embed_block($module, $delta, $region='content') {
  // Create block stub.
  $block = new stdClass();
  $block->module = $module;
  $block->delta = $delta;
  $block->region = $region;
  // Load title.
  global $theme_key;
  drupal_theme_initialize();
  $block1 = db_query("SELECT title FROM {block} WHERE module = :module AND delta = :delta AND theme = :theme",
                    array(':module' => $module, ':delta' => $delta, ':theme' => $theme_key))->fetchObject();
  if (is_object($block1) && isset($block1->title)) {
    $block->title = $block1->title;
  }
  // Render the content and subject for the block.
  $blocks = _block_render_blocks(array($block));
  // Get an array of blocks suitable for drupal_render().
  $array = _block_get_renderable_array($blocks);
  return $array;
}





function likeabee_resources_marketplace() {
  return 'Blah blah blah help and introduction';
}
