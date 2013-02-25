<?php
/**
 * @file
 * kaveret_offer.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function kaveret_offer_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => "1");
  }
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function kaveret_offer_views_api() {
  return array("version" => "3.0");
}

/**
 * Implements hook_image_default_styles().
 */
function kaveret_offer_image_default_styles() {
  $styles = array();

  // Exported image style: teaser_thumbnail.
  $styles['teaser_thumbnail'] = array(
    'name' => 'teaser_thumbnail',
    'effects' => array(
      1 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => '300',
          'height' => '200',
        ),
        'weight' => '1',
      ),
    ),
  );

  return $styles;
}

/**
 * Implements hook_default_message_type().
 */
function kaveret_offer_default_message_type() {
  $items = array();
  $items['broadcast'] = entity_import('message_type', '{
    "name" : "broadcast",
    "description" : "Broadcast",
    "argument_keys" : [],
    "argument" : [],
    "category" : "message_type",
    "data" : { "purge" : { "override" : 0, "enabled" : 0, "quota" : "", "days" : "" } },
    "language" : "",
    "arguments" : null,
    "message_text" : { "und" : [
        {
          "value" : "[message:field-node:title]",
          "format" : "plain_text",
          "safe_value" : "\\u003Cp\\u003E[message:field-node:title]\\u003C\\/p\\u003E\\n"
        },
        {
          "value" : "\\u003Ca href=\\u0022[message:field-node:url:absolute]\\u0022\\u003E[message:field-node:title]\\u003C\\/a\\u003E\\r\\n\\r\\n[message:field-node:body]",
          "format" : "full_html",
          "safe_value" : "\\u003Cp\\u003E\\u003Ca href=\\u0022[message:field-node:url:absolute]\\u0022\\u003E[message:field-node:title]\\u003C\\/a\\u003E\\u003C\\/p\\u003E\\n\\u003Cp\\u003E[message:field-node:body]\\u003C\\/p\\u003E\\n"
        }
      ]
    },
    "rdf_mapping" : []
  }');
  return $items;
}

/**
 * Implements hook_node_info().
 */
function kaveret_offer_node_info() {
  $items = array(
    'offer' => array(
      'name' => t('Offer'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'request' => array(
      'name' => t('Request'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
