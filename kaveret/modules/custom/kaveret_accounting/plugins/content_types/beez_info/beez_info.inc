<?php

/**
 * Plugin definition.
 */
$plugin = array(
  'title' => t('Beez info'),
  'description' => t('Dispaly beez info and graph per user.'),
  'required context' => new ctools_context_required(t('User'), 'user'),
  'category' => t('Kaveret'),
  'hook theme' => 'kaveret_accounting_beez_info_content_type_theme',
);

/**
 * Render callback.
 */
function kaveret_accounting_beez_info_content_type_render($subtype, $conf, $args, $context) {
  if (empty($context->data)) {
    return;
  }
  $account = $context->data;
  $block = new stdClass();
  $block->module = 'kaveret_accounting';
  $block->title = t('My Beez @name', array('@name' => $account->name));

  module_load_include('inc', 'mcapi');
  $settings = _mcapiblock_settings('balance_history', 'trader_data');

  $variables = array(
    // Make sure the account is according to our context.
    'account' => $account,
    'histories' => get_balance_history($account, $settings['currcodes']),
    'width' => '200',
  );

  $totals = transaction_totals($account->uid, 'bz');
  $items = array();
<<<<<<< HEAD
  $items[] = t('<strong>BZ</strong> @balance', array('@balance' => $totals->balance));
  $items[] = t('Income: <strong>@gross_in</strong>', array('@gross_in' => $totals->gross_in));
  $items[] = t('Transactions: <strong>@transactions</strong>', array('@transactions' => $totals->count));
  $items[] = t('Volume: <strong>@volume</strong>', array('@volume' => $totals->volume));
=======

  $variables = array(
    'currcode' => 'bz',
    'quantity' => $totals->balance,
  );
  $items[] = theme('worth_item', $variables);
  // BZ has no fractions, therefore we display the amounts as integers.
  $items[] = t('Income: <strong>@gross_in</strong>', array('@gross_in' => round($totals->gross_in)));
  $items[] = t('Transactions: <strong>@transactions</strong>', array('@transactions' => round($totals->count)));
  $items[] = t('Volume: <strong>@volume</strong>', array('@volume' => round($totals->volume)));
>>>>>>> make

  $info = theme('item_list', array('items' => $items));
  $graph = $totals->count ? theme('balance_history', $variables) : '';

  $block->content = theme('beez_info', array('info' => $info, 'graph' => $graph));

  return $block;
}

/**
 * Edit form.
 */
function kaveret_accounting_beez_info_content_type_edit_form($form, &$form_state) {
  return $form;
}

/**
 * Delegated hook_theme().
 */
function kaveret_accounting_beez_info_content_type_theme(&$theme, $plugin) {
  $theme['beez_info'] = array(
    'variables' => array('info' => NULL, 'graph' => NULL),
    'path' => $plugin['path'],
    'template' => 'beez_info',
  );
}
