<?php

function beezy_preprocess_node(&$vars) {
  if ($vars['teaser']) {
    array_push($vars['theme_hook_suggestions'], 'node__'.$vars['type'].'__teaser');
  }
}

function beezy_process_page(&$vars) {
  //add a suggestion to use a different page template according to node->type
  if (isset($vars['node']) && $vars['node']->type == 'group') {
    // Bring it all together.
    $vars['theme_hook_suggestions'] = array_merge(
      $vars['theme_hook_suggestions'],
      array("page__type__group"),
      theme_get_suggestions($args, $type)
    );
  }
  $vars['floating'] = menu_tree('main-menu');
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
