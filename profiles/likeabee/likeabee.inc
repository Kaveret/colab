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

function _groups_pseudo_menu() {
  //borrowed from og_extras_node_links
  $group = og_context(); //dependency on og_context
  $gid = $group['gid'];

  $options = array('query' => array('destination' => current_path()));

  $items['group_home'] = array(
    'data' => l(t('Information Read and watch'), "node/$gid", $options)
  );
  $items['group_activities'] = array(
    'data' => l(t('Activity Group Activities'), 'activity/activities-my-group', $options)
  );
  $items['group_members'] = array(
    'data' => l(t('Information Read and watch'), "node/$gid", $options)
  );

  $items['group_manage'] = array(
    'data' => l(t('Manage Group'), 'members/members-my-group', $options),
    'children' => array(
      'edit_group' => array(
        'data' => l(t('Edit group'), "node/$gid/edit", $options)
       ),
       'group_permissions' => array(
         'data' => l(t('Permissions'), "group/node/$gid/admin/permissions", $options)
       ),
       'group_membership' => array(
         'data' => l(t('Membership'), "group/node/$gid/admin/people", $options)
      )
    )
  );

  foreach (node_type_get_types() as $type_name => $info) {
    if (og_is_group_content_type('node', $type_name) && node_access('create', $type_name)) {
      $names[$type_name] = node_type_get_name($type_name);
    }
  }
  asort($names);
  // Build links.
  $options  = array(
    'query' => array(
      'gids_' . $group['group_type'] . '[]' => $group['gid'],
    ) + drupal_get_destination(),
  );
  $items['node_add'] = array(
    'data' => l(t('Create content'), '', $options),
    'children' => array()
  );
  foreach ($names as $type => $name) {
    $items['node_add']['children'][$type] = array(
      'data' => l($name, 'node/add/'.$type, $options),
    );
  }

  return array(
    'node_title' => array(
       '#markup' => '<h2>'.node_load($gid)->title.'</h2>'
    ),
    'pseudo_menu' => array(
       '#theme' => 'item_list',
       '#type' => 'ul',
       '#items' => $items
    )
  );
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
  //the secondlevel main menu
  $blocks['menu_block'][MENU_BLOCK_SECTION] = array(
    'region' => 'sidebar_second',
    'status' => 1,
    'visibility' => BLOCK_VISIBILITY_LISTED,
    'pages' => "resources*\ngroups*",
    'title' => '<none>',
  ) + $blocks['menu_block'][MENU_BLOCK_SECTION];
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


function _likeabee_flag_default_flags() {
  // Exported flag: "Join the event".
  $flags['join_event'] = array(
    'content_type' => 'node',
    'title' => 'Join the event',
    'global' => '0',
    'types' => array(
      0 => 'groups_event',
    ),
    'flag_short' => 'Join The Event',
    'flag_long' => '',
    'flag_message' => 'Join The Event',
    'unflag_short' => 'Leave The Event',
    'unflag_long' => '',
    'unflag_message' => '',
    'unflag_denied_text' => '',
    'link_type' => 'toggle',
    'roles' => array(
      'flag' => array(
        0 => '2',
      ),
      'unflag' => array(
        0 => '2',
      ),
    ),
    'weight' => 0,
    'show_on_form' => 0,
    'access_author' => '',
    'show_on_page' => 0,
    'show_on_teaser' => 0,
    'show_contextual_link' => 0,
    'i18n' => 0,
    'api_version' => 2,
  );

  // Exported flag: "Content Viewed".
  $flags['content_viewed'] = array(
    'content_type' => 'node',
    'title' => 'Content Viewed',
    'global' => '0',
    'types' => array(
      0 => 'discussion',
      1 => 'group_s_doccuments',
      2 => 'advpoll',
    ),
    'flag_short' => 'view',
    'flag_long' => '',
    'flag_message' => '',
    'unflag_short' => 'not view',
    'unflag_long' => '',
    'unflag_message' => '',
    'unflag_denied_text' => '',
    'link_type' => 'normal',
    'roles' => array(
      'flag' => array(
        0 => '2',
        1 => '3',
      ),
      'unflag' => array(
        0 => '2',
        1 => '3',
      ),
    ),
    'weight' => 0,
    'show_on_form' => 0,
    'access_author' => 'others',
    'show_on_page' => 0,
    'show_on_teaser' => 0,
    'show_contextual_link' => 0,
    'i18n' => 0,
    'api_version' => 2,
  );
  return $flags;
}