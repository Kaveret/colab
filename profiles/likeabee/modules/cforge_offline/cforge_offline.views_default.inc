<?php

/*
 * implements hook_views_default_views
 */
function cforge_offline_views_default_views() {
  $view = new view;
  $view->name = 'postal_members';
  $view->description = 'addresses to csv';
  $view->tag = 'cforge';
  $view->base_table = 'users';
  $view->human_name = '';
  $view->core = 0;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Paramètres par défaut */
  $handler = $view->new_display('default', 'Paramètres par défaut', 'default');
  $handler->display->display_options['title'] = 'Member list';
  $handler->display->display_options['access']['type'] = 'role';
  $handler->display->display_options['access']['role'] = array(
    4 => 4,
  );
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['style_plugin'] = 'grid';
  $handler->display->display_options['style_options']['grouping'] = '';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Field: User: Name */
  $handler->display->display_options['fields']['name']['id'] = 'name';
  $handler->display->display_options['fields']['name']['table'] = 'users';
  $handler->display->display_options['fields']['name']['field'] = 'name';
  $handler->display->display_options['fields']['name']['label'] = 'Family name';
  $handler->display->display_options['fields']['name']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['name']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['name']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['name']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['name']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['name']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['name']['alter']['html'] = 0;
  $handler->display->display_options['fields']['name']['link_to_user'] = 1;
  $handler->display->display_options['fields']['name']['overwrite_anonymous'] = 0;
  /* Field: User: Address */
  $handler->display->display_options['fields']['profile_address']['id'] = 'profile_address';
  $handler->display->display_options['fields']['profile_address']['table'] = 'field_data_profile_address';
  $handler->display->display_options['fields']['profile_address']['field'] = 'profile_address';
  $handler->display->display_options['fields']['profile_address']['label'] = '';
  $handler->display->display_options['fields']['profile_address']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['profile_address']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['profile_address']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['profile_address']['alter']['external'] = 0;
  $handler->display->display_options['fields']['profile_address']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['profile_address']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['profile_address']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['profile_address']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['profile_address']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['profile_address']['alter']['more_link'] = 0;
  $handler->display->display_options['fields']['profile_address']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['profile_address']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['profile_address']['alter']['html'] = 0;
  $handler->display->display_options['fields']['profile_address']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['profile_address']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['profile_address']['hide_empty'] = 0;
  $handler->display->display_options['fields']['profile_address']['empty_zero'] = 0;
  $handler->display->display_options['fields']['profile_address']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['profile_address']['field_api_classes'] = 0;
  if (!module_exists('uid_login')) {
    /* Sort criterion: User: Family name (profile_familyname) */
    $handler->display->display_options['sorts']['profile_familyname_value']['id'] = 'profile_familyname_value';
    $handler->display->display_options['sorts']['profile_familyname_value']['table'] = 'field_data_profile_familyname';
    $handler->display->display_options['sorts']['profile_familyname_value']['field'] = 'profile_familyname_value';
  }
  else {
    /* Sort criterion: User: Uid */
    $handler->display->display_options['sorts']['uid']['id'] = 'uid';
    $handler->display->display_options['sorts']['uid']['table'] = 'users';
    $handler->display->display_options['sorts']['uid']['field'] = 'uid';
  }
  /* Filter criterion: User: Postal member (profile_postal) */
  $handler->display->display_options['filters']['profile_postal_value']['id'] = 'profile_postal_value';
  $handler->display->display_options['filters']['profile_postal_value']['table'] = 'field_data_profile_postal';
  $handler->display->display_options['filters']['profile_postal_value']['field'] = 'profile_postal_value';
  $handler->display->display_options['filters']['profile_postal_value']['value'] = array(
    1 => '1',
  );

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page_1');
  $handler->display->display_options['path'] = 'members/postal';
  $handler->display->display_options['menu']['type'] = 'tab';
  $handler->display->display_options['menu']['title'] = 'Postal members';
  $handler->display->display_options['menu']['description'] = 'Liste des adhérents souhaitant un envoi postal ou un relais internet';
  $handler->display->display_options['menu']['weight'] = '10';
  $handler->display->display_options['menu']['name'] = 'manage';

  /* Display: Flux */
  $handler = $view->new_display('feed', 'Flux', 'feed_1');
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['style_plugin'] = 'views_data_export_csv';
  $handler->display->display_options['style_options']['description'] = 'Postal members';
  $handler->display->display_options['path'] = 'members/postal/csv';
  $handler->display->display_options['menu']['name'] = 'manage';
  $handler->display->display_options['displays'] = array(
    'page_1' => 'page_1',
    'default' => 0,
  );
  $translatables['postal_members'] = array(
    t('Family name'),
  );
  $views[$view->name] = $view;
  return $views;
}

/*
 * implements hook_views_default_views_alter
 */
function cforge_offline_views_default_views_alter(&$views) {
  if (isset($views['ow_offers'])) {
    cf_add_printable_display($views['ow_offers'], FALSE);
  }
  if (isset($views['ow_wants'])) {
    cf_add_printable_display($views['ow_wants'], FALSE);
  }
}

//printable display inherits from the default.
function cf_add_printable_display(&$view, $want) {
  /* Display: print-table */
  $handler = $view->new_display('print-table', 'print-table', 'print-table_1');
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['grouping'] = 'name_1';
  $handler->display->display_options['style_options']['group_rendered'] = 1;
  $handler->display->display_options['style_options']['columns'] = array(
    'name_1' => 'name_1',
    'title' => 'title',
    'name' => 'name',
    'offers_wants_types' => 'offers_wants_types',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'name_1' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'title' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'name' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'offers_wants_types' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  $handler->display->display_options['style_options']['override'] = 1;
  $handler->display->display_options['style_options']['sticky'] = 0;
  $handler->display->display_options['style_options']['empty_table'] = 0;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Content: Author */
  $handler->display->display_options['relationships']['uid']['id'] = 'uid';
  $handler->display->display_options['relationships']['uid']['table'] = 'node';
  $handler->display->display_options['relationships']['uid']['field'] = 'uid';
  $handler->display->display_options['relationships']['uid']['required'] = 0;
  /* Relationship: Content: Proposition categories (offers_wants_categories) */
  $handler->display->display_options['relationships']['offers_wants_categories_tid']['id'] = 'offers_wants_categories_tid';
  $handler->display->display_options['relationships']['offers_wants_categories_tid']['table'] = 'field_data_offers_wants_categories';
  $handler->display->display_options['relationships']['offers_wants_categories_tid']['field'] = 'offers_wants_categories_tid';
  $handler->display->display_options['relationships']['offers_wants_categories_tid']['required'] = 1;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Taxonomy term: Name */
  $handler->display->display_options['fields']['name_1']['id'] = 'name_1';
  $handler->display->display_options['fields']['name_1']['table'] = 'taxonomy_term_data';
  $handler->display->display_options['fields']['name_1']['field'] = 'name';
  $handler->display->display_options['fields']['name_1']['relationship'] = 'offers_wants_categories_tid';
  $handler->display->display_options['fields']['name_1']['label'] = '';
  $handler->display->display_options['fields']['name_1']['exclude'] = TRUE;
  $handler->display->display_options['fields']['name_1']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['name_1']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['name_1']['hide_empty'] = 0;
  $handler->display->display_options['fields']['name_1']['empty_zero'] = 0;
  $handler->display->display_options['fields']['name_1']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['name_1']['link_to_taxonomy'] = 0;
  $handler->display->display_options['fields']['name_1']['convert_spaces'] = 0;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = 'Description';
  $handler->display->display_options['fields']['title']['hide_empty'] = 0;
  $handler->display->display_options['fields']['title']['empty_zero'] = 0;
  $handler->display->display_options['fields']['title']['link_to_node'] = 1;
  /* Field: User: Name */
  $handler->display->display_options['fields']['name']['id'] = 'name';
  $handler->display->display_options['fields']['name']['table'] = 'users';
  $handler->display->display_options['fields']['name']['field'] = 'name';
  $handler->display->display_options['fields']['name']['relationship'] = 'uid';
  $handler->display->display_options['fields']['name']['label'] = 'Member';
  $handler->display->display_options['fields']['name']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['name']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['name']['hide_empty'] = 0;
  $handler->display->display_options['fields']['name']['empty_zero'] = 0;
  $handler->display->display_options['fields']['name']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['name']['link_to_user'] = 1;
  $handler->display->display_options['fields']['name']['overwrite_anonymous'] = 0;
  $handler->display->display_options['fields']['name']['format_username'] = 1;
  /* Field: Content: Proposition types */
  $handler->display->display_options['fields']['offers_wants_types']['id'] = 'offers_wants_types';
  $handler->display->display_options['fields']['offers_wants_types']['table'] = 'field_data_offers_wants_types';
  $handler->display->display_options['fields']['offers_wants_types']['field'] = 'offers_wants_types';
  $handler->display->display_options['fields']['offers_wants_types']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['offers_wants_types']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['offers_wants_types']['hide_empty'] = 0;
  $handler->display->display_options['fields']['offers_wants_types']['empty_zero'] = 0;
  $handler->display->display_options['fields']['offers_wants_types']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['offers_wants_types']['group_rows'] = 1;
  $handler->display->display_options['fields']['offers_wants_types']['delta_offset'] = '0';
  $handler->display->display_options['fields']['offers_wants_types']['delta_reversed'] = 0;
  $handler->display->display_options['fields']['offers_wants_types']['field_api_classes'] = 0;
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  $handler->display->display_options['path'] = $want ? 'wants/print' : 'offers/print';
  $handler->display->display_options['displays'] = array('all' => 'all');

  /* Display: print-table category */
  $handler = $view->new_display('print-table', 'print-table category', 'print_table_category');
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['path'] = $want ? 'wants/print/%' : 'offers/print/%';
  //get all the terms in the types vocab and add a display for each.

}