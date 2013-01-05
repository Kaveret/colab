<?php
/**
 * Implementation of hook_default_view_views()
 */
function cforge_views_default_views() {
  $view_names = array('member_list', 'news', 'member_dues');
  foreach($view_names as $name) {
    $function = 'cforge_views_get_'.$name;
    $views[$name] = $function();
  }
  return $views;
}


function cforge_views_default_views_alter(&$views) {

  //re-arrange the transaction views so they are side by side
  if (isset($views['transactions']) && isset($views['transactions_all'])) {
    $display = &$views['transactions']->display['transactions'];
    $display->display_options['path'] = 'transactions/log';
    $display->display_options['menu']['type'] = 'default tab';
    $display->display_options['menu']['title'] = 'Log';
    $display->display_options['menu']['weight'] = '0';
    $display->display_options['menu']['name'] = 'main-menu';
    $display->display_options['menu']['context'] = 0;
    $display->display_options['tab_options']['type'] = 'normal';
    $display->display_options['tab_options']['title'] = 'Transactions';
    $display->display_options['tab_options']['weight'] = '0';

    $display = &$views['transactions_all']->display['page'];
    $display->display_options['path'] = 'transactions/manage';
    $display->display_options['menu']['type'] = 'tab';
    $display->display_options['menu']['title'] = 'Manage';
    $display->display_options['menu']['weight'] = '0';
    $display->display_options['menu']['name'] = 'main-menu';
    $display->display_options['menu']['context'] = 0;
  }
}


function cforge_views_get_member_list() {
  $view = new view;
  $view->name = 'member_list';
  $view->description = 'Member list with alpha pagers,';
  $view->tag = 'cforge';
  $view->base_table = 'users';
  $view->human_name = '';
  $view->core = 0;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Defaults */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->display->display_options['access']['type'] = 'role';
  $handler->display->display_options['access']['role'] = array(
    2 => 2,
  );
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '25';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['pager']['options']['id'] = '0';
  $handler->display->display_options['pager']['options']['quantity'] = '100';
  $handler->display->display_options['pager']['options']['tags']['first'] = '« first';
  $handler->display->display_options['pager']['options']['tags']['previous'] = '‹ previous';
  $handler->display->display_options['pager']['options']['tags']['next'] = 'next ›';
  $handler->display->display_options['pager']['options']['tags']['last'] = 'last »';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'picture' => 'picture',
    'uid' => 'uid',
    'name' => 'name',
    'current_balance' => 'current_balance',
    'current_balance_1' => 'current_balance_1',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'picture' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'uid' => array(
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
    'current_balance' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'current_balance_1' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  $handler->display->display_options['style_options']['sticky'] = TRUE;
  /* Field: User: Picture */
  $handler->display->display_options['fields']['picture']['id'] = 'picture';
  $handler->display->display_options['fields']['picture']['table'] = 'users';
  $handler->display->display_options['fields']['picture']['field'] = 'picture';
  $handler->display->display_options['fields']['picture']['label'] = '';
  $handler->display->display_options['fields']['picture']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['picture']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['picture']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['picture']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['picture']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['picture']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['picture']['alter']['html'] = 0;
  $handler->display->display_options['fields']['picture']['hide_empty'] = 0;
  $handler->display->display_options['fields']['picture']['empty_zero'] = 0;
  /* Field: User: Uid */
  $handler->display->display_options['fields']['uid']['id'] = 'uid';
  $handler->display->display_options['fields']['uid']['table'] = 'users';
  $handler->display->display_options['fields']['uid']['field'] = 'uid';
  $handler->display->display_options['fields']['uid']['label'] = 'N°';
  $handler->display->display_options['fields']['uid']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['uid']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['uid']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['uid']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['uid']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['uid']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['uid']['alter']['html'] = 0;
  $handler->display->display_options['fields']['uid']['hide_empty'] = 0;
  $handler->display->display_options['fields']['uid']['empty_zero'] = 0;
  $handler->display->display_options['fields']['uid']['link_to_user'] = 1;
  /* Field: User: Name */
  $handler->display->display_options['fields']['name']['id'] = 'name';
  $handler->display->display_options['fields']['name']['table'] = 'users';
  $handler->display->display_options['fields']['name']['field'] = 'name';
  $handler->display->display_options['fields']['name']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['name']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['name']['hide_empty'] = 0;
  $handler->display->display_options['fields']['name']['empty_zero'] = 0;
  $handler->display->display_options['fields']['name']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['name']['link_to_user'] = 1;
  $handler->display->display_options['fields']['name']['overwrite_anonymous'] = 0;
  $handler->display->display_options['fields']['name']['format_username'] = 1;
  /* Field: User: Phone Numbers */
  $handler->display->display_options['fields']['profile_phone1']['id'] = 'profile_phone1';
  $handler->display->display_options['fields']['profile_phone1']['table'] = 'field_data_profile_phone1';
  $handler->display->display_options['fields']['profile_phone1']['field'] = 'profile_phone1';
  $handler->display->display_options['fields']['profile_phone1']['label'] = 'Phone';
  if (module_exists('cforge_currencies')) {
    /* Field: User: Transaction statistic */
    $handler->display->display_options['fields']['current_balance']['id'] = 'current_balance';
    $handler->display->display_options['fields']['current_balance']['table'] = 'users';
    $handler->display->display_options['fields']['current_balance']['field'] = 'current_balance';
    $handler->display->display_options['fields']['current_balance']['label'] = 'Balance';
    $handler->display->display_options['fields']['current_balance']['element_label_colon'] = 1;
    $handler->display->display_options['fields']['current_balance']['element_default_classes'] = 1;
    $handler->display->display_options['fields']['current_balance']['hide_empty'] = 0;
    $handler->display->display_options['fields']['current_balance']['empty_zero'] = 0;
    $handler->display->display_options['fields']['current_balance']['hide_alter_empty'] = 1;
    /* Field: User: Transaction statistic */
    $handler->display->display_options['fields']['current_balance_1']['id'] = 'current_balance_1';
    $handler->display->display_options['fields']['current_balance_1']['table'] = 'users';
    $handler->display->display_options['fields']['current_balance_1']['field'] = 'current_balance';
    $handler->display->display_options['fields']['current_balance_1']['label'] = 'Gross Income';
    $handler->display->display_options['fields']['current_balance_1']['element_label_colon'] = 1;
    $handler->display->display_options['fields']['current_balance_1']['element_default_classes'] = 1;
    $handler->display->display_options['fields']['current_balance_1']['hide_empty'] = 0;
    $handler->display->display_options['fields']['current_balance_1']['empty_zero'] = 0;
    $handler->display->display_options['fields']['current_balance_1']['hide_alter_empty'] = 1;
    $handler->display->display_options['fields']['current_balance_1']['total'] = 'gross_in';
  }
  /* Field: User: Code postal */
  $handler->display->display_options['fields']['profile_locality']['id'] = 'profile_locality';
  $handler->display->display_options['fields']['profile_locality']['table'] = 'field_data_profile_locality';
  $handler->display->display_options['fields']['profile_locality']['field'] = 'profile_locality';

  /* Critère de tri: Utilisateur : Uid */
  $handler->display->display_options['sorts']['uid']['id'] = 'uid';
  $handler->display->display_options['sorts']['uid']['table'] = 'users';
  $handler->display->display_options['sorts']['uid']['field'] = 'uid';
  $handler->display->display_options['sorts']['uid']['order'] = 'DESC';
  /* Filter criterion: User: Active */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'users';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = '1';
  $handler->display->display_options['filters']['status']['group'] = '0';
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: User: Roles */
  $handler->display->display_options['filters']['rid']['id'] = 'rid';
  $handler->display->display_options['filters']['rid']['table'] = 'users_roles';
  $handler->display->display_options['filters']['rid']['field'] = 'rid';
  $handler->display->display_options['filters']['rid']['operator'] = 'not';
  $handler->display->display_options['filters']['rid']['value'] = array(
    7 => '7',
  );
  $handler->display->display_options['filters']['rid']['group'] = '0';
  $handler->display->display_options['filters']['rid']['expose']['operator'] = FALSE;
  $handler->display->display_options['filters']['rid']['reduce_duplicates'] = 0;

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page_1');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Members';
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  $handler->display->display_options['path'] = 'members/all';
  $handler->display->display_options['menu']['type'] = 'default tab';
  $handler->display->display_options['menu']['title'] = 'Members';
  $handler->display->display_options['menu']['weight'] = '0';
  $handler->display->display_options['menu']['name'] = 'main-menu';
  $handler->display->display_options['tab_options']['type'] = 'normal';
  $handler->display->display_options['tab_options']['title'] = 'Members';
  $handler->display->display_options['tab_options']['weight'] = '0';
  /* Sort criterion: User: Uid */
  $handler->display->display_options['sorts']['uid']['id'] = 'uid';
  $handler->display->display_options['sorts']['uid']['table'] = 'users';
  $handler->display->display_options['sorts']['uid']['field'] = 'uid';
  $handler->display->display_options['sorts']['uid']['order'] = 'DESC';
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  /* Contextual filter: User: First name (profile_firstname) */
  $handler->display->display_options['arguments']['profile_firstname_value']['id'] = 'profile_firstname_value';
  $handler->display->display_options['arguments']['profile_firstname_value']['table'] = 'field_data_profile_firstname';
  $handler->display->display_options['arguments']['profile_firstname_value']['field'] = 'profile_firstname_value';
  $handler->display->display_options['arguments']['profile_firstname_value']['default_argument_type'] = 'fixed';
  $handler->display->display_options['arguments']['profile_firstname_value']['default_argument_skip_url'] = 0;
  $handler->display->display_options['arguments']['profile_firstname_value']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['profile_firstname_value']['summary']['format'] = 'unformatted_summary';
  $handler->display->display_options['arguments']['profile_firstname_value']['summary_options']['count'] = FALSE;
  $handler->display->display_options['arguments']['profile_firstname_value']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['profile_firstname_value']['summary_options']['inline'] = '1';
  $handler->display->display_options['arguments']['profile_firstname_value']['summary_options']['separator'] = ' ';
  $handler->display->display_options['arguments']['profile_firstname_value']['glossary'] = 1;
  $handler->display->display_options['arguments']['profile_firstname_value']['limit'] = '1';
  $handler->display->display_options['arguments']['profile_firstname_value']['case'] = 'lower';
  $handler->display->display_options['arguments']['profile_firstname_value']['transform_dash'] = 0;
  $handler->display->display_options['arguments']['profile_firstname_value']['break_phrase'] = 0;
  /* Contextual filter: User: Family name (profile_familyname) */
  $handler->display->display_options['arguments']['profile_familyname_value']['id'] = 'profile_familyname_value';
  $handler->display->display_options['arguments']['profile_familyname_value']['table'] = 'field_data_profile_familyname';
  $handler->display->display_options['arguments']['profile_familyname_value']['field'] = 'profile_familyname_value';
  $handler->display->display_options['arguments']['profile_familyname_value']['default_argument_type'] = 'fixed';
  $handler->display->display_options['arguments']['profile_familyname_value']['default_argument_skip_url'] = 0;
  $handler->display->display_options['arguments']['profile_familyname_value']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['profile_familyname_value']['summary']['format'] = 'unformatted_summary';
  $handler->display->display_options['arguments']['profile_familyname_value']['summary_options']['count'] = FALSE;
  $handler->display->display_options['arguments']['profile_familyname_value']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['profile_familyname_value']['summary_options']['inline'] = '1';
  $handler->display->display_options['arguments']['profile_familyname_value']['summary_options']['separator'] = ' ';
  $handler->display->display_options['arguments']['profile_familyname_value']['glossary'] = 1;
  $handler->display->display_options['arguments']['profile_familyname_value']['limit'] = '1';
  $handler->display->display_options['arguments']['profile_familyname_value']['case'] = 'upper';
  $handler->display->display_options['arguments']['profile_familyname_value']['transform_dash'] = 0;
  $handler->display->display_options['arguments']['profile_familyname_value']['break_phrase'] = 0;

  /* Display: alphapager firstname */
  $handler = $view->new_display('attachment', 'alphapager firstname', 'attachment_1');
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['defaults']['header'] = FALSE;
  /* Header: Global: Text area */
  $handler->display->display_options['header']['text']['id'] = 'area';
  $handler->display->display_options['header']['text']['table'] = 'views';
  $handler->display->display_options['header']['text']['field'] = 'area';
  $handler->display->display_options['header']['text']['empty'] = FALSE;
  $handler->display->display_options['header']['text']['content'] = 'First name:';
  $handler->display->display_options['header']['text']['format'] = '1';
  $handler->display->display_options['defaults']['arguments'] = FALSE;
/* Contextual filter: User: First name (profile_firstname) */
  $handler->display->display_options['arguments']['profile_firstname_value']['id'] = 'profile_firstname_value';
  $handler->display->display_options['arguments']['profile_firstname_value']['table'] = 'field_data_profile_firstname';
  $handler->display->display_options['arguments']['profile_firstname_value']['field'] = 'profile_firstname_value';
  $handler->display->display_options['arguments']['profile_firstname_value']['default_action'] = 'summary';
  $handler->display->display_options['arguments']['profile_firstname_value']['default_argument_type'] = 'fixed';
  $handler->display->display_options['arguments']['profile_firstname_value']['default_argument_skip_url'] = 0;
  $handler->display->display_options['arguments']['profile_firstname_value']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['profile_firstname_value']['summary']['format'] = 'unformatted_summary';
  $handler->display->display_options['arguments']['profile_firstname_value']['summary_options']['count'] = FALSE;
  $handler->display->display_options['arguments']['profile_firstname_value']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['profile_firstname_value']['summary_options']['inline'] = '1';
  $handler->display->display_options['arguments']['profile_firstname_value']['summary_options']['separator'] = ' ';
  $handler->display->display_options['arguments']['profile_firstname_value']['glossary'] = 1;
  $handler->display->display_options['arguments']['profile_firstname_value']['limit'] = '1';
  $handler->display->display_options['arguments']['profile_firstname_value']['case'] = 'lower';
  $handler->display->display_options['arguments']['profile_firstname_value']['transform_dash'] = 0;
  $handler->display->display_options['arguments']['profile_firstname_value']['break_phrase'] = 0;
  $handler->display->display_options['displays'] = array(
    'page_1' => 'page_1',
    'default' => 0,
    'page_2' => 0,
  );
  $handler->display->display_options['inherit_arguments'] = 0;
  $handler->display->display_options['render_pager'] = TRUE;

  /* Display: alphapager familyname */
  $handler = $view->new_display('attachment', 'alphapager familyname', 'attachment_2');
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['defaults']['header'] = FALSE;
  /* Header: Global: Text area */
  $handler->display->display_options['header']['text']['id'] = 'area';
  $handler->display->display_options['header']['text']['table'] = 'views';
  $handler->display->display_options['header']['text']['field'] = 'area';
  $handler->display->display_options['header']['text']['empty'] = FALSE;
  $handler->display->display_options['header']['text']['content'] = 'Family name:';
  $handler->display->display_options['header']['text']['format'] = '1';
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  /* Contextual filter: User: Family name (profile_familyname) */
  $handler->display->display_options['arguments']['profile_familyname_value']['id'] = 'profile_familyname_value';
  $handler->display->display_options['arguments']['profile_familyname_value']['table'] = 'field_data_profile_familyname';
  $handler->display->display_options['arguments']['profile_familyname_value']['field'] = 'profile_familyname_value';
  $handler->display->display_options['arguments']['profile_familyname_value']['default_action'] = 'summary';
  $handler->display->display_options['arguments']['profile_familyname_value']['default_argument_type'] = 'fixed';
  $handler->display->display_options['arguments']['profile_familyname_value']['default_argument_skip_url'] = 0;
  $handler->display->display_options['arguments']['profile_familyname_value']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['profile_familyname_value']['summary']['format'] = 'unformatted_summary';
  $handler->display->display_options['arguments']['profile_familyname_value']['summary_options']['base_path'] = 'members/all/all';
  $handler->display->display_options['arguments']['profile_familyname_value']['summary_options']['count'] = FALSE;
  $handler->display->display_options['arguments']['profile_familyname_value']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['profile_familyname_value']['summary_options']['inline'] = '1';
  $handler->display->display_options['arguments']['profile_familyname_value']['glossary'] = 1;
  $handler->display->display_options['arguments']['profile_familyname_value']['limit'] = '1';
  $handler->display->display_options['arguments']['profile_familyname_value']['case'] = 'upper';
  $handler->display->display_options['arguments']['profile_familyname_value']['transform_dash'] = 0;
  $handler->display->display_options['arguments']['profile_familyname_value']['break_phrase'] = 0;
  $handler->display->display_options['displays'] = array(
    'page_1' => 'page_1',
  );
  $handler->display->display_options['inherit_arguments'] = 0;

  /* Display: System */
  $handler = $view->new_display('page', 'System', 'page_2');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Non-member accounts';
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: User: Active */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'users';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = '1';
  $handler->display->display_options['filters']['status']['group'] = '0';
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: User: Roles */
  $handler->display->display_options['filters']['rid']['id'] = 'rid';
  $handler->display->display_options['filters']['rid']['table'] = 'users_roles';
  $handler->display->display_options['filters']['rid']['field'] = 'rid';
  $handler->display->display_options['filters']['rid']['value'] = array(
    7 => '7',
  );
  $handler->display->display_options['filters']['rid']['group'] = '0';
  $handler->display->display_options['filters']['rid']['expose']['operator'] = FALSE;
  $handler->display->display_options['filters']['rid']['reduce_duplicates'] = 0;
  $handler->display->display_options['path'] = 'members/system';
  $handler->display->display_options['menu']['type'] = 'tab';
  $handler->display->display_options['menu']['title'] = 'System accounts';
  $handler->display->display_options['menu']['weight'] = '0';


  /* Display: Flux */
  $handler = $view->new_display('views_data_export', 'CSV export', 'views_data_export_1');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'All active users';
  $handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
  $handler->display->display_options['defaults']['access'] = FALSE;
  $handler->display->display_options['access']['type'] = 'role';
  $handler->display->display_options['access']['role'] = array(
    4 => 4,
  );
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'views_data_export_csv';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Champ: Utilisateur : Uid */
  $handler->display->display_options['fields']['uid']['id'] = 'uid';
  $handler->display->display_options['fields']['uid']['table'] = 'users';
  $handler->display->display_options['fields']['uid']['field'] = 'uid';
  $handler->display->display_options['fields']['uid']['label'] = 'N°';
  /* Champ: Utilisateur : First name */
  $handler->display->display_options['fields']['profile_firstname']['id'] = 'profile_firstname';
  $handler->display->display_options['fields']['profile_firstname']['table'] = 'field_data_profile_firstname';
  $handler->display->display_options['fields']['profile_firstname']['field'] = 'profile_firstname';
  $handler->display->display_options['fields']['profile_firstname']['label'] = 'Prénom';
  /* Champ: Utilisateur : Family name */
  $handler->display->display_options['fields']['profile_familyname']['id'] = 'profile_familyname';
  $handler->display->display_options['fields']['profile_familyname']['table'] = 'field_data_profile_familyname';
  $handler->display->display_options['fields']['profile_familyname']['field'] = 'profile_familyname';
  $handler->display->display_options['fields']['profile_familyname']['label'] = 'Nom';
  /* Champ: Utilisateur : Transaction statistic */
  $handler->display->display_options['fields']['current_balance']['id'] = 'current_balance';
  $handler->display->display_options['fields']['current_balance']['table'] = 'users';
  $handler->display->display_options['fields']['current_balance']['field'] = 'current_balance';
  $handler->display->display_options['fields']['current_balance']['label'] = 'Balance';
  /* Champ: Utilisateur : Transaction statistic */
  $handler->display->display_options['fields']['current_balance_1']['id'] = 'current_balance_1';
  $handler->display->display_options['fields']['current_balance_1']['table'] = 'users';
  $handler->display->display_options['fields']['current_balance_1']['field'] = 'current_balance';
  $handler->display->display_options['fields']['current_balance_1']['label'] = 'Gross income';
  $handler->display->display_options['fields']['current_balance_1']['total'] = 'gross_in';
  /* Champ: Utilisateur : Courriel */
  $handler->display->display_options['fields']['mail']['id'] = 'mail';
  $handler->display->display_options['fields']['mail']['table'] = 'users';
  $handler->display->display_options['fields']['mail']['field'] = 'mail';
  $handler->display->display_options['fields']['mail']['link_to_user'] = '0';
  /* Champ: Utilisateur : Address */
  $handler->display->display_options['fields']['profile_address']['id'] = 'profile_address';
  $handler->display->display_options['fields']['profile_address']['table'] = 'field_data_profile_address';
  $handler->display->display_options['fields']['profile_address']['field'] = 'profile_address';
  $handler->display->display_options['fields']['profile_address']['label'] = 'Adresse';
  /* Champ: Utilisateur : Responsibility */
  $handler->display->display_options['fields']['profile_responsibility']['id'] = 'profile_responsibility';
  $handler->display->display_options['fields']['profile_responsibility']['table'] = 'field_data_profile_responsibility';
  $handler->display->display_options['fields']['profile_responsibility']['field'] = 'profile_responsibility';
  $handler->display->display_options['fields']['profile_responsibility']['label'] = 'Responsabilité';
  /* Champ: Utilisateur : Area Code */
  $handler->display->display_options['fields']['profile_locality']['id'] = 'profile_locality';
  $handler->display->display_options['fields']['profile_locality']['table'] = 'field_data_profile_locality';
  $handler->display->display_options['fields']['profile_locality']['field'] = 'profile_locality';
  $handler->display->display_options['fields']['profile_locality']['label'] = 'Code (postal)';
  /* Champ: Utilisateur : Phone Numbers */
  $handler->display->display_options['fields']['profile_phone1']['id'] = 'profile_phone1';
  $handler->display->display_options['fields']['profile_phone1']['table'] = 'field_data_profile_phone1';
  $handler->display->display_options['fields']['profile_phone1']['field'] = 'profile_phone1';
  $handler->display->display_options['fields']['profile_phone1']['delta_offset'] = '0';
  /* Champ: Utilisateur : Date de création */
  $handler->display->display_options['fields']['created']['id'] = 'created';
  $handler->display->display_options['fields']['created']['table'] = 'users';
  $handler->display->display_options['fields']['created']['field'] = 'created';
  $handler->display->display_options['fields']['created']['label'] = 'Créé';
  $handler->display->display_options['fields']['created']['date_format'] = 'custom';
  $handler->display->display_options['fields']['created']['custom_date_format'] = 'd/m/y';
  /* Champ: Utilisateur : Notes */
  $handler->display->display_options['fields']['profile_notes']['id'] = 'profile_notes';
  $handler->display->display_options['fields']['profile_notes']['table'] = 'field_data_profile_notes';
  $handler->display->display_options['fields']['profile_notes']['field'] = 'profile_notes';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Critère de filtrage: Utilisateur : Actif */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'users';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = '1';
  $handler->display->display_options['filters']['status']['group'] = '0';
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  $handler->display->display_options['path'] = 'members.csv';
  $handler->display->display_options['displays'] = array(
    'page_1' => 'page_1',
    'page_2' => 'page_2',
    'default' => 0,
  );


  $translatables['member_list'] = array(
    t('N°'),
    t('Name'),
    t('Balance'),
    t('Gross Income'),
    t('Members'),
    t('First name:'),
    t('Family name:'),
    t('System'),
    t('Non-member accounts'),
    t('All active users')
  );
  return $view;
}


function cforge_views_get_news() {
  $view = new view;
  $view->name = 'recent_news';
  $view->description = t('Latest stories in full, with list of stories');
  $view->tag = 'cforge';
  $view->base_table = 'node';
  $view->human_name = '';
  $view->core = 0;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Defaults */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->display->display_options['use_more'] = TRUE;
  $handler->display->display_options['access']['type'] = 'none';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['distinct'] = TRUE;
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'mini';
  $handler->display->display_options['pager']['options']['items_per_page'] = '10';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['pager']['options']['id'] = '0';
  $handler->display->display_options['pager']['options']['quantity'] = '9';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'node';
  $handler->display->display_options['row_options']['view_mode'] = 'full';
  $handler->display->display_options['row_options']['links'] = 1;
  $handler->display->display_options['row_options']['comments'] = 0;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['link_to_node'] = 1;
  /* Field: Content: Updated date */
  $handler->display->display_options['fields']['changed']['id'] = 'changed';
  $handler->display->display_options['fields']['changed']['table'] = 'node';
  $handler->display->display_options['fields']['changed']['field'] = 'changed';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'ASC';
  $handler->display->display_options['sorts']['created']['granularity'] = 'minute';
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'story' => 'story',
  );
  $handler->display->display_options['filters']['type']['group'] = '0';
  $handler->display->display_options['filters']['type']['expose']['operator'] = FALSE;

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page_1');
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'node';
  $handler->display->display_options['row_options']['links'] = 0;
  $handler->display->display_options['row_options']['comments'] = 0;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  $handler->display->display_options['filters']['type']['group'] = '0';
  $handler->display->display_options['filters']['type']['expose']['operator'] = FALSE;
  $handler->display->display_options['path'] = 'news';
  $handler->display->display_options['menu']['type'] = 'normal';
  $handler->display->display_options['menu']['title'] = 'News';
  $handler->display->display_options['menu']['weight'] = '-10';
  $handler->display->display_options['menu']['name'] = 'main-menu';
  /* Display: Feed */
  $handler = $view->new_display('feed', 'Feed', 'feed_1');
  $handler->display->display_options['defaults']['hide_admin_links'] = TRUE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['style_plugin'] = 'rss';
  $handler->display->display_options['row_plugin'] = 'node_rss';
  $handler->display->display_options['path'] = 'news/feed.xml';
  $handler->display->display_options['displays'] = array(
    'page_1' => 'page_1',
    'default' => 0,
  );
  $translatables['recent_news'] = array(
    t('Updated date'),
    t('Previous articles'),
    t('News')
  );

  return $view;
}

function cforge_views_get_member_dues() {
  $view = new view;
  $view = new view;
  $view->name = 'member_dues';
  $view->description = 'expiry dates';
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
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['grouping'] = '';
  $handler->display->display_options['style_options']['columns'] = array(
    'expiry_timestamp' => 'expiry_timestamp',
    'name' => 'name',
    'value_4' => 'value_4',
    'login' => 'login',
    'cleared_balance' => 'cleared_balance',
  );
  $handler->display->display_options['style_options']['default'] = 'expiry_timestamp';
  $handler->display->display_options['style_options']['info'] = array(
    'expiry_timestamp' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'name' => array(
      'sortable' => 1,
      'separator' => ' ',
    ),
    'value_4' => array(
      'sortable' => 0,
      'separator' => '',
    ),
    'login' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'cleared_balance' => array(
      'sortable' => 1,
      'separator' => '',
    ),
  );
  $handler->display->display_options['style_options']['override'] = 1;
  $handler->display->display_options['style_options']['sticky'] = 0;
  /* Field: User: Role expiration date/time */
  $handler->display->display_options['fields']['expiry_timestamp']['id'] = 'expiry_timestamp';
  $handler->display->display_options['fields']['expiry_timestamp']['table'] = 'role_expire';
  $handler->display->display_options['fields']['expiry_timestamp']['field'] = 'expiry_timestamp';
  $handler->display->display_options['fields']['expiry_timestamp']['label'] = 'Renewal date';
  $handler->display->display_options['fields']['expiry_timestamp']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['expiry_timestamp']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['expiry_timestamp']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['expiry_timestamp']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['expiry_timestamp']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['expiry_timestamp']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['expiry_timestamp']['alter']['html'] = 0;
  $handler->display->display_options['fields']['expiry_timestamp']['hide_empty'] = 0;
  $handler->display->display_options['fields']['expiry_timestamp']['empty_zero'] = 0;
  $handler->display->display_options['fields']['expiry_timestamp']['date_format'] = 'medium';
  /* Field: User: Name */
  $handler->display->display_options['fields']['name']['id'] = 'name';
  $handler->display->display_options['fields']['name']['table'] = 'users';
  $handler->display->display_options['fields']['name']['field'] = 'name';
  $handler->display->display_options['fields']['name']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['name']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['name']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['name']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['name']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['name']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['name']['alter']['html'] = 0;
  $handler->display->display_options['fields']['name']['link_to_user'] = 1;
  $handler->display->display_options['fields']['name']['overwrite_anonymous'] = 0;
  /* Field: User: Last login */
  $handler->display->display_options['fields']['login']['id'] = 'login';
  $handler->display->display_options['fields']['login']['table'] = 'users';
  $handler->display->display_options['fields']['login']['field'] = 'login';
  $handler->display->display_options['fields']['login']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['login']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['login']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['login']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['login']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['login']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['login']['alter']['html'] = 0;
  /* Filter criterion: User: Roles */
  $handler->display->display_options['filters']['rid']['id'] = 'rid';
  $handler->display->display_options['filters']['rid']['table'] = 'users_roles';
  $handler->display->display_options['filters']['rid']['field'] = 'rid';
  $handler->display->display_options['filters']['rid']['operator'] = 'not';
  $handler->display->display_options['filters']['rid']['value'] = array(
    7 => '7',
  );
  $handler->display->display_options['filters']['rid']['group'] = '0';
  $handler->display->display_options['filters']['rid']['expose']['operator'] = FALSE;
  $handler->display->display_options['filters']['rid']['reduce_duplicates'] = 0;
  /* Filter criterion: User: Active */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'users';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = '1';
  $handler->display->display_options['filters']['status']['group'] = '0';
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: User: Role expiration date/time */
  $handler->display->display_options['filters']['expiry_timestamp']['id'] = 'expiry_timestamp';
  $handler->display->display_options['filters']['expiry_timestamp']['table'] = 'role_expire';
  $handler->display->display_options['filters']['expiry_timestamp']['field'] = 'expiry_timestamp';
  $handler->display->display_options['filters']['expiry_timestamp']['operator'] = '>';
  $handler->display->display_options['filters']['expiry_timestamp']['value']['value'] = 'now';

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page_1');
  $handler->display->display_options['path'] = 'members/expiry';
  $handler->display->display_options['menu']['type'] = 'tab';
  $handler->display->display_options['menu']['title'] = 'Expiry';
  $handler->display->display_options['menu']['weight'] = '0';
  $handler->display->display_options['menu']['name'] = 'manage';
  $translatables['member_dues'] = array(
    t('Renewal date'),
    t('Name'),
    t('Last login'),
  );

  return $view;
}
