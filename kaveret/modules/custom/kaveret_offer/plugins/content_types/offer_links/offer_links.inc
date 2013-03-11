<?php

/**
 * Plugin definition.
 */
$plugin = array(
  'title' => t('Offer links'),
  'description' => t('Display the list of links on the offer node.'),
  'required context' => new ctools_context_required(t('Node'), 'node'),
  'category' => t('Kaveret'),
);

/**
 * Render callback.
 */
function kaveret_offer_offer_links_content_type_render($subtype, $conf, $args, $context) {
  global $user;

  if (empty($context->data)) {
    return;
  }
  $node = $context->data;
  $wrapper = entity_metadata_wrapper('node', $node);

  $account = user_load($node->uid);

  $block = new stdClass();
  $block->module = 'kaveret_offer';
  $block->title = '';

  $items = array();

  $users_node = $user->uid == $account->uid;
  // Only show the email link if the node author is not the current user.
  if(!$users_node) {
    $items[] = l(t('Send an email to @name', array('@name' => $node->name)), 'mailto:' . $account->mail);
  }
  $items[] = l($users_node ? t('My propositions') : t("@name's propositions", array('@name' => $node->name)), 'user/'. $account->uid . '/offers');
  $items[] = l($users_node ? t('My profile') : t("See @name's profile", array('@name' => $node->name)), 'user/' . $account->uid);
  // Category is required.
  $items[] = l(t("See more in @term", array('@term' => $wrapper->field_category->label())), 'taxonomy/term/' . $wrapper->field_category->getIdentifier());
  $items[] = l(t('Add new comment'), 'comment/reply/' . $node->nid);

  $block->content = theme('item_list', array('items' => $items));
  return $block;
}

/**
 * Edit form.
 */
function kaveret_offer_offer_links_content_type_edit_form($form, &$form_state) {
  return $form;
}
