<?php
/**
 * @file
 * default_content.features.content_menu_links.inc
 */

/**
 * Implements hook_content_menu_links_defaults().
 */
function default_content_content_menu_links_defaults() {
  $menu_links = array();

  // Exported menu link: main-menu:node/8
  $menu_links['main-menu:node/8'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'node-name/dreams_accelerator',
    'router_path' => 'node/%',
    'link_title' => 'Dreams Accelerator',
    'options' => array(),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
  );
  // Exported menu link: main-menu:node/7
  $menu_links['main-menu:node/7'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'node-name/learning_centre',
    'router_path' => 'node/%',
    'link_title' => 'Learning Centre',
    'options' => array(),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Dreams Accelerator');
  t('Learning Centre');


  return $menu_links;
}
