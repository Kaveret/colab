<?php

/**
 * Plugin definition.
 */
$plugin = array(
  'title' => t('Transfer form'),
  'description' => t('Display the transfer form.'),
  'required context' => new ctools_context_required(t('User'), 'user'),
  'category' => t('Kaveret'),
);

/**
 * Render callback.
 */
function kaveret_accounting_transfer_content_type_render($subtype, $conf, $args, $context) {
  if (empty($context->data)) {
    return;
  }
  $account = $context->data;

  $block = new stdClass();
  $block->module = 'kaveret_accounting';

  // Get the Beez balance.
  $totals = transaction_totals($account->uid, 'bz');
  $block->title = '<span class="title">' . t('Transfer') . '</span> <span class="balance">' . t('My Beez: <span class="symbol">BZ</span> <span class="amount">@amount</span>', array('@amount' => $totals->balance)). '</span>';

  $form = mcapi_get_form('1stparty');

  // Use this oppurtunity to alter the form.
  $template = array(
    '[mcapiform:direction]',
    '[mcapiform:worth]',
    '[mcapiform:secondperson]',
    '[mcapiform:transaction_purpose]',
  );
  $form['#template'] = implode('', $template);

  $form['direction']['outgoing']['#title'] = t('Pay');
  $form['direction']['outgoing']['#weight'] = 10;
  $form['direction']['incoming']['#weight'] = 20;
  $form['direction']['#title'] = t('I want to');
  $form['direction']['#strip'] = FALSE;

  $form['worth'][LANGUAGE_NONE]['#strip'] = FALSE;
  $form['worth'][LANGUAGE_NONE]['#title'] = t('Amount');
  $form['worth'][LANGUAGE_NONE]['#description'] = '';

  $form['secondperson']['#strip'] = FALSE;
  $form['secondperson']['#title'] = t('To');
  $form['secondperson']['#attributes']['placeholder'] = $form['secondperson']['#description'];
  $form['secondperson']['#description'] = '';

  $form['transaction_purpose'][LANGUAGE_NONE]['#strip'] = FALSE;
  $form['transaction_purpose'][LANGUAGE_NONE][0]['value']['#size'] = 23;

  $form['buttons']['#prefix'] = '<div class="actions">';
  $form['buttons']['#suffix'] = '</div>';

  // Javascript for toggling the secondperson label between "To" and "From".
  $form['#attached']['js'][] = drupal_get_path('module', 'kaveret_accounting') . '/plugins/content_types/transfer/transfer.js';

  $block->content = $form;
  return $block;
}

/**
 * Edit form.
 */
function kaveret_accounting_transfer_content_type_edit_form($form, &$form_state) {
  return $form;
}
