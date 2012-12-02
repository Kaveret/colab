<?php
$fields = array();
$fields[] = array(
  'entity_types' => array(
    'comment',
  ),
  'translatable' => '0',
  'settings' => array(),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
  ),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'id' => '1',
  'field_name' => 'comment_body',
  'type' => 'text_long',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'text',
      'size' => 'big',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'entity_types' => array(
    'node',
    'transaction',
  ),
  'translatable' => '0',
  'settings' => array(),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_body' => array(
            'value' => 'body_value',
            'summary' => 'body_summary',
            'format' => 'body_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_body' => array(
            'value' => 'body_value',
            'summary' => 'body_summary',
            'format' => 'body_format',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'id' => '2',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'body',
  'type' => 'text_with_summary',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'text',
      'size' => 'big',
      'not null' => FALSE,
    ),
    'summary' => array(
      'type' => 'text',
      'size' => 'big',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'settings' => array(
    'allowed_values' => array(
      array(
        'vocabulary' => 'tags',
        'parent' => 0,
      ),
    ),
    'options_list_callback' => NULL,
  ),
  'entity_types' => array(),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_tags' => array(
            'tid' => 'field_tags_tid',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_tags' => array(
            'tid' => 'field_tags_tid',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'tid' => array(
      'table' => 'taxonomy_term_data',
      'columns' => array(
        'tid' => 'tid',
      ),
    ),
  ),
  'indexes' => array(
    'tid' => array(
      'tid',
    ),
  ),
  'id' => '3',
  'field_name' => 'field_tags',
  'type' => 'taxonomy_term_reference',
  'module' => 'taxonomy',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '-1',
  'deleted' => '0',
  'columns' => array(
    'tid' => array(
      'type' => 'int',
      'unsigned' => TRUE,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'indexes' => array(
    'fid' => array(
      'fid',
    ),
  ),
  'settings' => array(
    'uri_scheme' => 'public',
    'default_image' => FALSE,
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
  ),
  'entity_types' => array(),
  'translatable' => '0',
  'foreign keys' => array(
    'fid' => array(
      'table' => 'file_managed',
      'columns' => array(
        'fid' => 'fid',
      ),
    ),
  ),
  'id' => '4',
  'field_name' => 'field_image',
  'type' => 'image',
  'module' => 'image',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'fid' => array(
      'description' => 'The {file_managed}.fid being referenced in this field.',
      'type' => 'int',
      'not null' => FALSE,
      'unsigned' => TRUE,
    ),
    'alt' => array(
      'description' => "Alternative image text, for the image's 'alt' attribute.",
      'type' => 'varchar',
      'length' => 512,
      'not null' => FALSE,
    ),
    'title' => array(
      'description' => "Image title text, for the image's 'title' attribute.",
      'type' => 'varchar',
      'length' => 1024,
      'not null' => FALSE,
    ),
    'width' => array(
      'description' => 'The width of the image in pixels.',
      'type' => 'int',
      'unsigned' => TRUE,
    ),
    'height' => array(
      'description' => 'The height of the image in pixels.',
      'type' => 'int',
      'unsigned' => TRUE,
    ),
  ),
);
$fields[] = array(
  'entity_types' => array(
    'og_membership',
  ),
  'translatable' => '0',
  'settings' => array(),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
  ),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'id' => '5',
  'field_name' => 'og_membership_request',
  'type' => 'text_long',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'text',
      'size' => 'big',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'settings' => array(
    'allowed_values' => array(
      'Not a group',
      'Group',
    ),
    'allowed_values_function' => '',
  ),
  'entity_types' => array(),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
  ),
  'foreign keys' => array(),
  'indexes' => array(
    'value' => array(
      'value',
    ),
  ),
  'id' => '6',
  'field_name' => 'group_group',
  'type' => 'list_boolean',
  'module' => 'list',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'int',
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'settings' => array(
    'handler' => 'og',
    'handler_submit' => 'Change handler',
    'handler_settings' => array(
      'behaviors' => array(
        'og_behavior' => array(
          'status' => TRUE,
        ),
      ),
      'target_bundles' => array(),
      'membership_type' => 'og_membership_type_default',
    ),
    'target_type' => 'node',
  ),
  'entity_types' => array(),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
  ),
  'foreign keys' => array(
    'node' => array(
      'table' => 'node',
      'columns' => array(
        'target_id' => 'nid',
      ),
    ),
  ),
  'indexes' => array(
    'target_id' => array(
      'target_id',
    ),
  ),
  'id' => '7',
  'field_name' => 'og_user_node',
  'type' => 'entityreference',
  'module' => 'entityreference',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '-1',
  'deleted' => '0',
  'columns' => array(
    'target_id' => array(
      'description' => 'The id of the target entity.',
      'type' => 'int',
      'unsigned' => TRUE,
      'not null' => TRUE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'uri_scheme' => 'public',
    'default_image' => 0,
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_image_groop' => array(
            'fid' => 'field_image_groop_fid',
            'alt' => 'field_image_groop_alt',
            'title' => 'field_image_groop_title',
            'width' => 'field_image_groop_width',
            'height' => 'field_image_groop_height',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_image_groop' => array(
            'fid' => 'field_image_groop_fid',
            'alt' => 'field_image_groop_alt',
            'title' => 'field_image_groop_title',
            'width' => 'field_image_groop_width',
            'height' => 'field_image_groop_height',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'fid' => array(
      'table' => 'file_managed',
      'columns' => array(
        'fid' => 'fid',
      ),
    ),
  ),
  'indexes' => array(
    'fid' => array(
      'fid',
    ),
  ),
  'id' => '8',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_image_group',
  'type' => 'image',
  'module' => 'image',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'fid' => array(
      'description' => 'The {file_managed}.fid being referenced in this field.',
      'type' => 'int',
      'not null' => FALSE,
      'unsigned' => TRUE,
    ),
    'alt' => array(
      'description' => "Alternative image text, for the image's 'alt' attribute.",
      'type' => 'varchar',
      'length' => 512,
      'not null' => FALSE,
    ),
    'title' => array(
      'description' => "Image title text, for the image's 'title' attribute.",
      'type' => 'varchar',
      'length' => 1024,
      'not null' => FALSE,
    ),
    'width' => array(
      'description' => 'The width of the image in pixels.',
      'type' => 'int',
      'unsigned' => TRUE,
    ),
    'height' => array(
      'description' => 'The height of the image in pixels.',
      'type' => 'int',
      'unsigned' => TRUE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'uri_scheme' => 'public',
    'default_image' => 0,
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_group_logo' => array(
            'fid' => 'field_group_logo_fid',
            'alt' => 'field_group_logo_alt',
            'title' => 'field_group_logo_title',
            'width' => 'field_group_logo_width',
            'height' => 'field_group_logo_height',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_group_logo' => array(
            'fid' => 'field_group_logo_fid',
            'alt' => 'field_group_logo_alt',
            'title' => 'field_group_logo_title',
            'width' => 'field_group_logo_width',
            'height' => 'field_group_logo_height',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'fid' => array(
      'table' => 'file_managed',
      'columns' => array(
        'fid' => 'fid',
      ),
    ),
  ),
  'indexes' => array(
    'fid' => array(
      'fid',
    ),
  ),
  'id' => '9',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_group_logo',
  'type' => 'image',
  'module' => 'image',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'fid' => array(
      'description' => 'The {file_managed}.fid being referenced in this field.',
      'type' => 'int',
      'not null' => FALSE,
      'unsigned' => TRUE,
    ),
    'alt' => array(
      'description' => "Alternative image text, for the image's 'alt' attribute.",
      'type' => 'varchar',
      'length' => 512,
      'not null' => FALSE,
    ),
    'title' => array(
      'description' => "Image title text, for the image's 'title' attribute.",
      'type' => 'varchar',
      'length' => 1024,
      'not null' => FALSE,
    ),
    'width' => array(
      'description' => 'The width of the image in pixels.',
      'type' => 'int',
      'unsigned' => TRUE,
    ),
    'height' => array(
      'description' => 'The height of the image in pixels.',
      'type' => 'int',
      'unsigned' => TRUE,
    ),
  ),
);
$fields[] = array(
  'settings' => array(
    'target_type' => 'node',
    'handler' => 'og',
    'handler_settings' => array(
      'target_bundles' => array(
        'group' => 'group',
      ),
      'sort' => array(
        'type' => 'none',
      ),
      'membership_type' => 'og_membership_type_default',
      'behaviors' => array(
        'views-select-list' => array(
          'status' => 1,
        ),
        'og_behavior' => array(
          'status' => TRUE,
        ),
      ),
    ),
    'handler_submit' => 'Change handler',
  ),
  'target_type' => 'node',
  'entity_types' => array(),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_og_group_ref' => array(
            'target_id' => 'og_group_ref_target_id',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_og_group_ref' => array(
            'target_id' => 'og_group_ref_target_id',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'node' => array(
      'table' => 'node',
      'columns' => array(
        'target_id' => 'nid',
      ),
    ),
  ),
  'indexes' => array(
    'target_id' => array(
      'target_id',
    ),
  ),
  'id' => '10',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'og_group_ref',
  'type' => 'entityreference',
  'module' => 'entityreference',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '-1',
  'deleted' => '0',
  'columns' => array(
    'target_id' => array(
      'description' => 'The id of the target entity.',
      'type' => 'int',
      'unsigned' => TRUE,
      'not null' => TRUE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'uri_scheme' => 'public',
    'default_image' => 0,
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_event_image' => array(
            'fid' => 'field_event_image_fid',
            'alt' => 'field_event_image_alt',
            'title' => 'field_event_image_title',
            'width' => 'field_event_image_width',
            'height' => 'field_event_image_height',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_event_image' => array(
            'fid' => 'field_event_image_fid',
            'alt' => 'field_event_image_alt',
            'title' => 'field_event_image_title',
            'width' => 'field_event_image_width',
            'height' => 'field_event_image_height',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'fid' => array(
      'table' => 'file_managed',
      'columns' => array(
        'fid' => 'fid',
      ),
    ),
  ),
  'indexes' => array(
    'fid' => array(
      'fid',
    ),
  ),
  'id' => '12',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_event_image',
  'type' => 'image',
  'module' => 'image',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'fid' => array(
      'description' => 'The {file_managed}.fid being referenced in this field.',
      'type' => 'int',
      'not null' => FALSE,
      'unsigned' => TRUE,
    ),
    'alt' => array(
      'description' => "Alternative image text, for the image's 'alt' attribute.",
      'type' => 'varchar',
      'length' => 512,
      'not null' => FALSE,
    ),
    'title' => array(
      'description' => "Image title text, for the image's 'title' attribute.",
      'type' => 'varchar',
      'length' => 1024,
      'not null' => FALSE,
    ),
    'width' => array(
      'description' => 'The width of the image in pixels.',
      'type' => 'int',
      'unsigned' => TRUE,
    ),
    'height' => array(
      'description' => 'The height of the image in pixels.',
      'type' => 'int',
      'unsigned' => TRUE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'allowed_values' => array(
      array(
        'vocabulary' => 'groups_tags',
        'parent' => '0',
      ),
    ),
    'options_list_callback' => NULL,
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_group_tag' => array(
            'tid' => 'field_group_tag_tid',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_group_tag' => array(
            'tid' => 'field_group_tag_tid',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'tid' => array(
      'table' => 'taxonomy_term_data',
      'columns' => array(
        'tid' => 'tid',
      ),
    ),
  ),
  'indexes' => array(
    'tid' => array(
      'tid',
    ),
  ),
  'id' => '13',
  'field_name' => 'field_group_tag',
  'type' => 'taxonomy_term_reference',
  'module' => 'taxonomy',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '-1',
  'deleted' => '0',
  'columns' => array(
    'tid' => array(
      'type' => 'int',
      'unsigned' => TRUE,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'allowed_values' => array(
      array(
        'vocabulary' => 'block_s_group',
        'parent' => '0',
      ),
    ),
    'options_list_callback' => NULL,
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_block_at_activity' => array(
            'tid' => 'field_block_at_activity_tid',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_block_at_activity' => array(
            'tid' => 'field_block_at_activity_tid',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'tid' => array(
      'table' => 'taxonomy_term_data',
      'columns' => array(
        'tid' => 'tid',
      ),
    ),
  ),
  'indexes' => array(
    'tid' => array(
      'tid',
    ),
  ),
  'id' => '21',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_block_at_activity',
  'type' => 'taxonomy_term_reference',
  'module' => 'taxonomy',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '-1',
  'deleted' => '0',
  'columns' => array(
    'tid' => array(
      'type' => 'int',
      'unsigned' => TRUE,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'allowed_values' => array(
      '',
      "Editor's Choice",
    ),
    'allowed_values_function' => '',
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_editor_s_choice' => array(
            'value' => 'field_editor_s_choice_value',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_editor_s_choice' => array(
            'value' => 'field_editor_s_choice_value',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(),
  'indexes' => array(
    'value' => array(
      'value',
    ),
  ),
  'id' => '23',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_editor_s_choice',
  'type' => 'list_boolean',
  'module' => 'list',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'int',
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'allowed_values' => array(
      array(
        'vocabulary' => 'block_s_group',
        'parent' => '0',
      ),
    ),
    'options_list_callback' => NULL,
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_block_main' => array(
            'tid' => 'field_block_main_tid',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_block_main' => array(
            'tid' => 'field_block_main_tid',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'tid' => array(
      'table' => 'taxonomy_term_data',
      'columns' => array(
        'tid' => 'tid',
      ),
    ),
  ),
  'indexes' => array(
    'tid' => array(
      'tid',
    ),
  ),
  'id' => '25',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_block_main',
  'type' => 'taxonomy_term_reference',
  'module' => 'taxonomy',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '-1',
  'deleted' => '0',
  'columns' => array(
    'tid' => array(
      'type' => 'int',
      'unsigned' => TRUE,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'location_settings' => array(
      'form' => array(
        'fields' => array(
          'name' => array(
            'collect' => '0',
            'default' => '',
            'weight' => '2',
          ),
          'street' => array(
            'collect' => '0',
            'default' => '',
            'weight' => '4',
          ),
          'additional' => array(
            'collect' => '0',
            'default' => '',
            'weight' => '6',
          ),
          'city' => array(
            'collect' => '0',
            'default' => '',
            'weight' => '8',
          ),
          'province' => array(
            'collect' => '0',
            'widget' => 'autocomplete',
            'default' => '',
            'weight' => '10',
          ),
          'postal_code' => array(
            'collect' => '0',
            'default' => '',
            'weight' => '12',
          ),
          'country' => array(
            'collect' => '2',
            'default' => 'us',
            'weight' => '14',
          ),
          'locpick' => array(
            'collect' => '1',
            'weight' => '20',
          ),
        ),
      ),
      'display' => array(
        'hide' => array(
          'country' => 'country',
          'name' => 0,
          'street' => 0,
          'additional' => 0,
          'city' => 0,
          'province' => 0,
          'postal_code' => 0,
          'locpick' => 0,
          'province_name' => 0,
          'country_name' => 0,
          'map_link' => 0,
          'coords' => 0,
        ),
      ),
    ),
    'gmap_macro' => ' [gmap width=140px | height=150px]',
    'gmap_marker' => 'small red',
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_location_of_event' => array(
            'lid' => 'field_location_of_event_lid',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_location_of_event' => array(
            'lid' => 'field_location_of_event_lid',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(),
  'indexes' => array(
    'lid' => array(
      'lid',
    ),
  ),
  'id' => '27',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_location_of_event',
  'type' => 'location',
  'module' => 'location_cck',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'lid' => array(
      'type' => 'int',
      'unsigned' => TRUE,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'granularity' => array(
      'month' => 'month',
      'day' => 'day',
      'year' => 'year',
      'hour' => 0,
      'minute' => 0,
      'second' => 0,
    ),
    'tz_handling' => 'none',
    'timezone_db' => '',
    'cache_enabled' => 0,
    'cache_count' => '4',
    'todate' => '',
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_date_event' => array(
            'value' => 'field_date_event_value',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_date_event' => array(
            'value' => 'field_date_event_value',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(),
  'indexes' => array(),
  'id' => '28',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_date_event',
  'type' => 'datetime',
  'module' => 'date',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'datetime',
      'mysql_type' => 'datetime',
      'pgsql_type' => 'timestamp without time zone',
      'sqlite_type' => 'varchar',
      'sqlsrv_type' => 'smalldatetime',
      'not null' => FALSE,
      'sortable' => TRUE,
      'views' => TRUE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'format' => '24',
    'increment' => '15',
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_start_event' => array(
            'value' => 'field_start_event_value',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_start_event' => array(
            'value' => 'field_start_event_value',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(),
  'indexes' => array(),
  'id' => '29',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_start_event',
  'type' => 'cck_time',
  'module' => 'cck_time',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => 10,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'format' => '24',
    'increment' => '15',
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_end_event' => array(
            'value' => 'field_end_event_value',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_end_event' => array(
            'value' => 'field_end_event_value',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(),
  'indexes' => array(),
  'id' => '30',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_end_event',
  'type' => 'cck_time',
  'module' => 'cck_time',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => 10,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'allowed_values' => array(
      array(
        'vocabulary' => 'event',
        'parent' => '0',
      ),
    ),
    'options_list_callback' => NULL,
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_add_tags_the_more_the_bett' => array(
            'tid' => 'field_add_tags_the_more_the_bett_tid',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_add_tags_the_more_the_bett' => array(
            'tid' => 'field_add_tags_the_more_the_bett_tid',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'tid' => array(
      'table' => 'taxonomy_term_data',
      'columns' => array(
        'tid' => 'tid',
      ),
    ),
  ),
  'indexes' => array(
    'tid' => array(
      'tid',
    ),
  ),
  'id' => '32',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_add_tags_the_more_the_bett',
  'type' => 'taxonomy_term_reference',
  'module' => 'taxonomy',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '-1',
  'deleted' => '0',
  'columns' => array(
    'tid' => array(
      'type' => 'int',
      'unsigned' => TRUE,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'allowed_values' => array(
      '',
      'Send notifications for this update',
    ),
    'allowed_values_function' => '',
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_send_notification' => array(
            'value' => 'field_send_notification_value',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_send_notification' => array(
            'value' => 'field_send_notification_value',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(),
  'indexes' => array(
    'value' => array(
      'value',
    ),
  ),
  'id' => '33',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_send_notification',
  'type' => 'list_boolean',
  'module' => 'list',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'int',
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'max_length' => '255',
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_location_of_event_text' => array(
            'value' => 'field_location_of_event_text_value',
            'format' => 'field_location_of_event_text_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_location_of_event_text' => array(
            'value' => 'field_location_of_event_text_value',
            'format' => 'field_location_of_event_text_format',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'id' => '34',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_location_of_event_text',
  'type' => 'text',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => '255',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'display_field' => 0,
    'display_default' => 1,
    'uri_scheme' => 'public',
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_doccument' => array(
            'fid' => 'field_doccument_fid',
            'display' => 'field_doccument_display',
            'description' => 'field_doccument_description',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_doccument' => array(
            'fid' => 'field_doccument_fid',
            'display' => 'field_doccument_display',
            'description' => 'field_doccument_description',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'fid' => array(
      'table' => 'file_managed',
      'columns' => array(
        'fid' => 'fid',
      ),
    ),
  ),
  'indexes' => array(
    'fid' => array(
      'fid',
    ),
  ),
  'id' => '35',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_doccument',
  'type' => 'file',
  'module' => 'file',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '-1',
  'deleted' => '0',
  'columns' => array(
    'fid' => array(
      'description' => 'The {file_managed}.fid being referenced in this field.',
      'type' => 'int',
      'not null' => FALSE,
      'unsigned' => TRUE,
    ),
    'display' => array(
      'description' => 'Flag to control whether this file should be displayed when viewing content.',
      'type' => 'int',
      'size' => 'tiny',
      'unsigned' => TRUE,
      'not null' => TRUE,
      'default' => 1,
    ),
    'description' => array(
      'description' => 'A description of the file.',
      'type' => 'text',
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_video_group' => array(
            'video_url' => 'field_video_group_video_url',
            'thumbnail_path' => 'field_video_group_thumbnail_path',
            'video_data' => 'field_video_group_video_data',
            'embed_code' => 'field_video_group_embed_code',
            'description' => 'field_video_group_description',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_video_group' => array(
            'video_url' => 'field_video_group_video_url',
            'thumbnail_path' => 'field_video_group_thumbnail_path',
            'video_data' => 'field_video_group_video_data',
            'embed_code' => 'field_video_group_embed_code',
            'description' => 'field_video_group_description',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(),
  'indexes' => array(),
  'id' => '36',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_video_group',
  'type' => 'video_embed_field',
  'module' => 'video_embed_field',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'video_url' => array(
      'type' => 'varchar',
      'length' => 512,
      'default' => '',
    ),
    'thumbnail_path' => array(
      'type' => 'varchar',
      'length' => 512,
      'default' => '',
    ),
    'video_data' => array(
      'type' => 'blob',
      'not null' => FALSE,
      'size' => 'big',
      'serialize' => TRUE,
    ),
    'embed_code' => array(
      'type' => 'varchar',
      'length' => 1024,
      'default' => '',
    ),
    'description' => array(
      'type' => 'text',
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'max_length' => '255',
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_adress_event' => array(
            'value' => 'field_adress_event_value',
            'format' => 'field_adress_event_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_adress_event' => array(
            'value' => 'field_adress_event_value',
            'format' => 'field_adress_event_format',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'id' => '48',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_adress_event',
  'type' => 'text',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => '255',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_join_to_event' => array(
            'vname' => 'field_join_to_event_vname',
            'vargs' => 'field_join_to_event_vargs',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_join_to_event' => array(
            'vname' => 'field_join_to_event_vname',
            'vargs' => 'field_join_to_event_vargs',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(),
  'indexes' => array(),
  'id' => '49',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_join_to_event',
  'type' => 'viewfield',
  'module' => 'viewfield',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'vname' => array(
      'type' => 'varchar',
      'not null' => FALSE,
      'length' => 128,
    ),
    'vargs' => array(
      'type' => 'varchar',
      'not null' => FALSE,
      'length' => 255,
    ),
  ),
);
$fields[] = array(
  'entity_types' => array(),
  'foreign keys' => array(),
  'indexes' => array(
    'choice' => array(
      'choice',
    ),
  ),
  'settings' => array(),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_advpoll_choice' => array(
            'choice_id' => 'advpoll_choice_choice_id',
            'choice' => 'advpoll_choice_choice',
            'write_in' => 'advpoll_choice_write_in',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_advpoll_choice' => array(
            'choice_id' => 'advpoll_choice_choice_id',
            'choice' => 'advpoll_choice_choice',
            'write_in' => 'advpoll_choice_write_in',
          ),
        ),
      ),
    ),
  ),
  'id' => '50',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'advpoll_choice',
  'type' => 'advpoll',
  'module' => 'advpoll_field',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '4',
  'deleted' => '0',
  'columns' => array(
    'choice_id' => array(
      'type' => 'varchar',
      'length' => 10,
      'not null' => TRUE,
    ),
    'choice' => array(
      'type' => 'varchar',
      'length' => 500,
      'not null' => TRUE,
    ),
    'write_in' => array(
      'type' => 'int',
      'unsigned' => TRUE,
      'not null' => TRUE,
      'default' => 0,
    ),
  ),
);
$fields[] = array(
  'entity_types' => array(),
  'foreign keys' => array(),
  'indexes' => array(),
  'settings' => array(),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_advpoll_max_choices' => array(
            'value' => 'advpoll_max_choices_value',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_advpoll_max_choices' => array(
            'value' => 'advpoll_max_choices_value',
          ),
        ),
      ),
    ),
  ),
  'id' => '51',
  'field_permissions' => array(
    'type' => '2',
  ),
  'field_name' => 'advpoll_max_choices',
  'type' => 'number_integer',
  'module' => 'number',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'int',
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'entity_types' => array(),
  'foreign keys' => array(),
  'indexes' => array(
    'value' => array(
      'value',
    ),
  ),
  'settings' => array(
    'allowed_values' => array(
      'approval' => 'Approval voting',
      'pool' => 'Pool votes and choices',
    ),
    'allowed_values_function' => '',
  ),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_advpoll_behavior' => array(
            'value' => 'advpoll_behavior_value',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_advpoll_behavior' => array(
            'value' => 'advpoll_behavior_value',
          ),
        ),
      ),
    ),
  ),
  'id' => '52',
  'field_permissions' => array(
    'type' => '2',
  ),
  'field_name' => 'advpoll_behavior',
  'type' => 'list_text',
  'module' => 'list',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'entity_types' => array(),
  'foreign keys' => array(),
  'indexes' => array(
    'value' => array(
      'value',
    ),
  ),
  'settings' => array(
    'allowed_values' => array(
      'close' => 'Close poll',
      'open' => 'Open poll',
    ),
    'allowed_values_function' => '',
  ),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_advpoll_closed' => array(
            'value' => 'advpoll_closed_value',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_advpoll_closed' => array(
            'value' => 'advpoll_closed_value',
          ),
        ),
      ),
    ),
  ),
  'id' => '53',
  'field_permissions' => array(
    'type' => '2',
  ),
  'field_name' => 'advpoll_closed',
  'type' => 'list_text',
  'module' => 'list',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'entity_types' => array(),
  'foreign keys' => array(),
  'indexes' => array(),
  'settings' => array(),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_advpoll_cookie_duration' => array(
            'value' => 'advpoll_cookie_duration_value',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_advpoll_cookie_duration' => array(
            'value' => 'advpoll_cookie_duration_value',
          ),
        ),
      ),
    ),
  ),
  'id' => '54',
  'field_permissions' => array(
    'type' => '2',
  ),
  'field_name' => 'advpoll_cookie_duration',
  'type' => 'number_integer',
  'module' => 'number',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'int',
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'entity_types' => array(),
  'foreign keys' => array(),
  'indexes' => array(),
  'settings' => array(
    'granularity' => array(
      'day' => 'day',
      'month' => 'month',
      'year' => 'year',
      'hour' => 0,
      'minute' => 0,
      'second' => 0,
    ),
    'tz_handling' => 'none',
    'timezone_db' => '',
    'cache_enabled' => 0,
    'cache_count' => '4',
    'todate' => 'required',
  ),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_advpoll_dates' => array(
            'value' => 'advpoll_dates_value',
            'value2' => 'advpoll_dates_value2',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_advpoll_dates' => array(
            'value' => 'advpoll_dates_value',
            'value2' => 'advpoll_dates_value2',
          ),
        ),
      ),
    ),
  ),
  'id' => '55',
  'field_permissions' => array(
    'type' => '2',
  ),
  'field_name' => 'advpoll_dates',
  'type' => 'datetime',
  'module' => 'date',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'datetime',
      'mysql_type' => 'datetime',
      'pgsql_type' => 'timestamp without time zone',
      'sqlite_type' => 'varchar',
      'sqlsrv_type' => 'smalldatetime',
      'not null' => FALSE,
      'sortable' => TRUE,
      'views' => TRUE,
    ),
    'value2' => array(
      'type' => 'datetime',
      'mysql_type' => 'datetime',
      'pgsql_type' => 'timestamp without time zone',
      'sqlite_type' => 'varchar',
      'sqlsrv_type' => 'smalldatetime',
      'not null' => FALSE,
      'sortable' => TRUE,
      'views' => FALSE,
    ),
  ),
);
$fields[] = array(
  'entity_types' => array(),
  'foreign keys' => array(),
  'indexes' => array(
    'value' => array(
      'value',
    ),
  ),
  'settings' => array(
    'allowed_values' => array(
      'normal' => 'Normal (handled by default Vote API settings)',
      'cookie' => 'By Cookie',
      'unlimited' => 'Unlimited (Allows those with permission to vote on polls to vote as many times as they wish. Write-ins are disabled).',
    ),
    'allowed_values_function' => '',
  ),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_advpoll_mode' => array(
            'value' => 'advpoll_mode_value',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_advpoll_mode' => array(
            'value' => 'advpoll_mode_value',
          ),
        ),
      ),
    ),
  ),
  'id' => '56',
  'field_permissions' => array(
    'type' => '2',
  ),
  'field_name' => 'advpoll_mode',
  'type' => 'list_text',
  'module' => 'list',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'entity_types' => array(),
  'foreign keys' => array(),
  'indexes' => array(
    'value' => array(
      'value',
    ),
  ),
  'settings' => array(
    'allowed_values' => array(
      'writein' => 'Allow users to cast write-in votes',
      'electoral' => 'Restrict voting to electoral list',
      'block' => 'Generate a block for this poll',
    ),
    'allowed_values_function' => '',
  ),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_advpoll_options' => array(
            'value' => 'advpoll_options_value',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_advpoll_options' => array(
            'value' => 'advpoll_options_value',
          ),
        ),
      ),
    ),
  ),
  'id' => '57',
  'field_permissions' => array(
    'type' => '2',
  ),
  'field_name' => 'advpoll_options',
  'type' => 'list_text',
  'module' => 'list',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '4',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'entity_types' => array(),
  'foreign keys' => array(),
  'indexes' => array(
    'value' => array(
      'value',
    ),
  ),
  'settings' => array(
    'allowed_values' => array(
      'aftervote' => 'After voting',
      'afterclose' => 'After poll is closed',
      'never' => 'Never',
    ),
    'allowed_values_function' => '',
  ),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_advpoll_results' => array(
            'value' => 'advpoll_results_value',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_advpoll_results' => array(
            'value' => 'advpoll_results_value',
          ),
        ),
      ),
    ),
  ),
  'id' => '58',
  'field_permissions' => array(
    'type' => '2',
  ),
  'field_name' => 'advpoll_results',
  'type' => 'list_text',
  'module' => 'list',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_description_group' => array(
            'value' => 'field_description_group_value',
            'format' => 'field_description_group_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_description_group' => array(
            'value' => 'field_description_group_value',
            'format' => 'field_description_group_format',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'id' => '60',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_description_group',
  'type' => 'text_long',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'text',
      'size' => 'big',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'allowed_values' => array(
      '',
      "Editor's Choice",
    ),
    'allowed_values_function' => '',
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_editor_s_choice_admin' => array(
            'value' => 'field_editor_s_choice_admin_value',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_editor_s_choice_admin' => array(
            'value' => 'field_editor_s_choice_admin_value',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(),
  'indexes' => array(
    'value' => array(
      'value',
    ),
  ),
  'id' => '61',
  'field_permissions' => array(
    'type' => '2',
  ),
  'field_name' => 'field_editor_s_choice_admin',
  'type' => 'list_boolean',
  'module' => 'list',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'int',
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_text' => array(
            'value' => 'field_text_value',
            'format' => 'field_text_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_text' => array(
            'value' => 'field_text_value',
            'format' => 'field_text_format',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'id' => '62',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_text',
  'type' => 'text_long',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'text',
      'size' => 'big',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'max_length' => '50',
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_user_description' => array(
            'value' => 'field_user_description_value',
            'format' => 'field_user_description_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_user_description' => array(
            'value' => 'field_user_description_value',
            'format' => 'field_user_description_format',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'id' => '65',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_user_description',
  'type' => 'text',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => '50',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'uri_scheme' => 'public',
    'default_image' => '46',
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_user_picture' => array(
            'fid' => 'field_user_picture_fid',
            'alt' => 'field_user_picture_alt',
            'title' => 'field_user_picture_title',
            'width' => 'field_user_picture_width',
            'height' => 'field_user_picture_height',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_user_picture' => array(
            'fid' => 'field_user_picture_fid',
            'alt' => 'field_user_picture_alt',
            'title' => 'field_user_picture_title',
            'width' => 'field_user_picture_width',
            'height' => 'field_user_picture_height',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'fid' => array(
      'table' => 'file_managed',
      'columns' => array(
        'fid' => 'fid',
      ),
    ),
  ),
  'indexes' => array(
    'fid' => array(
      'fid',
    ),
  ),
  'id' => '66',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_user_picture',
  'type' => 'image',
  'module' => 'image',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'fid' => array(
      'description' => 'The {file_managed}.fid being referenced in this field.',
      'type' => 'int',
      'not null' => FALSE,
      'unsigned' => TRUE,
    ),
    'alt' => array(
      'description' => "Alternative image text, for the image's 'alt' attribute.",
      'type' => 'varchar',
      'length' => 512,
      'not null' => FALSE,
    ),
    'title' => array(
      'description' => "Image title text, for the image's 'title' attribute.",
      'type' => 'varchar',
      'length' => 1024,
      'not null' => FALSE,
    ),
    'width' => array(
      'description' => 'The width of the image in pixels.',
      'type' => 'int',
      'unsigned' => TRUE,
    ),
    'height' => array(
      'description' => 'The height of the image in pixels.',
      'type' => 'int',
      'unsigned' => TRUE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'max_length' => '60',
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_title_of_image_event' => array(
            'value' => 'field_title_of_image_event_value',
            'format' => 'field_title_of_image_event_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_title_of_image_event' => array(
            'value' => 'field_title_of_image_event_value',
            'format' => 'field_title_of_image_event_format',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'id' => '71',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_title_of_image_event',
  'type' => 'text',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => '60',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'max_length' => '50',
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_photographer' => array(
            'value' => 'field_photographer_value',
            'format' => 'field_photographer_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_photographer' => array(
            'value' => 'field_photographer_value',
            'format' => 'field_photographer_format',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'id' => '72',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_photographer',
  'type' => 'text',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => '50',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'entity_types' => array(
    'transaction',
    'node',
    'user',
  ),
  'translatable' => '0',
  'settings' => array(),
  'indexes' => array(),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
  ),
  'id' => '74',
  'field_name' => 'worth',
  'type' => 'worth_field',
  'module' => 'mcapi',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'currcode' => array(
      'description' => 'The currency ID',
      'type' => 'varchar',
      'length' => '8',
    ),
    'quantity' => array(
      'description' => 'Price',
      'type' => 'numeric',
      'size' => 'normal',
      'precision' => 8,
      'scale' => 2,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'max_length' => '255',
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_phone_event' => array(
            'value' => 'field_phone_event_value',
            'format' => 'field_phone_event_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_phone_event' => array(
            'value' => 'field_phone_event_value',
            'format' => 'field_phone_event_format',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'id' => '75',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_phone_event',
  'type' => 'text',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => '255',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_email_event' => array(
            'email' => 'field_email_event_email',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_email_event' => array(
            'email' => 'field_email_event_email',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(),
  'indexes' => array(),
  'id' => '76',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_email_event',
  'type' => 'email',
  'module' => 'email',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'email' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'attributes' => array(
      'target' => 'default',
      'class' => '',
      'rel' => '',
    ),
    'url' => 0,
    'title' => 'optional',
    'title_value' => '',
    'title_maxlength' => 128,
    'enable_tokens' => 1,
    'display' => array(
      'url_cutoff' => 80,
    ),
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_web_site_event' => array(
            'url' => 'field_web_site_event_url',
            'title' => 'field_web_site_event_title',
            'attributes' => 'field_web_site_event_attributes',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_web_site_event' => array(
            'url' => 'field_web_site_event_url',
            'title' => 'field_web_site_event_title',
            'attributes' => 'field_web_site_event_attributes',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(),
  'indexes' => array(),
  'id' => '77',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_web_site_event',
  'type' => 'link_field',
  'module' => 'link',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'url' => array(
      'type' => 'varchar',
      'length' => 2048,
      'not null' => FALSE,
      'sortable' => TRUE,
    ),
    'title' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
      'sortable' => TRUE,
    ),
    'attributes' => array(
      'type' => 'text',
      'size' => 'medium',
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'max_length' => '255',
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_facebook_event' => array(
            'value' => 'field_facebook_event_value',
            'format' => 'field_facebook_event_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_facebook_event' => array(
            'value' => 'field_facebook_event_value',
            'format' => 'field_facebook_event_format',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'id' => '78',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_facebook_event',
  'type' => 'text',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'varchar',
      'length' => '255',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'granularity' => array(
      'month' => 'month',
      'day' => 'day',
      'year' => 'year',
      'hour' => 0,
      'minute' => 0,
      'second' => 0,
    ),
    'tz_handling' => 'none',
    'timezone_db' => '',
    'cache_enabled' => 0,
    'cache_count' => '4',
    'todate' => '',
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_the_following_courses_even' => array(
            'value' => 'field_the_following_courses_even_value',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_the_following_courses_even' => array(
            'value' => 'field_the_following_courses_even_value',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(),
  'indexes' => array(),
  'id' => '81',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_the_following_courses_even',
  'type' => 'datetime',
  'module' => 'date',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '-1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'datetime',
      'mysql_type' => 'datetime',
      'pgsql_type' => 'timestamp without time zone',
      'sqlite_type' => 'varchar',
      'sqlsrv_type' => 'smalldatetime',
      'not null' => FALSE,
      'sortable' => TRUE,
      'views' => TRUE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_movies_event' => array(
            'video_url' => 'field_movies_event_video_url',
            'thumbnail_path' => 'field_movies_event_thumbnail_path',
            'video_data' => 'field_movies_event_video_data',
            'embed_code' => 'field_movies_event_embed_code',
            'description' => 'field_movies_event_description',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_movies_event' => array(
            'video_url' => 'field_movies_event_video_url',
            'thumbnail_path' => 'field_movies_event_thumbnail_path',
            'video_data' => 'field_movies_event_video_data',
            'embed_code' => 'field_movies_event_embed_code',
            'description' => 'field_movies_event_description',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(),
  'indexes' => array(),
  'id' => '82',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_movies_event',
  'type' => 'video_embed_field',
  'module' => 'video_embed_field',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '-1',
  'deleted' => '0',
  'columns' => array(
    'video_url' => array(
      'type' => 'varchar',
      'length' => 512,
      'default' => '',
    ),
    'thumbnail_path' => array(
      'type' => 'varchar',
      'length' => 512,
      'default' => '',
    ),
    'video_data' => array(
      'type' => 'blob',
      'not null' => FALSE,
      'size' => 'big',
      'serialize' => TRUE,
    ),
    'embed_code' => array(
      'type' => 'varchar',
      'length' => 1024,
      'default' => '',
    ),
    'description' => array(
      'type' => 'text',
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'display_field' => 0,
    'display_default' => 0,
    'uri_scheme' => 'public',
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_articles_event' => array(
            'fid' => 'field_articles_event_fid',
            'display' => 'field_articles_event_display',
            'description' => 'field_articles_event_description',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_articles_event' => array(
            'fid' => 'field_articles_event_fid',
            'display' => 'field_articles_event_display',
            'description' => 'field_articles_event_description',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'fid' => array(
      'table' => 'file_managed',
      'columns' => array(
        'fid' => 'fid',
      ),
    ),
  ),
  'indexes' => array(
    'fid' => array(
      'fid',
    ),
  ),
  'id' => '83',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_articles_event',
  'type' => 'file',
  'module' => 'file',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '-1',
  'deleted' => '0',
  'columns' => array(
    'fid' => array(
      'description' => 'The {file_managed}.fid being referenced in this field.',
      'type' => 'int',
      'not null' => FALSE,
      'unsigned' => TRUE,
    ),
    'display' => array(
      'description' => 'Flag to control whether this file should be displayed when viewing content.',
      'type' => 'int',
      'size' => 'tiny',
      'unsigned' => TRUE,
      'not null' => TRUE,
      'default' => 1,
    ),
    'description' => array(
      'description' => 'A description of the file.',
      'type' => 'text',
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'attributes' => array(
      'target' => 'default',
      'class' => '',
      'rel' => '',
    ),
    'url' => 0,
    'title' => 'optional',
    'title_value' => '',
    'title_maxlength' => 128,
    'enable_tokens' => 1,
    'display' => array(
      'url_cutoff' => 80,
    ),
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_sites_event' => array(
            'url' => 'field_sites_event_url',
            'title' => 'field_sites_event_title',
            'attributes' => 'field_sites_event_attributes',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_sites_event' => array(
            'url' => 'field_sites_event_url',
            'title' => 'field_sites_event_title',
            'attributes' => 'field_sites_event_attributes',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(),
  'indexes' => array(),
  'id' => '84',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_sites_event',
  'type' => 'link_field',
  'module' => 'link',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '-1',
  'deleted' => '0',
  'columns' => array(
    'url' => array(
      'type' => 'varchar',
      'length' => 2048,
      'not null' => FALSE,
      'sortable' => TRUE,
    ),
    'title' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
      'sortable' => TRUE,
    ),
    'attributes' => array(
      'type' => 'text',
      'size' => 'medium',
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_more_details_event' => array(
            'value' => 'field_more_details_event_value',
            'summary' => 'field_more_details_event_summary',
            'format' => 'field_more_details_event_format',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_more_details_event' => array(
            'value' => 'field_more_details_event_value',
            'summary' => 'field_more_details_event_summary',
            'format' => 'field_more_details_event_format',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(
    'format' => array(
      'table' => 'filter_format',
      'columns' => array(
        'format' => 'format',
      ),
    ),
  ),
  'indexes' => array(
    'format' => array(
      'format',
    ),
  ),
  'id' => '85',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_more_details_event',
  'type' => 'text_with_summary',
  'module' => 'text',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'text',
      'size' => 'big',
      'not null' => FALSE,
    ),
    'summary' => array(
      'type' => 'text',
      'size' => 'big',
      'not null' => FALSE,
    ),
    'format' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'entity_types' => array(),
  'settings' => array(
    'uri_scheme' => 'public',
    'file_directory' => 'propositions',
    'file_extensions' => 'png gif jpg jpeg',
    'max_filesize' => '800k',
    'default_image' => 0,
  ),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
  ),
  'foreign keys' => array(
    'fid' => array(
      'table' => 'file_managed',
      'columns' => array(
        'fid' => 'fid',
      ),
    ),
  ),
  'indexes' => array(
    'fid' => array(
      'fid',
    ),
  ),
  'id' => '88',
  'field_name' => 'image',
  'type' => 'image',
  'module' => 'image',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'fid' => array(
      'description' => 'The {file_managed}.fid being referenced in this field.',
      'type' => 'int',
      'not null' => FALSE,
      'unsigned' => TRUE,
    ),
    'alt' => array(
      'description' => "Alternative image text, for the image's 'alt' attribute.",
      'type' => 'varchar',
      'length' => 512,
      'not null' => FALSE,
    ),
    'title' => array(
      'description' => "Image title text, for the image's 'title' attribute.",
      'type' => 'varchar',
      'length' => 1024,
      'not null' => FALSE,
    ),
    'width' => array(
      'description' => 'The width of the image in pixels.',
      'type' => 'int',
      'unsigned' => TRUE,
    ),
    'height' => array(
      'description' => 'The height of the image in pixels.',
      'type' => 'int',
      'unsigned' => TRUE,
    ),
  ),
);
$fields[] = array(
  'settings' => array(
    'allowed_values' => array(
      'Use default roles and permissions',
      'Override default roles and permissions',
    ),
    'allowed_values_function' => '',
  ),
  'entity_types' => array(),
  'translatable' => '0',
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_og_roles_permissions' => array(
            'value' => 'og_roles_permissions_value',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_og_roles_permissions' => array(
            'value' => 'og_roles_permissions_value',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(),
  'indexes' => array(
    'value' => array(
      'value',
    ),
  ),
  'id' => '89',
  'field_permissions' => array(
    'type' => '2',
  ),
  'field_name' => 'og_roles_permissions',
  'type' => 'list_boolean',
  'module' => 'list',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'value' => array(
      'type' => 'int',
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'attributes' => array(
      'target' => 'default',
      'class' => '',
      'rel' => '',
    ),
    'url' => 0,
    'title' => 'optional',
    'title_value' => '',
    'title_maxlength' => 128,
    'enable_tokens' => 1,
    'display' => array(
      'url_cutoff' => 80,
    ),
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_user_facebook_page' => array(
            'url' => 'field_user_facebook_page_url',
            'title' => 'field_user_facebook_page_title',
            'attributes' => 'field_user_facebook_page_attributes',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_user_facebook_page' => array(
            'url' => 'field_user_facebook_page_url',
            'title' => 'field_user_facebook_page_title',
            'attributes' => 'field_user_facebook_page_attributes',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(),
  'indexes' => array(),
  'id' => '90',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_user_facebook_page',
  'type' => 'link_field',
  'module' => 'link',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'url' => array(
      'type' => 'varchar',
      'length' => 2048,
      'not null' => FALSE,
      'sortable' => TRUE,
    ),
    'title' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
      'sortable' => TRUE,
    ),
    'attributes' => array(
      'type' => 'text',
      'size' => 'medium',
      'not null' => FALSE,
    ),
  ),
);
$fields[] = array(
  'translatable' => '0',
  'entity_types' => array(),
  'settings' => array(
    'attributes' => array(
      'target' => 'default',
      'class' => '',
      'rel' => '',
    ),
    'url' => 0,
    'title' => 'optional',
    'title_value' => '',
    'title_maxlength' => 128,
    'enable_tokens' => 1,
    'display' => array(
      'url_cutoff' => 80,
    ),
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
    'module' => 'field_sql_storage',
    'active' => '1',
    'details' => array(
      'sql' => array(
        'FIELD_LOAD_CURRENT' => array(
          'field_data_field_my_twitter' => array(
            'url' => 'field_my_twitter_url',
            'title' => 'field_my_twitter_title',
            'attributes' => 'field_my_twitter_attributes',
          ),
        ),
        'FIELD_LOAD_REVISION' => array(
          'field_revision_field_my_twitter' => array(
            'url' => 'field_my_twitter_url',
            'title' => 'field_my_twitter_title',
            'attributes' => 'field_my_twitter_attributes',
          ),
        ),
      ),
    ),
  ),
  'foreign keys' => array(),
  'indexes' => array(),
  'id' => '91',
  'field_permissions' => array(
    'type' => '0',
  ),
  'field_name' => 'field_my_twitter',
  'type' => 'link_field',
  'module' => 'link',
  'active' => '1',
  'locked' => '0',
  'cardinality' => '1',
  'deleted' => '0',
  'columns' => array(
    'url' => array(
      'type' => 'varchar',
      'length' => 2048,
      'not null' => FALSE,
      'sortable' => TRUE,
    ),
    'title' => array(
      'type' => 'varchar',
      'length' => 255,
      'not null' => FALSE,
      'sortable' => TRUE,
    ),
    'attributes' => array(
      'type' => 'text',
      'size' => 'medium',
      'not null' => FALSE,
    ),
  ),
);
