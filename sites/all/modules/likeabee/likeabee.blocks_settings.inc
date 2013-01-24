<?php
/**
 * @file
 * likeabee.blocks_settings.inc
 */

/**
 * Reverts (applies) blocks to database.
 * Copied from BlockExport module's hook_features_export_revert() implementation.
 */
function _likeabee_apply_block_settings() {
  $mycomponents = likeabee_default_blockexport_settings();
  if (!empty($mycomponents)) {
    if (count($mycomponents['block']) > 0) {
      db_truncate('block')->execute();
      foreach ($mycomponents['block'] as $mycomponent) {
        db_insert('block')->fields($mycomponent)->execute();
      }
    }
    if (count($mycomponents['block_custom']) > 0) {
      db_truncate('block_custom')->execute();
      foreach ($mycomponents['block_custom'] as $mycomponent_custom) {
        db_insert('block_custom')->fields($mycomponent_custom)->execute();
      }
    }
    if (count($mycomponents['block_node_type']) > 0) {
      db_truncate('block_node_type')->execute();
      foreach ($mycomponents['block_node_type'] as $mycomponent_block_type) {
        db_insert('block_node_type')->fields($mycomponent_block_type)->execute();
      }
    }
    if (count($mycomponents['block_role']) > 0) {
      db_truncate('block_role')->execute();
      foreach ($mycomponents['block_role'] as $mycomponent_block_role) {
        db_insert('block_role')->fields($mycomponent_block_role)->execute();
      }
    }
  }
  drupal_set_message('Successfully configured Likeabee\'s block settings.');
}




/**
 * Implements hook_default_blockexport_settings().
 */
function likeabee_default_blockexport_settings() {
  $export = array();
  $export['block'][] = array(
  'bid' => '1',
  'module' => 'block',
  'delta' => '1',
  'theme' => 'beezy',
  'status' => '1',
  'weight' => '-24',
  'region' => 'content',
  'custom' => '0',
  'visibility' => '1',
  'pages' => '<front>',
  'title' => '<none>',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '84',
  'module' => 'menu_block',
  'delta' => '1',
  'theme' => 'beezy',
  'status' => '1',
  'weight' => '-25',
  'region' => 'content',
  'custom' => '0',
  'visibility' => '1',
  'pages' => '<front>',
  'title' => '<none>',
  'cache' => '-1',
);
//  this block should be only visible on non-front  
  $export['block'][] = array(
  'bid' => '85',
  'module' => 'menu_block',
  'delta' => '2',
  'theme' => 'beezy',
  'status' => '1',
  'weight' => '-1',
  'region' => 'navigation',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '<front>',
  'title' => '<none>',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '87',
  'module' => 'mcapi_signatures',
  'delta' => 'user_pending',
  'theme' => 'beezy',
  'status' => '1',
  'weight' => '0',
  'region' => 'content_bottom',
  'custom' => '0',
  'visibility' => '1',
  'pages' => 'user/*/statement',
  'title' => '<none>',
  'cache' => '1',
);
  $export['block'][] = array(
  'bid' => '88',
  'module' => 'system',
  'delta' => 'user-menu',
  'theme' => 'beezy',
  'status' => '1',
  'weight' => '1',
  'region' => 'header',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => 'Individual space',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '89',
  'module' => 'menu',
  'delta' => 'community',
  'theme' => 'beezy',
  'status' => '1',
  'weight' => '2',
  'region' => 'header',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => 'Community Space',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '90',
  'module' => 'menu',
  'delta' => 'minimanager',
  'theme' => 'beezy',
  'status' => '1',
  'weight' => '3',
  'region' => 'header',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => 'MANAGE',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '109',
  'module' => 'cforge',
  'delta' => 'nitin',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '10',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '1',
  'pages' => '<front>
LETS
commit
faq
galleries',
  'title' => '',
  'cache' => '1',
);
  $export['block'][] = array(
  'bid' => '130',
  'module' => 'mcapi',
  'delta' => 'balances',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '1',
);
  $export['block'][] = array(
  'bid' => '131',
  'module' => 'aggregator',
  'delta' => 'feed-1',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '1',
);
  $export['block'][] = array(
  'bid' => '132',
  'module' => 'comment',
  'delta' => 'recent',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '1',
);
  $export['block'][] = array(
  'bid' => '133',
  'module' => 'menu',
  'delta' => 'devel',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '134',
  'module' => 'menu',
  'delta' => 'features',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '135',
  'module' => 'menu',
  'delta' => 'secondary-menu',
  'theme' => 'beezy',
  'status' => '1',
  'weight' => '0',
  'region' => 'footer',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '<none>',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '136',
  'module' => 'menu',
  'delta' => 'visitors',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '137',
  'module' => 'node',
  'delta' => 'syndicate',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '138',
  'module' => 'node',
  'delta' => 'recent',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '1',
);
  $export['block'][] = array(
  'bid' => '139',
  'module' => 'search',
  'delta' => 'form',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '140',
  'module' => 'system',
  'delta' => 'main',
  'theme' => 'beezy',
  'status' => '1',
  'weight' => '-23',
  'region' => 'content',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '141',
  'module' => 'system',
  'delta' => 'powered-by',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '10',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '142',
  'module' => 'system',
  'delta' => 'help',
  'theme' => 'beezy',
  'status' => '1',
  'weight' => '5',
  'region' => 'help',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '143',
  'module' => 'system',
  'delta' => 'navigation',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '144',
  'module' => 'system',
  'delta' => 'management',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '145',
  'module' => 'system',
  'delta' => 'main-menu',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '146',
  'module' => 'user',
  'delta' => 'login',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '147',
  'module' => 'user',
  'delta' => 'new',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '1',
);
  $export['block'][] = array(
  'bid' => '148',
  'module' => 'user',
  'delta' => 'online',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '149',
  'module' => 'mcapi_forms',
  'delta' => '1stparty',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '2',
);
  $export['block'][] = array(
  'bid' => '150',
  'module' => 'mcapi_forms',
  'delta' => '3rdparty',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '2',
);
  $export['block'][] = array(
  'bid' => '151',
  'module' => 'mcapi_limits',
  'delta' => 'balance_limits',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '1',
);
  $export['block'][] = array(
  'bid' => '152',
  'module' => 'mcapi_limits',
  'delta' => 'trading_limits',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '1',
);
  $export['block'][] = array(
  'bid' => '153',
  'module' => 'mcapi_signatures',
  'delta' => 'waiting_on_uid',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '1',
);
  $export['block'][] = array(
  'bid' => '154',
  'module' => 'mcapi_index_views',
  'delta' => 'balance_history',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '1',
);
  $export['block'][] = array(
  'bid' => '155',
  'module' => 'offers_wants',
  'delta' => 'propositions_taxonomy_block',
  'theme' => 'beezy',
  'status' => '1',
  'weight' => '-25',
  'region' => 'sidebar_second',
  'custom' => '0',
  'visibility' => '1',
  'pages' => 'resources/offers',
  'title' => 'Offer categories',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '156',
  'module' => 'offers_wants',
  'delta' => 'add_proposition',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '-24',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '1',
  'pages' => 'offers*
wants*',
  'title' => '',
  'cache' => '8',
);
  $export['block'][] = array(
  'bid' => '157',
  'module' => 'views',
  'delta' => 'transactions-who_gave_what',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '158',
  'module' => 'views',
  'delta' => 'content_preview-all',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '159',
  'module' => 'views',
  'delta' => 'content_preview-popular',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '160',
  'module' => 'views',
  'delta' => 'content_preview-choice',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '161',
  'module' => 'views',
  'delta' => 'trade_analysis-system',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '162',
  'module' => 'views',
  'delta' => 'trade_analysis-user',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '163',
  'module' => 'views',
  'delta' => 'ow_offers-latest',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '164',
  'module' => 'views',
  'delta' => 'ow_wants-latest',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '165',
  'module' => 'views',
  'delta' => 'events-block_upcoming',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '166',
  'module' => 'devel',
  'delta' => 'execute_php',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '167',
  'module' => 'devel',
  'delta' => 'switch_user',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '168',
  'module' => 'likeabee',
  'delta' => 'user_content_by_type',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '1',
  'pages' => 'user*',
  'title' => '',
  'cache' => '1',
);
  $export['block'][] = array(
  'bid' => '169',
  'module' => 'views',
  'delta' => 'user_rankings-block_promiscuity',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '170',
  'module' => 'views',
  'delta' => 'user_rankings-block_volumes',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '171',
  'module' => 'views',
  'delta' => 'user_rankings-block_trades',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '172',
  'module' => 'views',
  'delta' => 'user_rankings-block_incomes',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '173',
  'module' => 'views',
  'delta' => '75434622ff2ca6e5a15a02ed33850dcf',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '0',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '3327',
  'module' => 'uc_cart',
  'delta' => 'cart',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '3',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => 'admin*',
  'title' => '',
  'cache' => '-1',
);
  $export['block'][] = array(
  'bid' => '3328',
  'module' => 'uc_catalog',
  'delta' => 'catalog',
  'theme' => 'beezy',
  'status' => '0',
  'weight' => '-21',
  'region' => '-1',
  'custom' => '0',
  'visibility' => '0',
  'pages' => '',
  'title' => '',
  'cache' => '5',
);
  $export['block_custom'][] = array(
  'bid' => '1',
  'body' => '<img src="'.drupal_get_path('theme', 'beezy').'/images/top_img.png" width="722" height="267" />',
  'info' => 'front image',
  'format' => 'full_html',
);
  $export['block_role'][] = array(
  'module' => 'menu',
  'delta' => 'visitors',
  'rid' => '1',
);
  $export['block_role'][] = array(
  'module' => 'system',
  'delta' => 'main-menu',
  'rid' => '2',
);
  $export['block_role'][] = array(
  'module' => 'user',
  'delta' => 'new',
  'rid' => '2',
);
  $export['block_role'][] = array(
  'module' => 'menu',
  'delta' => 'visitors',
  'rid' => '4',
);
return $export;
}
