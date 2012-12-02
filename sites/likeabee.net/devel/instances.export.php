<?php
$instances = array();
$instances[] = array(
  'label' => 'Comment',
  'settings' => array(
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => 0,
      'settings' => array(),
      'module' => 'text',
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'description' => '',
  'id' => '1',
  'field_id' => '1',
  'field_name' => 'comment_body',
  'entity_type' => 'comment',
  'bundle' => 'comment_node_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Body',
  'widget' => array(
    'type' => 'text_textarea_with_summary',
    'settings' => array(
      'rows' => 20,
      'summary_rows' => 5,
    ),
    'weight' => '2',
    'module' => 'text',
  ),
  'settings' => array(
    'display_summary' => TRUE,
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => '0',
      'settings' => array(),
      'module' => 'text',
    ),
    'teaser' => array(
      'label' => 'hidden',
      'type' => 'text_summary_or_trimmed',
      'settings' => array(
        'trim_length' => 600,
      ),
      'module' => 'text',
      'weight' => 0,
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '2',
  'field_id' => '2',
  'field_name' => 'body',
  'entity_type' => 'node',
  'bundle' => 'page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Comment',
  'settings' => array(
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => 0,
      'settings' => array(),
      'module' => 'text',
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'description' => '',
  'id' => '3',
  'field_id' => '1',
  'field_name' => 'comment_body',
  'entity_type' => 'comment',
  'bundle' => 'comment_node_article',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Body',
  'widget' => array(
    'type' => 'text_textarea_with_summary',
    'settings' => array(
      'rows' => 20,
      'summary_rows' => 5,
    ),
    'weight' => -4,
    'module' => 'text',
  ),
  'settings' => array(
    'display_summary' => TRUE,
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'settings' => array(),
      'module' => 'text',
      'weight' => 0,
    ),
    'teaser' => array(
      'label' => 'hidden',
      'type' => 'text_summary_or_trimmed',
      'settings' => array(
        'trim_length' => 600,
      ),
      'module' => 'text',
      'weight' => 0,
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '4',
  'field_id' => '2',
  'field_name' => 'body',
  'entity_type' => 'node',
  'bundle' => 'article',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Tags',
  'description' => 'הכנס רשימת מילים מופרדות בפסיקים המתארות את התוכן שלך.',
  'widget' => array(
    'type' => 'taxonomy_autocomplete',
    'weight' => -4,
    'settings' => array(
      'size' => 60,
      'autocomplete_path' => 'taxonomy/autocomplete',
    ),
    'module' => 'taxonomy',
  ),
  'display' => array(
    'default' => array(
      'type' => 'taxonomy_term_reference_link',
      'weight' => 10,
      'label' => 'above',
      'settings' => array(),
      'module' => 'taxonomy',
    ),
    'teaser' => array(
      'type' => 'taxonomy_term_reference_link',
      'weight' => 10,
      'label' => 'above',
      'settings' => array(),
      'module' => 'taxonomy',
    ),
  ),
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'required' => FALSE,
  'id' => '5',
  'field_id' => '3',
  'field_name' => 'field_tags',
  'entity_type' => 'node',
  'bundle' => 'article',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Image',
  'description' => 'העלאת תמונה שתצורף למאמר זה',
  'required' => FALSE,
  'settings' => array(
    'file_directory' => 'field/image',
    'file_extensions' => 'png gif jpg jpeg',
    'max_filesize' => '',
    'max_resolution' => '',
    'min_resolution' => '',
    'alt_field' => TRUE,
    'title_field' => '',
    'default_image' => 0,
    'user_register_form' => FALSE,
  ),
  'widget' => array(
    'type' => 'image_image',
    'settings' => array(
      'progress_indicator' => 'throbber',
      'preview_image_style' => 'thumbnail',
    ),
    'weight' => -1,
    'module' => 'image',
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'image',
      'settings' => array(
        'image_style' => 'large',
        'image_link' => '',
      ),
      'weight' => -1,
      'module' => 'image',
    ),
    'teaser' => array(
      'label' => 'hidden',
      'type' => 'image',
      'settings' => array(
        'image_style' => 'medium',
        'image_link' => 'content',
      ),
      'weight' => -1,
      'module' => 'image',
    ),
  ),
  'id' => '6',
  'field_id' => '4',
  'field_name' => 'field_image',
  'entity_type' => 'node',
  'bundle' => 'article',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Request message',
  'description' => 'This is the text a user may send to the group administrators.',
  'required' => FALSE,
  'settings' => array(
    'text_processing' => 0,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'text_default',
      'settings' => array(),
      'module' => 'text',
      'weight' => 0,
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'id' => '7',
  'field_id' => '5',
  'field_name' => 'og_membership_request',
  'entity_type' => 'og_membership',
  'bundle' => 'og_membership_type_default',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Comment',
  'settings' => array(
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => 0,
      'settings' => array(),
      'module' => 'text',
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'description' => '',
  'id' => '8',
  'field_id' => '1',
  'field_name' => 'comment_body',
  'entity_type' => 'comment',
  'bundle' => 'comment_node_group',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Group',
  'description' => 'Determine if this is an OG group.',
  'display_label' => 1,
  'widget' => array(
    'module' => 'options',
    'settings' => array(
      'og_hide' => TRUE,
      'display_label' => 0,
    ),
    'type' => 'options_onoff',
    'weight' => '1',
  ),
  'default_value' => array(
    array(
      'value' => 1,
    ),
  ),
  'view modes' => array(
    'full' => array(
      'label' => 'Full',
      'type' => 'og_group_subscribe',
      'custom settings' => FALSE,
    ),
    'teaser' => array(
      'label' => 'Teaser',
      'type' => 'og_group_subscribe',
      'custom settings' => FALSE,
    ),
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'hidden',
      'weight' => '5',
      'settings' => array(),
    ),
  ),
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'required' => FALSE,
  'id' => '9',
  'field_id' => '6',
  'field_name' => 'group_group',
  'entity_type' => 'node',
  'bundle' => 'group',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Group membership',
  'widget' => array(
    'type' => 'og_complex',
    'module' => 'og',
    'settings' => array(),
    'weight' => '4',
  ),
  'settings' => array(
    'behaviors' => array(
      'og_widget' => array(
        'status' => TRUE,
        'default' => array(
          'widget_type' => 'options_select',
        ),
        'admin' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
      ),
    ),
    'user_register_form' => FALSE,
  ),
  'view modes' => array(
    'full' => array(
      'label' => 'Full',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
    'teaser' => array(
      'label' => 'Teaser',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '4',
      'settings' => array(),
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '10',
  'field_id' => '7',
  'field_name' => 'og_user_node',
  'entity_type' => 'user',
  'bundle' => 'user',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Group Image',
  'widget' => array(
    'weight' => '5',
    'type' => 'image_image',
    'module' => 'image',
    'active' => 1,
    'settings' => array(
      'progress_indicator' => 'throbber',
      'preview_image_style' => 'thumbnail',
    ),
  ),
  'settings' => array(
    'file_directory' => '',
    'file_extensions' => 'png gif jpg jpeg',
    'max_filesize' => '',
    'max_resolution' => '',
    'min_resolution' => '',
    'alt_field' => 0,
    'title_field' => 0,
    'default_image' => 0,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'image',
      'weight' => '0',
      'settings' => array(
        'image_style' => 'group_image',
        'image_link' => '',
      ),
      'module' => 'image',
    ),
  ),
  'required' => 1,
  'description' => '',
  'default_value' => NULL,
  'id' => '12',
  'field_id' => '8',
  'field_name' => 'field_image_group',
  'entity_type' => 'node',
  'bundle' => 'group',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Group Logo',
  'widget' => array(
    'weight' => '4',
    'type' => 'image_image',
    'module' => 'image',
    'active' => 1,
    'settings' => array(
      'progress_indicator' => 'throbber',
      'preview_image_style' => 'thumbnail',
    ),
  ),
  'settings' => array(
    'file_directory' => '',
    'file_extensions' => 'png gif jpg jpeg',
    'max_filesize' => '',
    'max_resolution' => '',
    'min_resolution' => '',
    'alt_field' => 0,
    'title_field' => 0,
    'default_image' => 0,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'hidden',
      'weight' => '6',
      'settings' => array(),
    ),
  ),
  'required' => 1,
  'description' => '',
  'id' => '13',
  'field_id' => '9',
  'field_name' => 'field_group_logo',
  'entity_type' => 'node',
  'bundle' => 'group',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Comment',
  'settings' => array(
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => 0,
      'settings' => array(),
      'module' => 'text',
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'description' => '',
  'id' => '14',
  'field_id' => '1',
  'field_name' => 'comment_body',
  'entity_type' => 'comment',
  'bundle' => 'comment_node_event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Groups Links',
  'widget' => array(
    'weight' => '1',
    'type' => 'og_complex',
    'module' => 'og',
    'active' => 0,
    'settings' => array(),
  ),
  'settings' => array(
    'behaviors' => array(
      'prepopulate' => array(
        'status' => 1,
        'action' => 'none',
        'fallback' => 'none',
        'skip_perm' => '0',
      ),
      'og_widget' => array(
        'status' => TRUE,
        'default' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
        'admin' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
      ),
    ),
    'user_register_form' => FALSE,
  ),
  'view modes' => array(
    'full' => array(
      'label' => 'Full',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
    'teaser' => array(
      'label' => 'Teaser',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'hidden',
      'weight' => '10',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 1,
  'description' => '',
  'default_value' => NULL,
  'default_value_function' => 'entityreference_prepopulate_field_default_value',
  'id' => '15',
  'field_id' => '10',
  'field_name' => 'og_group_ref',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Description',
  'widget' => array(
    'weight' => '7',
    'type' => 'text_textarea_with_summary',
    'module' => 'text',
    'active' => 1,
    'settings' => array(
      'rows' => '20',
      'summary_rows' => 5,
    ),
  ),
  'settings' => array(
    'text_processing' => '1',
    'display_summary' => 1,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'hidden',
      'weight' => '8',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'hidden',
      'type' => 'text_summary_or_trimmed',
      'weight' => '1',
      'settings' => array(
        'trim_length' => '100',
      ),
      'module' => 'text',
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'id' => '16',
  'field_id' => '2',
  'field_name' => 'body',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Image',
  'widget' => array(
    'weight' => '7',
    'type' => 'image_image',
    'module' => 'image',
    'active' => 1,
    'settings' => array(
      'progress_indicator' => 'throbber',
      'preview_image_style' => 'thumbnail',
    ),
  ),
  'settings' => array(
    'file_directory' => '',
    'file_extensions' => 'png gif jpg jpeg',
    'max_filesize' => '',
    'max_resolution' => '',
    'min_resolution' => '',
    'alt_field' => 0,
    'title_field' => 0,
    'default_image' => 0,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'hidden',
      'weight' => '5',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'hidden',
      'type' => 'image',
      'weight' => '0',
      'settings' => array(
        'image_style' => 'items_of_group',
        'image_link' => 'content',
      ),
      'module' => 'image',
    ),
  ),
  'required' => 1,
  'description' => '',
  'id' => '18',
  'field_id' => '12',
  'field_name' => 'field_event_image',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Group Tag',
  'widget' => array(
    'weight' => '6',
    'type' => 'options_buttons',
    'module' => 'options',
    'active' => 1,
    'settings' => array(),
  ),
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '7',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'id' => '19',
  'field_id' => '13',
  'field_name' => 'field_group_tag',
  'entity_type' => 'node',
  'bundle' => 'group',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Comment',
  'settings' => array(
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => 0,
      'settings' => array(),
      'module' => 'text',
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'description' => '',
  'id' => '27',
  'field_id' => '1',
  'field_name' => 'comment_body',
  'entity_type' => 'comment',
  'bundle' => 'comment_node_group_s_avtivity',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Groups audience',
  'widget' => array(
    'type' => 'og_complex',
    'module' => 'og',
    'settings' => array(),
    'weight' => 0,
  ),
  'settings' => array(
    'behaviors' => array(
      'og_widget' => array(
        'status' => TRUE,
        'default' => array(
          'widget_type' => 'options_select',
        ),
        'admin' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
      ),
    ),
    'user_register_form' => FALSE,
  ),
  'view modes' => array(
    'full' => array(
      'label' => 'Full',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
    'teaser' => array(
      'label' => 'Teaser',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '28',
  'field_id' => '10',
  'field_name' => 'og_group_ref',
  'entity_type' => 'node',
  'bundle' => 'group_s_avtivity',
  'deleted' => '0',
);
$instances[] = array(
  'label' => "Which Block to Show at the Group's Activity Page?",
  'widget' => array(
    'weight' => '7',
    'type' => 'options_buttons',
    'module' => 'options',
    'active' => 1,
    'settings' => array(),
  ),
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '8',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'id' => '30',
  'field_id' => '21',
  'field_name' => 'field_block_at_activity',
  'entity_type' => 'node',
  'bundle' => 'group',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Comment',
  'settings' => array(
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => 0,
      'settings' => array(),
      'module' => 'text',
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'description' => '',
  'id' => '31',
  'field_id' => '1',
  'field_name' => 'comment_body',
  'entity_type' => 'comment',
  'bundle' => 'comment_node_group_members',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Groups audience',
  'widget' => array(
    'type' => 'og_complex',
    'module' => 'og',
    'settings' => array(),
    'weight' => 0,
  ),
  'settings' => array(
    'behaviors' => array(
      'og_widget' => array(
        'status' => TRUE,
        'default' => array(
          'widget_type' => 'options_select',
        ),
        'admin' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
      ),
    ),
    'user_register_form' => FALSE,
  ),
  'view modes' => array(
    'full' => array(
      'label' => 'Full',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
    'teaser' => array(
      'label' => 'Teaser',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '32',
  'field_id' => '10',
  'field_name' => 'og_group_ref',
  'entity_type' => 'node',
  'bundle' => 'group_members',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Body',
  'widget' => array(
    'type' => 'text_textarea_with_summary',
    'settings' => array(
      'rows' => 20,
      'summary_rows' => 5,
    ),
    'weight' => 31,
    'module' => 'text',
  ),
  'settings' => array(
    'display_summary' => TRUE,
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => '1',
      'settings' => array(),
      'module' => 'text',
    ),
    'teaser' => array(
      'label' => 'hidden',
      'type' => 'text_summary_or_trimmed',
      'settings' => array(
        'trim_length' => 600,
      ),
      'module' => 'text',
      'weight' => 1,
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '33',
  'field_id' => '2',
  'field_name' => 'body',
  'entity_type' => 'node',
  'bundle' => 'group_members',
  'deleted' => '0',
);
$instances[] = array(
  'label' => "Editor's Choice",
  'widget' => array(
    'weight' => '12',
    'type' => 'options_onoff',
    'module' => 'options',
    'active' => 1,
    'settings' => array(
      'display_label' => 0,
    ),
  ),
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '11',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => array(
    array(
      'value' => 0,
    ),
  ),
  'id' => '38',
  'field_id' => '23',
  'field_name' => 'field_editor_s_choice',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Which Block to Show at the Main Group Page?',
  'widget' => array(
    'weight' => '8',
    'type' => 'options_buttons',
    'module' => 'options',
    'active' => 1,
    'settings' => array(),
  ),
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '9',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'id' => '40',
  'field_id' => '25',
  'field_name' => 'field_block_main',
  'entity_type' => 'node',
  'bundle' => 'group',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Update map',
  'widget' => array(
    'weight' => '5',
    'type' => 'location',
    'module' => 'location_cck',
    'active' => 0,
    'settings' => array(),
  ),
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'location_map',
      'weight' => '2',
      'settings' => array(),
      'module' => 'location_cck',
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'id' => '42',
  'field_id' => '27',
  'field_name' => 'field_location_of_event',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Date',
  'widget' => array(
    'weight' => '8',
    'type' => 'date_select',
    'module' => 'date',
    'active' => 1,
    'settings' => array(
      'input_format' => 'Y-m-d H:i:s',
      'input_format_custom' => '',
      'year_range' => '-3:+3',
      'increment' => 15,
      'label_position' => 'above',
      'text_parts' => array(),
    ),
  ),
  'settings' => array(
    'default_value' => 'now',
    'default_value_code' => '',
    'default_value2' => 'same',
    'default_value_code2' => '',
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'date_default',
      'weight' => '12',
      'settings' => array(
        'format_type' => 'medium',
        'fromto' => 'both',
        'multiple_number' => '',
        'multiple_from' => '',
        'multiple_to' => '',
      ),
      'module' => 'date',
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'id' => '43',
  'field_id' => '28',
  'field_name' => 'field_date_event',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Start',
  'widget' => array(
    'weight' => '9',
    'type' => 'cck_time_select',
    'module' => 'cck_time',
    'active' => 0,
    'settings' => array(),
  ),
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'cck_time_default',
      'weight' => '14',
      'settings' => array(),
      'module' => 'cck_time',
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'id' => '44',
  'field_id' => '29',
  'field_name' => 'field_start_event',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'End',
  'widget' => array(
    'weight' => '10',
    'type' => 'cck_time_select',
    'module' => 'cck_time',
    'active' => 0,
    'settings' => array(),
  ),
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'cck_time_default',
      'weight' => '16',
      'settings' => array(),
      'module' => 'cck_time',
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'id' => '45',
  'field_id' => '30',
  'field_name' => 'field_end_event',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Add Tags (the more the better)',
  'widget' => array(
    'weight' => '10',
    'type' => 'taxonomy_autocomplete',
    'module' => 'taxonomy',
    'active' => 0,
    'settings' => array(
      'size' => 60,
      'autocomplete_path' => 'taxonomy/autocomplete',
      'autocomplete_deluxe_path' => 'autocomplete_deluxe/taxonomy',
    ),
  ),
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '12',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => 'Click "," between tags.',
  'default_value' => NULL,
  'id' => '47',
  'field_id' => '32',
  'field_name' => 'field_add_tags_the_more_the_bett',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Send notification',
  'widget' => array(
    'weight' => '11',
    'type' => 'options_onoff',
    'module' => 'options',
    'active' => 1,
    'settings' => array(
      'display_label' => 0,
    ),
  ),
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '13',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => array(
    array(
      'value' => 0,
    ),
  ),
  'id' => '48',
  'field_id' => '33',
  'field_name' => 'field_send_notification',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Location of Event',
  'widget' => array(
    'weight' => '3',
    'type' => 'text_textfield',
    'module' => 'text',
    'active' => 1,
    'settings' => array(
      'size' => '60',
    ),
  ),
  'settings' => array(
    'text_processing' => '0',
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => '5',
      'settings' => array(),
      'module' => 'text',
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'id' => '49',
  'field_id' => '34',
  'field_name' => 'field_location_of_event_text',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Comment',
  'settings' => array(
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => 0,
      'settings' => array(),
      'module' => 'text',
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'description' => '',
  'id' => '50',
  'field_id' => '1',
  'field_name' => 'comment_body',
  'entity_type' => 'comment',
  'bundle' => 'comment_node_video',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Groups audience',
  'widget' => array(
    'weight' => '0',
    'type' => 'og_complex',
    'module' => 'og',
    'active' => 0,
    'settings' => array(),
  ),
  'settings' => array(
    'behaviors' => array(
      'prepopulate' => array(
        'status' => 1,
        'action' => 'none',
        'fallback' => 'none',
        'skip_perm' => '0',
      ),
      'og_widget' => array(
        'status' => TRUE,
        'default' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
        'admin' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
      ),
    ),
    'user_register_form' => FALSE,
  ),
  'view modes' => array(
    'full' => array(
      'label' => 'Full',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
    'teaser' => array(
      'label' => 'Teaser',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'default_value_function' => 'entityreference_prepopulate_field_default_value',
  'id' => '51',
  'field_id' => '10',
  'field_name' => 'og_group_ref',
  'entity_type' => 'node',
  'bundle' => 'video',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Comment',
  'settings' => array(
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => 0,
      'settings' => array(),
      'module' => 'text',
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'description' => '',
  'id' => '53',
  'field_id' => '1',
  'field_name' => 'comment_body',
  'entity_type' => 'comment',
  'bundle' => 'comment_node_document',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Groups audience',
  'widget' => array(
    'weight' => '0',
    'type' => 'og_complex',
    'module' => 'og',
    'active' => 0,
    'settings' => array(),
  ),
  'settings' => array(
    'behaviors' => array(
      'prepopulate' => array(
        'status' => 1,
        'action' => 'none',
        'fallback' => 'none',
        'skip_perm' => '0',
      ),
      'og_widget' => array(
        'status' => TRUE,
        'default' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
        'admin' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
      ),
    ),
    'user_register_form' => FALSE,
  ),
  'view modes' => array(
    'full' => array(
      'label' => 'Full',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
    'teaser' => array(
      'label' => 'Teaser',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'default_value_function' => 'entityreference_prepopulate_field_default_value',
  'id' => '54',
  'field_id' => '10',
  'field_name' => 'og_group_ref',
  'entity_type' => 'node',
  'bundle' => 'document',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'doccument',
  'widget' => array(
    'weight' => '31',
    'type' => 'file_generic',
    'module' => 'file',
    'active' => 1,
    'settings' => array(
      'progress_indicator' => 'throbber',
    ),
  ),
  'settings' => array(
    'file_directory' => '',
    'file_extensions' => 'doc docx txt xls xlsx pdf ppt pps odt ods odp tar tz gtz zip',
    'max_filesize' => '',
    'description_field' => 1,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'direct_download',
      'weight' => '1',
      'settings' => array(),
      'module' => 'download_file',
    ),
  ),
  'required' => 0,
  'description' => '',
  'id' => '56',
  'field_id' => '35',
  'field_name' => 'field_doccument',
  'entity_type' => 'node',
  'bundle' => 'document',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Video',
  'widget' => array(
    'weight' => '31',
    'type' => 'video_embed_field_video',
    'module' => 'video_embed_field',
    'active' => 0,
    'settings' => array(),
  ),
  'settings' => array(
    'description_field' => 1,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'video_embed_field',
      'weight' => '1',
      'settings' => array(
        'video_style' => 'normal',
        'description' => 1,
      ),
      'module' => 'video_embed_field',
    ),
    'teaser' => array(
      'label' => 'hidden',
      'type' => 'video_embed_field',
      'weight' => '0',
      'settings' => array(
        'description' => 0,
        'video_style' => 'normal',
      ),
      'module' => 'video_embed_field',
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'id' => '57',
  'field_id' => '36',
  'field_name' => 'field_video_group',
  'entity_type' => 'node',
  'bundle' => 'video',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Adress',
  'widget' => array(
    'weight' => '2',
    'type' => 'text_textfield',
    'module' => 'text',
    'active' => 1,
    'settings' => array(
      'size' => '60',
    ),
  ),
  'settings' => array(
    'text_processing' => '0',
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => '6',
      'settings' => array(),
      'module' => 'text',
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'id' => '78',
  'field_id' => '48',
  'field_name' => 'field_adress_event',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => "Editor's Choice",
  'widget' => array(
    'weight' => '33',
    'type' => 'options_onoff',
    'module' => 'options',
    'active' => 1,
    'settings' => array(
      'display_label' => 0,
    ),
  ),
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'hidden',
      'weight' => '2',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => array(
    array(
      'value' => 0,
    ),
  ),
  'id' => '79',
  'field_id' => '23',
  'field_name' => 'field_editor_s_choice',
  'entity_type' => 'node',
  'bundle' => 'video',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'join to event',
  'widget' => array(
    'weight' => '13',
    'type' => 'viewfield_select',
    'module' => 'viewfield',
    'active' => 0,
    'settings' => array(),
  ),
  'settings' => array(
    'force_default' => 1,
    'allowed_views' => array(
      'join_the_event' => 'join_the_event',
      'group_members' => 0,
      'og_members' => 0,
      'og_members_admin' => 0,
      'my_groups' => 0,
      'groups' => 0,
      'og_nodes' => 0,
      'list_of_groups' => 0,
      'group_s_events' => 0,
      'link_to_activity' => 0,
      'tags' => 0,
      'current_group' => 0,
      'information_about_thr_group' => 0,
      'link_to_group_members' => 0,
      'group_members_for_group_members_page' => 0,
      'group_s_events_editor_s_choice' => 0,
      'group_s_events_all' => 0,
      'group_logo' => 0,
      'groups_events_popular' => 0,
      'aaa' => 0,
      'group_s_poll' => 0,
      'group_s_poll_editor_s_choice' => 0,
      'group_poll_popular' => 0,
      'group_s_poll_all' => 0,
      'aaaaa' => 0,
      'aaaaaa' => 0,
      'group_s_video' => 0,
      'group_s_vodeo_all' => 0,
      'group_s_video_editor_s_choice' => 0,
      'group_video_popular' => 0,
      'signed_up_event' => 0,
      'group_logo_event' => 0,
      'dlike_user_view' => 0,
      'og_all_user_group_content' => 0,
      'og_user_groups' => 0,
    ),
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'viewfield_default',
      'weight' => '0',
      'settings' => array(),
      'module' => 'viewfield',
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 1,
  'description' => '',
  'default_value' => array(
    array(
      'vname' => 'join_the_event|block',
      'vargs' => '',
    ),
  ),
  'id' => '80',
  'field_id' => '49',
  'field_name' => 'field_join_to_event',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Description',
  'widget' => array(
    'weight' => '1',
    'type' => 'text_textarea_with_summary',
    'module' => 'text',
    'active' => 1,
    'settings' => array(
      'rows' => '20',
      'summary_rows' => 5,
    ),
  ),
  'settings' => array(
    'text_processing' => '1',
    'display_summary' => 1,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'hidden',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
    'advpoll_list' => array(
      'label' => 'hidden',
      'type' => 'text_summary_or_trimmed',
      'settings' => array(
        'trim_length' => 600,
      ),
      'module' => 'text',
      'weight' => 0,
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'id' => '81',
  'field_id' => '2',
  'field_name' => 'body',
  'entity_type' => 'node',
  'bundle' => 'advpoll',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Comment',
  'settings' => array(
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => 0,
      'settings' => array(),
      'module' => 'text',
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'description' => '',
  'id' => '82',
  'field_id' => '1',
  'field_name' => 'comment_body',
  'entity_type' => 'comment',
  'bundle' => 'comment_node_advpoll',
  'deleted' => '0',
);
$instances[] = array(
  'default_value' => NULL,
  'description' => 'Add at least 2 choices for your poll.  Write-in values indicate user generated content.  If you approve of a choice that has been written in by a user, uncheck it and it will be integrated into the poll for others to vote upon.',
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'hidden',
      'weight' => '3',
      'settings' => array(),
    ),
    'example_node_list' => array(
      'label' => 'above',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => 0,
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '11',
      'settings' => array(),
    ),
  ),
  'label' => 'Poll Choice',
  'required' => 1,
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'widget' => array(
    'weight' => '3',
    'type' => 'advpoll_write_in',
    'module' => 'advpoll_field',
    'active' => 0,
    'settings' => array(),
  ),
  'id' => '83',
  'field_id' => '50',
  'field_name' => 'advpoll_choice',
  'entity_type' => 'node',
  'bundle' => 'advpoll',
  'deleted' => '0',
);
$instances[] = array(
  'default_value' => array(
    array(
      'value' => '1',
    ),
  ),
  'description' => 'Select the maximum number of choices that can be voted upon.',
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'hidden',
      'weight' => '4',
      'settings' => array(),
    ),
    'example_node_list' => array(
      'label' => 'above',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => 0,
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '7',
      'settings' => array(),
    ),
  ),
  'label' => 'Maximum choices',
  'required' => 1,
  'settings' => array(
    'min' => '1',
    'max' => '',
    'prefix' => '',
    'suffix' => '',
    'user_register_form' => FALSE,
  ),
  'widget' => array(
    'weight' => '5',
    'type' => 'number',
    'module' => 'number',
    'active' => 0,
    'settings' => array(),
  ),
  'id' => '84',
  'field_id' => '51',
  'field_name' => 'advpoll_max_choices',
  'entity_type' => 'node',
  'bundle' => 'advpoll',
  'deleted' => '0',
);
$instances[] = array(
  'description' => 'Select the date range that controls the availability of this poll.',
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'hidden',
      'weight' => '7',
      'settings' => array(),
    ),
    'example_node_list' => array(
      'label' => 'above',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => 0,
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '8',
      'settings' => array(),
    ),
  ),
  'label' => 'Poll availability',
  'required' => 0,
  'settings' => array(
    'default_value' => 'now',
    'default_value_code' => '',
    'default_value2' => 'strtotime',
    'default_value_code2' => '+30 days',
    'user_register_form' => FALSE,
  ),
  'widget' => array(
    'weight' => '6',
    'type' => 'date_popup',
    'module' => 'date',
    'active' => 1,
    'settings' => array(
      'input_format' => 'Y-m-d H:i:s',
      'input_format_custom' => '',
      'year_range' => '-0:+1',
      'increment' => '15',
      'label_position' => 'above',
      'text_parts' => array(),
    ),
  ),
  'id' => '85',
  'field_id' => '55',
  'field_name' => 'advpoll_dates',
  'entity_type' => 'node',
  'bundle' => 'advpoll',
  'deleted' => '0',
);
$instances[] = array(
  'default_value' => array(
    array(
      'value' => 'open',
    ),
  ),
  'description' => 'When closed, a poll may no longer be voted upon but will display its results if settings allow.  For blocks, polls that are enabled to show results will show results, otherwise the block will no longer be available.',
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'hidden',
      'weight' => '8',
      'settings' => array(),
    ),
    'example_node_list' => array(
      'label' => 'above',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => 0,
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '9',
      'settings' => array(),
    ),
  ),
  'label' => 'Close poll',
  'required' => 1,
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'widget' => array(
    'weight' => '7',
    'type' => 'options_buttons',
    'module' => 'options',
    'active' => 1,
    'settings' => array(),
  ),
  'id' => '86',
  'field_id' => '53',
  'field_name' => 'advpoll_closed',
  'entity_type' => 'node',
  'bundle' => 'advpoll',
  'deleted' => '0',
);
$instances[] = array(
  'default_value' => NULL,
  'description' => 'Permission settings are necessary for allowing write-in voting, visibility of individual votes and administration of electoral lists.',
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'hidden',
      'weight' => '5',
      'settings' => array(),
    ),
    'example_node_list' => array(
      'label' => 'above',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => 0,
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '10',
      'settings' => array(),
    ),
  ),
  'label' => 'Voting options',
  'required' => 0,
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'widget' => array(
    'weight' => '8',
    'type' => 'options_buttons',
    'module' => 'options',
    'active' => 1,
    'settings' => array(),
  ),
  'id' => '87',
  'field_id' => '57',
  'field_name' => 'advpoll_options',
  'entity_type' => 'node',
  'bundle' => 'advpoll',
  'deleted' => '0',
);
$instances[] = array(
  'default_value' => array(
    array(
      'value' => 'normal',
    ),
  ),
  'description' => 'Warning, changing this setting after votes have already been recorded for this poll will cause existing votes to be flushed.',
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'hidden',
      'weight' => '6',
      'settings' => array(),
    ),
    'example_node_list' => array(
      'label' => 'above',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => 0,
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '6',
      'settings' => array(),
    ),
  ),
  'label' => 'Vote storage mode',
  'required' => 1,
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'widget' => array(
    'weight' => '9',
    'type' => 'options_buttons',
    'module' => 'options',
    'active' => 1,
    'settings' => array(),
  ),
  'id' => '88',
  'field_id' => '56',
  'field_name' => 'advpoll_mode',
  'entity_type' => 'node',
  'bundle' => 'advpoll',
  'deleted' => '0',
);
$instances[] = array(
  'default_value' => array(
    array(
      'value' => '60',
    ),
  ),
  'description' => "If the poll's voting availability is being controlled by a cookie, this value determine how long to wait between votes in minutes.",
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'hidden',
      'weight' => '10',
      'settings' => array(),
    ),
    'example_node_list' => array(
      'label' => 'above',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => 0,
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '5',
      'settings' => array(),
    ),
  ),
  'label' => 'Cookie duration',
  'required' => 0,
  'settings' => array(
    'min' => '1',
    'max' => '',
    'prefix' => '',
    'suffix' => '',
    'user_register_form' => FALSE,
  ),
  'widget' => array(
    'weight' => '10',
    'type' => 'number',
    'module' => 'number',
    'active' => 0,
    'settings' => array(),
  ),
  'id' => '89',
  'field_id' => '54',
  'field_name' => 'advpoll_cookie_duration',
  'entity_type' => 'node',
  'bundle' => 'advpoll',
  'deleted' => '0',
);
$instances[] = array(
  'default_value' => array(
    array(
      'value' => 'aftervote',
    ),
  ),
  'description' => "This value determines when to show the results of a poll.  By default, while voting is on going, users will see the results so long as they are no longer eligible to vote.  To display results without allowing an opportunity to vote, select 'After poll is closed' and close the poll.",
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'hidden',
      'weight' => '11',
      'settings' => array(),
    ),
    'example_node_list' => array(
      'label' => 'above',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => 0,
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '1',
      'settings' => array(),
    ),
  ),
  'label' => 'Display results',
  'required' => 1,
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'widget' => array(
    'weight' => '11',
    'type' => 'options_buttons',
    'module' => 'options',
    'active' => 1,
    'settings' => array(),
  ),
  'id' => '90',
  'field_id' => '58',
  'field_name' => 'advpoll_results',
  'entity_type' => 'node',
  'bundle' => 'advpoll',
  'deleted' => '0',
);
$instances[] = array(
  'default_value' => array(
    array(
      'value' => 'approval',
    ),
  ),
  'description' => 'Approval voting weighs each vote against each individual choice rather than pooling all votes.',
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'hidden',
      'weight' => '9',
      'settings' => array(),
    ),
    'example_node_list' => array(
      'label' => 'above',
      'settings' => array(),
      'type' => 'hidden',
      'weight' => 0,
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '2',
      'settings' => array(),
    ),
  ),
  'label' => 'Voting behavior',
  'required' => 1,
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'widget' => array(
    'weight' => '12',
    'type' => 'options_buttons',
    'module' => 'options',
    'active' => 1,
    'settings' => array(),
  ),
  'id' => '91',
  'field_id' => '52',
  'field_name' => 'advpoll_behavior',
  'entity_type' => 'node',
  'bundle' => 'advpoll',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Groups audience',
  'widget' => array(
    'weight' => '0',
    'type' => 'og_complex',
    'module' => 'og',
    'active' => 0,
    'settings' => array(),
  ),
  'settings' => array(
    'behaviors' => array(
      'prepopulate' => array(
        'status' => 1,
        'action' => 'none',
        'fallback' => 'none',
        'skip_perm' => '0',
      ),
      'og_widget' => array(
        'status' => TRUE,
        'default' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
        'admin' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
      ),
    ),
    'user_register_form' => FALSE,
  ),
  'view modes' => array(
    'full' => array(
      'label' => 'Full',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
    'teaser' => array(
      'label' => 'Teaser',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '1',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '3',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'default_value_function' => 'entityreference_prepopulate_field_default_value',
  'id' => '92',
  'field_id' => '10',
  'field_name' => 'og_group_ref',
  'entity_type' => 'node',
  'bundle' => 'advpoll',
  'deleted' => '0',
);
$instances[] = array(
  'label' => "Editor's Choice",
  'widget' => array(
    'weight' => '5',
    'type' => 'options_onoff',
    'module' => 'options',
    'active' => 1,
    'settings' => array(
      'display_label' => 0,
    ),
  ),
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '2',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '4',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => array(
    array(
      'value' => 0,
    ),
  ),
  'id' => '93',
  'field_id' => '23',
  'field_name' => 'field_editor_s_choice',
  'entity_type' => 'node',
  'bundle' => 'advpoll',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Comment',
  'settings' => array(
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => 0,
      'settings' => array(),
      'module' => 'text',
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'description' => '',
  'id' => '94',
  'field_id' => '1',
  'field_name' => 'comment_body',
  'entity_type' => 'comment',
  'bundle' => 'comment_node_discussion',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Groups audience',
  'widget' => array(
    'weight' => 0,
    'type' => 'og_complex',
    'module' => 'og',
    'active' => 0,
    'settings' => array(),
  ),
  'settings' => array(
    'behaviors' => array(
      'prepopulate' => array(
        'status' => 1,
        'action' => 'none',
        'fallback' => 'none',
        'skip_perm' => '0',
      ),
      'og_widget' => array(
        'status' => TRUE,
        'default' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
        'admin' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
      ),
    ),
    'user_register_form' => FALSE,
  ),
  'view modes' => array(
    'full' => array(
      'label' => 'Full',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
    'teaser' => array(
      'label' => 'Teaser',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '2',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'default_value_function' => 'entityreference_prepopulate_field_default_value',
  'id' => '95',
  'field_id' => '10',
  'field_name' => 'og_group_ref',
  'entity_type' => 'node',
  'bundle' => 'discussion',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Body',
  'widget' => array(
    'type' => 'text_textarea_with_summary',
    'settings' => array(
      'rows' => 20,
      'summary_rows' => 5,
    ),
    'weight' => '31',
    'module' => 'text',
  ),
  'settings' => array(
    'display_summary' => TRUE,
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => '1',
      'settings' => array(),
      'module' => 'text',
    ),
    'teaser' => array(
      'label' => 'hidden',
      'type' => 'text_summary_or_trimmed',
      'settings' => array(
        'trim_length' => 600,
      ),
      'module' => 'text',
      'weight' => 1,
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '96',
  'field_id' => '2',
  'field_name' => 'body',
  'entity_type' => 'node',
  'bundle' => 'discussion',
  'deleted' => '0',
);
$instances[] = array(
  'label' => "Editor's Choice",
  'widget' => array(
    'weight' => '34',
    'type' => 'options_onoff',
    'module' => 'options',
    'active' => 1,
    'settings' => array(
      'display_label' => 0,
    ),
  ),
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '3',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => array(
    array(
      'value' => 0,
    ),
  ),
  'id' => '98',
  'field_id' => '23',
  'field_name' => 'field_editor_s_choice',
  'entity_type' => 'node',
  'bundle' => 'discussion',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Description',
  'widget' => array(
    'weight' => '2',
    'type' => 'text_textarea',
    'module' => 'text',
    'active' => 1,
    'settings' => array(
      'rows' => '5',
    ),
  ),
  'settings' => array(
    'text_processing' => '0',
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '4',
      'settings' => array(),
    ),
  ),
  'required' => 1,
  'description' => '',
  'default_value' => NULL,
  'id' => '100',
  'field_id' => '60',
  'field_name' => 'field_description_group',
  'entity_type' => 'node',
  'bundle' => 'group',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Comment',
  'settings' => array(
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => 0,
      'settings' => array(),
      'module' => 'text',
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'description' => '',
  'id' => '101',
  'field_id' => '1',
  'field_name' => 'comment_body',
  'entity_type' => 'comment',
  'bundle' => 'comment_node_group_s_events_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Groups audience',
  'widget' => array(
    'type' => 'og_complex',
    'module' => 'og',
    'settings' => array(),
    'weight' => 0,
  ),
  'settings' => array(
    'behaviors' => array(
      'og_widget' => array(
        'status' => TRUE,
        'default' => array(
          'widget_type' => 'options_select',
        ),
        'admin' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
      ),
    ),
    'user_register_form' => FALSE,
  ),
  'view modes' => array(
    'full' => array(
      'label' => 'Full',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
    'teaser' => array(
      'label' => 'Teaser',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '102',
  'field_id' => '10',
  'field_name' => 'og_group_ref',
  'entity_type' => 'node',
  'bundle' => 'group_s_events_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Body',
  'widget' => array(
    'type' => 'text_textarea_with_summary',
    'settings' => array(
      'rows' => 20,
      'summary_rows' => 5,
    ),
    'weight' => 31,
    'module' => 'text',
  ),
  'settings' => array(
    'display_summary' => TRUE,
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => '1',
      'settings' => array(),
      'module' => 'text',
    ),
    'teaser' => array(
      'label' => 'hidden',
      'type' => 'text_summary_or_trimmed',
      'settings' => array(
        'trim_length' => 600,
      ),
      'module' => 'text',
      'weight' => 1,
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '103',
  'field_id' => '2',
  'field_name' => 'body',
  'entity_type' => 'node',
  'bundle' => 'group_s_events_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Comment',
  'settings' => array(
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => 0,
      'settings' => array(),
      'module' => 'text',
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'description' => '',
  'id' => '104',
  'field_id' => '1',
  'field_name' => 'comment_body',
  'entity_type' => 'comment',
  'bundle' => 'comment_node_group_documents_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Groups audience',
  'widget' => array(
    'type' => 'og_complex',
    'module' => 'og',
    'settings' => array(),
    'weight' => 0,
  ),
  'settings' => array(
    'behaviors' => array(
      'og_widget' => array(
        'status' => TRUE,
        'default' => array(
          'widget_type' => 'options_select',
        ),
        'admin' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
      ),
    ),
    'user_register_form' => FALSE,
  ),
  'view modes' => array(
    'full' => array(
      'label' => 'Full',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
    'teaser' => array(
      'label' => 'Teaser',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '105',
  'field_id' => '10',
  'field_name' => 'og_group_ref',
  'entity_type' => 'node',
  'bundle' => 'group_documents_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Body',
  'widget' => array(
    'type' => 'text_textarea_with_summary',
    'settings' => array(
      'rows' => 20,
      'summary_rows' => 5,
    ),
    'weight' => 31,
    'module' => 'text',
  ),
  'settings' => array(
    'display_summary' => TRUE,
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => '1',
      'settings' => array(),
      'module' => 'text',
    ),
    'teaser' => array(
      'label' => 'hidden',
      'type' => 'text_summary_or_trimmed',
      'settings' => array(
        'trim_length' => 600,
      ),
      'module' => 'text',
      'weight' => 1,
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '106',
  'field_id' => '2',
  'field_name' => 'body',
  'entity_type' => 'node',
  'bundle' => 'group_documents_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Comment',
  'settings' => array(
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => 0,
      'settings' => array(),
      'module' => 'text',
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'description' => '',
  'id' => '107',
  'field_id' => '1',
  'field_name' => 'comment_body',
  'entity_type' => 'comment',
  'bundle' => 'comment_node_group_s_poll',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Groups audience',
  'widget' => array(
    'type' => 'og_complex',
    'module' => 'og',
    'settings' => array(),
    'weight' => 0,
  ),
  'settings' => array(
    'behaviors' => array(
      'og_widget' => array(
        'status' => TRUE,
        'default' => array(
          'widget_type' => 'options_select',
        ),
        'admin' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
      ),
    ),
    'user_register_form' => FALSE,
  ),
  'view modes' => array(
    'full' => array(
      'label' => 'Full',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
    'teaser' => array(
      'label' => 'Teaser',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '108',
  'field_id' => '10',
  'field_name' => 'og_group_ref',
  'entity_type' => 'node',
  'bundle' => 'group_s_poll',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Body',
  'widget' => array(
    'type' => 'text_textarea_with_summary',
    'settings' => array(
      'rows' => 20,
      'summary_rows' => 5,
    ),
    'weight' => 31,
    'module' => 'text',
  ),
  'settings' => array(
    'display_summary' => TRUE,
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => '1',
      'settings' => array(),
      'module' => 'text',
    ),
    'teaser' => array(
      'label' => 'hidden',
      'type' => 'text_summary_or_trimmed',
      'settings' => array(
        'trim_length' => 600,
      ),
      'module' => 'text',
      'weight' => 1,
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '109',
  'field_id' => '2',
  'field_name' => 'body',
  'entity_type' => 'node',
  'bundle' => 'group_s_poll',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Comment',
  'settings' => array(
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => 0,
      'settings' => array(),
      'module' => 'text',
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'description' => '',
  'id' => '110',
  'field_id' => '1',
  'field_name' => 'comment_body',
  'entity_type' => 'comment',
  'bundle' => 'comment_node_group_s_video_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Groups audience',
  'widget' => array(
    'type' => 'og_complex',
    'module' => 'og',
    'settings' => array(),
    'weight' => 0,
  ),
  'settings' => array(
    'behaviors' => array(
      'og_widget' => array(
        'status' => TRUE,
        'default' => array(
          'widget_type' => 'options_select',
        ),
        'admin' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
      ),
    ),
    'user_register_form' => FALSE,
  ),
  'view modes' => array(
    'full' => array(
      'label' => 'Full',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
    'teaser' => array(
      'label' => 'Teaser',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '111',
  'field_id' => '10',
  'field_name' => 'og_group_ref',
  'entity_type' => 'node',
  'bundle' => 'group_s_video_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Body',
  'widget' => array(
    'type' => 'text_textarea_with_summary',
    'settings' => array(
      'rows' => 20,
      'summary_rows' => 5,
    ),
    'weight' => 31,
    'module' => 'text',
  ),
  'settings' => array(
    'display_summary' => TRUE,
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => '1',
      'settings' => array(),
      'module' => 'text',
    ),
    'teaser' => array(
      'label' => 'hidden',
      'type' => 'text_summary_or_trimmed',
      'settings' => array(
        'trim_length' => 600,
      ),
      'module' => 'text',
      'weight' => 1,
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '112',
  'field_id' => '2',
  'field_name' => 'body',
  'entity_type' => 'node',
  'bundle' => 'group_s_video_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Comment',
  'settings' => array(
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => 0,
      'settings' => array(),
      'module' => 'text',
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'description' => '',
  'id' => '113',
  'field_id' => '1',
  'field_name' => 'comment_body',
  'entity_type' => 'comment',
  'bundle' => 'comment_node_group_s_discussion_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Groups audience',
  'widget' => array(
    'type' => 'og_complex',
    'module' => 'og',
    'settings' => array(),
    'weight' => 0,
  ),
  'settings' => array(
    'behaviors' => array(
      'og_widget' => array(
        'status' => TRUE,
        'default' => array(
          'widget_type' => 'options_select',
        ),
        'admin' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
      ),
    ),
    'user_register_form' => FALSE,
  ),
  'view modes' => array(
    'full' => array(
      'label' => 'Full',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
    'teaser' => array(
      'label' => 'Teaser',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '114',
  'field_id' => '10',
  'field_name' => 'og_group_ref',
  'entity_type' => 'node',
  'bundle' => 'group_s_discussion_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Body',
  'widget' => array(
    'type' => 'text_textarea_with_summary',
    'settings' => array(
      'rows' => 20,
      'summary_rows' => 5,
    ),
    'weight' => 31,
    'module' => 'text',
  ),
  'settings' => array(
    'display_summary' => TRUE,
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => '1',
      'settings' => array(),
      'module' => 'text',
    ),
    'teaser' => array(
      'label' => 'hidden',
      'type' => 'text_summary_or_trimmed',
      'settings' => array(
        'trim_length' => 600,
      ),
      'module' => 'text',
      'weight' => 1,
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '115',
  'field_id' => '2',
  'field_name' => 'body',
  'entity_type' => 'node',
  'bundle' => 'group_s_discussion_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Comment',
  'settings' => array(
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => 0,
      'settings' => array(),
      'module' => 'text',
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'description' => '',
  'id' => '116',
  'field_id' => '1',
  'field_name' => 'comment_body',
  'entity_type' => 'comment',
  'bundle' => 'comment_node_group_wiki_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Groups audience',
  'widget' => array(
    'type' => 'og_complex',
    'module' => 'og',
    'settings' => array(),
    'weight' => 0,
  ),
  'settings' => array(
    'behaviors' => array(
      'og_widget' => array(
        'status' => TRUE,
        'default' => array(
          'widget_type' => 'options_select',
        ),
        'admin' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
      ),
    ),
    'user_register_form' => FALSE,
  ),
  'view modes' => array(
    'full' => array(
      'label' => 'Full',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
    'teaser' => array(
      'label' => 'Teaser',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '117',
  'field_id' => '10',
  'field_name' => 'og_group_ref',
  'entity_type' => 'node',
  'bundle' => 'group_wiki_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Body',
  'widget' => array(
    'type' => 'text_textarea_with_summary',
    'settings' => array(
      'rows' => 20,
      'summary_rows' => 5,
    ),
    'weight' => 31,
    'module' => 'text',
  ),
  'settings' => array(
    'display_summary' => TRUE,
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => '1',
      'settings' => array(),
      'module' => 'text',
    ),
    'teaser' => array(
      'label' => 'hidden',
      'type' => 'text_summary_or_trimmed',
      'settings' => array(
        'trim_length' => 600,
      ),
      'module' => 'text',
      'weight' => 1,
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '118',
  'field_id' => '2',
  'field_name' => 'body',
  'entity_type' => 'node',
  'bundle' => 'group_wiki_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Comment',
  'settings' => array(
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => 0,
      'settings' => array(),
      'module' => 'text',
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'description' => '',
  'id' => '119',
  'field_id' => '1',
  'field_name' => 'comment_body',
  'entity_type' => 'comment',
  'bundle' => 'comment_node_group_s_task_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Groups audience',
  'widget' => array(
    'type' => 'og_complex',
    'module' => 'og',
    'settings' => array(),
    'weight' => 0,
  ),
  'settings' => array(
    'behaviors' => array(
      'og_widget' => array(
        'status' => TRUE,
        'default' => array(
          'widget_type' => 'options_select',
        ),
        'admin' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
      ),
    ),
    'user_register_form' => FALSE,
  ),
  'view modes' => array(
    'full' => array(
      'label' => 'Full',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
    'teaser' => array(
      'label' => 'Teaser',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '120',
  'field_id' => '10',
  'field_name' => 'og_group_ref',
  'entity_type' => 'node',
  'bundle' => 'group_s_task_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Body',
  'widget' => array(
    'type' => 'text_textarea_with_summary',
    'settings' => array(
      'rows' => 20,
      'summary_rows' => 5,
    ),
    'weight' => 31,
    'module' => 'text',
  ),
  'settings' => array(
    'display_summary' => TRUE,
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => '1',
      'settings' => array(),
      'module' => 'text',
    ),
    'teaser' => array(
      'label' => 'hidden',
      'type' => 'text_summary_or_trimmed',
      'settings' => array(
        'trim_length' => 600,
      ),
      'module' => 'text',
      'weight' => 1,
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '121',
  'field_id' => '2',
  'field_name' => 'body',
  'entity_type' => 'node',
  'bundle' => 'group_s_task_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Comment',
  'settings' => array(
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => 0,
      'settings' => array(),
      'module' => 'text',
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'description' => '',
  'id' => '122',
  'field_id' => '1',
  'field_name' => 'comment_body',
  'entity_type' => 'comment',
  'bundle' => 'comment_node_group_s_update_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Groups audience',
  'widget' => array(
    'type' => 'og_complex',
    'module' => 'og',
    'settings' => array(),
    'weight' => 0,
  ),
  'settings' => array(
    'behaviors' => array(
      'og_widget' => array(
        'status' => TRUE,
        'default' => array(
          'widget_type' => 'options_select',
        ),
        'admin' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
      ),
    ),
    'user_register_form' => FALSE,
  ),
  'view modes' => array(
    'full' => array(
      'label' => 'Full',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
    'teaser' => array(
      'label' => 'Teaser',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '123',
  'field_id' => '10',
  'field_name' => 'og_group_ref',
  'entity_type' => 'node',
  'bundle' => 'group_s_update_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Body',
  'widget' => array(
    'type' => 'text_textarea_with_summary',
    'settings' => array(
      'rows' => 20,
      'summary_rows' => 5,
    ),
    'weight' => 31,
    'module' => 'text',
  ),
  'settings' => array(
    'display_summary' => TRUE,
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => '1',
      'settings' => array(),
      'module' => 'text',
    ),
    'teaser' => array(
      'label' => 'hidden',
      'type' => 'text_summary_or_trimmed',
      'settings' => array(
        'trim_length' => 600,
      ),
      'module' => 'text',
      'weight' => 1,
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '124',
  'field_id' => '2',
  'field_name' => 'body',
  'entity_type' => 'node',
  'bundle' => 'group_s_update_page',
  'deleted' => '0',
);
$instances[] = array(
  'label' => "Editor's Choice",
  'widget' => array(
    'weight' => '10',
    'type' => 'options_onoff',
    'module' => 'options',
    'active' => 1,
    'settings' => array(
      'display_label' => 0,
    ),
  ),
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '3',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => array(
    array(
      'value' => 0,
    ),
  ),
  'id' => '125',
  'field_id' => '61',
  'field_name' => 'field_editor_s_choice_admin',
  'entity_type' => 'node',
  'bundle' => 'group',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Comment',
  'settings' => array(
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => 0,
      'settings' => array(),
      'module' => 'text',
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'description' => '',
  'id' => '126',
  'field_id' => '1',
  'field_name' => 'comment_body',
  'entity_type' => 'comment',
  'bundle' => 'comment_node_book',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Groups audience',
  'widget' => array(
    'type' => 'og_complex',
    'module' => 'og',
    'settings' => array(),
    'weight' => '32',
  ),
  'settings' => array(
    'behaviors' => array(
      'og_widget' => array(
        'status' => TRUE,
        'default' => array(
          'widget_type' => 'options_select',
        ),
        'admin' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
      ),
    ),
    'user_register_form' => FALSE,
  ),
  'view modes' => array(
    'full' => array(
      'label' => 'Full',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
    'teaser' => array(
      'label' => 'Teaser',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
  ),
  'display' => array(
    'default' => array(
      'type' => 'og_list_default',
      'label' => 'above',
      'settings' => array(),
      'module' => 'og_ui',
      'weight' => 1,
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '128',
  'field_id' => '10',
  'field_name' => 'og_group_ref',
  'entity_type' => 'node',
  'bundle' => 'book',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'text',
  'widget' => array(
    'weight' => '33',
    'type' => 'text_textarea',
    'module' => 'text',
    'active' => 1,
    'settings' => array(
      'rows' => '5',
    ),
  ),
  'settings' => array(
    'text_processing' => '1',
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'text_default',
      'settings' => array(),
      'module' => 'text',
      'weight' => 2,
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'id' => '129',
  'field_id' => '62',
  'field_name' => 'field_text',
  'entity_type' => 'node',
  'bundle' => 'book',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Comment',
  'settings' => array(
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => 0,
      'settings' => array(),
      'module' => 'text',
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'description' => '',
  'id' => '131',
  'field_id' => '1',
  'field_name' => 'comment_body',
  'entity_type' => 'comment',
  'bundle' => 'comment_node_panel',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'User Description',
  'widget' => array(
    'weight' => '6',
    'type' => 'text_textfield',
    'module' => 'text',
    'active' => 1,
    'settings' => array(
      'size' => '60',
    ),
  ),
  'settings' => array(
    'text_processing' => '0',
    'user_register_form' => 0,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '6',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'id' => '133',
  'field_id' => '65',
  'field_name' => 'field_user_description',
  'entity_type' => 'user',
  'bundle' => 'user',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'User Picture',
  'widget' => array(
    'weight' => '5',
    'type' => 'image_image',
    'module' => 'image',
    'active' => 1,
    'settings' => array(
      'progress_indicator' => 'throbber',
      'preview_image_style' => 'thumbnail',
    ),
  ),
  'settings' => array(
    'file_directory' => '',
    'file_extensions' => 'png gif jpg jpeg',
    'max_filesize' => '',
    'max_resolution' => '',
    'min_resolution' => '',
    'alt_field' => 0,
    'title_field' => 0,
    'default_image' => '47',
    'user_register_form' => 0,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '3',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'id' => '134',
  'field_id' => '66',
  'field_name' => 'field_user_picture',
  'entity_type' => 'user',
  'bundle' => 'user',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Title of Image',
  'widget' => array(
    'weight' => '8',
    'type' => 'text_textfield',
    'module' => 'text',
    'active' => 1,
    'settings' => array(
      'size' => '60',
    ),
  ),
  'settings' => array(
    'text_processing' => '0',
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'hidden',
      'weight' => '6',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'id' => '141',
  'field_id' => '71',
  'field_name' => 'field_title_of_image_event',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Photographer',
  'widget' => array(
    'weight' => '9',
    'type' => 'text_textfield',
    'module' => 'text',
    'active' => 1,
    'settings' => array(
      'size' => '60',
    ),
  ),
  'settings' => array(
    'text_processing' => '0',
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'inline',
      'type' => 'hidden',
      'weight' => '7',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'id' => '142',
  'field_id' => '72',
  'field_name' => 'field_photographer',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => "Editor's Choice",
  'widget' => array(
    'weight' => '33',
    'type' => 'options_onoff',
    'module' => 'options',
    'active' => 1,
    'settings' => array(
      'display_label' => 0,
    ),
  ),
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '2',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => array(
    array(
      'value' => 0,
    ),
  ),
  'id' => '144',
  'field_id' => '23',
  'field_name' => 'field_editor_s_choice',
  'entity_type' => 'node',
  'bundle' => 'document',
  'deleted' => '0',
);
$instances[] = array(
  'description' => 'The value of the exchange',
  'label' => 'Worth',
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'worth_field',
      'weight' => 0,
      'module' => 'mcapi',
      'settings' => array(),
    ),
  ),
  'widget' => array(
    'type' => 'worth_widget',
    'module' => 'mcapi',
    'settings' => array(),
    'weight' => 2,
  ),
  'default_value' => array(
    array(
      'currcode' => 'def_drup',
      'quantity' => 0,
    ),
  ),
  'id' => '145',
  'field_id' => '74',
  'field_name' => 'worth',
  'entity_type' => 'transaction',
  'bundle' => 'transaction',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Phone',
  'widget' => array(
    'weight' => '15',
    'type' => 'text_textfield',
    'module' => 'text',
    'active' => 1,
    'settings' => array(
      'size' => '60',
    ),
  ),
  'settings' => array(
    'text_processing' => '0',
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'inline',
      'type' => 'hidden',
      'weight' => '14',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'id' => '146',
  'field_id' => '75',
  'field_name' => 'field_phone_event',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Email',
  'widget' => array(
    'weight' => '16',
    'type' => 'email_textfield',
    'module' => 'email',
    'active' => 1,
    'settings' => array(
      'size' => '60',
    ),
  ),
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'inline',
      'type' => 'hidden',
      'weight' => '15',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'id' => '147',
  'field_id' => '76',
  'field_name' => 'field_email_event',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Web Site',
  'widget' => array(
    'weight' => '17',
    'type' => 'link_field',
    'module' => 'link',
    'active' => 0,
    'settings' => array(),
  ),
  'settings' => array(
    'validate_url' => 1,
    'url' => 0,
    'title' => 'none',
    'title_value' => '',
    'title_maxlength' => '128',
    'enable_tokens' => 1,
    'display' => array(
      'url_cutoff' => '80',
    ),
    'attributes' => array(
      'target' => '_blank',
      'rel' => '',
      'class' => '',
      'configurable_title' => 0,
      'title' => '',
    ),
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'inline',
      'type' => 'hidden',
      'weight' => '16',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'id' => '148',
  'field_id' => '77',
  'field_name' => 'field_web_site_event',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Facebook',
  'widget' => array(
    'weight' => '18',
    'type' => 'text_textfield',
    'module' => 'text',
    'active' => 1,
    'settings' => array(
      'size' => '60',
    ),
  ),
  'settings' => array(
    'text_processing' => '0',
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'inline',
      'type' => 'hidden',
      'weight' => '17',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'id' => '149',
  'field_id' => '78',
  'field_name' => 'field_facebook_event',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'The following events',
  'widget' => array(
    'weight' => '16',
    'type' => 'date_select',
    'module' => 'date',
    'active' => 1,
    'settings' => array(
      'input_format' => 'Y-m-d H:i:s',
      'input_format_custom' => '',
      'year_range' => '-0:+10',
      'increment' => '15',
      'label_position' => 'above',
      'text_parts' => array(),
    ),
  ),
  'settings' => array(
    'default_value' => 'now',
    'default_value_code' => '',
    'default_value2' => 'same',
    'default_value_code2' => '',
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '4',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'default_value' => NULL,
  'id' => '152',
  'field_id' => '81',
  'field_name' => 'field_the_following_courses_even',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Movies',
  'widget' => array(
    'weight' => '19',
    'type' => 'video_embed_field_video',
    'module' => 'video_embed_field',
    'active' => 0,
    'settings' => array(),
  ),
  'settings' => array(
    'description_field' => 0,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '18',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'id' => '153',
  'field_id' => '82',
  'field_name' => 'field_movies_event',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'articles',
  'widget' => array(
    'weight' => '20',
    'type' => 'file_generic',
    'module' => 'file',
    'active' => 1,
    'settings' => array(
      'progress_indicator' => 'throbber',
    ),
  ),
  'settings' => array(
    'file_directory' => '',
    'file_extensions' => 'doc docx txt pdf',
    'max_filesize' => '',
    'description_field' => 1,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '19',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'id' => '154',
  'field_id' => '83',
  'field_name' => 'field_articles_event',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Sites',
  'widget' => array(
    'weight' => '21',
    'type' => 'link_field',
    'module' => 'link',
    'active' => 0,
    'settings' => array(),
  ),
  'settings' => array(
    'validate_url' => 1,
    'url' => 0,
    'title' => 'optional',
    'title_value' => '',
    'title_maxlength' => '128',
    'enable_tokens' => 1,
    'display' => array(
      'url_cutoff' => '80',
    ),
    'attributes' => array(
      'target' => '_blank',
      'rel' => '',
      'class' => '',
      'configurable_title' => 0,
      'title' => '',
    ),
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '20',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'id' => '155',
  'field_id' => '84',
  'field_name' => 'field_sites_event',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'More Details',
  'widget' => array(
    'weight' => '22',
    'type' => 'text_textarea_with_summary',
    'module' => 'text',
    'active' => 1,
    'settings' => array(
      'rows' => '20',
      'summary_rows' => 5,
    ),
  ),
  'settings' => array(
    'text_processing' => '1',
    'display_summary' => 0,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '21',
      'settings' => array(),
    ),
    'teaser' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '0',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'id' => '156',
  'field_id' => '85',
  'field_name' => 'field_more_details_event',
  'entity_type' => 'node',
  'bundle' => 'event',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Group roles and permissions',
  'widget' => array(
    'module' => 'options',
    'settings' => array(),
    'type' => 'options_select',
    'weight' => 1,
  ),
  'required' => TRUE,
  'default_value' => array(
    array(
      'value' => 0,
    ),
  ),
  'view modes' => array(
    'full' => array(
      'label' => 'Full',
      'type' => 'list_default',
      'custom settings' => FALSE,
    ),
    'teaser' => array(
      'label' => 'Teaser',
      'type' => 'list_default',
      'custom settings' => FALSE,
    ),
  ),
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'list_default',
      'settings' => array(),
      'module' => 'list',
      'weight' => 1,
    ),
  ),
  'description' => '',
  'id' => '163',
  'field_id' => '89',
  'field_name' => 'og_roles_permissions',
  'entity_type' => 'transaction',
  'bundle' => 'transaction',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Group roles and permissions',
  'widget' => array(
    'weight' => 11,
    'type' => 'options_onoff',
    'module' => 'options',
    'active' => 1,
    'settings' => array(
      'display_label' => 0,
    ),
  ),
  'required' => 0,
  'default_value' => array(
    array(
      'value' => 0,
    ),
  ),
  'view modes' => array(
    'full' => array(
      'label' => 'Full',
      'type' => 'list_default',
      'custom settings' => FALSE,
    ),
    'teaser' => array(
      'label' => 'Teaser',
      'type' => 'list_default',
      'custom settings' => FALSE,
    ),
  ),
  'settings' => array(
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '2',
      'settings' => array(),
    ),
  ),
  'description' => '',
  'id' => '164',
  'field_id' => '89',
  'field_name' => 'og_roles_permissions',
  'entity_type' => 'node',
  'bundle' => 'group',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'My Facebook Page',
  'widget' => array(
    'weight' => '7',
    'type' => 'link_field',
    'module' => 'link',
    'active' => 0,
    'settings' => array(),
  ),
  'settings' => array(
    'validate_url' => 1,
    'url' => 0,
    'title' => 'none',
    'title_value' => '',
    'title_maxlength' => '128',
    'enable_tokens' => 1,
    'display' => array(
      'url_cutoff' => '80',
    ),
    'attributes' => array(
      'target' => '_blank',
      'rel' => '',
      'class' => '',
      'configurable_title' => 0,
      'title' => '',
    ),
    'user_register_form' => 0,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '7',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'id' => '165',
  'field_id' => '90',
  'field_name' => 'field_user_facebook_page',
  'entity_type' => 'user',
  'bundle' => 'user',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'My Twitter',
  'widget' => array(
    'weight' => '8',
    'type' => 'link_field',
    'module' => 'link',
    'active' => 0,
    'settings' => array(),
  ),
  'settings' => array(
    'validate_url' => 1,
    'url' => 0,
    'title' => 'none',
    'title_value' => '',
    'title_maxlength' => '128',
    'enable_tokens' => 1,
    'display' => array(
      'url_cutoff' => '80',
    ),
    'attributes' => array(
      'target' => '_blank',
      'rel' => '',
      'class' => '',
      'configurable_title' => 0,
      'title' => '',
    ),
    'user_register_form' => 0,
  ),
  'display' => array(
    'default' => array(
      'label' => 'above',
      'type' => 'hidden',
      'weight' => '8',
      'settings' => array(),
    ),
  ),
  'required' => 0,
  'description' => '',
  'id' => '166',
  'field_id' => '91',
  'field_name' => 'field_my_twitter',
  'entity_type' => 'user',
  'bundle' => 'user',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Comment',
  'settings' => array(
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'required' => TRUE,
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'weight' => 0,
      'settings' => array(),
      'module' => 'text',
    ),
  ),
  'widget' => array(
    'type' => 'text_textarea',
    'settings' => array(
      'rows' => 5,
    ),
    'weight' => 0,
    'module' => 'text',
  ),
  'description' => '',
  'id' => '188',
  'field_id' => '1',
  'field_name' => 'comment_body',
  'entity_type' => 'comment',
  'bundle' => 'comment_node_group_webform',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Body',
  'widget' => array(
    'type' => 'text_textarea_with_summary',
    'settings' => array(
      'rows' => 20,
      'summary_rows' => 5,
    ),
    'weight' => 31,
    'module' => 'text',
  ),
  'settings' => array(
    'display_summary' => TRUE,
    'text_processing' => 1,
    'user_register_form' => FALSE,
  ),
  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'text_default',
      'settings' => array(),
      'module' => 'text',
      'weight' => 0,
    ),
    'teaser' => array(
      'label' => 'hidden',
      'type' => 'text_summary_or_trimmed',
      'settings' => array(
        'trim_length' => 600,
      ),
      'module' => 'text',
      'weight' => 0,
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '189',
  'field_id' => '2',
  'field_name' => 'body',
  'entity_type' => 'node',
  'bundle' => 'group_webform',
  'deleted' => '0',
);
$instances[] = array(
  'label' => 'Groups audience',
  'widget' => array(
    'type' => 'og_complex',
    'module' => 'og',
    'settings' => array(),
    'weight' => 32,
  ),
  'settings' => array(
    'behaviors' => array(
      'og_widget' => array(
        'status' => TRUE,
        'default' => array(
          'widget_type' => 'options_select',
        ),
        'admin' => array(
          'widget_type' => 'entityreference_autocomplete',
        ),
      ),
    ),
    'user_register_form' => FALSE,
  ),
  'view modes' => array(
    'full' => array(
      'label' => 'Full',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
    'teaser' => array(
      'label' => 'Teaser',
      'type' => 'og_list_default',
      'custom settings' => FALSE,
    ),
  ),
  'display' => array(
    'default' => array(
      'type' => 'og_list_default',
      'label' => 'above',
      'settings' => array(),
      'module' => 'og_ui',
      'weight' => 1,
    ),
  ),
  'required' => FALSE,
  'description' => '',
  'id' => '190',
  'field_id' => '10',
  'field_name' => 'og_group_ref',
  'entity_type' => 'node',
  'bundle' => 'group_webform',
  'deleted' => '0',
);
