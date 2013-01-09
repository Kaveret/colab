<?php

/**
 * Implementation of hook views_data().
 */
function cforge_docs_views_data() {
  $data['node']['access'] = array(
    'title' => t('CF document access'), // The item it appears as on the UI,
    'help' => t('Whether the document is protected and the user can access it'),
    'field' => array(
      'handler' => 'views_handler_field_cfdocs_access',
      'click sortable' => TRUE,
    )
  );
  return $data;
}