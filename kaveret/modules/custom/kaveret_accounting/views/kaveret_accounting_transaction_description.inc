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
      '@payer' => $payer->name,
      '@payee' => $payee->name,
      '@quantity' => $values->field_worth[0]['rendered']['#quantity'],
      '@currency' => $values->field_worth[0]['rendered']['#currcode'],
    );

    return t('@payer payed @quantity@currency to @payee', $variables);
  }
}
