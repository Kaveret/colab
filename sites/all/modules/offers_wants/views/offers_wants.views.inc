<?php
//$Id: 
/**
 * @file
 * Contains default views to supplement the offers/wants modules
 */

/**
 * Implementation of hook views_data().
 */
function offers_wants_views_data() {
  $data = array();
  $data['offers_wants']['table']['group']  = t('Propositions');
  $data['offers_wants']['table']['join'] = array(
    'node' => array(
      'left_field' => 'nid',
      'field' => 'nid',
    ),
  );

  $data['offers_wants']['want'] = array(
    'title' => t('Is a want'),
    'help' => t('Show a 1'),
    'field' => array(
      'handler' => 'views_handler_field_cforge_want',
    ),
    'filter' => array(
      'help' => t('Filter by proposition direction'),
      'handler' => 'views_handler_filter_boolean_operator',
    ),
    'argument' => array(
      'help' => t('Filter by proposition direction'),
      'handler' => 'views_handler_argument_numeric',
    )
  );
  $data['offers_wants']['end'] = array(
    'title' => t('Is time limited'),
    'help' => t('Show only temporary or permanent propositions'),
    'filter' => array(
      'handler' => 'views_handler_filter_boolean_operator',
    )
  );
  return $data;
}
