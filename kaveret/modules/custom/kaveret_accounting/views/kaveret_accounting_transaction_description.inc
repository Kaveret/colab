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

    $payer = user_load($transaction->payer);
    $payee = user_load($transaction->payee);

    $variables = array();
    // TODO: Support "Suggest" transactions.
    if ($transaction->creator == $transaction->payer) {
      $variables['@action'] = t('Payment');
      $variables['@direction'] = t('to');
      $variables['@name'] = $payee->name;
    }
    elseif ($transaction->creator == $transaction->payee) {
      $variables['@action'] = t('Request');
      $variables['@direction'] = t('from');
      $variables['@name'] = $payer->name;
    }

    $variables['@amount'] = $values->field_worth[0]['rendered']['#quantity'];
    $variables['@amount'] .= $values->field_worth[0]['rendered']['#currcode'];

    return t('@action of @amount @direction @name', $variables);
  }
}
