<?php

/**
 * Implements hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('9'),
  'category' => t('Bootstrap One Column'),
  'icon' => 'bootstrap_onecol_9.png',
  'theme' => 'bootstrap_onecol_9',
  'admin css' => '../../bootstrap_panels_admin.css',
  'regions' => array('middle' => t('Middle column')),
);
