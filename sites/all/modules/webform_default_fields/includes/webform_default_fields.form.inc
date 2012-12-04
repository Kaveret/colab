<?php

/**
 * @file
 * Building forms
 */

/**
 * An additional form submit handler for webform settings.
 * Make sure to create default fields nodes for all content type that are webform-enabled.
 */
function webform_default_fields_form_webform_admin_settings_submit($form, $form_state) {
  $node_types = node_type_get_types();
  foreach ($node_types as $type) {
    $check_node = in_array($type->type, $form_state['values']['webform_node_types']);
    if ($check_node) {
      _webform_default_fields_container_node($type->type, FALSE);
    }
    else {      
      _webform_default_fields_delete_container_node($type->type, FALSE);
    }  
  }
  menu_rebuild();
}