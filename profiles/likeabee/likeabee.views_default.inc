<?php

function likeabee_views_default_views() {

  $view = new view();
  $view->name = 'group_content_type';
  $view->description = 'Show all nodes of a type in a group.';
  $view->tag = 'likeabee';
  $view->base_table = 'node';
  $view->human_name = 'per group content by type';
  $view->core = 0;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Defaults */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'none';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'grid';
  $handler->display->display_options['style_options']['columns'] = '3';
  $handler->display->display_options['row_plugin'] = 'node';
  $handler->display->display_options['row_options']['links'] = FALSE;
  /* Relationship: OG membership: OG membership from Node */
  $handler->display->display_options['relationships']['og_membership_rel']['id'] = 'og_membership_rel';
  $handler->display->display_options['relationships']['og_membership_rel']['table'] = 'node';
  $handler->display->display_options['relationships']['og_membership_rel']['field'] = 'og_membership_rel';
  /* Relationship: OG membership: Group Node from OG membership */
  $handler->display->display_options['relationships']['og_membership_related_node_group']['id'] = 'og_membership_related_node_group';
  $handler->display->display_options['relationships']['og_membership_related_node_group']['table'] = 'og_membership';
  $handler->display->display_options['relationships']['og_membership_related_node_group']['field'] = 'og_membership_related_node_group';
  $handler->display->display_options['relationships']['og_membership_related_node_group']['relationship'] = 'og_membership_rel';
  /* Relationship: Content: Author */
  $handler->display->display_options['relationships']['uid']['id'] = 'uid';
  $handler->display->display_options['relationships']['uid']['table'] = 'node';
  $handler->display->display_options['relationships']['uid']['field'] = 'uid';
  /* Relationship: Comment: Comments of the node */
  $handler->display->display_options['relationships']['cid']['id'] = 'cid';
  $handler->display->display_options['relationships']['cid']['table'] = 'node';
  $handler->display->display_options['relationships']['cid']['field'] = 'cid';
  $handler->display->display_options['relationships']['cid']['relationship'] = 'og_membership_related_node_group';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Contextual filter: Content: Type */
  $handler->display->display_options['arguments']['type']['id'] = 'type';
  $handler->display->display_options['arguments']['type']['table'] = 'node';
  $handler->display->display_options['arguments']['type']['field'] = 'type';
  $handler->display->display_options['arguments']['type']['default_action'] = 'not found';
  $handler->display->display_options['arguments']['type']['default_argument_type'] = 'fixed';
  $handler->display->display_options['arguments']['type']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['type']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['type']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['type']['limit'] = '0';
  /* Contextual filter: OG membership: Group ID */
  $handler->display->display_options['arguments']['gid']['id'] = 'gid';
  $handler->display->display_options['arguments']['gid']['table'] = 'og_membership';
  $handler->display->display_options['arguments']['gid']['field'] = 'gid';
  $handler->display->display_options['arguments']['gid']['relationship'] = 'og_membership_rel';
  $handler->display->display_options['arguments']['gid']['default_action'] = 'default';
  $handler->display->display_options['arguments']['gid']['default_argument_type'] = 'og_context';
  $handler->display->display_options['arguments']['gid']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['gid']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['gid']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['gid']['specify_validation'] = TRUE;
  $handler->display->display_options['arguments']['gid']['validate']['type'] = 'og';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = '1';
  /* Filter criterion: OG membership: Group_type */
  $handler->display->display_options['filters']['group_type']['id'] = 'group_type';
  $handler->display->display_options['filters']['group_type']['table'] = 'og_membership';
  $handler->display->display_options['filters']['group_type']['field'] = 'group_type';
  $handler->display->display_options['filters']['group_type']['relationship'] = 'og_membership_rel';
  $handler->display->display_options['filters']['group_type']['value'] = array(
    'node' => 'node',
  );
  /* Filter criterion: Content: Which Block to Show at the Main Group Page? (field_block_main) */
  $handler->display->display_options['filters']['field_block_main_tid']['id'] = 'field_block_main_tid';
  $handler->display->display_options['filters']['field_block_main_tid']['table'] = 'field_data_field_block_main';
  $handler->display->display_options['filters']['field_block_main_tid']['field'] = 'field_block_main_tid';
  $handler->display->display_options['filters']['field_block_main_tid']['relationship'] = 'og_membership_related_node_group';
  $handler->display->display_options['filters']['field_block_main_tid']['value'] = array(
    16 => '16',
  );
  $handler->display->display_options['filters']['field_block_main_tid']['type'] = 'select';
  $handler->display->display_options['filters']['field_block_main_tid']['vocabulary'] = 'block_s_group';

  /* Display: Normal */
  $handler = $view->new_display('page', 'Normal', 'normal');
  $handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
  $handler->display->display_options['path'] = 'content/group';


  $translatables['views_content_type'] = array(
    t('Defaults'),
    t('more'),
    t('Apply'),
    t('Reset'),
    t('Sort by'),
    t('Asc'),
    t('Desc'),
    t('OG membership from node'),
    t('Group node from OG membership'),
    t('author'),
    t('Comments'),
    t('Comment count'),
    t('.'),
    t(','),
    t('All'),
    t('Normal'),
  );

  $views[$view->name] = $view;


  $view = new view();
  $view->name = 'groups_content_preview';
  $view->description = 'Show all content (nodes) of a group.';
  $view->tag = 'likeabee';
  $view->base_table = 'node';
  $view->human_name = 'Groups summary';
  $view->core = 0;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Defaults */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->display->display_options['title'] = 'Group\'s Events';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'none';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '3';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'grid';
  $handler->display->display_options['style_options']['columns'] = '3';
  $handler->display->display_options['row_plugin'] = 'node';
  $handler->display->display_options['row_options']['links'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Relationship: OG membership: OG membership from Node */
  $handler->display->display_options['relationships']['og_membership_rel']['id'] = 'og_membership_rel';
  $handler->display->display_options['relationships']['og_membership_rel']['table'] = 'node';
  $handler->display->display_options['relationships']['og_membership_rel']['field'] = 'og_membership_rel';
  /* Relationship: OG membership: Group Node from OG membership */
  $handler->display->display_options['relationships']['og_membership_related_node_group']['id'] = 'og_membership_related_node_group';
  $handler->display->display_options['relationships']['og_membership_related_node_group']['table'] = 'og_membership';
  $handler->display->display_options['relationships']['og_membership_related_node_group']['field'] = 'og_membership_related_node_group';
  $handler->display->display_options['relationships']['og_membership_related_node_group']['relationship'] = 'og_membership_rel';
  /* Relationship: Flags: join_event counter */
  $handler->display->display_options['relationships']['flag_count_rel']['id'] = 'flag_count_rel';
  $handler->display->display_options['relationships']['flag_count_rel']['table'] = 'node';
  $handler->display->display_options['relationships']['flag_count_rel']['field'] = 'flag_count_rel';
  $handler->display->display_options['relationships']['flag_count_rel']['required'] = 0;
  $handler->display->display_options['relationships']['flag_count_rel']['flag'] = 'join_event';
  /* Relationship: Content: Author */
  $handler->display->display_options['relationships']['uid']['id'] = 'uid';
  $handler->display->display_options['relationships']['uid']['table'] = 'node';
  $handler->display->display_options['relationships']['uid']['field'] = 'uid';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body_1';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['alter']['path'] = 'event/[title]';
  $handler->display->display_options['fields']['body']['alter']['max_length'] = '70';
  $handler->display->display_options['fields']['body']['alter']['strip_tags'] = TRUE;
  $handler->display->display_options['fields']['body']['alter']['trim'] = TRUE;
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['body']['type'] = 'text_summary_or_trimmed';
  $handler->display->display_options['fields']['body']['settings'] = array(
    'trim_length' => '600',
  );
  /* Field: Content: Image */
  $handler->display->display_options['fields']['field_event_image']['id'] = 'field_event_image';
  $handler->display->display_options['fields']['field_event_image']['table'] = 'field_data_field_event_image';
  $handler->display->display_options['fields']['field_event_image']['field'] = 'field_event_image';
  $handler->display->display_options['fields']['field_event_image']['label'] = '';
  $handler->display->display_options['fields']['field_event_image']['alter']['path'] = '[title]';
  $handler->display->display_options['fields']['field_event_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_event_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_event_image']['settings'] = array(
    'image_style' => 'items_of_group',
    'image_link' => 'content',
  );
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Contextual filter: Content: Type */
  $handler->display->display_options['arguments']['type']['id'] = 'type';
  $handler->display->display_options['arguments']['type']['table'] = 'node';
  $handler->display->display_options['arguments']['type']['field'] = 'type';
  $handler->display->display_options['arguments']['type']['default_action'] = 'access denied';
  $handler->display->display_options['arguments']['type']['default_argument_type'] = 'fixed';
  $handler->display->display_options['arguments']['type']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['type']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['type']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['type']['limit'] = '0';
  /* Contextual filter: OG membership: Group ID */
  $handler->display->display_options['arguments']['gid']['id'] = 'gid';
  $handler->display->display_options['arguments']['gid']['table'] = 'og_membership';
  $handler->display->display_options['arguments']['gid']['field'] = 'gid';
  $handler->display->display_options['arguments']['gid']['relationship'] = 'og_membership_rel';
  $handler->display->display_options['arguments']['gid']['default_argument_type'] = 'og_context';
  $handler->display->display_options['arguments']['gid']['specify_validation'] = TRUE;
  $handler->display->display_options['arguments']['gid']['validate']['type'] = 'og';

  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = '1';
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: OG membership: Group_type */
  $handler->display->display_options['filters']['group_type']['id'] = 'group_type';
  $handler->display->display_options['filters']['group_type']['table'] = 'og_membership';
  $handler->display->display_options['filters']['group_type']['field'] = 'group_type';
  $handler->display->display_options['filters']['group_type']['relationship'] = 'og_membership_rel';
  $handler->display->display_options['filters']['group_type']['value'] = array(
    'node' => 'node',
  );
  /* Filter criterion: Content: Which Block to Show at the Main Group Page? (field_block_main) */
  $handler->display->display_options['filters']['field_block_main_tid']['id'] = 'field_block_main_tid';
  $handler->display->display_options['filters']['field_block_main_tid']['table'] = 'field_data_field_block_main';
  $handler->display->display_options['filters']['field_block_main_tid']['field'] = 'field_block_main_tid';
  $handler->display->display_options['filters']['field_block_main_tid']['relationship'] = 'og_membership_related_node_group';
  $handler->display->display_options['filters']['field_block_main_tid']['value'] = array(
    8 => '8',
  );
  $handler->display->display_options['filters']['field_block_main_tid']['type'] = 'select';
  $handler->display->display_options['filters']['field_block_main_tid']['vocabulary'] = 'block_s_group';

  /* Display: All */
  $handler = $view->new_display('block', 'All', 'groups_all');
  $handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
  $handler->display->display_options['block_description'] = 'Group\'s Events - all';

  /* Display: Popular */
  $handler = $view->new_display('block', 'Popular', 'groups_popular');
  $handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Flags: Flag counter */
  $handler->display->display_options['sorts']['count']['id'] = 'count';
  $handler->display->display_options['sorts']['count']['table'] = 'flag_counts';
  $handler->display->display_options['sorts']['count']['field'] = 'count';
  $handler->display->display_options['sorts']['count']['relationship'] = 'flag_count_rel';
  $handler->display->display_options['sorts']['count']['order'] = 'DESC';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: OG membership: Group_type */
  $handler->display->display_options['filters']['group_type']['id'] = 'group_type';
  $handler->display->display_options['filters']['group_type']['table'] = 'og_membership';
  $handler->display->display_options['filters']['group_type']['field'] = 'group_type';
  $handler->display->display_options['filters']['group_type']['relationship'] = 'og_membership_rel';
  $handler->display->display_options['filters']['group_type']['value'] = array(
    'node' => 'node',
  );
  /* Filter criterion: Content: Which Block to Show at the Main Group Page? (field_block_main) */
  $handler->display->display_options['filters']['field_block_main_tid']['id'] = 'field_block_main_tid';
  $handler->display->display_options['filters']['field_block_main_tid']['table'] = 'field_data_field_block_main';
  $handler->display->display_options['filters']['field_block_main_tid']['field'] = 'field_block_main_tid';
  $handler->display->display_options['filters']['field_block_main_tid']['relationship'] = 'og_membership_related_node_group';
  $handler->display->display_options['filters']['field_block_main_tid']['value'] = array(
    8 => '8',
  );
  $handler->display->display_options['filters']['field_block_main_tid']['type'] = 'select';
  $handler->display->display_options['filters']['field_block_main_tid']['vocabulary'] = 'block_s_group';
  $handler->display->display_options['block_description'] = 'Group\'s Events - Popular';

  /* Display: Editor's Choice */
  $handler = $view->new_display('block', 'Editor\'s Choice', 'groups_choice');
  $handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = '1';
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: OG membership: Group_type */
  $handler->display->display_options['filters']['group_type']['id'] = 'group_type';
  $handler->display->display_options['filters']['group_type']['table'] = 'og_membership';
  $handler->display->display_options['filters']['group_type']['field'] = 'group_type';
  $handler->display->display_options['filters']['group_type']['relationship'] = 'og_membership_rel';
  $handler->display->display_options['filters']['group_type']['value'] = array(
    'node' => 'node',
  );
  /* Filter criterion: Content: Which Block to Show at the Main Group Page? (field_block_main) */
  $handler->display->display_options['filters']['field_block_main_tid']['id'] = 'field_block_main_tid';
  $handler->display->display_options['filters']['field_block_main_tid']['table'] = 'field_data_field_block_main';
  $handler->display->display_options['filters']['field_block_main_tid']['field'] = 'field_block_main_tid';
  $handler->display->display_options['filters']['field_block_main_tid']['relationship'] = 'og_membership_related_node_group';
  $handler->display->display_options['filters']['field_block_main_tid']['value'] = array(
    0 => '8',
  );
  $handler->display->display_options['filters']['field_block_main_tid']['vocabulary'] = 'block_s_group';
  /* Filter criterion: Content: Editor&#039;s Choice (field_editor_s_choice) */
  $handler->display->display_options['filters']['field_editor_s_choice_value']['id'] = 'field_editor_s_choice_value';
  $handler->display->display_options['filters']['field_editor_s_choice_value']['table'] = 'field_data_field_editor_s_choice';
  $handler->display->display_options['filters']['field_editor_s_choice_value']['field'] = 'field_editor_s_choice_value';
  $handler->display->display_options['filters']['field_editor_s_choice_value']['value'] = array(
    1 => '1',
  );
  $handler->display->display_options['block_description'] = 'Group\'s Event- Editor\'s Choice';
  $translatables['groups_content_preview'] = array(
    t('Defaults'),
    t('Group\'s Events'),
    t('more'),
    t('Apply'),
    t('Reset'),
    t('Sort by'),
    t('Asc'),
    t('Desc'),
    t('OG membership from node'),
    t('Group node from OG membership'),
    t('counter'),
    t('author'),
    t('All'),
    t('Group\'s Events - all'),
    t('Popular'),
    t('Group\'s Events - Popular'),
    t('Editor\'s Choice'),
    t('Group\'s Event- Editor\'s Choice'),
  );

  $views[$view->name] = $view;

  $view = new view();
  $view->name = 'list_of_groups';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'users';
  $view->human_name = 'List of Groups';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'List of Groups';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['group_by'] = TRUE;
  $handler->display->display_options['access']['type'] = 'none';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '10';
  $handler->display->display_options['style_plugin'] = 'grid';
  $handler->display->display_options['style_options']['columns'] = '3';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Relationship: OG membership: OG membership from User */
  $handler->display->display_options['relationships']['og_membership_rel']['id'] = 'og_membership_rel';
  $handler->display->display_options['relationships']['og_membership_rel']['table'] = 'users';
  $handler->display->display_options['relationships']['og_membership_rel']['field'] = 'og_membership_rel';
  /* Relationship: OG membership: Group Node from OG membership */
  $handler->display->display_options['relationships']['og_membership_related_node_group']['id'] = 'og_membership_related_node_group';
  $handler->display->display_options['relationships']['og_membership_related_node_group']['table'] = 'og_membership';
  $handler->display->display_options['relationships']['og_membership_related_node_group']['field'] = 'og_membership_related_node_group';
  $handler->display->display_options['relationships']['og_membership_related_node_group']['relationship'] = 'og_membership_rel';
  /* Relationship: Content: Author */
  $handler->display->display_options['relationships']['uid']['id'] = 'uid';
  $handler->display->display_options['relationships']['uid']['table'] = 'node';
  $handler->display->display_options['relationships']['uid']['field'] = 'uid';
  $handler->display->display_options['relationships']['uid']['relationship'] = 'og_membership_related_node_group';
  /* Field: Content: Group Logo */
  $handler->display->display_options['fields']['field_group_logo']['id'] = 'field_group_logo';
  $handler->display->display_options['fields']['field_group_logo']['table'] = 'field_data_field_group_logo';
  $handler->display->display_options['fields']['field_group_logo']['field'] = 'field_group_logo';
  $handler->display->display_options['fields']['field_group_logo']['relationship'] = 'og_membership_related_node_group';
  $handler->display->display_options['fields']['field_group_logo']['label'] = '';
  $handler->display->display_options['fields']['field_group_logo']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_group_logo']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_group_logo']['settings'] = array(
    'image_style' => 'group_list',
    'image_link' => 'content',
  );
  $handler->display->display_options['fields']['field_group_logo']['group_column'] = 'entity_id';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['relationship'] = 'og_membership_related_node_group';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  /* Field: Content: Description */
  $handler->display->display_options['fields']['field_description_group']['id'] = 'field_description_group';
  $handler->display->display_options['fields']['field_description_group']['table'] = 'field_data_field_description_group';
  $handler->display->display_options['fields']['field_description_group']['field'] = 'field_description_group';
  $handler->display->display_options['fields']['field_description_group']['relationship'] = 'og_membership_related_node_group';
  $handler->display->display_options['fields']['field_description_group']['label'] = 'About the Group:';
  $handler->display->display_options['fields']['field_description_group']['alter']['max_length'] = '120';
  $handler->display->display_options['fields']['field_description_group']['alter']['strip_tags'] = TRUE;
  $handler->display->display_options['fields']['field_description_group']['alter']['trim'] = TRUE;
  $handler->display->display_options['fields']['field_description_group']['element_label_colon'] = FALSE;
  /* Field: User: User Picture */
  $handler->display->display_options['fields']['field_user_picture']['id'] = 'field_user_picture';
  $handler->display->display_options['fields']['field_user_picture']['table'] = 'field_data_field_user_picture';
  $handler->display->display_options['fields']['field_user_picture']['field'] = 'field_user_picture';
  $handler->display->display_options['fields']['field_user_picture']['label'] = '';
  $handler->display->display_options['fields']['field_user_picture']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_user_picture']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_user_picture']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_user_picture']['settings'] = array(
    'image_style' => 'group_manager',
    'image_link' => '',
  );
  $handler->display->display_options['fields']['field_user_picture']['group_column'] = 'entity_id';
  /* Field: COUNT(DISTINCT User: Name) */
  $handler->display->display_options['fields']['name']['id'] = 'name';
  $handler->display->display_options['fields']['name']['table'] = 'users';
  $handler->display->display_options['fields']['name']['field'] = 'name';
  $handler->display->display_options['fields']['name']['group_type'] = 'count_distinct';
  $handler->display->display_options['fields']['name']['label'] = '';
  $handler->display->display_options['fields']['name']['exclude'] = TRUE;
  $handler->display->display_options['fields']['name']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['name']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['name']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['name']['suffix'] = ' Members';
  /* Field: Content: Group */
  $handler->display->display_options['fields']['group_group']['id'] = 'group_group';
  $handler->display->display_options['fields']['group_group']['table'] = 'field_data_group_group';
  $handler->display->display_options['fields']['group_group']['field'] = 'group_group';
  $handler->display->display_options['fields']['group_group']['relationship'] = 'og_membership_related_node_group';
  $handler->display->display_options['fields']['group_group']['label'] = '';
  $handler->display->display_options['fields']['group_group']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['group_group']['alter']['text'] = '<div class="picture">[field_user_picture]</div>
  <div class="number">[name]</div>
  <div class="group">[group_group]</div>
  ';
  $handler->display->display_options['fields']['group_group']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['group_group']['type'] = 'og_group_subscribe';
  $handler->display->display_options['fields']['group_group']['settings'] = array(
    'field_name' => '0',
  );
  /* Sort criterion: COUNT(DISTINCT User: Name) */
  $handler->display->display_options['sorts']['name']['id'] = 'name';
  $handler->display->display_options['sorts']['name']['table'] = 'users';
  $handler->display->display_options['sorts']['name']['field'] = 'name';
  $handler->display->display_options['sorts']['name']['group_type'] = 'count_distinct';
  $handler->display->display_options['sorts']['name']['order'] = 'DESC';
  /* Filter criterion: User: Active */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'users';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = '1';
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Title */
  $handler->display->display_options['filters']['title']['id'] = 'title';
  $handler->display->display_options['filters']['title']['table'] = 'node';
  $handler->display->display_options['filters']['title']['field'] = 'title';
  $handler->display->display_options['filters']['title']['relationship'] = 'og_membership_related_node_group';
  $handler->display->display_options['filters']['title']['operator'] = 'not empty';
  /* Filter criterion: Content: Language */
  $handler->display->display_options['filters']['language']['id'] = 'language';
  $handler->display->display_options['filters']['language']['table'] = 'node';
  $handler->display->display_options['filters']['language']['field'] = 'language';
  $handler->display->display_options['filters']['language']['relationship'] = 'og_membership_related_node_group';
  $handler->display->display_options['filters']['language']['value'] = array(
    '***CURRENT_LANGUAGE***' => '***CURRENT_LANGUAGE***',
  );

  /* Display: All */
  $handler = $view->new_display('page', 'All', 'all_groups');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'groups';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'Communities and Groups';
$handler->display->display_options['menu']['weight'] = '-5';
$handler->display->display_options['menu']['name'] = 'main-menu';
$handler->display->display_options['menu']['context'] = 0;

$translatables['list_of_groups'] = array(
  t('Master'),
  t('List of Groups'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('OG membership from user'),
  t('Group node from OG membership'),
  t('author'),
  t('About the Group:'),
  t('<div class="picture">[field_user_picture]</div>
<div class="number">[name]</div>
<div class="group">[group_group]</div>
'),
  t('Editor\'s Choice'),
  t('Popular'),
  t('All'),
);

  $views[$view->name] = $view;
  return $views;
}