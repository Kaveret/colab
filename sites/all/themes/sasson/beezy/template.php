<?php

function beezy_preprocess_node(&$vars) {
  if ($vars['teaser']) {
    array_push($vars['theme_hook_suggestions'], 'node__'.$vars['type'].'__teaser');
  }
}

function beezy_preprocess_page(&$vars) {
  //the main-menu needs to show the second level only, so we use menu_block for that
  //only on certain pages, but which???
  //$block = menu_tree_build(menu_block_get_config(MENU_BLOCK_SECTION));
  //$vars['main_menu_links'] = $block['content'];

  //add a suggestion to use a different page template according to node->type
  if (isset($vars['node'])) {
    // Get path arguments.
    $args = arg();
    // Remove first argument of "node".
    unset($args[0]);
    // Set type.
    $type = "page__type_{$vars['node']->type}";

    // Bring it all together.
    $vars['theme_hook_suggestions'] = array_merge(
      $vars['theme_hook_suggestions'],
      array($type),
      theme_get_suggestions($args, $type)
    );
  }
}


/**
 * Implements template_preprocess_block().
 * Sasson theme presumed to make block headings invisible in the header region
 */
function beezy_preprocess_block(&$vars, $hook) {
  if ($vars['block']->region != 'header') return;
  $pos = array_search('element-invisible', $vars['title_attributes_array']['class']);
  unset($vars['title_attributes_array']['class'][$pos] );
}
