<?php

/**
 * @file
 *
 * Build a short description of a transaction.
 */
class kaveret_accounting_transaction_description extends views_handler_field {
  function render($values) {
    $transactions = entity_load('transaction', array($values->xid));
    $transaction = reset($transactions);

    // TODO: Support "Suggest" transactions.
    if ($transaction->type != '1stparty') {
      return;
    }

    $payer = user_load($transaction->payer);
    $payee = user_load($transaction->payee);

    $variables = array(
      'currcode' => $values->field_worth[0]['rendered']['#currcode'],
      'quantity' => $values->field_worth[0]['rendered']['#quantity'],
    );
    $amount = theme('worth_item', $variables);

    $variables = array(
      '@payer' => format_username($payer),
      '@payee' => format_username($payee),
      '!amount' => $amount,
    );

    return t('@payer paid !amount to @payee', $variables);
  }
}
