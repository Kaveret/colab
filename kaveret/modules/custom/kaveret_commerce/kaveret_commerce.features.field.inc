<?php
/**
 * @file
 * kaveret_commerce.features.field.inc
 */

/**
 * Implements hook_field_default_fields().
 */
function kaveret_commerce_field_default_fields() {
  $fields = array();

  // Exported field: 'commerce_product-product-commerce_price'.
  $fields['commerce_product-product-commerce_price'] = array(
    'field_config' => array(
      'active' => '1',
      'cardinality' => '1',
      'deleted' => '0',
      'entity_types' => array(
        0 => 'commerce_product',
      ),
      'field_name' => 'commerce_price',
      'foreign keys' => array(),
      'indexes' => array(
        'currency_price' => array(
          0 => 'amount',
          1 => 'currency_code',
        ),
      ),
      'locked' => '1',
      'module' => 'commerce_price',
      'settings' => array(
        'entity_translation_sync' => FALSE,
      ),
      'translatable' => '0',
      'type' => 'commerce_price',
    ),
    'field_instance' => array(
      'bundle' => 'product',
      'default_value' => NULL,
      'deleted' => '0',
      'description' => '',
      'display' => array(
        'commerce_line_item_display' => array(
          'label' => 'hidden',
          'module' => 'commerce_price',
          'settings' => array(
            'calculation' => 'calculated_sell_price',
          ),
          'type' => 'commerce_price_formatted_amount',
          'weight' => 0,
        ),
        'commerce_line_item_token' => array(
          'label' => 'hidden',
          'module' => 'commerce_price',
          'settings' => array(
            'calculation' => 'calculated_sell_price',
          ),
          'type' => 'commerce_price_formatted_amount',
          'weight' => 0,
        ),
        'default' => array(
          'label' => 'hidden',
          'module' => 'commerce_price',
          'settings' => array(
            'calculation' => 'calculated_sell_price',
          ),
          'type' => 'commerce_price_formatted_amount',
          'weight' => '0',
        ),
        'full' => array(
          'label' => 'hidden',
          'module' => 'commerce_price',
          'settings' => array(
            'calculation' => 'calculated_sell_price',
          ),
          'type' => 'commerce_price_formatted_amount',
          'weight' => 0,
        ),
        'line_item' => array(
          'label' => 'hidden',
          'module' => 'commerce_price',
          'settings' => array(
            'calculation' => 'calculated_sell_price',
          ),
          'type' => 'commerce_price_formatted_amount',
          'weight' => 0,
        ),
        'node_teaser' => array(
          'label' => 'hidden',
          'module' => 'commerce_price',
          'settings' => array(
            'calculation' => 'calculated_sell_price',
          ),
          'type' => 'commerce_price_formatted_amount',
          'weight' => '2',
        ),
        'token' => array(
          'label' => 'hidden',
          'module' => 'commerce_price',
          'settings' => array(
            'calculation' => 'calculated_sell_price',
          ),
          'type' => 'commerce_price_formatted_amount',
          'weight' => 0,
        ),
      ),
      'entity_type' => 'commerce_product',
      'field_name' => 'commerce_price',
      'label' => 'Price',
      'required' => TRUE,
      'settings' => array(
        'entity_translation_sync' => FALSE,
        'user_register_form' => FALSE,
      ),
      'widget' => array(
        'module' => 'commerce_price',
        'settings' => array(
          'currency_code' => 'default',
        ),
        'type' => 'commerce_price_full',
        'weight' => 0,
      ),
    ),
  );

  // Exported field: 'commerce_product-product-field_image'.
  $fields['commerce_product-product-field_image'] = array(
    'field_config' => array(
      'active' => '1',
      'cardinality' => '1',
      'deleted' => '0',
      'entity_types' => array(),
      'field_name' => 'field_image',
      'foreign keys' => array(
        'fid' => array(
          'columns' => array(
            'fid' => 'fid',
          ),
          'table' => 'file_managed',
        ),
      ),
      'indexes' => array(
        'fid' => array(
          0 => 'fid',
        ),
      ),
      'locked' => '0',
      'module' => 'image',
      'settings' => array(
        'default_image' => 0,
        'entity_translation_sync' => array(
          0 => 'fid',
        ),
        'uri_scheme' => 'public',
      ),
      'translatable' => '0',
      'type' => 'image',
    ),
    'field_instance' => array(
      'bundle' => 'product',
      'default_value' => NULL,
      'deleted' => '0',
      'description' => '',
      'display' => array(
        'default' => array(
          'label' => 'hidden',
          'module' => 'image',
          'settings' => array(
            'image_link' => '',
            'image_style' => 'teaser_thumbnail',
          ),
          'type' => 'image',
          'weight' => '2',
        ),
        'line_item' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => 0,
        ),
        'node_teaser' => array(
          'label' => 'hidden',
          'module' => 'image',
          'settings' => array(
            'image_link' => '',
            'image_style' => 'teaser_thumbnail',
          ),
          'type' => 'image',
          'weight' => '1',
        ),
      ),
      'entity_type' => 'commerce_product',
      'field_name' => 'field_image',
      'label' => 'Image',
      'required' => 0,
      'settings' => array(
        'alt_field' => 0,
        'default_image' => 0,
        'entity_translation_sync' => FALSE,
        'file_directory' => '',
        'file_extensions' => 'png gif jpg jpeg',
        'max_filesize' => '',
        'max_resolution' => '',
        'min_resolution' => '',
        'title_field' => 0,
        'user_register_form' => FALSE,
      ),
      'widget' => array(
        'active' => 1,
        'module' => 'image',
        'settings' => array(
          'preview_image_style' => 'thumbnail',
          'progress_indicator' => 'throbber',
        ),
        'type' => 'image_image',
        'weight' => '37',
      ),
    ),
  );

  // Exported field: 'commerce_product-product-title_field'.
  $fields['commerce_product-product-title_field'] = array(
    'field_config' => array(
      'active' => '1',
      'cardinality' => '1',
      'deleted' => '0',
      'entity_types' => array(),
      'field_name' => 'title_field',
      'foreign keys' => array(
        'format' => array(
          'columns' => array(
            'format' => 'format',
          ),
          'table' => 'filter_format',
        ),
      ),
      'indexes' => array(
        'format' => array(
          0 => 'format',
        ),
      ),
      'locked' => '0',
      'module' => 'text',
      'settings' => array(
        'entity_translation_sync' => FALSE,
        'max_length' => 255,
      ),
      'translatable' => '1',
      'type' => 'text',
    ),
    'field_instance' => array(
      'bundle' => 'product',
      'default_value' => NULL,
      'deleted' => '0',
      'description' => '',
      'display' => array(
        'default' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_default',
          'weight' => '1',
        ),
        'line_item' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => 0,
        ),
        'node_teaser' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '4',
        ),
      ),
      'entity_type' => 'commerce_product',
      'field_name' => 'title_field',
      'label' => 'Title',
      'required' => TRUE,
      'settings' => array(
        'entity_translation_sync' => FALSE,
        'hide_label' => array(
          'entity' => FALSE,
          'page' => FALSE,
        ),
        'text_processing' => 0,
        'user_register_form' => FALSE,
      ),
      'widget' => array(
        'module' => 'text',
        'settings' => array(
          'size' => 60,
        ),
        'type' => 'text_textfield',
        'weight' => '-5',
      ),
    ),
  );

  // Exported field: 'node-product-body'.
  $fields['node-product-body'] = array(
    'field_config' => array(
      'active' => '1',
      'cardinality' => '1',
      'deleted' => '0',
      'entity_types' => array(
        0 => 'node',
      ),
      'field_name' => 'body',
      'foreign keys' => array(
        'format' => array(
          'columns' => array(
            'format' => 'format',
          ),
          'table' => 'filter_format',
        ),
      ),
      'indexes' => array(
        'format' => array(
          0 => 'format',
        ),
      ),
      'locked' => '0',
      'module' => 'text',
      'settings' => array(
        'entity_translation_sync' => FALSE,
      ),
      'translatable' => '0',
      'type' => 'text_with_summary',
    ),
    'field_instance' => array(
      'bundle' => 'product',
      'default_value' => NULL,
      'deleted' => '0',
      'description' => '',
      'display' => array(
        'default' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_default',
          'weight' => '1',
        ),
        'teaser' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(
            'trim_length' => 600,
          ),
          'type' => 'text_summary_or_trimmed',
          'weight' => '2',
        ),
      ),
      'entity_type' => 'node',
      'field_name' => 'body',
      'label' => 'Body',
      'required' => FALSE,
      'settings' => array(
        'display_summary' => TRUE,
        'entity_translation_sync' => FALSE,
        'text_processing' => 1,
        'user_register_form' => FALSE,
      ),
      'widget' => array(
        'module' => 'text',
        'settings' => array(
          'rows' => 20,
          'summary_rows' => 5,
        ),
        'type' => 'text_textarea_with_summary',
        'weight' => '-4',
      ),
    ),
  );

  // Exported field: 'node-product-field_product'.
  $fields['node-product-field_product'] = array(
    'field_config' => array(
      'active' => '1',
      'cardinality' => '1',
      'deleted' => '0',
      'entity_types' => array(),
      'field_name' => 'field_product',
      'foreign keys' => array(
        'product_id' => array(
          'columns' => array(
            'product_id' => 'product_id',
          ),
          'table' => 'commerce_product',
        ),
      ),
      'indexes' => array(
        'product_id' => array(
          0 => 'product_id',
        ),
      ),
      'locked' => '0',
      'module' => 'commerce_product_reference',
      'settings' => array(
        'entity_translation_sync' => FALSE,
      ),
      'translatable' => '0',
      'type' => 'commerce_product_reference',
    ),
    'field_instance' => array(
      'bundle' => 'product',
      'default_value' => NULL,
      'deleted' => '0',
      'description' => '',
      'display' => array(
        'default' => array(
          'label' => 'above',
          'module' => 'commerce_cart',
          'settings' => array(
            'combine' => TRUE,
            'default_quantity' => 1,
            'line_item_type' => 'product',
            'show_quantity' => FALSE,
            'show_single_product_attributes' => FALSE,
          ),
          'type' => 'commerce_cart_add_to_cart_form',
          'weight' => '4',
        ),
        'teaser' => array(
          'label' => 'hidden',
          'module' => 'commerce_cart',
          'settings' => array(
            'combine' => TRUE,
            'default_quantity' => 1,
            'line_item_type' => 'product',
            'show_quantity' => FALSE,
            'show_single_product_attributes' => FALSE,
          ),
          'type' => 'commerce_cart_add_to_cart_form',
          'weight' => '4',
        ),
      ),
      'entity_type' => 'node',
      'field_name' => 'field_product',
      'label' => 'Product',
      'required' => 1,
      'settings' => array(
        'entity_translation_sync' => FALSE,
        'field_injection' => 1,
        'referenceable_types' => array(
          'product' => 'product',
        ),
        'user_register_form' => FALSE,
      ),
      'widget' => array(
        'active' => 1,
        'module' => 'options',
        'settings' => array(),
        'type' => 'options_select',
        'weight' => '-3',
      ),
    ),
  );

  // Exported field: 'node-product-title_field'.
  $fields['node-product-title_field'] = array(
    'field_config' => array(
      'active' => '1',
      'cardinality' => '1',
      'deleted' => '0',
      'entity_types' => array(),
      'field_name' => 'title_field',
      'foreign keys' => array(
        'format' => array(
          'columns' => array(
            'format' => 'format',
          ),
          'table' => 'filter_format',
        ),
      ),
      'indexes' => array(
        'format' => array(
          0 => 'format',
        ),
      ),
      'locked' => '0',
      'module' => 'text',
      'settings' => array(
        'entity_translation_sync' => FALSE,
        'max_length' => 255,
      ),
      'translatable' => '1',
      'type' => 'text',
    ),
    'field_instance' => array(
      'bundle' => 'product',
      'default_value' => NULL,
      'deleted' => '0',
      'description' => '',
      'display' => array(
        'default' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '7',
        ),
        'teaser' => array(
          'label' => 'hidden',
          'module' => 'title',
          'settings' => array(
            'title_class' => '',
            'title_link' => 'content',
            'title_style' => 'h3',
          ),
          'type' => 'title_linked',
          'weight' => '0',
        ),
      ),
      'entity_type' => 'node',
      'field_name' => 'title_field',
      'label' => 'Title',
      'required' => TRUE,
      'settings' => array(
        'entity_translation_sync' => FALSE,
        'hide_label' => array(
          'entity' => FALSE,
          'page' => FALSE,
        ),
        'text_processing' => 0,
        'user_register_form' => FALSE,
      ),
      'widget' => array(
        'module' => 'text',
        'settings' => array(
          'size' => 60,
        ),
        'type' => 'text_textfield',
        'weight' => '-5',
      ),
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Body');
  t('Image');
  t('Price');
  t('Product');
  t('Title');

  return $fields;
}
