<?php

function likeabee_views_default_views() {

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
  $handler = $view->new_display('page', 'All', 'list_of_groups');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'groups';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'Communities and Groups';
$handler->display->display_options['menu']['weight'] = '-1';
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
