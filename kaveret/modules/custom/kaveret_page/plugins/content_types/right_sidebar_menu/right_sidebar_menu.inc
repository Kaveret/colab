<?php

/**
 * Plugin definition.
 */
$plugin = array(
  'title' => t('Right sidebar menu'),
  'description' => t('Display the list of links on the right sidebar menu.'),
  'category' => t('Kaveret'),
);

/**
 * Render callback.
 */
function kaveret_page_right_sidebar_menu_content_type_render($subtype, $conf, $args, $context) {
  global $user;

  if (!$user->uid) {
    return;
  }

  $block = new stdClass();
  $block->module = 'kaveret_page';
  $block->title = '';

  $query = new EntityFieldQuery();
  $result_request = $query->entityCondition('entity_type', 'node')
    ->propertyCondition('type', 'request')
    ->propertyCondition('uid', $user->uid)
    ->propertyOrderBy('created', 'DESC')
    ->range(0,6)
    ->execute();

  $query = new EntityFieldQuery();
  $result_offer = $query->entityCondition('entity_type', 'node')
    ->propertyCondition('type', 'offer')
    ->propertyCondition('uid', $user->uid)
    ->propertyOrderBy('created', 'DESC')
    ->range(0,6)
    ->execute();

  $items['offer'] = kaveret_page_right_sidebar_normalize_menu($result_offer);
  $items['request'] = kaveret_page_right_sidebar_normalize_menu($result_request);

  $output = '<div class="offers">';
  if (isset($items['offer']) && count($items['offer']) > 5) {
    $output .= '<h3>' . t('My Offers') . '</h3>';
    $output .= theme('item_list', array('items' => $items['offer']));
    $output .= '<div>' .  l(t('more...'),'directory', array('attributes' => array('class' => 'right_sidebar_menu-more'))) . '</div>';
    $output .= l('<span class="icon-plus"></span>' . t('Create a new offer'),'node/add/offer', array('html' => TRUE, 'attributes' => array('class' => array('right_sidebar_menu-link'))));
  }
  elseif (isset($items['offer']) && !empty($items['offer'])) {
    $output .= '<h3>' . t('My Offers') . '</h3>';
    $output .= theme('item_list', array('items' => $items['offer']));
    $output .= l('<span class="icon-plus"></span>' . t('Create a new offer'),'node/add/offer', array('html' => TRUE, 'attributes' => array('class' => array('right_sidebar_menu-link'))));
  }
  else {

    $output .= '<h3>' . t('My Offers') . '</h3>';
    $output .= '<p class="right_sidebar_menu-no_result">' . t('You haven\'t created any offers yet.') . ' </p>';
    $output .= l('<span class="icon-plus"></span>' . t('Create a new offer'),'node/add/offer', array('html' => TRUE, 'attributes' => array('class' => array('right_sidebar_menu-link'))));
  }
  $output .= '</div>';

  $output .= '<div class="requests">';
  if (isset($items['request']) && count($items['request']) > 5) {
    $output .= '<h3>' . t('My Requests') . '</h3>';
    $output .= theme('item_list', array('items' => $items['offer']));
    $output .= '<div>' .  l(t('more...'),'directory', array('attributes' => array('class' => 'right_sidebar_menu-more'))) . '</div>';
    $output .= l('<span class="icon-plus"></span>' . t('Create a new offer'),'node/add/request', array('html' => TRUE, 'attributes' => array('class' => array('right_sidebar_menu-link'))));
  }
  elseif (isset($items['request']) && !empty($items['request'])) {
    $output .= '<h3>' . t('My Requests') . '</h3>';
    $output .= theme('item_list', array('items' => $items['request']));
    $output .= l('<span class="icon-plus"></span>' . t('Create a new request'),'node/add/request', array('html' => TRUE, 'attributes' => array('class' => array('right_sidebar_menu-link'))));
  }
  else {

    $output .= '<h3>' . t('My Requests') . '</h3>';
    $output .= '<p class="right_sidebar_menu-no_result">' . t('You haven\'t created any requests yet.') . ' </p>';
    $output .= l('<span class="icon-plus"></span>' . t('Create a new request'),'node/add/request', array('html' => TRUE, 'attributes' => array('class' => array('right_sidebar_menu-link'))));
  }
  $output .= '</div>';

  $block->content = $output;
  return $block;
}


function kaveret_page_right_sidebar_normalize_menu($result) {
  if (empty($result['node'])) {
    return;
  }
  $items = array();
  foreach ($result['node'] as $info) {
    $wrapper = entity_metadata_wrapper('node', $info->nid);
    $items[] = l(t($wrapper->label()), 'node/' . $info->nid);
  }
  return $items;
}
/**
* Edit form.
*/
function kaveret_page_right_sidebar_menu_content_type_edit_form($form, &$form_state) {
  return $form;
}
