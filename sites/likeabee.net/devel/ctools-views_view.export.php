<?php

$view = new view();
$view->name = 'admin_content';
$view->description = 'Emulates the Drupal content administration page.';
$view->tag = 'default';
$view->base_table = 'node';
$view->human_name = 'Content';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Content';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['access']['perm'] = 'administer nodes';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = '20';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['columns'] = array(
  'views_bulk_operations' => 'views_bulk_operations',
  'title' => 'title',
  'timestamp' => 'title',
  'type' => 'type',
  'name' => 'name',
  'status' => 'status',
  'edit_node' => 'edit_node',
);
$handler->display->display_options['style_options']['default'] = '-1';
$handler->display->display_options['style_options']['info'] = array(
  'views_bulk_operations' => array(
    'align' => '',
    'separator' => '',
  ),
  'title' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
  ),
  'timestamp' => array(
    'align' => '',
    'separator' => '',
  ),
  'type' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
  ),
  'name' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
  ),
  'status' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
  ),
  'edit_node' => array(
    'align' => '',
    'separator' => '',
  ),
);
$handler->display->display_options['style_options']['empty_table'] = TRUE;
/* No results behavior: Global: Text area */
$handler->display->display_options['empty']['area']['id'] = 'area';
$handler->display->display_options['empty']['area']['table'] = 'views';
$handler->display->display_options['empty']['area']['field'] = 'area';
$handler->display->display_options['empty']['area']['content'] = 'No content available.';
$handler->display->display_options['empty']['area']['format'] = 'filtered_html';
/* Relationship: Content: Author */
$handler->display->display_options['relationships']['uid']['id'] = 'uid';
$handler->display->display_options['relationships']['uid']['table'] = 'node';
$handler->display->display_options['relationships']['uid']['field'] = 'uid';
/* Field: Bulk operations: Content */
$handler->display->display_options['fields']['views_bulk_operations']['id'] = 'views_bulk_operations';
$handler->display->display_options['fields']['views_bulk_operations']['table'] = 'node';
$handler->display->display_options['fields']['views_bulk_operations']['field'] = 'views_bulk_operations';
$handler->display->display_options['fields']['views_bulk_operations']['label'] = '';
$handler->display->display_options['fields']['views_bulk_operations']['hide_alter_empty'] = FALSE;
$handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['display_type'] = '0';
$handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['force_single'] = 0;
$handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['display_result'] = 1;
$handler->display->display_options['fields']['views_bulk_operations']['vbo_operations'] = array(
  'action::node_assign_owner_action' => array(
    'selected' => 1,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::views_bulk_operations_delete_item' => array(
    'selected' => 1,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::views_bulk_operations_script_action' => array(
    'selected' => 1,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::node_make_sticky_action' => array(
    'selected' => 1,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::node_make_unsticky_action' => array(
    'selected' => 1,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::views_bulk_operations_argument_selector_action' => array(
    'selected' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::node_promote_action' => array(
    'selected' => 1,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::node_publish_action' => array(
    'selected' => 1,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::node_unpromote_action' => array(
    'selected' => 1,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::node_save_action' => array(
    'selected' => 0,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::node_unpublish_action' => array(
    'selected' => 1,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::node_unpublish_by_keyword_action' => array(
    'selected' => 1,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
);
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
/* Field: Content: Has new content */
$handler->display->display_options['fields']['timestamp']['id'] = 'timestamp';
$handler->display->display_options['fields']['timestamp']['table'] = 'history';
$handler->display->display_options['fields']['timestamp']['field'] = 'timestamp';
$handler->display->display_options['fields']['timestamp']['label'] = 'New?';
/* Field: Content: Type */
$handler->display->display_options['fields']['type']['id'] = 'type';
$handler->display->display_options['fields']['type']['table'] = 'node';
$handler->display->display_options['fields']['type']['field'] = 'type';
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['relationship'] = 'uid';
$handler->display->display_options['fields']['name']['label'] = 'Author';
/* Field: Content: Published */
$handler->display->display_options['fields']['status']['id'] = 'status';
$handler->display->display_options['fields']['status']['table'] = 'node';
$handler->display->display_options['fields']['status']['field'] = 'status';
$handler->display->display_options['fields']['status']['not'] = 0;
/* Field: Content: Edit link */
$handler->display->display_options['fields']['edit_node']['id'] = 'edit_node';
$handler->display->display_options['fields']['edit_node']['table'] = 'views_entity_node';
$handler->display->display_options['fields']['edit_node']['field'] = 'edit_node';
$handler->display->display_options['fields']['edit_node']['label'] = 'Edit';
/* Sort criterion: Content: Updated date */
$handler->display->display_options['sorts']['changed']['id'] = 'changed';
$handler->display->display_options['sorts']['changed']['table'] = 'node';
$handler->display->display_options['sorts']['changed']['field'] = 'changed';
$handler->display->display_options['sorts']['changed']['order'] = 'DESC';
/* Filter criterion: Content: Title */
$handler->display->display_options['filters']['title']['id'] = 'title';
$handler->display->display_options['filters']['title']['table'] = 'node';
$handler->display->display_options['filters']['title']['field'] = 'title';
$handler->display->display_options['filters']['title']['operator'] = 'contains';
$handler->display->display_options['filters']['title']['group'] = 0;
$handler->display->display_options['filters']['title']['exposed'] = TRUE;
$handler->display->display_options['filters']['title']['expose']['operator_id'] = 'title_op';
$handler->display->display_options['filters']['title']['expose']['label'] = 'Title contains';
$handler->display->display_options['filters']['title']['expose']['operator'] = 'title_op';
$handler->display->display_options['filters']['title']['expose']['identifier'] = 'title';
/* Filter criterion: Content: Type */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['group'] = 0;
$handler->display->display_options['filters']['type']['exposed'] = TRUE;
$handler->display->display_options['filters']['type']['expose']['operator_id'] = 'type_op';
$handler->display->display_options['filters']['type']['expose']['label'] = 'Node: Type';
$handler->display->display_options['filters']['type']['expose']['operator'] = 'type_op';
$handler->display->display_options['filters']['type']['expose']['identifier'] = 'type';
/* Filter criterion: Content: Promoted to front page */
$handler->display->display_options['filters']['promote']['id'] = 'promote';
$handler->display->display_options['filters']['promote']['table'] = 'node';
$handler->display->display_options['filters']['promote']['field'] = 'promote';
$handler->display->display_options['filters']['promote']['value'] = 'All';
$handler->display->display_options['filters']['promote']['group'] = 0;
$handler->display->display_options['filters']['promote']['exposed'] = TRUE;
$handler->display->display_options['filters']['promote']['expose']['operator_id'] = '';
$handler->display->display_options['filters']['promote']['expose']['label'] = 'Promoted';
$handler->display->display_options['filters']['promote']['expose']['operator'] = 'promote_op';
$handler->display->display_options['filters']['promote']['expose']['identifier'] = 'promote';
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 'All';
$handler->display->display_options['filters']['status']['group'] = 0;
$handler->display->display_options['filters']['status']['exposed'] = TRUE;
$handler->display->display_options['filters']['status']['expose']['operator_id'] = '';
$handler->display->display_options['filters']['status']['expose']['label'] = 'Published';
$handler->display->display_options['filters']['status']['expose']['operator'] = 'status_op';
$handler->display->display_options['filters']['status']['expose']['identifier'] = 'status';

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'admin/content2';
$translatables['admin_content'] = array(
  t('Master'),
  t('Content'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Items per page'),
  t('- All -'),
  t('Offset'),
  t('« first'),
  t('‹ previous'),
  t('next ›'),
  t('last »'),
  t('No content available.'),
  t('author'),
  t('Title'),
  t('New?'),
  t('Type'),
  t('Author'),
  t('Published'),
  t('Edit'),
  t('Title contains'),
  t('Node: Type'),
  t('Promoted'),
  t('Page'),
);

<<<>>>
$view = new view();
$view->name = 'admin_people';
$view->description = 'Emulates the Drupal user administration page.';
$view->tag = 'default';
$view->base_table = 'users';
$view->human_name = 'People';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'People';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['access']['perm'] = 'administer users';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = '20';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['columns'] = array(
  'views_bulk_operations' => 'views_bulk_operations',
  'name' => 'name',
  'status' => 'status',
  'created' => 'created',
  'rid' => 'rid',
  'access' => 'access',
  'edit_node' => 'edit_node',
);
$handler->display->display_options['style_options']['default'] = '-1';
$handler->display->display_options['style_options']['info'] = array(
  'views_bulk_operations' => array(
    'align' => '',
    'separator' => '',
  ),
  'name' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
  ),
  'status' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
  ),
  'created' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
  ),
  'rid' => array(
    'align' => '',
    'separator' => '',
  ),
  'access' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
  ),
  'edit_node' => array(
    'align' => '',
    'separator' => '',
  ),
);
/* Field: Bulk operations: User */
$handler->display->display_options['fields']['views_bulk_operations']['id'] = 'views_bulk_operations';
$handler->display->display_options['fields']['views_bulk_operations']['table'] = 'users';
$handler->display->display_options['fields']['views_bulk_operations']['field'] = 'views_bulk_operations';
$handler->display->display_options['fields']['views_bulk_operations']['label'] = '';
$handler->display->display_options['fields']['views_bulk_operations']['hide_alter_empty'] = FALSE;
$handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['display_type'] = '0';
$handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['force_single'] = 0;
$handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['display_result'] = 1;
$handler->display->display_options['fields']['views_bulk_operations']['vbo_operations'] = array(
  'action::system_block_ip_action' => array(
    'selected' => 0,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::user_block_user_action' => array(
    'selected' => 1,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::views_bulk_operations_delete_item' => array(
    'selected' => 1,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::views_bulk_operations_script_action' => array(
    'selected' => 1,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::views_bulk_operations_user_roles_action' => array(
    'selected' => 1,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::views_bulk_operations_argument_selector_action' => array(
    'selected' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
);
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['label'] = 'Username';
$handler->display->display_options['fields']['name']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['name']['alter']['ellipsis'] = FALSE;
/* Field: User: Active */
$handler->display->display_options['fields']['status']['id'] = 'status';
$handler->display->display_options['fields']['status']['table'] = 'users';
$handler->display->display_options['fields']['status']['field'] = 'status';
$handler->display->display_options['fields']['status']['not'] = 0;
/* Field: User: Created date */
$handler->display->display_options['fields']['created']['id'] = 'created';
$handler->display->display_options['fields']['created']['table'] = 'users';
$handler->display->display_options['fields']['created']['field'] = 'created';
$handler->display->display_options['fields']['created']['label'] = 'Member for';
$handler->display->display_options['fields']['created']['date_format'] = 'raw time span';
/* Field: User: Roles */
$handler->display->display_options['fields']['rid']['id'] = 'rid';
$handler->display->display_options['fields']['rid']['table'] = 'users_roles';
$handler->display->display_options['fields']['rid']['field'] = 'rid';
$handler->display->display_options['fields']['rid']['type'] = 'ul';
/* Field: User: Last access */
$handler->display->display_options['fields']['access']['id'] = 'access';
$handler->display->display_options['fields']['access']['table'] = 'users';
$handler->display->display_options['fields']['access']['field'] = 'access';
$handler->display->display_options['fields']['access']['date_format'] = 'time ago';
/* Field: User: Edit link */
$handler->display->display_options['fields']['edit_node']['id'] = 'edit_node';
$handler->display->display_options['fields']['edit_node']['table'] = 'users';
$handler->display->display_options['fields']['edit_node']['field'] = 'edit_node';
$handler->display->display_options['fields']['edit_node']['label'] = 'Operations';
/* Filter criterion: User: Name */
$handler->display->display_options['filters']['uid']['id'] = 'uid';
$handler->display->display_options['filters']['uid']['table'] = 'users';
$handler->display->display_options['filters']['uid']['field'] = 'uid';
$handler->display->display_options['filters']['uid']['operator'] = 'not in';
$handler->display->display_options['filters']['uid']['value'] = array(
  0 => 0,
);
$handler->display->display_options['filters']['uid']['group'] = 0;
/* Filter criterion: User: Roles */
$handler->display->display_options['filters']['rid']['id'] = 'rid';
$handler->display->display_options['filters']['rid']['table'] = 'users_roles';
$handler->display->display_options['filters']['rid']['field'] = 'rid';
$handler->display->display_options['filters']['rid']['group'] = 0;
$handler->display->display_options['filters']['rid']['exposed'] = TRUE;
$handler->display->display_options['filters']['rid']['expose']['operator_id'] = 'rid_op';
$handler->display->display_options['filters']['rid']['expose']['label'] = 'Role';
$handler->display->display_options['filters']['rid']['expose']['use_operator'] = TRUE;
$handler->display->display_options['filters']['rid']['expose']['operator'] = 'rid_op';
$handler->display->display_options['filters']['rid']['expose']['identifier'] = 'rid';
/* Filter criterion: User: Active */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'users';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 'All';
$handler->display->display_options['filters']['status']['group'] = 0;
$handler->display->display_options['filters']['status']['exposed'] = TRUE;
$handler->display->display_options['filters']['status']['expose']['operator_id'] = '';
$handler->display->display_options['filters']['status']['expose']['label'] = 'Active';
$handler->display->display_options['filters']['status']['expose']['operator'] = 'status_op';
$handler->display->display_options['filters']['status']['expose']['identifier'] = 'status';

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'admin/people2';
$translatables['admin_people'] = array(
  t('Master'),
  t('People'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Items per page'),
  t('- All -'),
  t('Offset'),
  t('« first'),
  t('‹ previous'),
  t('next ›'),
  t('last »'),
  t('Username'),
  t('Active'),
  t('Member for'),
  t('Roles'),
  t('Last access'),
  t('Operations'),
  t('Role'),
  t('Page'),
);

<<<>>>
$view = new view();
$view->name = 'archive';
$view->description = 'Display a list of months that link to content for that month.';
$view->tag = 'default';
$view->base_table = 'node';
$view->human_name = 'Archive';
$view->core = 0;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Monthly archive';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['row_plugin'] = 'node';
/* Sort criterion: Content: Post date */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'node';
$handler->display->display_options['sorts']['created']['field'] = 'created';
$handler->display->display_options['sorts']['created']['order'] = 'DESC';
/* Contextual filter: Content: Created year + month */
$handler->display->display_options['arguments']['created_year_month']['id'] = 'created_year_month';
$handler->display->display_options['arguments']['created_year_month']['table'] = 'node';
$handler->display->display_options['arguments']['created_year_month']['field'] = 'created_year_month';
$handler->display->display_options['arguments']['created_year_month']['default_action'] = 'summary';
$handler->display->display_options['arguments']['created_year_month']['exception']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['created_year_month']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['created_year_month']['title'] = '%1';
$handler->display->display_options['arguments']['created_year_month']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['created_year_month']['summary']['sort_order'] = 'desc';
$handler->display->display_options['arguments']['created_year_month']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['created_year_month']['summary_options']['override'] = TRUE;
$handler->display->display_options['arguments']['created_year_month']['summary_options']['items_per_page'] = '30';
$handler->display->display_options['arguments']['created_year_month']['specify_validation'] = TRUE;
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 0;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'archive';

/* Display: Block */
$handler = $view->new_display('block', 'Block', 'block');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['defaults']['arguments'] = FALSE;
/* Contextual filter: Content: Created year + month */
$handler->display->display_options['arguments']['created_year_month']['id'] = 'created_year_month';
$handler->display->display_options['arguments']['created_year_month']['table'] = 'node';
$handler->display->display_options['arguments']['created_year_month']['field'] = 'created_year_month';
$handler->display->display_options['arguments']['created_year_month']['default_action'] = 'summary';
$handler->display->display_options['arguments']['created_year_month']['exception']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['created_year_month']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['created_year_month']['title'] = '%1';
$handler->display->display_options['arguments']['created_year_month']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['created_year_month']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['created_year_month']['summary_options']['items_per_page'] = '30';
$handler->display->display_options['arguments']['created_year_month']['specify_validation'] = TRUE;
$translatables['archive'] = array(
  t('Master'),
  t('Monthly archive'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Items per page'),
  t('- All -'),
  t('Offset'),
  t('« first'),
  t('‹ previous'),
  t('next ›'),
  t('last »'),
  t('All'),
  t('%1'),
  t('Page'),
  t('Block'),
);

<<<>>>
$view = new view();
$view->name = 'backlinks';
$view->description = 'Displays a list of nodes that link to the node, using the search backlinks table.';
$view->tag = 'default';
$view->base_table = 'node';
$view->human_name = 'Backlinks';
$view->core = 0;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = 30;
$handler->display->display_options['style_plugin'] = 'list';
$handler->display->display_options['style_options']['type'] = 'ol';
$handler->display->display_options['row_plugin'] = 'fields';
/* No results behavior: Global: Text area */
$handler->display->display_options['empty']['text']['id'] = 'area';
$handler->display->display_options['empty']['text']['table'] = 'views';
$handler->display->display_options['empty']['text']['field'] = 'area';
$handler->display->display_options['empty']['text']['content'] = 'No backlinks found.';
$handler->display->display_options['empty']['text']['format'] = '1';
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
/* Contextual filter: Search: Links to */
$handler->display->display_options['arguments']['nid']['id'] = 'nid';
$handler->display->display_options['arguments']['nid']['table'] = 'search_node_links_to';
$handler->display->display_options['arguments']['nid']['field'] = 'nid';
$handler->display->display_options['arguments']['nid']['default_action'] = 'not found';
$handler->display->display_options['arguments']['nid']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['nid']['title'] = 'Pages that link to %1';
$handler->display->display_options['arguments']['nid']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['nid']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['nid']['specify_validation'] = TRUE;
$handler->display->display_options['arguments']['nid']['validate']['type'] = 'node';
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 0;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'node/%/backlinks';
$handler->display->display_options['menu']['type'] = 'tab';
$handler->display->display_options['menu']['title'] = 'What links here';
$handler->display->display_options['menu']['weight'] = '0';

/* Display: What links here */
$handler = $view->new_display('block', 'What links here', 'block');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['defaults']['use_more'] = FALSE;
$handler->display->display_options['use_more'] = TRUE;
$handler->display->display_options['defaults']['style_plugin'] = FALSE;
$handler->display->display_options['style_plugin'] = 'list';
$handler->display->display_options['defaults']['style_options'] = FALSE;
$handler->display->display_options['defaults']['row_plugin'] = FALSE;
$handler->display->display_options['row_plugin'] = 'fields';
$handler->display->display_options['defaults']['row_options'] = FALSE;
$handler->display->display_options['defaults']['arguments'] = FALSE;
/* Contextual filter: Search: Links to */
$handler->display->display_options['arguments']['nid']['id'] = 'nid';
$handler->display->display_options['arguments']['nid']['table'] = 'search_node_links_to';
$handler->display->display_options['arguments']['nid']['field'] = 'nid';
$handler->display->display_options['arguments']['nid']['default_action'] = 'default';
$handler->display->display_options['arguments']['nid']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['nid']['title'] = 'What links here';
$handler->display->display_options['arguments']['nid']['default_argument_type'] = 'node';
$handler->display->display_options['arguments']['nid']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['nid']['specify_validation'] = TRUE;
$handler->display->display_options['arguments']['nid']['validate']['type'] = 'node';
$translatables['backlinks'] = array(
  t('Master'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Items per page'),
  t('- All -'),
  t('Offset'),
  t('« first'),
  t('‹ previous'),
  t('next ›'),
  t('last »'),
  t('No backlinks found.'),
  t('All'),
  t('Pages that link to %1'),
  t('Page'),
  t('What links here'),
);

<<<>>>
$view = new view();
$view->name = 'running_balance';
$view->description = 'Unixtimes and running balances';
$view->tag = 'mcapi (index)';
$view->base_table = 'mcapi_index';
$view->human_name = 'Running balance';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Running balance';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['access']['perm'] = 'transact';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['style_plugin'] = 'table';
/* Relationship: Transaction index: 1st user */
$handler->display->display_options['relationships']['uid1']['id'] = 'uid1';
$handler->display->display_options['relationships']['uid1']['table'] = 'mcapi_index';
$handler->display->display_options['relationships']['uid1']['field'] = 'uid1';
$handler->display->display_options['relationships']['uid1']['required'] = TRUE;
/* Field: Transaction index: Balance */
$handler->display->display_options['fields']['balance']['id'] = 'balance';
$handler->display->display_options['fields']['balance']['table'] = 'mcapi_index';
$handler->display->display_options['fields']['balance']['field'] = 'balance';
$handler->display->display_options['fields']['balance']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['balance']['element_default_classes'] = FALSE;
$handler->display->display_options['fields']['balance']['hide_alter_empty'] = FALSE;
/* Field: Transaction index: Created moment */
$handler->display->display_options['fields']['created']['id'] = 'created';
$handler->display->display_options['fields']['created']['table'] = 'mcapi_index';
$handler->display->display_options['fields']['created']['field'] = 'created';
$handler->display->display_options['fields']['created']['label'] = 'Created';
$handler->display->display_options['fields']['created']['date_format'] = 'long';
/* Sort criterion: Transaction index: Created moment */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'mcapi_index';
$handler->display->display_options['sorts']['created']['field'] = 'created';
/* Contextual filter: Transaction index: 1st user */
$handler->display->display_options['arguments']['uid1']['id'] = 'uid1';
$handler->display->display_options['arguments']['uid1']['table'] = 'mcapi_index';
$handler->display->display_options['arguments']['uid1']['field'] = 'uid1';
$handler->display->display_options['arguments']['uid1']['default_action'] = 'not found';
$handler->display->display_options['arguments']['uid1']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['uid1']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['uid1']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['uid1']['summary_options']['items_per_page'] = '25';

/* Display: Running balance */
$handler = $view->new_display('block', 'Running balance', 'block_running_balance');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['block_description'] = 'balance after each transaction';
$translatables['running_balance'] = array(
  t('Master'),
  t('Running balance'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('1st user'),
  t('Balance'),
  t('Created'),
  t('All'),
  t('balance after each transaction'),
);

<<<>>>
$view = new view();
$view->name = 'comments_recent';
$view->description = 'Contains a block and a page to list recent comments; the block will automatically link to the page, which displays the comment body as well as a link to the node.';
$view->tag = 'default';
$view->base_table = 'comment';
$view->human_name = 'Recent comments';
$view->core = 0;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Recent comments';
$handler->display->display_options['use_more'] = TRUE;
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'some';
$handler->display->display_options['pager']['options']['items_per_page'] = 5;
$handler->display->display_options['style_plugin'] = 'list';
$handler->display->display_options['row_plugin'] = 'fields';
/* Relationship: Comment: Content */
$handler->display->display_options['relationships']['nid']['id'] = 'nid';
$handler->display->display_options['relationships']['nid']['table'] = 'comment';
$handler->display->display_options['relationships']['nid']['field'] = 'nid';
/* Field: Comment: Title */
$handler->display->display_options['fields']['subject']['id'] = 'subject';
$handler->display->display_options['fields']['subject']['table'] = 'comment';
$handler->display->display_options['fields']['subject']['field'] = 'subject';
$handler->display->display_options['fields']['subject']['label'] = '';
/* Field: Comment: Updated date */
$handler->display->display_options['fields']['timestamp']['id'] = 'timestamp';
$handler->display->display_options['fields']['timestamp']['table'] = 'comment';
$handler->display->display_options['fields']['timestamp']['field'] = 'changed';
$handler->display->display_options['fields']['timestamp']['label'] = '';
$handler->display->display_options['fields']['timestamp']['date_format'] = 'time ago';
/* Sort criterion: Comment: Updated date */
$handler->display->display_options['sorts']['timestamp']['id'] = 'timestamp';
$handler->display->display_options['sorts']['timestamp']['table'] = 'comment';
$handler->display->display_options['sorts']['timestamp']['field'] = 'changed';
$handler->display->display_options['sorts']['timestamp']['order'] = 'DESC';
/* Filter criterion: Content: Published or admin */
$handler->display->display_options['filters']['status_extra']['id'] = 'status_extra';
$handler->display->display_options['filters']['status_extra']['table'] = 'node';
$handler->display->display_options['filters']['status_extra']['field'] = 'status_extra';
$handler->display->display_options['filters']['status_extra']['relationship'] = 'nid';
$handler->display->display_options['filters']['status_extra']['group'] = 0;

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['defaults']['style_plugin'] = FALSE;
$handler->display->display_options['style_plugin'] = 'list';
$handler->display->display_options['defaults']['style_options'] = FALSE;
$handler->display->display_options['defaults']['row_plugin'] = FALSE;
$handler->display->display_options['row_plugin'] = 'fields';
$handler->display->display_options['row_options']['inline'] = array(
  'title' => 'title',
  'timestamp' => 'timestamp',
);
$handler->display->display_options['row_options']['separator'] = '&nbsp;';
$handler->display->display_options['defaults']['row_options'] = FALSE;
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['relationship'] = 'nid';
$handler->display->display_options['fields']['title']['label'] = 'Reply to';
/* Field: Comment: Updated date */
$handler->display->display_options['fields']['timestamp']['id'] = 'timestamp';
$handler->display->display_options['fields']['timestamp']['table'] = 'comment';
$handler->display->display_options['fields']['timestamp']['field'] = 'changed';
$handler->display->display_options['fields']['timestamp']['label'] = '';
$handler->display->display_options['fields']['timestamp']['date_format'] = 'time ago';
/* Field: Comment: Title */
$handler->display->display_options['fields']['subject']['id'] = 'subject';
$handler->display->display_options['fields']['subject']['table'] = 'comment';
$handler->display->display_options['fields']['subject']['field'] = 'subject';
$handler->display->display_options['fields']['subject']['label'] = '';
/* Field: Comment: Comment */
$handler->display->display_options['fields']['comment']['id'] = 'comment';
$handler->display->display_options['fields']['comment']['table'] = 'field_data_comment_body';
$handler->display->display_options['fields']['comment']['field'] = 'comment_body';
$handler->display->display_options['fields']['comment']['label'] = '';
$handler->display->display_options['path'] = 'comments/recent';

/* Display: Block */
$handler = $view->new_display('block', 'Block', 'block');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$translatables['comments_recent'] = array(
  t('Master'),
  t('Recent comments'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Content'),
  t('Page'),
  t('Reply to'),
  t('Block'),
);

<<<>>>
$view = new view();
$view->name = 'dlike_user_view';
$view->description = 'This is the default view provided by Facebook like Like module. You may modify it to suit your case.';
$view->tag = 'default';
$view->base_table = 'users';
$view->human_name = 'dlike_user_view';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['access']['perm'] = 'access user profiles';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['row_plugin'] = 'fields';
/* Field: User: Picture */
$handler->display->display_options['fields']['picture']['id'] = 'picture';
$handler->display->display_options['fields']['picture']['table'] = 'users';
$handler->display->display_options['fields']['picture']['field'] = 'picture';
$handler->display->display_options['fields']['picture']['label'] = '';
$handler->display->display_options['fields']['picture']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['picture']['hide_empty'] = TRUE;
$handler->display->display_options['fields']['picture']['hide_alter_empty'] = FALSE;
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['label'] = '';
$handler->display->display_options['fields']['name']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['name']['alter']['ellipsis'] = FALSE;
/* Sort criterion: User: Created date */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'users';
$handler->display->display_options['sorts']['created']['field'] = 'created';
$handler->display->display_options['sorts']['created']['order'] = 'DESC';
/* Contextual filter: User: Uid */
$handler->display->display_options['arguments']['uid']['id'] = 'uid';
$handler->display->display_options['arguments']['uid']['table'] = 'users';
$handler->display->display_options['arguments']['uid']['field'] = 'uid';
$handler->display->display_options['arguments']['uid']['default_action'] = 'not found';
$handler->display->display_options['arguments']['uid']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['uid']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['uid']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['uid']['summary_options']['items_per_page'] = '25';
/* Filter criterion: User: Active */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'users';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = '1';
$handler->display->display_options['filters']['status']['group'] = 0;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
$translatables['dlike_user_view'] = array(
  t('Master'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('All'),
);

<<<>>>
$view = new view();
$view->name = 'frontpage';
$view->description = 'Emulates the default Drupal front page; you may set the default home page path to this view to make it your front page.';
$view->tag = 'default';
$view->base_table = 'node';
$view->human_name = 'Front page';
$view->core = 0;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['row_plugin'] = 'node';
/* Sort criterion: Content: Sticky */
$handler->display->display_options['sorts']['sticky']['id'] = 'sticky';
$handler->display->display_options['sorts']['sticky']['table'] = 'node';
$handler->display->display_options['sorts']['sticky']['field'] = 'sticky';
$handler->display->display_options['sorts']['sticky']['order'] = 'DESC';
/* Sort criterion: Content: Post date */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'node';
$handler->display->display_options['sorts']['created']['field'] = 'created';
$handler->display->display_options['sorts']['created']['order'] = 'DESC';
/* Filter criterion: Content: Promoted to front page */
$handler->display->display_options['filters']['promote']['id'] = 'promote';
$handler->display->display_options['filters']['promote']['table'] = 'node';
$handler->display->display_options['filters']['promote']['field'] = 'promote';
$handler->display->display_options['filters']['promote']['value'] = '1';
$handler->display->display_options['filters']['promote']['group'] = 0;
$handler->display->display_options['filters']['promote']['expose']['operator'] = FALSE;
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = '1';
$handler->display->display_options['filters']['status']['group'] = 0;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'frontpage';

/* Display: Feed */
$handler = $view->new_display('feed', 'Feed', 'feed');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Front page feed';
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['pager']['type'] = 'some';
$handler->display->display_options['style_plugin'] = 'rss';
$handler->display->display_options['row_plugin'] = 'node_rss';
$handler->display->display_options['path'] = 'rss.xml';
$handler->display->display_options['displays'] = array(
  'default' => 'default',
  'page' => 'page',
);
$handler->display->display_options['sitename_title'] = '1';
$translatables['frontpage'] = array(
  t('Master'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Items per page'),
  t('- All -'),
  t('Offset'),
  t('« first'),
  t('‹ previous'),
  t('next ›'),
  t('last »'),
  t('Page'),
  t('Feed'),
  t('Front page feed'),
);

<<<>>>
$view = new view();
$view->name = 'glossary';
$view->description = 'A list of all content, by letter.';
$view->tag = 'default';
$view->base_table = 'node';
$view->human_name = 'Glossary';
$view->core = 0;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['use_ajax'] = TRUE;
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = 36;
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['columns'] = array(
  'title' => 'title',
  'name' => 'name',
  'changed' => 'changed',
);
$handler->display->display_options['style_options']['default'] = 'title';
$handler->display->display_options['style_options']['info'] = array(
  'title' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'name' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'changed' => array(
    'sortable' => 1,
    'separator' => '',
  ),
);
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['label'] = 'Author';
/* Field: Content: Updated date */
$handler->display->display_options['fields']['changed']['id'] = 'changed';
$handler->display->display_options['fields']['changed']['table'] = 'node';
$handler->display->display_options['fields']['changed']['field'] = 'changed';
$handler->display->display_options['fields']['changed']['label'] = 'Last update';
$handler->display->display_options['fields']['changed']['date_format'] = 'large';
/* Contextual filter: Content: Title */
$handler->display->display_options['arguments']['title']['id'] = 'title';
$handler->display->display_options['arguments']['title']['table'] = 'node';
$handler->display->display_options['arguments']['title']['field'] = 'title';
$handler->display->display_options['arguments']['title']['default_action'] = 'default';
$handler->display->display_options['arguments']['title']['exception']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['title']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['title']['default_argument_options']['argument'] = 'a';
$handler->display->display_options['arguments']['title']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['title']['specify_validation'] = TRUE;
$handler->display->display_options['arguments']['title']['glossary'] = TRUE;
$handler->display->display_options['arguments']['title']['limit'] = '1';
$handler->display->display_options['arguments']['title']['case'] = 'upper';
$handler->display->display_options['arguments']['title']['path_case'] = 'lower';

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'glossary';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'Glossary';
$handler->display->display_options['menu']['weight'] = '0';

/* Display: Attachment */
$handler = $view->new_display('attachment', 'Attachment', 'attachment');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['defaults']['arguments'] = FALSE;
/* Contextual filter: Content: Title */
$handler->display->display_options['arguments']['title']['id'] = 'title';
$handler->display->display_options['arguments']['title']['table'] = 'node';
$handler->display->display_options['arguments']['title']['field'] = 'title';
$handler->display->display_options['arguments']['title']['default_action'] = 'summary';
$handler->display->display_options['arguments']['title']['exception']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['title']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['title']['default_argument_options']['argument'] = 'a';
$handler->display->display_options['arguments']['title']['summary']['format'] = 'unformatted_summary';
$handler->display->display_options['arguments']['title']['summary_options']['items_per_page'] = '25';
$handler->display->display_options['arguments']['title']['summary_options']['inline'] = TRUE;
$handler->display->display_options['arguments']['title']['summary_options']['separator'] = ' | ';
$handler->display->display_options['arguments']['title']['specify_validation'] = TRUE;
$handler->display->display_options['arguments']['title']['glossary'] = TRUE;
$handler->display->display_options['arguments']['title']['limit'] = '1';
$handler->display->display_options['arguments']['title']['case'] = 'upper';
$handler->display->display_options['arguments']['title']['path_case'] = 'lower';
$handler->display->display_options['displays'] = array(
  'default' => 'default',
  'page' => 'page',
);
$handler->display->display_options['inherit_arguments'] = FALSE;
$translatables['glossary'] = array(
  t('Master'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Items per page'),
  t('- All -'),
  t('Offset'),
  t('« first'),
  t('‹ previous'),
  t('next ›'),
  t('last »'),
  t('Title'),
  t('Author'),
  t('Last update'),
  t('All'),
  t('Page'),
  t('Attachment'),
);

<<<>>>
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

<<<>>>
$view = new view();
$view->name = 'group_content_type';
$view->description = 'Show all nodes of a type in a group.';
$view->tag = 'likeabee';
$view->base_table = 'node';
$view->human_name = 'Group\'s Discussion - All';
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
/* Relationship: Content: Author */
$handler->display->display_options['relationships']['uid']['id'] = 'uid';
$handler->display->display_options['relationships']['uid']['table'] = 'node';
$handler->display->display_options['relationships']['uid']['field'] = 'uid';
/* Relationship: Comment: Comments of the node */
$handler->display->display_options['relationships']['cid']['id'] = 'cid';
$handler->display->display_options['relationships']['cid']['table'] = 'node';
$handler->display->display_options['relationships']['cid']['field'] = 'cid';
$handler->display->display_options['relationships']['cid']['relationship'] = 'og_membership_related_node_group';
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
/* Field: Content: Body */
$handler->display->display_options['fields']['body']['id'] = 'body';
$handler->display->display_options['fields']['body']['table'] = 'field_data_body';
$handler->display->display_options['fields']['body']['field'] = 'body';
$handler->display->display_options['fields']['body']['label'] = '';
$handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
/* Field: Content: Comment count */
$handler->display->display_options['fields']['comment_count']['id'] = 'comment_count';
$handler->display->display_options['fields']['comment_count']['table'] = 'node_comment_statistics';
$handler->display->display_options['fields']['comment_count']['field'] = 'comment_count';
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

/* Display: Video */
$handler = $view->new_display('page', 'Video', 'video');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
/* Field: Content: Video */
$handler->display->display_options['fields']['field_video_group']['id'] = 'field_video_group';
$handler->display->display_options['fields']['field_video_group']['table'] = 'field_data_field_video_group';
$handler->display->display_options['fields']['field_video_group']['field'] = 'field_video_group';
$handler->display->display_options['fields']['field_video_group']['label'] = '';
$handler->display->display_options['fields']['field_video_group']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_video_group']['click_sort_column'] = 'video_url';
$handler->display->display_options['fields']['field_video_group']['settings'] = array(
  'video_style' => 'normal',
);
/* Field: Content: Comment count */
$handler->display->display_options['fields']['comment_count']['id'] = 'comment_count';
$handler->display->display_options['fields']['comment_count']['table'] = 'node_comment_statistics';
$handler->display->display_options['fields']['comment_count']['field'] = 'comment_count';
$handler->display->display_options['defaults']['arguments'] = FALSE;
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
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = '1';
$handler->display->display_options['filters']['status']['group'] = 1;
/* Filter criterion: OG membership: Group_type */
$handler->display->display_options['filters']['group_type']['id'] = 'group_type';
$handler->display->display_options['filters']['group_type']['table'] = 'og_membership';
$handler->display->display_options['filters']['group_type']['field'] = 'group_type';
$handler->display->display_options['filters']['group_type']['relationship'] = 'og_membership_rel';
$handler->display->display_options['filters']['group_type']['value'] = array(
  'node' => 'node',
);
$handler->display->display_options['filters']['group_type']['group'] = 1;
/* Filter criterion: Content: Which Block to Show at the Main Group Page? (field_block_main) */
$handler->display->display_options['filters']['field_block_main_tid']['id'] = 'field_block_main_tid';
$handler->display->display_options['filters']['field_block_main_tid']['table'] = 'field_data_field_block_main';
$handler->display->display_options['filters']['field_block_main_tid']['field'] = 'field_block_main_tid';
$handler->display->display_options['filters']['field_block_main_tid']['relationship'] = 'og_membership_related_node_group';
$handler->display->display_options['filters']['field_block_main_tid']['value'] = array(
  16 => '16',
);
$handler->display->display_options['filters']['field_block_main_tid']['group'] = 1;
$handler->display->display_options['filters']['field_block_main_tid']['type'] = 'select';
$handler->display->display_options['filters']['field_block_main_tid']['vocabulary'] = 'block_s_group';
/* Filter criterion: Content: Type */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
  'video' => 'video',
);
$handler->display->display_options['filters']['type']['group'] = 1;
$handler->display->display_options['path'] = 'content/group/video';
$translatables['group_content_type'] = array(
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
  t('Video'),
);

<<<>>>
$view = new view();
$view->name = 'income_expenditure';
$view->description = 'two displays showing a users transactions in each direction, by period';
$view->tag = 'mcapi';
$view->base_table = 'mcapi_transactions';
$view->human_name = 'Income & Expenditure';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'date_views_pager';
$handler->display->display_options['pager']['options']['pager_position'] = 'bottom';
$handler->display->display_options['style_plugin'] = 'table';
/* No results behavior: Global: Text area */
$handler->display->display_options['empty']['area']['id'] = 'area';
$handler->display->display_options['empty']['area']['table'] = 'views';
$handler->display->display_options['empty']['area']['field'] = 'area';
$handler->display->display_options['empty']['area']['label'] = 'empty text';
$handler->display->display_options['empty']['area']['empty'] = TRUE;
$handler->display->display_options['empty']['area']['content'] = 'No transactions';
$handler->display->display_options['empty']['area']['format'] = 'editor_filtered_html';
/* Relationship: Transaction: Payee */
$handler->display->display_options['relationships']['payee']['id'] = 'payee';
$handler->display->display_options['relationships']['payee']['table'] = 'mcapi_transactions';
$handler->display->display_options['relationships']['payee']['field'] = 'payee';
$handler->display->display_options['relationships']['payee']['required'] = TRUE;
/* Relationship: Transaction: Payer */
$handler->display->display_options['relationships']['payer']['id'] = 'payer';
$handler->display->display_options['relationships']['payer']['table'] = 'mcapi_transactions';
$handler->display->display_options['relationships']['payer']['field'] = 'payer';
$handler->display->display_options['relationships']['payer']['required'] = TRUE;
/* Field: Transaction: Serial number */
$handler->display->display_options['fields']['serial']['id'] = 'serial';
$handler->display->display_options['fields']['serial']['table'] = 'mcapi_transactions';
$handler->display->display_options['fields']['serial']['field'] = 'serial';
/* Sort criterion: Transaction: Created */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'mcapi_transactions';
$handler->display->display_options['sorts']['created']['field'] = 'created';

/* Display: Income */
$handler = $view->new_display('page', 'Income', 'page');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['defaults']['header'] = FALSE;
/* Header: Global: Text area */
$handler->display->display_options['header']['area']['id'] = 'area';
$handler->display->display_options['header']['area']['table'] = 'views';
$handler->display->display_options['header']['area']['field'] = 'area';
$handler->display->display_options['header']['area']['empty'] = TRUE;
$handler->display->display_options['header']['area']['content'] = '<h4>Income</h4>';
$handler->display->display_options['header']['area']['format'] = 'editor_filtered_html';
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: Transaction: Serial number */
$handler->display->display_options['fields']['serial']['id'] = 'serial';
$handler->display->display_options['fields']['serial']['table'] = 'mcapi_transactions';
$handler->display->display_options['fields']['serial']['field'] = 'serial';
$handler->display->display_options['fields']['serial']['link_to_transaction'] = 0;
/* Field: Transaction: Created */
$handler->display->display_options['fields']['created']['id'] = 'created';
$handler->display->display_options['fields']['created']['table'] = 'mcapi_transactions';
$handler->display->display_options['fields']['created']['field'] = 'created';
$handler->display->display_options['fields']['created']['label'] = '';
$handler->display->display_options['fields']['created']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['created']['date_format'] = 'short';
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['relationship'] = 'payer';
/* Field: Transaction: Worth */
$handler->display->display_options['fields']['worth']['id'] = 'worth';
$handler->display->display_options['fields']['worth']['table'] = 'field_data_worth';
$handler->display->display_options['fields']['worth']['field'] = 'worth';
$handler->display->display_options['fields']['worth']['label'] = 'Value';
$handler->display->display_options['fields']['worth']['click_sort_column'] = 'currcode';
/* Field: Broken/missing handler */
$handler->display->display_options['fields']['transaction_description']['id'] = 'transaction_description';
$handler->display->display_options['fields']['transaction_description']['table'] = 'field_data_transaction_description';
$handler->display->display_options['fields']['transaction_description']['field'] = 'transaction_description';
$handler->display->display_options['defaults']['arguments'] = FALSE;
/* Contextual filter: Transaction: Payee */
$handler->display->display_options['arguments']['payee']['id'] = 'payee';
$handler->display->display_options['arguments']['payee']['table'] = 'mcapi_transactions';
$handler->display->display_options['arguments']['payee']['field'] = 'payee';
$handler->display->display_options['arguments']['payee']['default_action'] = 'default';
$handler->display->display_options['arguments']['payee']['default_argument_type'] = 'user';
$handler->display->display_options['arguments']['payee']['default_argument_options']['user'] = FALSE;
$handler->display->display_options['arguments']['payee']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['payee']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['payee']['summary_options']['items_per_page'] = '25';
/* Contextual filter: Date: Date (mcapi_transactions) */
$handler->display->display_options['arguments']['date_argument']['id'] = 'date_argument';
$handler->display->display_options['arguments']['date_argument']['table'] = 'mcapi_transactions';
$handler->display->display_options['arguments']['date_argument']['field'] = 'date_argument';
$handler->display->display_options['arguments']['date_argument']['default_action'] = 'default';
$handler->display->display_options['arguments']['date_argument']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['date_argument']['year_range'] = '-10:+0';
$handler->display->display_options['arguments']['date_argument']['use_fromto'] = 'no';
$handler->display->display_options['arguments']['date_argument']['date_fields'] = array(
  'mcapi_transactions.created' => 'mcapi_transactions.created',
);
$handler->display->display_options['path'] = 'user/%/income_expenditure';
$handler->display->display_options['menu']['type'] = 'tab';
$handler->display->display_options['menu']['title'] = 'Trade';
$handler->display->display_options['menu']['description'] = 'This year\'s transactions';
$handler->display->display_options['menu']['weight'] = '0';
$handler->display->display_options['menu']['context'] = 0;

/* Display: Expenditure */
$handler = $view->new_display('attachment', 'Expenditure', 'attachment_1');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['defaults']['header'] = FALSE;
/* Header: Global: Text area */
$handler->display->display_options['header']['area']['id'] = 'area';
$handler->display->display_options['header']['area']['table'] = 'views';
$handler->display->display_options['header']['area']['field'] = 'area';
$handler->display->display_options['header']['area']['empty'] = TRUE;
$handler->display->display_options['header']['area']['content'] = '<h4>Expenditure</h4>';
$handler->display->display_options['header']['area']['format'] = 'editor_filtered_html';
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: Transaction: Serial number */
$handler->display->display_options['fields']['serial']['id'] = 'serial';
$handler->display->display_options['fields']['serial']['table'] = 'mcapi_transactions';
$handler->display->display_options['fields']['serial']['field'] = 'serial';
/* Field: Transaction: Created */
$handler->display->display_options['fields']['created']['id'] = 'created';
$handler->display->display_options['fields']['created']['table'] = 'mcapi_transactions';
$handler->display->display_options['fields']['created']['field'] = 'created';
$handler->display->display_options['fields']['created']['label'] = '';
$handler->display->display_options['fields']['created']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['created']['date_format'] = 'short';
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['relationship'] = 'payee';
/* Field: Transaction: Worth */
$handler->display->display_options['fields']['worth']['id'] = 'worth';
$handler->display->display_options['fields']['worth']['table'] = 'field_data_worth';
$handler->display->display_options['fields']['worth']['field'] = 'worth';
$handler->display->display_options['fields']['worth']['label'] = 'Value';
$handler->display->display_options['fields']['worth']['alter']['alter_text'] = TRUE;
$handler->display->display_options['fields']['worth']['alter']['text'] = '-[worth]';
$handler->display->display_options['fields']['worth']['click_sort_column'] = 'currcode';
/* Field: Broken/missing handler */
$handler->display->display_options['fields']['transaction_description']['id'] = 'transaction_description';
$handler->display->display_options['fields']['transaction_description']['table'] = 'field_data_transaction_description';
$handler->display->display_options['fields']['transaction_description']['field'] = 'transaction_description';
$handler->display->display_options['defaults']['arguments'] = FALSE;
/* Contextual filter: Transaction: Payer */
$handler->display->display_options['arguments']['payer']['id'] = 'payer';
$handler->display->display_options['arguments']['payer']['table'] = 'mcapi_transactions';
$handler->display->display_options['arguments']['payer']['field'] = 'payer';
$handler->display->display_options['arguments']['payer']['default_action'] = 'default';
$handler->display->display_options['arguments']['payer']['default_argument_type'] = 'user';
$handler->display->display_options['arguments']['payer']['default_argument_options']['user'] = FALSE;
$handler->display->display_options['arguments']['payer']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['payer']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['payer']['summary_options']['items_per_page'] = '25';
/* Contextual filter: Date: Date (mcapi_transactions) */
$handler->display->display_options['arguments']['date_argument']['id'] = 'date_argument';
$handler->display->display_options['arguments']['date_argument']['table'] = 'mcapi_transactions';
$handler->display->display_options['arguments']['date_argument']['field'] = 'date_argument';
$handler->display->display_options['arguments']['date_argument']['default_action'] = 'default';
$handler->display->display_options['arguments']['date_argument']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['date_argument']['year_range'] = '-10:+0';
$handler->display->display_options['arguments']['date_argument']['granularity'] = 'year';
$handler->display->display_options['arguments']['date_argument']['use_fromto'] = 'no';
$handler->display->display_options['arguments']['date_argument']['date_fields'] = array(
  'mcapi_transactions.created' => 'mcapi_transactions.created',
);
$handler->display->display_options['displays'] = array(
  'page' => 'page',
  'default' => 0,
);
$handler->display->display_options['attachment_position'] = 'after';
$translatables['income_expenditure'] = array(
  t('Master'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('empty text'),
  t('No transactions'),
  t('Payee'),
  t('Payer'),
  t('Serial number'),
  t('Income'),
  t('<h4>Income</h4>'),
  t('Name'),
  t('Value'),
  t('Broken handler field_data_transaction_description.transaction_description'),
  t('All'),
  t('Expenditure'),
  t('<h4>Expenditure</h4>'),
  t('-[worth]'),
);

<<<>>>
$view = new view();
$view->name = 'location_directory';
$view->description = 'Location directory filtered by arguments in the url.';
$view->tag = '';
$view->base_table = 'node';
$view->human_name = '';
$view->core = 0;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Defaults */
$handler = $view->new_display('default', 'Defaults', 'default');
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['access']['perm'] = 'view location directory';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['grouping'] = '';
$handler->display->display_options['style_options']['columns'] = array(
  'title' => 'title',
  'street' => 'street',
  'city' => 'city',
  'province' => 'province',
  'postal_code' => 'postal_code',
  'country' => 'country',
);
$handler->display->display_options['style_options']['default'] = '-1';
$handler->display->display_options['style_options']['info'] = array(
  'title' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'street' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'city' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'province' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'postal_code' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'country' => array(
    'sortable' => 1,
    'separator' => '',
  ),
);
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
/* Field: Location: Street */
$handler->display->display_options['fields']['street']['id'] = 'street';
$handler->display->display_options['fields']['street']['table'] = 'location';
$handler->display->display_options['fields']['street']['field'] = 'street';
/* Field: Location: City */
$handler->display->display_options['fields']['city']['id'] = 'city';
$handler->display->display_options['fields']['city']['table'] = 'location';
$handler->display->display_options['fields']['city']['field'] = 'city';
/* Field: Location: Province */
$handler->display->display_options['fields']['province']['id'] = 'province';
$handler->display->display_options['fields']['province']['table'] = 'location';
$handler->display->display_options['fields']['province']['field'] = 'province';
/* Field: Location: Postal Code */
$handler->display->display_options['fields']['postal_code']['id'] = 'postal_code';
$handler->display->display_options['fields']['postal_code']['table'] = 'location';
$handler->display->display_options['fields']['postal_code']['field'] = 'postal_code';
/* Field: Location: Country */
$handler->display->display_options['fields']['country']['id'] = 'country';
$handler->display->display_options['fields']['country']['table'] = 'location';
$handler->display->display_options['fields']['country']['field'] = 'country';
/* Contextual filter: Location: Country */
$handler->display->display_options['arguments']['country']['id'] = 'country';
$handler->display->display_options['arguments']['country']['table'] = 'location';
$handler->display->display_options['arguments']['country']['field'] = 'country';
$handler->display->display_options['arguments']['country']['default_action'] = 'summary';
$handler->display->display_options['arguments']['country']['exception']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['country']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['country']['title'] = '%1';
$handler->display->display_options['arguments']['country']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['country']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['country']['summary_options']['items_per_page'] = '25';
$handler->display->display_options['arguments']['country']['specify_validation'] = TRUE;
/* Contextual filter: Location: Province */
$handler->display->display_options['arguments']['province']['id'] = 'province';
$handler->display->display_options['arguments']['province']['table'] = 'location';
$handler->display->display_options['arguments']['province']['field'] = 'province';
$handler->display->display_options['arguments']['province']['default_action'] = 'summary';
$handler->display->display_options['arguments']['province']['exception']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['province']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['province']['title'] = '%2';
$handler->display->display_options['arguments']['province']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['province']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['province']['summary_options']['items_per_page'] = '25';
$handler->display->display_options['arguments']['province']['specify_validation'] = TRUE;
/* Contextual filter: Location: City */
$handler->display->display_options['arguments']['city']['id'] = 'city';
$handler->display->display_options['arguments']['city']['table'] = 'location';
$handler->display->display_options['arguments']['city']['field'] = 'city';
$handler->display->display_options['arguments']['city']['default_action'] = 'summary';
$handler->display->display_options['arguments']['city']['exception']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['city']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['city']['title'] = '%3';
$handler->display->display_options['arguments']['city']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['city']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['city']['summary_options']['items_per_page'] = '25';
$handler->display->display_options['arguments']['city']['specify_validation'] = TRUE;
$handler->display->display_options['arguments']['city']['glossary'] = TRUE;
$handler->display->display_options['arguments']['city']['limit'] = '1';
/* Filter criterion: Content: Published or admin */
$handler->display->display_options['filters']['status_extra']['id'] = 'status_extra';
$handler->display->display_options['filters']['status_extra']['table'] = 'node';
$handler->display->display_options['filters']['status_extra']['field'] = 'status_extra';
$handler->display->display_options['filters']['status_extra']['group'] = '0';
$handler->display->display_options['filters']['status_extra']['expose']['operator'] = FALSE;
/* Filter criterion: Location: Lid */
$handler->display->display_options['filters']['lid']['id'] = 'lid';
$handler->display->display_options['filters']['lid']['table'] = 'location';
$handler->display->display_options['filters']['lid']['field'] = 'lid';
$handler->display->display_options['filters']['lid']['operator'] = 'not empty';
$handler->display->display_options['filters']['lid']['group'] = '0';
$handler->display->display_options['filters']['lid']['expose']['operator'] = FALSE;

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page_1');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Locations';
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'location/directory';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'Locations';
$handler->display->display_options['menu']['weight'] = '0';
$translatables['location_directory'] = array(
  t('Defaults'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Title'),
  t('Street'),
  t('City'),
  t('Province'),
  t('Postal Code'),
  t('Country'),
  t('All'),
  t('%1'),
  t('%2'),
  t('%3'),
  t('Page'),
  t('Locations'),
);

<<<>>>
$view = new view();
$view->name = 'location_table';
$view->description = 'Node location table.';
$view->tag = '';
$view->base_table = 'node';
$view->human_name = '';
$view->core = 0;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Defaults */
$handler = $view->new_display('default', 'Defaults', 'default');
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['access']['perm'] = 'view node location table';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['grouping'] = '';
$handler->display->display_options['style_options']['columns'] = array(
  'title' => 'title',
  'street' => 'street',
  'city' => 'city',
  'province' => 'province',
  'postal_code' => 'postal_code',
  'country' => 'country',
);
$handler->display->display_options['style_options']['default'] = '-1';
$handler->display->display_options['style_options']['info'] = array(
  'title' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'street' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'city' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'province' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'postal_code' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'country' => array(
    'sortable' => 1,
    'separator' => '',
  ),
);
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
/* Field: Location: Street */
$handler->display->display_options['fields']['street']['id'] = 'street';
$handler->display->display_options['fields']['street']['table'] = 'location';
$handler->display->display_options['fields']['street']['field'] = 'street';
/* Field: Location: City */
$handler->display->display_options['fields']['city']['id'] = 'city';
$handler->display->display_options['fields']['city']['table'] = 'location';
$handler->display->display_options['fields']['city']['field'] = 'city';
/* Field: Location: Province */
$handler->display->display_options['fields']['province']['id'] = 'province';
$handler->display->display_options['fields']['province']['table'] = 'location';
$handler->display->display_options['fields']['province']['field'] = 'province';
/* Field: Location: Postal Code */
$handler->display->display_options['fields']['postal_code']['id'] = 'postal_code';
$handler->display->display_options['fields']['postal_code']['table'] = 'location';
$handler->display->display_options['fields']['postal_code']['field'] = 'postal_code';
/* Field: Location: Country */
$handler->display->display_options['fields']['country']['id'] = 'country';
$handler->display->display_options['fields']['country']['table'] = 'location';
$handler->display->display_options['fields']['country']['field'] = 'country';
/* Filter criterion: Content: Published or admin */
$handler->display->display_options['filters']['status_extra']['id'] = 'status_extra';
$handler->display->display_options['filters']['status_extra']['table'] = 'node';
$handler->display->display_options['filters']['status_extra']['field'] = 'status_extra';
$handler->display->display_options['filters']['status_extra']['group'] = '0';
$handler->display->display_options['filters']['status_extra']['expose']['operator'] = FALSE;
/* Filter criterion: Location: Lid */
$handler->display->display_options['filters']['lid']['id'] = 'lid';
$handler->display->display_options['filters']['lid']['table'] = 'location';
$handler->display->display_options['filters']['lid']['field'] = 'lid';
$handler->display->display_options['filters']['lid']['operator'] = 'not empty';
$handler->display->display_options['filters']['lid']['group'] = '0';
$handler->display->display_options['filters']['lid']['expose']['operator'] = FALSE;

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page_1');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'location/views';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'Location table';
$handler->display->display_options['menu']['weight'] = '0';
$translatables['location_table'] = array(
  t('Defaults'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Title'),
  t('Street'),
  t('City'),
  t('Province'),
  t('Postal Code'),
  t('Country'),
  t('Page'),
);

<<<>>>
$view = new view();
$view->name = 'og_all_user_group_content';
$view->description = 'Show the content from all the group the current user belongs to';
$view->tag = 'og';
$view->base_table = 'node';
$view->human_name = 'OG all user group content';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['style_options']['grouping'] = 'title_1';
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
/* Field: Content: Title */
$handler->display->display_options['fields']['title_1']['id'] = 'title_1';
$handler->display->display_options['fields']['title_1']['table'] = 'node';
$handler->display->display_options['fields']['title_1']['field'] = 'title';
$handler->display->display_options['fields']['title_1']['relationship'] = 'og_membership_related_node_group';
$handler->display->display_options['fields']['title_1']['label'] = '';
$handler->display->display_options['fields']['title_1']['exclude'] = TRUE;
$handler->display->display_options['fields']['title_1']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['title_1']['hide_alter_empty'] = FALSE;
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
/* Sort criterion: Content: Post date */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'node';
$handler->display->display_options['sorts']['created']['field'] = 'created';
$handler->display->display_options['sorts']['created']['order'] = 'DESC';
/* Sort criterion: Content: Title */
$handler->display->display_options['sorts']['title']['id'] = 'title';
$handler->display->display_options['sorts']['title']['table'] = 'node';
$handler->display->display_options['sorts']['title']['field'] = 'title';
/* Contextual filter: OG membership: Group ID */
$handler->display->display_options['arguments']['gid']['id'] = 'gid';
$handler->display->display_options['arguments']['gid']['table'] = 'og_membership';
$handler->display->display_options['arguments']['gid']['field'] = 'gid';
$handler->display->display_options['arguments']['gid']['relationship'] = 'og_membership_rel';
$handler->display->display_options['arguments']['gid']['default_action'] = 'default';
$handler->display->display_options['arguments']['gid']['default_argument_type'] = 'og_user_groups';
$handler->display->display_options['arguments']['gid']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['gid']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['gid']['summary_options']['items_per_page'] = '25';
$handler->display->display_options['arguments']['gid']['break_phrase'] = TRUE;
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 0;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: OG membership: State */
$handler->display->display_options['filters']['state']['id'] = 'state';
$handler->display->display_options['filters']['state']['table'] = 'og_membership';
$handler->display->display_options['filters']['state']['field'] = 'state';
$handler->display->display_options['filters']['state']['relationship'] = 'og_membership_rel';
$handler->display->display_options['filters']['state']['value'] = array(
  1 => '1',
);
/* Filter criterion: OG membership: Group_type */
$handler->display->display_options['filters']['group_type']['id'] = 'group_type';
$handler->display->display_options['filters']['group_type']['table'] = 'og_membership';
$handler->display->display_options['filters']['group_type']['field'] = 'group_type';
$handler->display->display_options['filters']['group_type']['relationship'] = 'og_membership_rel';
$handler->display->display_options['filters']['group_type']['value'] = array(
  'node' => 'node',
);

/* Display: Content pane */
$handler = $view->new_display('panel_pane', 'Content pane', 'panel_pane_1');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$translatables['og_all_user_group_content'] = array(
  t('Master'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Items per page'),
  t('- All -'),
  t('Offset'),
  t('« first'),
  t('‹ previous'),
  t('next ›'),
  t('last »'),
  t('OG membership from node'),
  t('Group node from OG membership'),
  t('All'),
  t('Content pane'),
  t('View panes'),
);

<<<>>>
$view = new view();
$view->name = 'og_extras_groups';
$view->description = 'A listing of all node groups.';
$view->tag = 'OG Extras';
$view->base_table = 'node';
$view->human_name = 'OG Extras Groups';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Groups';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = '10';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['columns'] = array(
  'title' => 'title',
  'body' => 'body',
  'name' => 'name',
  'created' => 'created',
  'group_group' => 'group_group',
);
$handler->display->display_options['style_options']['default'] = 'title';
$handler->display->display_options['style_options']['info'] = array(
  'title' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => 'views-align-left',
    'separator' => '',
    'empty_column' => 0,
  ),
  'body' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => 'views-align-left',
    'separator' => '',
    'empty_column' => 0,
  ),
  'name' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => 'views-align-left',
    'separator' => '',
    'empty_column' => 0,
  ),
  'created' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => 'views-align-left',
    'separator' => '',
    'empty_column' => 0,
  ),
  'group_group' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => 'views-align-left',
    'separator' => '',
    'empty_column' => 0,
  ),
);
/* Relationship: OG membership: OG membership from Node */
$handler->display->display_options['relationships']['og_membership_rel']['id'] = 'og_membership_rel';
$handler->display->display_options['relationships']['og_membership_rel']['table'] = 'node';
$handler->display->display_options['relationships']['og_membership_rel']['field'] = 'og_membership_rel';
/* Relationship: Content: Author */
$handler->display->display_options['relationships']['uid']['id'] = 'uid';
$handler->display->display_options['relationships']['uid']['table'] = 'node';
$handler->display->display_options['relationships']['uid']['field'] = 'uid';
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = 'Team';
$handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
/* Field: Content: Body */
$handler->display->display_options['fields']['body']['id'] = 'body';
$handler->display->display_options['fields']['body']['table'] = 'field_data_body';
$handler->display->display_options['fields']['body']['field'] = 'body';
$handler->display->display_options['fields']['body']['label'] = 'Description';
$handler->display->display_options['fields']['body']['alter']['max_length'] = '300';
$handler->display->display_options['fields']['body']['alter']['trim'] = TRUE;
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['relationship'] = 'uid';
$handler->display->display_options['fields']['name']['label'] = 'Manager';
/* Field: Content: Post date */
$handler->display->display_options['fields']['created']['id'] = 'created';
$handler->display->display_options['fields']['created']['table'] = 'node';
$handler->display->display_options['fields']['created']['field'] = 'created';
$handler->display->display_options['fields']['created']['label'] = 'Created';
$handler->display->display_options['fields']['created']['date_format'] = 'time ago';
/* Field: Content: Group */
$handler->display->display_options['fields']['group_group']['id'] = 'group_group';
$handler->display->display_options['fields']['group_group']['table'] = 'field_data_group_group';
$handler->display->display_options['fields']['group_group']['field'] = 'group_group';
$handler->display->display_options['fields']['group_group']['label'] = 'Join Link';
$handler->display->display_options['fields']['group_group']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['group_group']['type'] = 'og_group_subscribe';
$handler->display->display_options['fields']['group_group']['settings'] = array(
  'field_name' => '0',
);
/* Sort criterion: Content: Post date */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'node';
$handler->display->display_options['sorts']['created']['field'] = 'created';
$handler->display->display_options['sorts']['created']['order'] = 'DESC';
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: Content: Type */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
  'group' => 'group',
);

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'groups';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'Groups';
$handler->display->display_options['menu']['weight'] = '10';
$handler->display->display_options['menu']['name'] = 'main-menu';
$handler->display->display_options['menu']['context'] = 0;
$translatables['og_extras_groups'] = array(
  t('Master'),
  t('Groups'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Items per page'),
  t('- All -'),
  t('Offset'),
  t('« first'),
  t('‹ previous'),
  t('next ›'),
  t('last »'),
  t('OG membership from node'),
  t('author'),
  t('Team'),
  t('Description'),
  t('Manager'),
  t('Created'),
  t('Join Link'),
  t('Page'),
);

<<<>>>
$view = new view();
$view->name = 'og_extras_members';
$view->description = 'Group members.';
$view->tag = 'OG Extras';
$view->base_table = 'users';
$view->human_name = 'OG Extras group members';
$view->core = 0;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Defaults */
$handler = $view->new_display('default', 'Defaults', 'default');
$handler->display->display_options['use_more'] = TRUE;
$handler->display->display_options['use_more_always'] = TRUE;
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'mini';
$handler->display->display_options['pager']['options']['items_per_page'] = '5';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['pager']['options']['id'] = '0';
$handler->display->display_options['style_plugin'] = 'grid';
$handler->display->display_options['row_plugin'] = 'fields';
/* Relationship: OG membership: OG membership from User */
$handler->display->display_options['relationships']['og_membership_rel']['id'] = 'og_membership_rel';
$handler->display->display_options['relationships']['og_membership_rel']['table'] = 'users';
$handler->display->display_options['relationships']['og_membership_rel']['field'] = 'og_membership_rel';
/* Field: User: Picture */
$handler->display->display_options['fields']['picture']['id'] = 'picture';
$handler->display->display_options['fields']['picture']['table'] = 'users';
$handler->display->display_options['fields']['picture']['field'] = 'picture';
$handler->display->display_options['fields']['picture']['label'] = '';
$handler->display->display_options['fields']['picture']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['picture']['image_style'] = 'thumbnail';
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['label'] = '';
/* Sort criterion: OG membership: Created */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'og_membership';
$handler->display->display_options['sorts']['created']['field'] = 'created';
$handler->display->display_options['sorts']['created']['relationship'] = 'og_membership_rel';
$handler->display->display_options['sorts']['created']['order'] = 'DESC';
/* Contextual filter: OG membership: Group ID */
$handler->display->display_options['arguments']['gid']['id'] = 'gid';
$handler->display->display_options['arguments']['gid']['table'] = 'og_membership';
$handler->display->display_options['arguments']['gid']['field'] = 'gid';
$handler->display->display_options['arguments']['gid']['relationship'] = 'og_membership_rel';
$handler->display->display_options['arguments']['gid']['default_action'] = 'default';
$handler->display->display_options['arguments']['gid']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['gid']['title'] = '%1 members';
$handler->display->display_options['arguments']['gid']['default_argument_type'] = 'og_context';
$handler->display->display_options['arguments']['gid']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['gid']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['gid']['summary_options']['items_per_page'] = '25';
$handler->display->display_options['arguments']['gid']['specify_validation'] = TRUE;
$handler->display->display_options['arguments']['gid']['validate']['type'] = 'og';
/* Filter criterion: User: Active */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'users';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = '1';
/* Filter criterion: OG membership: State */
$handler->display->display_options['filters']['state']['id'] = 'state';
$handler->display->display_options['filters']['state']['table'] = 'og_membership';
$handler->display->display_options['filters']['state']['field'] = 'state';
$handler->display->display_options['filters']['state']['relationship'] = 'og_membership_rel';
$handler->display->display_options['filters']['state']['value'] = array(
  1 => '1',
);

/* Display: Block */
$handler = $view->new_display('block', 'Block', 'block_1');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['defaults']['use_more'] = FALSE;
$handler->display->display_options['use_more'] = TRUE;
$handler->display->display_options['defaults']['pager'] = FALSE;
$handler->display->display_options['pager']['type'] = 'some';
$handler->display->display_options['pager']['options']['items_per_page'] = '5';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['defaults']['style_plugin'] = FALSE;
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['defaults']['style_options'] = FALSE;
$handler->display->display_options['defaults']['row_plugin'] = FALSE;
$handler->display->display_options['row_plugin'] = 'fields';
$handler->display->display_options['defaults']['row_options'] = FALSE;
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['label'] = '';

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page_1');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'node/%/members';
$handler->display->display_options['menu']['type'] = 'tab';
$handler->display->display_options['menu']['title'] = 'Members';
$handler->display->display_options['menu']['description'] = 'Group members';
$handler->display->display_options['menu']['weight'] = '1';
$handler->display->display_options['menu']['context'] = 0;
$translatables['og_extras_members'] = array(
  t('Defaults'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Items per page'),
  t('- All -'),
  t('Offset'),
  t('« first'),
  t('‹ previous'),
  t('next ›'),
  t('last »'),
  t('OG membership from user'),
  t('All'),
  t('%1 members'),
  t('Block'),
  t('Page'),
);

<<<>>>
$view = new view();
$view->name = 'og_extras_nodes';
$view->description = 'Show all content (nodes) of a group.';
$view->tag = 'OG Extras';
$view->base_table = 'node';
$view->human_name = 'OG Extras content';
$view->core = 0;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Defaults */
$handler = $view->new_display('default', 'Defaults', 'default');
$handler->display->display_options['title'] = 'Latest News';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['row_plugin'] = 'node';
/* No results behavior: Global: Text area */
$handler->display->display_options['empty']['area']['id'] = 'area';
$handler->display->display_options['empty']['area']['table'] = 'views';
$handler->display->display_options['empty']['area']['field'] = 'area';
$handler->display->display_options['empty']['area']['content'] = 'There is no content in this group.';
/* Relationship: OG membership: OG membership from Node */
$handler->display->display_options['relationships']['og_membership_rel']['id'] = 'og_membership_rel';
$handler->display->display_options['relationships']['og_membership_rel']['table'] = 'node';
$handler->display->display_options['relationships']['og_membership_rel']['field'] = 'og_membership_rel';
/* Sort criterion: Content: Post date */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'node';
$handler->display->display_options['sorts']['created']['field'] = 'created';
$handler->display->display_options['sorts']['created']['order'] = 'DESC';
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

/* Display: Feed */
$handler = $view->new_display('feed', 'Feed', 'feed_1');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['pager']['type'] = 'some';
$handler->display->display_options['style_plugin'] = 'rss';
$handler->display->display_options['row_plugin'] = 'node_rss';
$handler->display->display_options['path'] = 'node/%/feed';
$handler->display->display_options['displays'] = array(
  'default' => 'default',
  'entity_view_1' => 'entity_view_1',
);
$translatables['og_extras_nodes'] = array(
  t('Defaults'),
  t('Latest News'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Items per page'),
  t('- All -'),
  t('Offset'),
  t('« first'),
  t('‹ previous'),
  t('next ›'),
  t('last »'),
  t('There is no content in this group.'),
  t('OG membership from node'),
  t('All'),
  t('Feed'),
);

<<<>>>
$view = new view();
$view->name = 'og_members';
$view->description = 'Newest group members.';
$view->tag = 'og';
$view->base_table = 'users';
$view->human_name = 'OG members';
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
$handler->display->display_options['pager']['type'] = 'some';
$handler->display->display_options['pager']['options']['items_per_page'] = '5';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['row_plugin'] = 'fields';
/* Relationship: OG membership: OG membership from User */
$handler->display->display_options['relationships']['og_membership_rel']['id'] = 'og_membership_rel';
$handler->display->display_options['relationships']['og_membership_rel']['table'] = 'users';
$handler->display->display_options['relationships']['og_membership_rel']['field'] = 'og_membership_rel';
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['label'] = '';
/* Sort criterion: OG membership: Created */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'og_membership';
$handler->display->display_options['sorts']['created']['field'] = 'created';
$handler->display->display_options['sorts']['created']['relationship'] = 'og_membership_rel';
$handler->display->display_options['sorts']['created']['order'] = 'DESC';
/* Contextual filter: OG membership: Group ID */
$handler->display->display_options['arguments']['gid']['id'] = 'gid';
$handler->display->display_options['arguments']['gid']['table'] = 'og_membership';
$handler->display->display_options['arguments']['gid']['field'] = 'gid';
$handler->display->display_options['arguments']['gid']['relationship'] = 'og_membership_rel';
$handler->display->display_options['arguments']['gid']['default_action'] = 'not found';
$handler->display->display_options['arguments']['gid']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['gid']['title'] = '%1 members';
$handler->display->display_options['arguments']['gid']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['gid']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['gid']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['gid']['summary_options']['items_per_page'] = '25';
$handler->display->display_options['arguments']['gid']['specify_validation'] = TRUE;
$handler->display->display_options['arguments']['gid']['validate']['type'] = 'og';
/* Filter criterion: User: Active */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'users';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = '1';
/* Filter criterion: OG membership: State */
$handler->display->display_options['filters']['state']['id'] = 'state';
$handler->display->display_options['filters']['state']['table'] = 'og_membership';
$handler->display->display_options['filters']['state']['field'] = 'state';
$handler->display->display_options['filters']['state']['relationship'] = 'og_membership_rel';
$handler->display->display_options['filters']['state']['value'] = array(
  1 => '1',
);

/* Display: Block */
$handler = $view->new_display('block', 'Block', 'block_1');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;

/* Display: Content pane */
$handler = $view->new_display('panel_pane', 'Content pane', 'panel_pane_1');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['pane_title'] = 'OG members';
$handler->display->display_options['allow']['use_pager'] = 0;
$handler->display->display_options['allow']['items_per_page'] = 0;
$handler->display->display_options['allow']['offset'] = 0;
$handler->display->display_options['allow']['link_to_view'] = 0;
$handler->display->display_options['allow']['more_link'] = 0;
$handler->display->display_options['allow']['path_override'] = 0;
$handler->display->display_options['allow']['title_override'] = 'title_override';
$handler->display->display_options['allow']['exposed_form'] = 0;
$handler->display->display_options['allow']['fields_override'] = 0;
$handler->display->display_options['argument_input'] = array(
  'gid' => array(
    'type' => 'context',
    'context' => 'entity:node.nid',
    'context_optional' => 0,
    'panel' => '0',
    'fixed' => '',
    'label' => 'OG membership: Group ID',
  ),
);
$translatables['og_members'] = array(
  t('Defaults'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('OG membership from user'),
  t('All'),
  t('%1 members'),
  t('Block'),
  t('Content pane'),
  t('OG members'),
  t('View panes'),
);

<<<>>>
$view = new view();
$view->name = 'og_members_admin';
$view->description = '';
$view->tag = 'og';
$view->base_table = 'users';
$view->human_name = 'OG members admin';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'OG members admin';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = '25';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['pager']['options']['id'] = '0';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['columns'] = array(
  'views_bulk_operations' => 'views_bulk_operations',
  'name' => 'name',
  'state' => 'state',
  'og_roles' => 'og_roles',
  'created' => 'created',
  'og_membership_request' => 'og_membership_request',
);
$handler->display->display_options['style_options']['default'] = 'name';
$handler->display->display_options['style_options']['info'] = array(
  'views_bulk_operations' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'name' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'state' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'og_roles' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'created' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'og_membership_request' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
);
/* Header: OG membership: Group membership overview */
$handler->display->display_options['header']['og_membership_overview']['id'] = 'og_membership_overview';
$handler->display->display_options['header']['og_membership_overview']['table'] = 'og_membership';
$handler->display->display_options['header']['og_membership_overview']['field'] = 'og_membership_overview';
$handler->display->display_options['header']['og_membership_overview']['manager'] = 1;
$handler->display->display_options['header']['og_membership_overview']['total_members_1'] = 0;
$handler->display->display_options['header']['og_membership_overview']['total_members_2'] = 0;
$handler->display->display_options['header']['og_membership_overview']['total_members_3'] = 0;
$handler->display->display_options['header']['og_membership_overview']['total_members'] = 1;
$handler->display->display_options['header']['og_membership_overview']['total_content'] = 1;
/* No results behavior: Global: Text area */
$handler->display->display_options['empty']['area']['id'] = 'area';
$handler->display->display_options['empty']['area']['table'] = 'views';
$handler->display->display_options['empty']['area']['field'] = 'area';
$handler->display->display_options['empty']['area']['content'] = 'No people found matching the search criteria.';
$handler->display->display_options['empty']['area']['format'] = 'filtered_html';
/* Relationship: OG membership: OG membership from User */
$handler->display->display_options['relationships']['og_membership_rel']['id'] = 'og_membership_rel';
$handler->display->display_options['relationships']['og_membership_rel']['table'] = 'users';
$handler->display->display_options['relationships']['og_membership_rel']['field'] = 'og_membership_rel';
/* Field: Bulk operations: OG membership */
$handler->display->display_options['fields']['views_bulk_operations']['id'] = 'views_bulk_operations';
$handler->display->display_options['fields']['views_bulk_operations']['table'] = 'og_membership';
$handler->display->display_options['fields']['views_bulk_operations']['field'] = 'views_bulk_operations';
$handler->display->display_options['fields']['views_bulk_operations']['relationship'] = 'og_membership_rel';
$handler->display->display_options['fields']['views_bulk_operations']['hide_alter_empty'] = FALSE;
$handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['display_type'] = '0';
$handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['enable_select_all_pages'] = 1;
$handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['force_single'] = 0;
$handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['display_result'] = 1;
$handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['entity_load_capacity'] = '10';
$handler->display->display_options['fields']['views_bulk_operations']['vbo_operations'] = array(
  'action::views_bulk_operations_delete_item' => array(
    'selected' => 0,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::system_message_action' => array(
    'selected' => 0,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::views_bulk_operations_script_action' => array(
    'selected' => 0,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::og_user_roles_action' => array(
    'selected' => 1,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::views_bulk_operations_argument_selector_action' => array(
    'selected' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
    'settings' => array(
      'url' => '',
    ),
  ),
  'action::system_goto_action' => array(
    'selected' => 0,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::og_membership_delete_action' => array(
    'selected' => 1,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::system_send_email_action' => array(
    'selected' => 0,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
  'action::og_set_state_action' => array(
    'selected' => 1,
    'use_queue' => 0,
    'skip_confirmation' => 0,
    'override_label' => 0,
    'label' => '',
  ),
);
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['name']['alter']['ellipsis'] = FALSE;
/* Field: OG membership: State */
$handler->display->display_options['fields']['state']['id'] = 'state';
$handler->display->display_options['fields']['state']['table'] = 'og_membership';
$handler->display->display_options['fields']['state']['field'] = 'state';
$handler->display->display_options['fields']['state']['relationship'] = 'og_membership_rel';
/* Field: OG membership: OG user roles in group */
$handler->display->display_options['fields']['og_roles']['id'] = 'og_roles';
$handler->display->display_options['fields']['og_roles']['table'] = 'og_membership';
$handler->display->display_options['fields']['og_roles']['field'] = 'og_roles';
$handler->display->display_options['fields']['og_roles']['relationship'] = 'og_membership_rel';
$handler->display->display_options['fields']['og_roles']['label'] = 'Roles';
$handler->display->display_options['fields']['og_roles']['type'] = 'ul';
/* Field: OG membership: Created */
$handler->display->display_options['fields']['created']['id'] = 'created';
$handler->display->display_options['fields']['created']['table'] = 'og_membership';
$handler->display->display_options['fields']['created']['field'] = 'created';
$handler->display->display_options['fields']['created']['relationship'] = 'og_membership_rel';
$handler->display->display_options['fields']['created']['label'] = 'Member since';
$handler->display->display_options['fields']['created']['date_format'] = 'time ago';
/* Field: OG membership: Request message */
$handler->display->display_options['fields']['og_membership_request']['id'] = 'og_membership_request';
$handler->display->display_options['fields']['og_membership_request']['table'] = 'field_data_og_membership_request';
$handler->display->display_options['fields']['og_membership_request']['field'] = 'og_membership_request';
$handler->display->display_options['fields']['og_membership_request']['relationship'] = 'og_membership_rel';
/* Sort criterion: User: Name */
$handler->display->display_options['sorts']['name']['id'] = 'name';
$handler->display->display_options['sorts']['name']['table'] = 'users';
$handler->display->display_options['sorts']['name']['field'] = 'name';
/* Contextual filter: OG membership: Group_type */
$handler->display->display_options['arguments']['group_type']['id'] = 'group_type';
$handler->display->display_options['arguments']['group_type']['table'] = 'og_membership';
$handler->display->display_options['arguments']['group_type']['field'] = 'group_type';
$handler->display->display_options['arguments']['group_type']['relationship'] = 'og_membership_rel';
$handler->display->display_options['arguments']['group_type']['default_action'] = 'not found';
$handler->display->display_options['arguments']['group_type']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['group_type']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['group_type']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['group_type']['summary_options']['items_per_page'] = '25';
$handler->display->display_options['arguments']['group_type']['limit'] = '0';
/* Contextual filter: OG membership: Group ID */
$handler->display->display_options['arguments']['gid']['id'] = 'gid';
$handler->display->display_options['arguments']['gid']['table'] = 'og_membership';
$handler->display->display_options['arguments']['gid']['field'] = 'gid';
$handler->display->display_options['arguments']['gid']['relationship'] = 'og_membership_rel';
$handler->display->display_options['arguments']['gid']['default_action'] = 'not found';
$handler->display->display_options['arguments']['gid']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['gid']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['gid']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['gid']['summary_options']['items_per_page'] = '25';
/* Filter criterion: User: Active */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'users';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = '1';
$handler->display->display_options['filters']['status']['group'] = 0;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: OG membership: State */
$handler->display->display_options['filters']['state']['id'] = 'state';
$handler->display->display_options['filters']['state']['table'] = 'og_membership';
$handler->display->display_options['filters']['state']['field'] = 'state';
$handler->display->display_options['filters']['state']['relationship'] = 'og_membership_rel';
$handler->display->display_options['filters']['state']['exposed'] = TRUE;
$handler->display->display_options['filters']['state']['expose']['operator_id'] = 'state_op';
$handler->display->display_options['filters']['state']['expose']['label'] = 'State';
$handler->display->display_options['filters']['state']['expose']['operator'] = 'state_op';
$handler->display->display_options['filters']['state']['expose']['identifier'] = 'state';
/* Filter criterion: User: Name */
$handler->display->display_options['filters']['uid']['id'] = 'uid';
$handler->display->display_options['filters']['uid']['table'] = 'users';
$handler->display->display_options['filters']['uid']['field'] = 'uid';
$handler->display->display_options['filters']['uid']['value'] = '';
$handler->display->display_options['filters']['uid']['exposed'] = TRUE;
$handler->display->display_options['filters']['uid']['expose']['operator_id'] = 'uid_op';
$handler->display->display_options['filters']['uid']['expose']['label'] = 'Name';
$handler->display->display_options['filters']['uid']['expose']['operator'] = 'uid_op';
$handler->display->display_options['filters']['uid']['expose']['identifier'] = 'uid';
$translatables['og_members_admin'] = array(
  t('Master'),
  t('OG members admin'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Items per page'),
  t('- All -'),
  t('Offset'),
  t('« first'),
  t('‹ previous'),
  t('next ›'),
  t('last »'),
  t('No people found matching the search criteria.'),
  t('OG membership from user'),
  t('OG membership'),
  t('Name'),
  t('State'),
  t('Roles'),
  t('Member since'),
  t('Request message'),
  t('All'),
);

<<<>>>
$view = new view();
$view->name = 'og_nodes';
$view->description = 'Show all content (nodes) of a group.';
$view->tag = 'og';
$view->base_table = 'node';
$view->human_name = 'OG content';
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
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['row_plugin'] = 'node';
/* No results behavior: Global: Text area */
$handler->display->display_options['empty']['area']['id'] = 'area';
$handler->display->display_options['empty']['area']['table'] = 'views';
$handler->display->display_options['empty']['area']['field'] = 'area';
$handler->display->display_options['empty']['area']['content'] = 'There is no content in this group.';
/* Relationship: OG membership: OG membership from Node */
$handler->display->display_options['relationships']['og_membership_rel']['id'] = 'og_membership_rel';
$handler->display->display_options['relationships']['og_membership_rel']['table'] = 'node';
$handler->display->display_options['relationships']['og_membership_rel']['field'] = 'og_membership_rel';
/* Sort criterion: Content: Post date */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'node';
$handler->display->display_options['sorts']['created']['field'] = 'created';
$handler->display->display_options['sorts']['created']['order'] = 'DESC';
/* Contextual filter: OG membership: Group ID */
$handler->display->display_options['arguments']['gid']['id'] = 'gid';
$handler->display->display_options['arguments']['gid']['table'] = 'og_membership';
$handler->display->display_options['arguments']['gid']['field'] = 'gid';
$handler->display->display_options['arguments']['gid']['relationship'] = 'og_membership_rel';
$handler->display->display_options['arguments']['gid']['default_action'] = 'not found';
$handler->display->display_options['arguments']['gid']['default_argument_type'] = 'fixed';
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

/* Display: Content pane */
$handler = $view->new_display('panel_pane', 'Content pane', 'panel_pane_1');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['argument_input'] = array(
  'gid' => array(
    'type' => 'context',
    'context' => 'entity:node.nid',
    'context_optional' => 0,
    'panel' => '0',
    'fixed' => '',
    'label' => 'OG membership: Group ID',
  ),
);
$translatables['og_nodes'] = array(
  t('Defaults'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Items per page'),
  t('- All -'),
  t('Offset'),
  t('« first'),
  t('‹ previous'),
  t('next ›'),
  t('last »'),
  t('There is no content in this group.'),
  t('OG membership from node'),
  t('All'),
  t('Content pane'),
  t('View panes'),
);

<<<>>>
$view = new view();
$view->name = 'og_user_groups';
$view->description = 'Show groups of a user.';
$view->tag = 'og';
$view->base_table = 'og_membership';
$view->human_name = 'OG User groups';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['columns'] = array(
  'title' => 'title',
  'state' => 'state',
);
$handler->display->display_options['style_options']['default'] = '-1';
$handler->display->display_options['style_options']['info'] = array(
  'title' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
  ),
  'state' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
  ),
);
/* No results behavior: Global: Text area */
$handler->display->display_options['empty']['area']['id'] = 'area';
$handler->display->display_options['empty']['area']['table'] = 'views';
$handler->display->display_options['empty']['area']['field'] = 'area';
$handler->display->display_options['empty']['area']['content'] = 'User is not a member of any group.';
/* Relationship: OG membership: Group Node from OG membership */
$handler->display->display_options['relationships']['og_membership_related_node_group']['id'] = 'og_membership_related_node_group';
$handler->display->display_options['relationships']['og_membership_related_node_group']['table'] = 'og_membership';
$handler->display->display_options['relationships']['og_membership_related_node_group']['field'] = 'og_membership_related_node_group';
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['relationship'] = 'og_membership_related_node_group';
$handler->display->display_options['fields']['title']['label'] = 'Group';
$handler->display->display_options['fields']['title']['hide_alter_empty'] = FALSE;
/* Field: OG membership: Created */
$handler->display->display_options['fields']['created']['id'] = 'created';
$handler->display->display_options['fields']['created']['table'] = 'og_membership';
$handler->display->display_options['fields']['created']['field'] = 'created';
$handler->display->display_options['fields']['created']['label'] = 'Member since';
$handler->display->display_options['fields']['created']['hide_alter_empty'] = FALSE;
$handler->display->display_options['fields']['created']['date_format'] = 'time ago';
/* Sort criterion: Content: Title */
$handler->display->display_options['sorts']['title']['id'] = 'title';
$handler->display->display_options['sorts']['title']['table'] = 'node';
$handler->display->display_options['sorts']['title']['field'] = 'title';
$handler->display->display_options['sorts']['title']['relationship'] = 'og_membership_related_node_group';
/* Contextual filter: We pass to the &quot;Entity ID&quot; the User ID. */
$handler->display->display_options['arguments']['etid']['id'] = 'etid';
$handler->display->display_options['arguments']['etid']['table'] = 'og_membership';
$handler->display->display_options['arguments']['etid']['field'] = 'etid';
$handler->display->display_options['arguments']['etid']['ui_name'] = 'We pass to the "Entity ID" the User ID.';
$handler->display->display_options['arguments']['etid']['default_action'] = 'default';
$handler->display->display_options['arguments']['etid']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['etid']['title'] = '%1 groups';
$handler->display->display_options['arguments']['etid']['default_argument_type'] = 'current_user';
$handler->display->display_options['arguments']['etid']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['etid']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['etid']['summary_options']['items_per_page'] = '25';
$handler->display->display_options['arguments']['etid']['specify_validation'] = TRUE;
$handler->display->display_options['arguments']['etid']['validate']['type'] = 'user';
/* Filter criterion: OG membership: State */
$handler->display->display_options['filters']['state']['id'] = 'state';
$handler->display->display_options['filters']['state']['table'] = 'og_membership';
$handler->display->display_options['filters']['state']['field'] = 'state';
$handler->display->display_options['filters']['state']['relationship'] = 'og_membership';
$handler->display->display_options['filters']['state']['value'] = array(
  1 => '1',
);
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['relationship'] = 'og_membership_related_node_group';
$handler->display->display_options['filters']['status']['value'] = '1';
/* Filter criterion: OG membership: Entity_type */
$handler->display->display_options['filters']['entity_type']['id'] = 'entity_type';
$handler->display->display_options['filters']['entity_type']['table'] = 'og_membership';
$handler->display->display_options['filters']['entity_type']['field'] = 'entity_type';
$handler->display->display_options['filters']['entity_type']['value'] = 'user';

/* Display: Content pane */
$handler = $view->new_display('panel_pane', 'Content pane', 'panel_pane_1');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['argument_input'] = array(
  'etid' => array(
    'type' => 'context',
    'context' => 'entity:user.uid',
    'context_optional' => 0,
    'panel' => '0',
    'fixed' => '',
    'label' => 'We pass to the &quot;Entity ID&quot; the User ID.',
  ),
);
$translatables['og_user_groups'] = array(
  t('Master'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Items per page'),
  t('- All -'),
  t('Offset'),
  t('« first'),
  t('‹ previous'),
  t('next ›'),
  t('last »'),
  t('User is not a member of any group.'),
  t('Group node from OG membership'),
  t('Group'),
  t('Member since'),
  t('All'),
  t('%1 groups'),
  t('Content pane'),
  t('View panes'),
);

<<<>>>
$view = new view();
$view->name = 'signatures';
$view->description = 'pending transactions for which the given user is a signatory';
$view->tag = 'default';
$view->base_table = 'mcapi_transactions';
$view->human_name = 'Pending transactions';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Pending transactions';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['distinct'] = TRUE;
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['row_plugin'] = 'fields';
$handler->display->display_options['row_options']['inline'] = array(
  'worth' => 'worth',
  'sign' => 'sign',
);
/* Field: Transaction: Serial number */
$handler->display->display_options['fields']['serial']['id'] = 'serial';
$handler->display->display_options['fields']['serial']['table'] = 'mcapi_transactions';
$handler->display->display_options['fields']['serial']['field'] = 'serial';
$handler->display->display_options['fields']['serial']['label'] = '';
$handler->display->display_options['fields']['serial']['alter']['alter_text'] = TRUE;
$handler->display->display_options['fields']['serial']['alter']['text'] = 'Transaction #[serial]';
$handler->display->display_options['fields']['serial']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['serial']['alter']['path'] = 'transaction/[serial]';
$handler->display->display_options['fields']['serial']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['serial']['link_to_transaction'] = 0;
/* Field: Transaction: Worth */
$handler->display->display_options['fields']['worth']['id'] = 'worth';
$handler->display->display_options['fields']['worth']['table'] = 'field_data_worth';
$handler->display->display_options['fields']['worth']['field'] = 'worth';
$handler->display->display_options['fields']['worth']['label'] = '';
$handler->display->display_options['fields']['worth']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['worth']['click_sort_column'] = 'currcode';
/* Field: Signatures: Sign here */
$handler->display->display_options['fields']['sign']['id'] = 'sign';
$handler->display->display_options['fields']['sign']['table'] = 'mcapi_signatures';
$handler->display->display_options['fields']['sign']['field'] = 'sign';
$handler->display->display_options['fields']['sign']['label'] = '';
$handler->display->display_options['fields']['sign']['element_label_colon'] = FALSE;
/* Contextual filter: Signatures: ...is a signatory */
$handler->display->display_options['arguments']['uid']['id'] = 'uid';
$handler->display->display_options['arguments']['uid']['table'] = 'mcapi_signatures';
$handler->display->display_options['arguments']['uid']['field'] = 'uid';
$handler->display->display_options['arguments']['uid']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['uid']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['uid']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['uid']['summary_options']['items_per_page'] = '25';
/* Filter criterion: Transaction: State */
$handler->display->display_options['filters']['state']['id'] = 'state';
$handler->display->display_options['filters']['state']['table'] = 'mcapi_transactions';
$handler->display->display_options['filters']['state']['field'] = 'state';
$handler->display->display_options['filters']['state']['value'] = array(
  -1 => -1,
);
/* Filter criterion: Signatures: ...is a signatory */
$handler->display->display_options['filters']['uid']['id'] = 'uid';
$handler->display->display_options['filters']['uid']['table'] = 'mcapi_signatures';
$handler->display->display_options['filters']['uid']['field'] = 'uid';
$handler->display->display_options['filters']['uid']['value'] = '1';

/* Display: Block */
$handler = $view->new_display('block', 'Block', 'block');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['block_description'] = 'Pending transactions';
$translatables['signatures'] = array(
  t('Master'),
  t('Pending transactions'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Transaction #[serial]'),
  t('Sign'),
  t('All'),
  t('Block'),
);

<<<>>>
$view = new view();
$view->name = 'signature_blocks';
$view->description = 'pending transactions for which the given user is a signatory';
$view->tag = 'default';
$view->base_table = 'mcapi_transactions';
$view->human_name = 'Signatures waiting';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Pending transactions';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['use_more_text'] = 'plus';
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['distinct'] = TRUE;
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['exposed_form']['options']['reset_button_label'] = 'Remise à zéro';
$handler->display->display_options['exposed_form']['options']['exposed_sorts_label'] = 'Trier par';
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['row_plugin'] = 'fields';
$handler->display->display_options['row_options']['inline'] = array(
  'worth' => 'worth',
  'sign' => 'sign',
);
/* Field: Transaction: Serial number */
$handler->display->display_options['fields']['serial']['id'] = 'serial';
$handler->display->display_options['fields']['serial']['table'] = 'mcapi_transactions';
$handler->display->display_options['fields']['serial']['field'] = 'serial';
$handler->display->display_options['fields']['serial']['label'] = '';
$handler->display->display_options['fields']['serial']['alter']['alter_text'] = TRUE;
$handler->display->display_options['fields']['serial']['alter']['text'] = 'Transaction #[serial]';
$handler->display->display_options['fields']['serial']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['serial']['alter']['path'] = 'transaction/[serial]';
$handler->display->display_options['fields']['serial']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['serial']['link_to_transaction'] = 0;
/* Field: Transaction: Worth */
$handler->display->display_options['fields']['worth']['id'] = 'worth';
$handler->display->display_options['fields']['worth']['table'] = 'field_data_worth';
$handler->display->display_options['fields']['worth']['field'] = 'worth';
$handler->display->display_options['fields']['worth']['label'] = '';
$handler->display->display_options['fields']['worth']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['worth']['click_sort_column'] = 'currcode';
/* Field: Signatures: Sign here */
$handler->display->display_options['fields']['sign']['id'] = 'sign';
$handler->display->display_options['fields']['sign']['table'] = 'mcapi_signatures';
$handler->display->display_options['fields']['sign']['field'] = 'sign';
$handler->display->display_options['fields']['sign']['label'] = '';
$handler->display->display_options['fields']['sign']['element_label_colon'] = FALSE;
/* Filter criterion: Signatures: ...is a signatory */
$handler->display->display_options['filters']['uid']['id'] = 'uid';
$handler->display->display_options['filters']['uid']['table'] = 'mcapi_signatures';
$handler->display->display_options['filters']['uid']['field'] = 'uid';
$handler->display->display_options['filters']['uid']['value'] = '1';
/* Filter criterion: Signatures: Is pending */
$handler->display->display_options['filters']['pending']['id'] = 'pending';
$handler->display->display_options['filters']['pending']['table'] = 'mcapi_signatures';
$handler->display->display_options['filters']['pending']['field'] = 'pending';
$handler->display->display_options['filters']['pending']['value'] = '1';

/* Display: my_signature_needed */
$handler = $view->new_display('block', 'my_signature_needed', 'block');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Awaiting my signature...';
$handler->display->display_options['display_description'] = 'logged in user must sign here';
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['block_description'] = 'Awaiting my signature...';

/* Display: other_signatures_needed */
$handler = $view->new_display('block', 'other_signatures_needed', 'block_1');
$handler->display->display_options['display_description'] = 'signatures waiting for given user, or all signatures if no uid passed';
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['defaults']['arguments'] = FALSE;
/* Contextual filter: Signatures: ...is a signatory */
$handler->display->display_options['arguments']['uid']['id'] = 'uid';
$handler->display->display_options['arguments']['uid']['table'] = 'mcapi_signatures';
$handler->display->display_options['arguments']['uid']['field'] = 'uid';
$handler->display->display_options['arguments']['uid']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['uid']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['uid']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['uid']['summary_options']['items_per_page'] = '25';
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: Transaction: State */
$handler->display->display_options['filters']['state']['id'] = 'state';
$handler->display->display_options['filters']['state']['table'] = 'mcapi_transactions';
$handler->display->display_options['filters']['state']['field'] = 'state';
$handler->display->display_options['filters']['state']['value'] = array(
  -1 => -1,
);
$handler->display->display_options['block_description'] = 'Other pending transactions';

/* Display: I'm waiting for signatures */
$handler = $view->new_display('block', 'I\'m waiting for signatures', 'block_2');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Waiting for...';
$handler->display->display_options['display_description'] = 'Pending transactions which I have already signed';
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: Transaction: Serial number */
$handler->display->display_options['fields']['serial']['id'] = 'serial';
$handler->display->display_options['fields']['serial']['table'] = 'mcapi_transactions';
$handler->display->display_options['fields']['serial']['field'] = 'serial';
$handler->display->display_options['fields']['serial']['label'] = '';
$handler->display->display_options['fields']['serial']['alter']['alter_text'] = TRUE;
$handler->display->display_options['fields']['serial']['alter']['text'] = 'Transaction #[serial]';
$handler->display->display_options['fields']['serial']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['serial']['alter']['path'] = 'transaction/[serial]';
$handler->display->display_options['fields']['serial']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['serial']['link_to_transaction'] = 0;
/* Field: Transaction: Worth */
$handler->display->display_options['fields']['worth']['id'] = 'worth';
$handler->display->display_options['fields']['worth']['table'] = 'field_data_worth';
$handler->display->display_options['fields']['worth']['field'] = 'worth';
$handler->display->display_options['fields']['worth']['label'] = '';
$handler->display->display_options['fields']['worth']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['worth']['click_sort_column'] = 'currcode';
/* Field: Signatures: Signatory */
$handler->display->display_options['fields']['uid']['id'] = 'uid';
$handler->display->display_options['fields']['uid']['table'] = 'mcapi_signatures';
$handler->display->display_options['fields']['uid']['field'] = 'uid';
$handler->display->display_options['fields']['uid']['label'] = 'Waiting for...';
$handler->display->display_options['fields']['uid']['element_label_colon'] = FALSE;
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: Transaction: State */
$handler->display->display_options['filters']['state']['id'] = 'state';
$handler->display->display_options['filters']['state']['table'] = 'mcapi_transactions';
$handler->display->display_options['filters']['state']['field'] = 'state';
$handler->display->display_options['filters']['state']['value'] = array(
  -1 => -1,
);
/* Filter criterion: Signatures: Is pending */
$handler->display->display_options['filters']['pending']['id'] = 'pending';
$handler->display->display_options['filters']['pending']['table'] = 'mcapi_signatures';
$handler->display->display_options['filters']['pending']['field'] = 'pending';
$handler->display->display_options['filters']['pending']['value'] = '0';
/* Filter criterion: Signatures: ...is a signatory */
$handler->display->display_options['filters']['uid']['id'] = 'uid';
$handler->display->display_options['filters']['uid']['table'] = 'mcapi_signatures';
$handler->display->display_options['filters']['uid']['field'] = 'uid';
$handler->display->display_options['filters']['uid']['value'] = '0';
$translatables['signature_blocks'] = array(
  t('Master'),
  t('Pending transactions'),
  t('plus'),
  t('Apply'),
  t('Remise à zéro'),
  t('Trier par'),
  t('Asc'),
  t('Desc'),
  t('Transaction #[serial]'),
  t('Sign'),
  t('my_signature_needed'),
  t('Awaiting my signature...'),
  t('logged in user must sign here'),
  t('more'),
  t('other_signatures_needed'),
  t('My pending transactions'),
  t('signatures waiting for given user, or all signatures if no uid passed'),
  t('All'),
  t('Other pending transactions'),
  t('I\'m waiting for signatures'),
  t('Waiting for...'),
  t('Pending transactions which I have already signed'),
);

<<<>>>
$view = new view();
$view->name = 'statement';
$view->description = 'shows trades of one user, with otheruser field and running balance. (not working because of apparent views error)';
$view->tag = 'mcapi (index)';
$view->base_table = 'mcapi_index';
$view->human_name = 'Statement';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'User transactions';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['access']['perm'] = 'transact';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'date_views_pager';
$handler->display->display_options['pager']['options']['pager_position'] = 'bottom';
$handler->display->display_options['style_plugin'] = 'table';
/* No results behavior: Global: Text area */
$handler->display->display_options['empty']['area']['id'] = 'area';
$handler->display->display_options['empty']['area']['table'] = 'views';
$handler->display->display_options['empty']['area']['field'] = 'area';
$handler->display->display_options['empty']['area']['label'] = 'empty text';
$handler->display->display_options['empty']['area']['empty'] = TRUE;
$handler->display->display_options['empty']['area']['content'] = 'No transactions';
$handler->display->display_options['empty']['area']['format'] = 'editor_filtered_html';
/* Relationship: Transaction index: 2nd user */
$handler->display->display_options['relationships']['uid2']['id'] = 'uid2';
$handler->display->display_options['relationships']['uid2']['table'] = 'mcapi_index';
$handler->display->display_options['relationships']['uid2']['field'] = 'uid2';
$handler->display->display_options['relationships']['uid2']['required'] = TRUE;
/* Field: Transaction index: Created moment */
$handler->display->display_options['fields']['created']['id'] = 'created';
$handler->display->display_options['fields']['created']['table'] = 'mcapi_index';
$handler->display->display_options['fields']['created']['field'] = 'created';
$handler->display->display_options['fields']['created']['label'] = 'Created';
$handler->display->display_options['fields']['created']['hide_alter_empty'] = FALSE;
$handler->display->display_options['fields']['created']['date_format'] = 'short';
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['relationship'] = 'uid2';
$handler->display->display_options['fields']['name']['label'] = 'With';
$handler->display->display_options['fields']['name']['hide_alter_empty'] = FALSE;
/* Field: Transaction index: Expenditure */
$handler->display->display_options['fields']['expenditure']['id'] = 'expenditure';
$handler->display->display_options['fields']['expenditure']['table'] = 'mcapi_index';
$handler->display->display_options['fields']['expenditure']['field'] = 'expenditure';
/* Field: Transaction index: Income */
$handler->display->display_options['fields']['income']['id'] = 'income';
$handler->display->display_options['fields']['income']['table'] = 'mcapi_index';
$handler->display->display_options['fields']['income']['field'] = 'income';
/* Field: Transaction index: Balance */
$handler->display->display_options['fields']['balance']['id'] = 'balance';
$handler->display->display_options['fields']['balance']['table'] = 'mcapi_index';
$handler->display->display_options['fields']['balance']['field'] = 'balance';
$handler->display->display_options['fields']['balance']['hide_alter_empty'] = FALSE;
/* Sort criterion: Transaction index: Created moment */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'mcapi_index';
$handler->display->display_options['sorts']['created']['field'] = 'created';
$handler->display->display_options['sorts']['created']['order'] = 'DESC';
/* Contextual filter: Transaction index: 1st user */
$handler->display->display_options['arguments']['uid1']['id'] = 'uid1';
$handler->display->display_options['arguments']['uid1']['table'] = 'mcapi_index';
$handler->display->display_options['arguments']['uid1']['field'] = 'uid1';
$handler->display->display_options['arguments']['uid1']['default_action'] = 'default';
$handler->display->display_options['arguments']['uid1']['default_argument_type'] = 'user';
$handler->display->display_options['arguments']['uid1']['default_argument_options']['user'] = FALSE;
$handler->display->display_options['arguments']['uid1']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['uid1']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['uid1']['summary_options']['items_per_page'] = '25';
/* Contextual filter: Date: Date (mcapi_index) */
$handler->display->display_options['arguments']['date_argument']['id'] = 'date_argument';
$handler->display->display_options['arguments']['date_argument']['table'] = 'mcapi_index';
$handler->display->display_options['arguments']['date_argument']['field'] = 'date_argument';
$handler->display->display_options['arguments']['date_argument']['default_action'] = 'default';
$handler->display->display_options['arguments']['date_argument']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['date_argument']['year_range'] = '-10:+0';
$handler->display->display_options['arguments']['date_argument']['granularity'] = 'year';
$handler->display->display_options['arguments']['date_argument']['use_fromto'] = 'no';
$handler->display->display_options['arguments']['date_argument']['date_fields'] = array(
  'mcapi_index.created' => 'mcapi_index.created',
);

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'user/%/statement';
$handler->display->display_options['menu']['type'] = 'tab';
$handler->display->display_options['menu']['title'] = 'Statement';
$handler->display->display_options['menu']['weight'] = '0';
$translatables['statement'] = array(
  t('Master'),
  t('User transactions'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('empty text'),
  t('No transactions'),
  t('2nd user'),
  t('Created'),
  t('With'),
  t('Expenditure'),
  t('Income'),
  t('Balance'),
  t('All'),
  t('Page'),
);

<<<>>>
$view = new view();
$view->name = 'system_stats';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'mcapi_index';
$view->human_name = 'system stats';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['use_more_text'] = 'plus';
$handler->display->display_options['group_by'] = TRUE;
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['exposed_form']['options']['reset_button_label'] = 'Remise à zéro';
$handler->display->display_options['exposed_form']['options']['exposed_sorts_label'] = 'Trier par';
$handler->display->display_options['pager']['type'] = 'some';
$handler->display->display_options['pager']['options']['items_per_page'] = '1';
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['row_plugin'] = 'fields';
/* Field: COUNT(DISTINCT Transaction index: Unique serial number) */
$handler->display->display_options['fields']['serial']['id'] = 'serial';
$handler->display->display_options['fields']['serial']['table'] = 'mcapi_index';
$handler->display->display_options['fields']['serial']['field'] = 'serial';
$handler->display->display_options['fields']['serial']['group_type'] = 'count_distinct';
$handler->display->display_options['fields']['serial']['label'] = 'Trades';
/* Field: COUNT(DISTINCT Transaction index: 2nd user) */
$handler->display->display_options['fields']['uid2']['id'] = 'uid2';
$handler->display->display_options['fields']['uid2']['table'] = 'mcapi_index';
$handler->display->display_options['fields']['uid2']['field'] = 'uid2';
$handler->display->display_options['fields']['uid2']['group_type'] = 'count_distinct';
$handler->display->display_options['fields']['uid2']['label'] = 'Active traders';
/* Field: SUM(Transaction index: Volume) */
$handler->display->display_options['fields']['volume']['id'] = 'volume';
$handler->display->display_options['fields']['volume']['table'] = 'mcapi_index';
$handler->display->display_options['fields']['volume']['field'] = 'volume';
$handler->display->display_options['fields']['volume']['group_type'] = 'sum';
/* Contextual filter: Transaction index: Created moment */
$handler->display->display_options['arguments']['created']['id'] = 'created';
$handler->display->display_options['arguments']['created']['table'] = 'mcapi_index';
$handler->display->display_options['arguments']['created']['field'] = 'created';
$handler->display->display_options['arguments']['created']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['created']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['created']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['created']['summary_options']['items_per_page'] = '25';
/* Filter criterion: Transaction index: Change in balance */
$handler->display->display_options['filters']['diff']['id'] = 'diff';
$handler->display->display_options['filters']['diff']['table'] = 'mcapi_index';
$handler->display->display_options['filters']['diff']['field'] = 'diff';
$handler->display->display_options['filters']['diff']['operator'] = '>';
$handler->display->display_options['filters']['diff']['value']['value'] = '0';

/* Display: System trading stats */
$handler = $view->new_display('block', 'System trading stats', 'block');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['block_description'] = 'Trading summary';

/* Display: User trading stats */
$handler = $view->new_display('block', 'User trading stats', 'block_1');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['defaults']['relationships'] = FALSE;
/* Relationship: Transaction index: 1st user */
$handler->display->display_options['relationships']['uid1']['id'] = 'uid1';
$handler->display->display_options['relationships']['uid1']['table'] = 'mcapi_index';
$handler->display->display_options['relationships']['uid1']['field'] = 'uid1';
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: COUNT(DISTINCT Transaction index: Unique serial number) */
$handler->display->display_options['fields']['serial']['id'] = 'serial';
$handler->display->display_options['fields']['serial']['table'] = 'mcapi_index';
$handler->display->display_options['fields']['serial']['field'] = 'serial';
$handler->display->display_options['fields']['serial']['group_type'] = 'count_distinct';
$handler->display->display_options['fields']['serial']['label'] = 'Trades';
/* Field: COUNT(DISTINCT Transaction index: 2nd user) */
$handler->display->display_options['fields']['uid2']['id'] = 'uid2';
$handler->display->display_options['fields']['uid2']['table'] = 'mcapi_index';
$handler->display->display_options['fields']['uid2']['field'] = 'uid2';
$handler->display->display_options['fields']['uid2']['group_type'] = 'count_distinct';
$handler->display->display_options['fields']['uid2']['label'] = 'Promiscuity';
/* Field: SUM(Transaction index: Volume) */
$handler->display->display_options['fields']['volume']['id'] = 'volume';
$handler->display->display_options['fields']['volume']['table'] = 'mcapi_index';
$handler->display->display_options['fields']['volume']['field'] = 'volume';
$handler->display->display_options['fields']['volume']['group_type'] = 'sum';
$handler->display->display_options['defaults']['arguments'] = FALSE;
/* Contextual filter: Transaction index: 1st user */
$handler->display->display_options['arguments']['uid1']['id'] = 'uid1';
$handler->display->display_options['arguments']['uid1']['table'] = 'mcapi_index';
$handler->display->display_options['arguments']['uid1']['field'] = 'uid1';
$handler->display->display_options['arguments']['uid1']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['uid1']['title'] = '%1 summary';
$handler->display->display_options['arguments']['uid1']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['uid1']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['uid1']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['uid1']['summary_options']['items_per_page'] = '25';
/* Contextual filter: Transaction index: Created moment */
$handler->display->display_options['arguments']['created']['id'] = 'created';
$handler->display->display_options['arguments']['created']['table'] = 'mcapi_index';
$handler->display->display_options['arguments']['created']['field'] = 'created';
$handler->display->display_options['arguments']['created']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['created']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['created']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['created']['summary_options']['items_per_page'] = '25';
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
$translatables['system_stats'] = array(
  t('Master'),
  t('plus'),
  t('Apply'),
  t('Remise à zéro'),
  t('Trier par'),
  t('Asc'),
  t('Desc'),
  t('Trades'),
  t('Active traders'),
  t('Volume'),
  t('All'),
  t('System trading stats'),
  t('more'),
  t('Trading summary'),
  t('User trading stats'),
  t('User\'s trading summary'),
  t('1st user'),
  t('Promiscuity'),
  t('%1 summary'),
);

<<<>>>
$view = new view();
$view->name = 'taxonomy_term';
$view->description = 'A view to emulate Drupal core\'s handling of taxonomy/term.';
$view->tag = 'default';
$view->base_table = 'node';
$view->human_name = 'Taxonomy term';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['row_plugin'] = 'node';
/* Sort criterion: Content: Sticky */
$handler->display->display_options['sorts']['sticky']['id'] = 'sticky';
$handler->display->display_options['sorts']['sticky']['table'] = 'node';
$handler->display->display_options['sorts']['sticky']['field'] = 'sticky';
$handler->display->display_options['sorts']['sticky']['order'] = 'DESC';
/* Sort criterion: Content: Post date */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'node';
$handler->display->display_options['sorts']['created']['field'] = 'created';
$handler->display->display_options['sorts']['created']['order'] = 'DESC';
/* Contextual filter: Content: Has taxonomy term ID (with depth) */
$handler->display->display_options['arguments']['term_node_tid_depth']['id'] = 'term_node_tid_depth';
$handler->display->display_options['arguments']['term_node_tid_depth']['table'] = 'node';
$handler->display->display_options['arguments']['term_node_tid_depth']['field'] = 'term_node_tid_depth';
$handler->display->display_options['arguments']['term_node_tid_depth']['default_action'] = 'not found';
$handler->display->display_options['arguments']['term_node_tid_depth']['exception']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['term_node_tid_depth']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['term_node_tid_depth']['title'] = '%1';
$handler->display->display_options['arguments']['term_node_tid_depth']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['term_node_tid_depth']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['term_node_tid_depth']['specify_validation'] = TRUE;
$handler->display->display_options['arguments']['term_node_tid_depth']['validate']['type'] = 'taxonomy_term';
$handler->display->display_options['arguments']['term_node_tid_depth']['depth'] = '0';
$handler->display->display_options['arguments']['term_node_tid_depth']['break_phrase'] = TRUE;
/* Contextual filter: Content: Has taxonomy term ID depth modifier */
$handler->display->display_options['arguments']['term_node_tid_depth_modifier']['id'] = 'term_node_tid_depth_modifier';
$handler->display->display_options['arguments']['term_node_tid_depth_modifier']['table'] = 'node';
$handler->display->display_options['arguments']['term_node_tid_depth_modifier']['field'] = 'term_node_tid_depth_modifier';
$handler->display->display_options['arguments']['term_node_tid_depth_modifier']['exception']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['term_node_tid_depth_modifier']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['term_node_tid_depth_modifier']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['term_node_tid_depth_modifier']['specify_validation'] = TRUE;
/* Filter criterion: Content: Published or admin */
$handler->display->display_options['filters']['status_extra']['id'] = 'status_extra';
$handler->display->display_options['filters']['status_extra']['table'] = 'node';
$handler->display->display_options['filters']['status_extra']['field'] = 'status_extra';
$handler->display->display_options['filters']['status_extra']['group'] = 0;
$handler->display->display_options['filters']['status_extra']['expose']['operator'] = FALSE;

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'taxonomy/term/%';

/* Display: Feed */
$handler = $view->new_display('feed', 'Feed', 'feed');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = 15;
$handler->display->display_options['style_plugin'] = 'rss';
$handler->display->display_options['row_plugin'] = 'node_rss';
$handler->display->display_options['path'] = 'taxonomy/term/%/%/feed';
$handler->display->display_options['displays'] = array(
  'page' => 'page',
  'default' => 0,
);
$translatables['taxonomy_term'] = array(
  t('Master'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Items per page'),
  t('- All -'),
  t('Offset'),
  t('« first'),
  t('‹ previous'),
  t('next ›'),
  t('last »'),
  t('All'),
  t('%1'),
  t('Page'),
  t('Feed'),
);

<<<>>>
$view = new view();
$view->name = 'top_content';
$view->description = 'Top rated content';
$view->tag = 'votingapi';
$view->base_table = 'node';
$view->human_name = '';
$view->core = 0;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Defaults */
$handler = $view->new_display('default', 'Defaults', 'default');
$handler->display->display_options['title'] = 'Top rated content';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['grouping'] = '';
$handler->display->display_options['style_options']['columns'] = array(
  'name' => 'name',
  'title' => 'title',
  'created' => 'created',
);
$handler->display->display_options['style_options']['default'] = 'title';
$handler->display->display_options['style_options']['info'] = array(
  'name' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'title' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'created' => array(
    'sortable' => 1,
    'separator' => '',
  ),
);
$handler->display->display_options['style_options']['sticky'] = TRUE;
$handler->display->display_options['style_options']['order'] = 'desc';
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['label'] = 'Author';
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
/* Field: Content: Post date */
$handler->display->display_options['fields']['created']['id'] = 'created';
$handler->display->display_options['fields']['created']['table'] = 'node';
$handler->display->display_options['fields']['created']['field'] = 'created';
$handler->display->display_options['fields']['created']['label'] = 'Posted';
$handler->display->display_options['fields']['created']['date_format'] = 'time ago';
$handler->display->display_options['fields']['created']['custom_date_format'] = '1';
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = '0';
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;

/* Display: Fivestar */
$handler = $view->new_display('page', 'Fivestar', 'page_1');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['defaults']['style_plugin'] = FALSE;
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['grouping'] = '';
$handler->display->display_options['style_options']['columns'] = array(
  'name' => 'name',
  'title' => 'title',
  'created' => 'created',
  'value' => 'value',
);
$handler->display->display_options['style_options']['default'] = 'value';
$handler->display->display_options['style_options']['info'] = array(
  'name' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'title' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'created' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'value' => array(
    'sortable' => 1,
    'separator' => '',
  ),
);
$handler->display->display_options['style_options']['sticky'] = TRUE;
$handler->display->display_options['style_options']['order'] = 'desc';
$handler->display->display_options['defaults']['style_options'] = FALSE;
$handler->display->display_options['defaults']['row_plugin'] = FALSE;
$handler->display->display_options['defaults']['row_options'] = FALSE;
$handler->display->display_options['defaults']['header'] = FALSE;
/* Header: Global: Text area */
$handler->display->display_options['header']['text']['id'] = 'area';
$handler->display->display_options['header']['text']['table'] = 'views';
$handler->display->display_options['header']['text']['field'] = 'area';
$handler->display->display_options['header']['text']['content'] = 'This page is a demonstration of VotingAPI\'s integration with the Views module. It\'s set up to display nodes sorted by percentage ratings, the style used by Fivestar module.';
$handler->display->display_options['header']['text']['format'] = '1';
$handler->display->display_options['defaults']['relationships'] = FALSE;
/* Relationship: Content: Vote results */
$handler->display->display_options['relationships']['votingapi_cache']['id'] = 'votingapi_cache';
$handler->display->display_options['relationships']['votingapi_cache']['table'] = 'node';
$handler->display->display_options['relationships']['votingapi_cache']['field'] = 'votingapi_cache';
$handler->display->display_options['relationships']['votingapi_cache']['label'] = 'Voting results';
$handler->display->display_options['relationships']['votingapi_cache']['votingapi'] = array(
  'value_type' => 'percent',
  'tag' => 'vote',
  'function' => 'average',
);
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['label'] = 'Author';
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
/* Field: Content: Post date */
$handler->display->display_options['fields']['created']['id'] = 'created';
$handler->display->display_options['fields']['created']['table'] = 'node';
$handler->display->display_options['fields']['created']['field'] = 'created';
$handler->display->display_options['fields']['created']['label'] = 'Posted';
$handler->display->display_options['fields']['created']['date_format'] = 'time ago';
$handler->display->display_options['fields']['created']['custom_date_format'] = '1';
/* Field: Vote results: Value */
$handler->display->display_options['fields']['value']['id'] = 'value';
$handler->display->display_options['fields']['value']['table'] = 'votingapi_cache';
$handler->display->display_options['fields']['value']['field'] = 'value';
$handler->display->display_options['fields']['value']['relationship'] = 'votingapi_cache';
$handler->display->display_options['fields']['value']['label'] = 'Rating';
$handler->display->display_options['fields']['value']['appearance'] = 'fivestar_views_value_display_handler';
$handler->display->display_options['defaults']['sorts'] = FALSE;
/* Sort criterion: Vote results: Value */
$handler->display->display_options['sorts']['value']['id'] = 'value';
$handler->display->display_options['sorts']['value']['table'] = 'votingapi_cache';
$handler->display->display_options['sorts']['value']['field'] = 'value';
$handler->display->display_options['sorts']['value']['relationship'] = 'votingapi_cache';
$handler->display->display_options['sorts']['value']['order'] = 'DESC';
$handler->display->display_options['path'] = 'top-rated-percent';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'Top content (Fivestar)';
$handler->display->display_options['menu']['weight'] = '0';

/* Display: Plus1 */
$handler = $view->new_display('page', 'Plus1', 'page_2');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['defaults']['style_plugin'] = FALSE;
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['grouping'] = '';
$handler->display->display_options['style_options']['columns'] = array(
  'name' => 'name',
  'title' => 'title',
  'created' => 'created',
  'value' => 'value',
);
$handler->display->display_options['style_options']['default'] = 'value';
$handler->display->display_options['style_options']['info'] = array(
  'name' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'title' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'created' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'value' => array(
    'sortable' => 1,
    'separator' => '',
  ),
);
$handler->display->display_options['style_options']['sticky'] = TRUE;
$handler->display->display_options['style_options']['order'] = 'desc';
$handler->display->display_options['defaults']['style_options'] = FALSE;
$handler->display->display_options['defaults']['row_plugin'] = FALSE;
$handler->display->display_options['defaults']['row_options'] = FALSE;
$handler->display->display_options['defaults']['header'] = FALSE;
/* Header: Global: Text area */
$handler->display->display_options['header']['text']['id'] = 'area';
$handler->display->display_options['header']['text']['table'] = 'views';
$handler->display->display_options['header']['text']['field'] = 'area';
$handler->display->display_options['header']['text']['content'] = 'This page is a demonstration of VotingAPI\'s integration with the Views module. It\'s set up to display nodes sorted by point ratings, the style used by the Plus1 and VoteUpDown modules.';
$handler->display->display_options['header']['text']['format'] = '1';
$handler->display->display_options['defaults']['relationships'] = FALSE;
/* Relationship: Content: Vote results */
$handler->display->display_options['relationships']['votingapi_cache']['id'] = 'votingapi_cache';
$handler->display->display_options['relationships']['votingapi_cache']['table'] = 'node';
$handler->display->display_options['relationships']['votingapi_cache']['field'] = 'votingapi_cache';
$handler->display->display_options['relationships']['votingapi_cache']['label'] = 'Voting results';
$handler->display->display_options['relationships']['votingapi_cache']['votingapi'] = array(
  'value_type' => 'points',
  'tag' => 'vote',
  'function' => 'sum',
);
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['label'] = 'Author';
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
/* Field: Content: Post date */
$handler->display->display_options['fields']['created']['id'] = 'created';
$handler->display->display_options['fields']['created']['table'] = 'node';
$handler->display->display_options['fields']['created']['field'] = 'created';
$handler->display->display_options['fields']['created']['label'] = 'Posted';
$handler->display->display_options['fields']['created']['date_format'] = 'time ago';
$handler->display->display_options['fields']['created']['custom_date_format'] = '1';
/* Field: Vote results: Value */
$handler->display->display_options['fields']['value']['id'] = 'value';
$handler->display->display_options['fields']['value']['table'] = 'votingapi_cache';
$handler->display->display_options['fields']['value']['field'] = 'value';
$handler->display->display_options['fields']['value']['relationship'] = 'votingapi_cache';
$handler->display->display_options['fields']['value']['label'] = 'Rating';
$handler->display->display_options['fields']['value']['suffix'] = ' points';
$handler->display->display_options['defaults']['sorts'] = FALSE;
/* Sort criterion: Vote results: Value */
$handler->display->display_options['sorts']['value']['id'] = 'value';
$handler->display->display_options['sorts']['value']['table'] = 'votingapi_cache';
$handler->display->display_options['sorts']['value']['field'] = 'value';
$handler->display->display_options['sorts']['value']['relationship'] = 'votingapi_cache';
$handler->display->display_options['sorts']['value']['order'] = 'DESC';
$handler->display->display_options['path'] = 'top-rated-points';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'Top content (Plus1)';
$handler->display->display_options['menu']['weight'] = '0';

/* Display: Current user */
$handler = $view->new_display('page', 'Current user', 'page_3');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Your votes';
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['defaults']['style_plugin'] = FALSE;
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['grouping'] = '';
$handler->display->display_options['style_options']['columns'] = array(
  'title' => 'title',
  'value_type' => 'value_type',
  'value' => 'value',
  'timestamp' => 'timestamp',
);
$handler->display->display_options['style_options']['default'] = 'timestamp';
$handler->display->display_options['style_options']['info'] = array(
  'title' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'value_type' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'value' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'timestamp' => array(
    'sortable' => 1,
    'separator' => '',
  ),
);
$handler->display->display_options['style_options']['sticky'] = TRUE;
$handler->display->display_options['style_options']['order'] = 'desc';
$handler->display->display_options['defaults']['style_options'] = FALSE;
$handler->display->display_options['defaults']['row_plugin'] = FALSE;
$handler->display->display_options['defaults']['row_options'] = FALSE;
$handler->display->display_options['defaults']['relationships'] = FALSE;
/* Relationship: Content: Votes */
$handler->display->display_options['relationships']['votingapi_vote']['id'] = 'votingapi_vote';
$handler->display->display_options['relationships']['votingapi_vote']['table'] = 'node';
$handler->display->display_options['relationships']['votingapi_vote']['field'] = 'votingapi_vote';
$handler->display->display_options['relationships']['votingapi_vote']['label'] = 'Individual votes';
$handler->display->display_options['relationships']['votingapi_vote']['required'] = TRUE;
$handler->display->display_options['relationships']['votingapi_vote']['votingapi'] = array(
  'value_type' => '',
  'tag' => '',
);
$handler->display->display_options['relationships']['votingapi_vote']['current_user'] = 0;
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
/* Field: Votes: Value type */
$handler->display->display_options['fields']['value_type']['id'] = 'value_type';
$handler->display->display_options['fields']['value_type']['table'] = 'votingapi_vote';
$handler->display->display_options['fields']['value_type']['field'] = 'value_type';
$handler->display->display_options['fields']['value_type']['relationship'] = 'votingapi_vote';
$handler->display->display_options['fields']['value_type']['label'] = 'Vote type';
/* Field: Votes: Value */
$handler->display->display_options['fields']['value']['id'] = 'value';
$handler->display->display_options['fields']['value']['table'] = 'votingapi_vote';
$handler->display->display_options['fields']['value']['field'] = 'value';
$handler->display->display_options['fields']['value']['relationship'] = 'votingapi_vote';
/* Field: Votes: Timestamp */
$handler->display->display_options['fields']['timestamp']['id'] = 'timestamp';
$handler->display->display_options['fields']['timestamp']['table'] = 'votingapi_vote';
$handler->display->display_options['fields']['timestamp']['field'] = 'timestamp';
$handler->display->display_options['fields']['timestamp']['relationship'] = 'votingapi_vote';
$handler->display->display_options['fields']['timestamp']['date_format'] = 'time ago';
$handler->display->display_options['fields']['timestamp']['custom_date_format'] = '1';
$handler->display->display_options['defaults']['sorts'] = FALSE;
/* Sort criterion: Votes: Timestamp */
$handler->display->display_options['sorts']['timestamp']['id'] = 'timestamp';
$handler->display->display_options['sorts']['timestamp']['table'] = 'votingapi_vote';
$handler->display->display_options['sorts']['timestamp']['field'] = 'timestamp';
$handler->display->display_options['sorts']['timestamp']['relationship'] = 'votingapi_vote';
$handler->display->display_options['sorts']['timestamp']['order'] = 'DESC';
$handler->display->display_options['defaults']['arguments'] = FALSE;
/* Contextual filter: Votes: User */
$handler->display->display_options['arguments']['uid']['id'] = 'uid';
$handler->display->display_options['arguments']['uid']['table'] = 'votingapi_vote';
$handler->display->display_options['arguments']['uid']['field'] = 'uid';
$handler->display->display_options['arguments']['uid']['relationship'] = 'votingapi_vote';
$handler->display->display_options['arguments']['uid']['default_action'] = 'default';
$handler->display->display_options['arguments']['uid']['exception']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['uid']['exception']['title'] = 'Everyone';
$handler->display->display_options['arguments']['uid']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['uid']['title'] = '%1\'s votes';
$handler->display->display_options['arguments']['uid']['default_argument_type'] = 'current_user';
$handler->display->display_options['arguments']['uid']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['uid']['specify_validation'] = TRUE;
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = '0';
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: Votes: Value */
$handler->display->display_options['filters']['value']['id'] = 'value';
$handler->display->display_options['filters']['value']['table'] = 'votingapi_vote';
$handler->display->display_options['filters']['value']['field'] = 'value';
$handler->display->display_options['filters']['value']['relationship'] = 'votingapi_vote';
$handler->display->display_options['filters']['value']['operator'] = 'not empty';
$handler->display->display_options['filters']['value']['group'] = '0';
$handler->display->display_options['filters']['value']['expose']['operator'] = FALSE;
$handler->display->display_options['path'] = 'your-votes';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'Your votes';
$handler->display->display_options['menu']['weight'] = '0';
$translatables['top_content'] = array(
  t('Defaults'),
  t('Top rated content'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Items per page'),
  t('- All -'),
  t('Offset'),
  t('« first'),
  t('‹ previous'),
  t('next ›'),
  t('last »'),
  t('Author'),
  t('Title'),
  t('Posted'),
  t('Fivestar'),
  t('This page is a demonstration of VotingAPI\'s integration with the Views module. It\'s set up to display nodes sorted by percentage ratings, the style used by Fivestar module.'),
  t('Voting results'),
  t('Rating'),
  t('.'),
  t(','),
  t('Plus1'),
  t('This page is a demonstration of VotingAPI\'s integration with the Views module. It\'s set up to display nodes sorted by point ratings, the style used by the Plus1 and VoteUpDown modules.'),
  t(' points'),
  t('Current user'),
  t('Your votes'),
  t('Individual votes'),
  t('Vote type'),
  t('Value'),
  t('Timestamp'),
  t('Everyone'),
  t('%1\'s votes'),
);

<<<>>>
$view = new view();
$view->name = 'tracker';
$view->description = 'Shows all new activity on system.';
$view->tag = 'default';
$view->base_table = 'node';
$view->human_name = 'Tracker';
$view->core = 0;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Recent posts';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = '25';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['columns'] = array(
  'type' => 'type',
  'title' => 'title',
  'name' => 'name',
  'comment_count' => 'comment_count',
  'last_comment_timestamp' => 'last_comment_timestamp',
  'timestamp' => 'title',
  'new_comments' => 'comment_count',
);
$handler->display->display_options['style_options']['default'] = 'last_comment_timestamp';
$handler->display->display_options['style_options']['info'] = array(
  'type' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'title' => array(
    'sortable' => 1,
    'separator' => '&nbsp;',
  ),
  'name' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'comment_count' => array(
    'sortable' => 1,
    'separator' => '<br />',
  ),
  'last_comment_timestamp' => array(
    'sortable' => 1,
    'separator' => '&nbsp;',
  ),
  'timestamp' => array(
    'separator' => '',
  ),
  'new_comments' => array(
    'separator' => '',
  ),
);
$handler->display->display_options['style_options']['order'] = 'desc';
/* Relationship: Content: Author */
$handler->display->display_options['relationships']['uid']['id'] = 'uid';
$handler->display->display_options['relationships']['uid']['table'] = 'node';
$handler->display->display_options['relationships']['uid']['field'] = 'uid';
/* Field: Content: Type */
$handler->display->display_options['fields']['type']['id'] = 'type';
$handler->display->display_options['fields']['type']['table'] = 'node';
$handler->display->display_options['fields']['type']['field'] = 'type';
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['relationship'] = 'uid';
$handler->display->display_options['fields']['name']['label'] = 'Author';
/* Field: Content: Comment count */
$handler->display->display_options['fields']['comment_count']['id'] = 'comment_count';
$handler->display->display_options['fields']['comment_count']['table'] = 'node_comment_statistics';
$handler->display->display_options['fields']['comment_count']['field'] = 'comment_count';
$handler->display->display_options['fields']['comment_count']['label'] = 'Replies';
/* Field: Content: Last comment time */
$handler->display->display_options['fields']['last_comment_timestamp']['id'] = 'last_comment_timestamp';
$handler->display->display_options['fields']['last_comment_timestamp']['table'] = 'node_comment_statistics';
$handler->display->display_options['fields']['last_comment_timestamp']['field'] = 'last_comment_timestamp';
$handler->display->display_options['fields']['last_comment_timestamp']['label'] = 'Last Post';
/* Field: Content: Has new content */
$handler->display->display_options['fields']['timestamp']['id'] = 'timestamp';
$handler->display->display_options['fields']['timestamp']['table'] = 'history';
$handler->display->display_options['fields']['timestamp']['field'] = 'timestamp';
$handler->display->display_options['fields']['timestamp']['label'] = '';
$handler->display->display_options['fields']['timestamp']['comments'] = TRUE;
/* Field: Content: New comments */
$handler->display->display_options['fields']['new_comments']['id'] = 'new_comments';
$handler->display->display_options['fields']['new_comments']['table'] = 'node';
$handler->display->display_options['fields']['new_comments']['field'] = 'new_comments';
$handler->display->display_options['fields']['new_comments']['label'] = '';
$handler->display->display_options['fields']['new_comments']['hide_empty'] = TRUE;
$handler->display->display_options['fields']['new_comments']['suffix'] = ' new';
/* Sort criterion: Content: Last comment time */
$handler->display->display_options['sorts']['last_comment_timestamp']['id'] = 'last_comment_timestamp';
$handler->display->display_options['sorts']['last_comment_timestamp']['table'] = 'node_comment_statistics';
$handler->display->display_options['sorts']['last_comment_timestamp']['field'] = 'last_comment_timestamp';
/* Contextual filter: Content: User posted or commented */
$handler->display->display_options['arguments']['uid_touch']['id'] = 'uid_touch';
$handler->display->display_options['arguments']['uid_touch']['table'] = 'node';
$handler->display->display_options['arguments']['uid_touch']['field'] = 'uid_touch';
$handler->display->display_options['arguments']['uid_touch']['exception']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['uid_touch']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['uid_touch']['title'] = 'Recent posts for %1';
$handler->display->display_options['arguments']['uid_touch']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['uid_touch']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['uid_touch']['specify_validation'] = TRUE;
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = '1';
$handler->display->display_options['filters']['status']['group'] = 0;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'tracker';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'Recent posts';
$translatables['tracker'] = array(
  t('Master'),
  t('Recent posts'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Items per page'),
  t('- All -'),
  t('Offset'),
  t('« first'),
  t('‹ previous'),
  t('next ›'),
  t('last »'),
  t('author'),
  t('Type'),
  t('Title'),
  t('Author'),
  t('Replies'),
  t('.'),
  t(','),
  t('Last Post'),
  t(' new'),
  t('All'),
  t('Recent posts for %1'),
  t('Page'),
);

<<<>>>
$view = new view();
$view->name = 'transactions';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'mcapi_transactions';
$view->human_name = 'transactions';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Transactions';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['distinct'] = TRUE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = '25';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['columns'] = array(
  'name' => 'name',
  'name_1' => 'name_1',
  'transaction_description' => 'transaction_description',
  'worth' => 'worth',
  'view' => 'view',
);
/* Relationship: Transaction: Payee */
$handler->display->display_options['relationships']['payee']['id'] = 'payee';
$handler->display->display_options['relationships']['payee']['table'] = 'mcapi_transactions';
$handler->display->display_options['relationships']['payee']['field'] = 'payee';
/* Relationship: Transaction: Payer */
$handler->display->display_options['relationships']['payer']['id'] = 'payer';
$handler->display->display_options['relationships']['payer']['table'] = 'mcapi_transactions';
$handler->display->display_options['relationships']['payer']['field'] = 'payer';
/* Field: Transaction: Serial number */
$handler->display->display_options['fields']['serial']['id'] = 'serial';
$handler->display->display_options['fields']['serial']['table'] = 'mcapi_transactions';
$handler->display->display_options['fields']['serial']['field'] = 'serial';
$handler->display->display_options['fields']['serial']['exclude'] = TRUE;
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['relationship'] = 'payee';
$handler->display->display_options['fields']['name']['label'] = 'Payee';
/* Field: User: Name */
$handler->display->display_options['fields']['name_1']['id'] = 'name_1';
$handler->display->display_options['fields']['name_1']['table'] = 'users';
$handler->display->display_options['fields']['name_1']['field'] = 'name';
$handler->display->display_options['fields']['name_1']['relationship'] = 'payer';
/* Field: Transaction: Worth */
$handler->display->display_options['fields']['worth']['id'] = 'worth';
$handler->display->display_options['fields']['worth']['table'] = 'field_data_worth';
$handler->display->display_options['fields']['worth']['field'] = 'worth';
$handler->display->display_options['fields']['worth']['click_sort_column'] = 'currcode';
/* Field: Transaction: View */
$handler->display->display_options['fields']['view']['id'] = 'view';
$handler->display->display_options['fields']['view']['table'] = 'mcapi_transactions';
$handler->display->display_options['fields']['view']['field'] = 'view';
$handler->display->display_options['fields']['view']['label'] = '';
/* Sort criterion: Transaction: Created */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'mcapi_transactions';
$handler->display->display_options['sorts']['created']['field'] = 'created';
$handler->display->display_options['sorts']['created']['order'] = 'DESC';
$handler->display->display_options['sorts']['created']['granularity'] = 'hour';
/* Filter criterion: Transaction: State */
$handler->display->display_options['filters']['state']['id'] = 'state';
$handler->display->display_options['filters']['state']['table'] = 'mcapi_transactions';
$handler->display->display_options['filters']['state']['field'] = 'state';
$handler->display->display_options['filters']['state']['value'] = array(
  1 => 1,
);
/* Filter criterion: Transaction: Type */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'mcapi_transactions';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['operator'] = 'not in';
$handler->display->display_options['filters']['type']['value'] = array(
  'child' => 'child',
  'mass' => 'mass',
);
$handler->display->display_options['filters']['type']['expose']['operator_id'] = 'type_op';
$handler->display->display_options['filters']['type']['expose']['label'] = 'Type';
$handler->display->display_options['filters']['type']['expose']['operator'] = 'type_op';
$handler->display->display_options['filters']['type']['expose']['identifier'] = 'type';

/* Display: Transactions */
$handler = $view->new_display('page', 'Transactions', 'transactions');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'transactions';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'transactions';
$handler->display->display_options['menu']['name'] = 'main-menu';
$translatables['transactions'] = array(
  t('Master'),
  t('Transactions'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Items per page'),
  t('- All -'),
  t('Offset'),
  t('« first'),
  t('‹ previous'),
  t('next ›'),
  t('last »'),
  t('Payee'),
  t('Payer'),
  t('Serial number'),
  t('Name'),
  t('Worth'),
  t('Type'),
);

<<<>>>
$view = new view();
$view->name = 'transactions_all';
$view->description = 'For admin or accountant to manage transactions';
$view->tag = 'mcapi';
$view->base_table = 'mcapi_transactions';
$view->human_name = 'Administer transactions';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Transaction management';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['distinct'] = TRUE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = '50';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['columns'] = array(
  'created' => 'created',
  'payee' => 'payee',
  'payer' => 'payer',
  'type' => 'type',
  'state' => 'state',
  'worth' => 'worth',
  'field_cat' => 'field_cat',
);
$handler->display->display_options['style_options']['default'] = 'created';
$handler->display->display_options['style_options']['info'] = array(
  'participant' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
  ),
  'payee' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
  ),
  'payer' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
  ),
  'created' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
  ),
  'type' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
  ),
  'state' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
  ),
  'worth' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
  ),
);
$handler->display->display_options['style_options']['sticky'] = TRUE;
$handler->display->display_options['style_options']['order'] = 'desc';
$handler->display->display_options['style_options']['summary'] = 'All transactions, filtered';
/* Header: Global: Text area */
$handler->display->display_options['header']['area']['id'] = 'area';
$handler->display->display_options['header']['area']['table'] = 'views';
$handler->display->display_options['header']['area']['field'] = 'area';
$handler->display->display_options['header']['area']['content'] = 'All transactions can be seen from here. Use the filters to list what you need.';
/* Relationship: Transaction: Payee */
$handler->display->display_options['relationships']['payee']['id'] = 'payee';
$handler->display->display_options['relationships']['payee']['table'] = 'mcapi_transactions';
$handler->display->display_options['relationships']['payee']['field'] = 'payee';
$handler->display->display_options['relationships']['payee']['required'] = TRUE;
/* Relationship: Transaction: Payer */
$handler->display->display_options['relationships']['payer']['id'] = 'payer';
$handler->display->display_options['relationships']['payer']['table'] = 'mcapi_transactions';
$handler->display->display_options['relationships']['payer']['field'] = 'payer';
$handler->display->display_options['relationships']['payer']['required'] = TRUE;
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['relationship'] = 'payee';
$handler->display->display_options['fields']['name']['hide_alter_empty'] = FALSE;
/* Field: User: Name */
$handler->display->display_options['fields']['name_1']['id'] = 'name_1';
$handler->display->display_options['fields']['name_1']['table'] = 'users';
$handler->display->display_options['fields']['name_1']['field'] = 'name';
$handler->display->display_options['fields']['name_1']['relationship'] = 'payer';
$handler->display->display_options['fields']['name_1']['hide_alter_empty'] = FALSE;
/* Field: Transaction: Worth */
$handler->display->display_options['fields']['worth']['id'] = 'worth';
$handler->display->display_options['fields']['worth']['table'] = 'field_data_worth';
$handler->display->display_options['fields']['worth']['field'] = 'worth';
$handler->display->display_options['fields']['worth']['element_default_classes'] = FALSE;
$handler->display->display_options['fields']['worth']['hide_alter_empty'] = FALSE;
$handler->display->display_options['fields']['worth']['click_sort_column'] = 'currcode';
/* Field: Transaction: State */
$handler->display->display_options['fields']['state']['id'] = 'state';
$handler->display->display_options['fields']['state']['table'] = 'mcapi_transactions';
$handler->display->display_options['fields']['state']['field'] = 'state';
$handler->display->display_options['fields']['state']['element_label_colon'] = FALSE;
/* Field: Transaction: Type */
$handler->display->display_options['fields']['type']['id'] = 'type';
$handler->display->display_options['fields']['type']['table'] = 'mcapi_transactions';
$handler->display->display_options['fields']['type']['field'] = 'type';
$handler->display->display_options['fields']['type']['element_label_colon'] = FALSE;
/* Field: Transaction: Undo */
$handler->display->display_options['fields']['undo']['id'] = 'undo';
$handler->display->display_options['fields']['undo']['table'] = 'mcapi_transactions';
$handler->display->display_options['fields']['undo']['field'] = 'undo';
/* Field: Transaction: View */
$handler->display->display_options['fields']['view']['id'] = 'view';
$handler->display->display_options['fields']['view']['table'] = 'mcapi_transactions';
$handler->display->display_options['fields']['view']['field'] = 'view';
/* Sort criterion: Transaction: Created */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'mcapi_transactions';
$handler->display->display_options['sorts']['created']['field'] = 'created';
$handler->display->display_options['sorts']['created']['order'] = 'DESC';
$handler->display->display_options['sorts']['created']['granularity'] = 'minute';
/* Filter criterion: Transaction: Type */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'mcapi_transactions';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['group'] = 0;
$handler->display->display_options['filters']['type']['exposed'] = TRUE;
$handler->display->display_options['filters']['type']['expose']['operator_id'] = 'type_op';
$handler->display->display_options['filters']['type']['expose']['label'] = 'Type';
$handler->display->display_options['filters']['type']['expose']['operator'] = 'type_op';
$handler->display->display_options['filters']['type']['expose']['identifier'] = 'type';
$handler->display->display_options['filters']['type']['expose']['multiple'] = TRUE;
/* Filter criterion: User: Name */
$handler->display->display_options['filters']['uid']['id'] = 'uid';
$handler->display->display_options['filters']['uid']['table'] = 'users';
$handler->display->display_options['filters']['uid']['field'] = 'uid';
$handler->display->display_options['filters']['uid']['relationship'] = 'payee';
$handler->display->display_options['filters']['uid']['value'] = '';
$handler->display->display_options['filters']['uid']['group'] = 0;
$handler->display->display_options['filters']['uid']['exposed'] = TRUE;
$handler->display->display_options['filters']['uid']['expose']['operator_id'] = 'uid_op';
$handler->display->display_options['filters']['uid']['expose']['label'] = 'Payee';
$handler->display->display_options['filters']['uid']['expose']['operator'] = 'uid_op';
$handler->display->display_options['filters']['uid']['expose']['identifier'] = 'uid';
/* Filter criterion: User: Name */
$handler->display->display_options['filters']['uid_1']['id'] = 'uid_1';
$handler->display->display_options['filters']['uid_1']['table'] = 'users';
$handler->display->display_options['filters']['uid_1']['field'] = 'uid';
$handler->display->display_options['filters']['uid_1']['relationship'] = 'payer';
$handler->display->display_options['filters']['uid_1']['value'] = '';
$handler->display->display_options['filters']['uid_1']['exposed'] = TRUE;
$handler->display->display_options['filters']['uid_1']['expose']['operator_id'] = 'uid_1_op';
$handler->display->display_options['filters']['uid_1']['expose']['label'] = 'Payer';
$handler->display->display_options['filters']['uid_1']['expose']['operator'] = 'uid_1_op';
$handler->display->display_options['filters']['uid_1']['expose']['identifier'] = 'uid_1';
/* Filter criterion: Transaction: State */
$handler->display->display_options['filters']['state']['id'] = 'state';
$handler->display->display_options['filters']['state']['table'] = 'mcapi_transactions';
$handler->display->display_options['filters']['state']['field'] = 'state';
$handler->display->display_options['filters']['state']['value'] = array(
  0 => 1,
);
$handler->display->display_options['filters']['state']['exposed'] = TRUE;
$handler->display->display_options['filters']['state']['expose']['operator_id'] = '';
$handler->display->display_options['filters']['state']['expose']['label'] = 'State';
$handler->display->display_options['filters']['state']['expose']['operator'] = 'state_op';
$handler->display->display_options['filters']['state']['expose']['identifier'] = 'state';
/* Filter criterion: Transaction: Worth (worth:quantity) */
$handler->display->display_options['filters']['worth_quantity']['id'] = 'worth_quantity';
$handler->display->display_options['filters']['worth_quantity']['table'] = 'field_data_worth';
$handler->display->display_options['filters']['worth_quantity']['field'] = 'worth_quantity';
$handler->display->display_options['filters']['worth_quantity']['exposed'] = TRUE;
$handler->display->display_options['filters']['worth_quantity']['expose']['operator_id'] = 'worth_quantity_op';
$handler->display->display_options['filters']['worth_quantity']['expose']['label'] = 'Quantity';
$handler->display->display_options['filters']['worth_quantity']['expose']['use_operator'] = TRUE;
$handler->display->display_options['filters']['worth_quantity']['expose']['operator'] = 'worth_quantity_op';
$handler->display->display_options['filters']['worth_quantity']['expose']['identifier'] = 'worth_quantity';

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'admin/accounting/transactions';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'Manage transactions';
$handler->display->display_options['menu']['description'] = 'A transaction view with all the filters exposed.';
$handler->display->display_options['menu']['weight'] = '10';
$handler->display->display_options['menu']['name'] = 'management';
$translatables['transactions_all'] = array(
  t('Master'),
  t('Transaction management'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Items per page'),
  t('- All -'),
  t('Offset'),
  t('« first'),
  t('‹ previous'),
  t('next ›'),
  t('last »'),
  t('All transactions can be seen from here. Use the filters to list what you need.'),
  t('Payee'),
  t('Payer'),
  t('Name'),
  t('Worth'),
  t('State'),
  t('Type'),
  t('Undo'),
  t('View'),
  t('Quantity'),
  t('Page'),
);

<<<>>>
$view = new view();
$view->name = 'user_location_table';
$view->description = 'User location table.';
$view->tag = '';
$view->base_table = 'users';
$view->human_name = '';
$view->core = 0;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Defaults */
$handler = $view->new_display('default', 'Defaults', 'default');
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['access']['perm'] = 'view user location table';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['grouping'] = '';
$handler->display->display_options['style_options']['columns'] = array(
  'name' => 'name',
  'street' => 'street',
  'city' => 'city',
  'province' => 'province',
  'postal_code' => 'postal_code',
  'country' => 'country',
);
$handler->display->display_options['style_options']['default'] = '-1';
$handler->display->display_options['style_options']['info'] = array(
  'name' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'street' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'city' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'province' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'postal_code' => array(
    'sortable' => 1,
    'separator' => '',
  ),
  'country' => array(
    'sortable' => 1,
    'separator' => '',
  ),
);
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
/* Field: Location: Street */
$handler->display->display_options['fields']['street']['id'] = 'street';
$handler->display->display_options['fields']['street']['table'] = 'location';
$handler->display->display_options['fields']['street']['field'] = 'street';
/* Field: Location: City */
$handler->display->display_options['fields']['city']['id'] = 'city';
$handler->display->display_options['fields']['city']['table'] = 'location';
$handler->display->display_options['fields']['city']['field'] = 'city';
/* Field: Location: Province */
$handler->display->display_options['fields']['province']['id'] = 'province';
$handler->display->display_options['fields']['province']['table'] = 'location';
$handler->display->display_options['fields']['province']['field'] = 'province';
/* Field: Location: Postal Code */
$handler->display->display_options['fields']['postal_code']['id'] = 'postal_code';
$handler->display->display_options['fields']['postal_code']['table'] = 'location';
$handler->display->display_options['fields']['postal_code']['field'] = 'postal_code';
/* Field: Location: Country */
$handler->display->display_options['fields']['country']['id'] = 'country';
$handler->display->display_options['fields']['country']['table'] = 'location';
$handler->display->display_options['fields']['country']['field'] = 'country';
/* Filter criterion: User: Active */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'users';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = '0';
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: Location: Lid */
$handler->display->display_options['filters']['lid']['id'] = 'lid';
$handler->display->display_options['filters']['lid']['table'] = 'location';
$handler->display->display_options['filters']['lid']['field'] = 'lid';
$handler->display->display_options['filters']['lid']['operator'] = 'not empty';
$handler->display->display_options['filters']['lid']['group'] = '0';
$handler->display->display_options['filters']['lid']['expose']['operator'] = FALSE;

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page_1');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'location/users';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'User location table';
$handler->display->display_options['menu']['weight'] = '0';
$translatables['user_location_table'] = array(
  t('Defaults'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Name'),
  t('Street'),
  t('City'),
  t('Province'),
  t('Postal Code'),
  t('Country'),
  t('Page'),
);

<<<>>>
$view = new view();
$view->name = 'user_rankings';
$view->description = 'If you have multiple currencies, be sure to change the argument. Also you can add \'between\' dates';
$view->tag = 'mcapi (index)';
$view->base_table = 'mcapi_index';
$view->human_name = 'user_ranking';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Most trades';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['group_by'] = TRUE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['access']['perm'] = 'access user profiles';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['style_plugin'] = 'list';
$handler->display->display_options['style_options']['type'] = 'ol';
$handler->display->display_options['row_plugin'] = 'fields';
$handler->display->display_options['row_options']['inline'] = array(
  'name' => 'name',
);
$handler->display->display_options['row_options']['separator'] = ': ';
$handler->display->display_options['row_options']['default_field_elements'] = FALSE;
/* Relationship: Transaction index: 1st user */
$handler->display->display_options['relationships']['uid1']['id'] = 'uid1';
$handler->display->display_options['relationships']['uid1']['table'] = 'mcapi_index';
$handler->display->display_options['relationships']['uid1']['field'] = 'uid1';
$handler->display->display_options['relationships']['uid1']['required'] = TRUE;
/* Relationship: Transaction index: 2nd user */
$handler->display->display_options['relationships']['uid2']['id'] = 'uid2';
$handler->display->display_options['relationships']['uid2']['table'] = 'mcapi_index';
$handler->display->display_options['relationships']['uid2']['field'] = 'uid2';
$handler->display->display_options['relationships']['uid2']['required'] = TRUE;
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['relationship'] = 'uid1';
$handler->display->display_options['fields']['name']['label'] = '';
$handler->display->display_options['fields']['name']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['name']['hide_alter_empty'] = FALSE;
/* Field: SUM(Transaction index: Expenditure) */
$handler->display->display_options['fields']['expenditure']['id'] = 'expenditure';
$handler->display->display_options['fields']['expenditure']['table'] = 'mcapi_index';
$handler->display->display_options['fields']['expenditure']['field'] = 'expenditure';
$handler->display->display_options['fields']['expenditure']['group_type'] = 'sum';
$handler->display->display_options['fields']['expenditure']['label'] = '';
$handler->display->display_options['fields']['expenditure']['element_label_colon'] = FALSE;

/* Display: Promiscuity */
$handler = $view->new_display('block', 'Promiscuity', 'block_promiscuity');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Promiscuity';
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['relationship'] = 'uid1';
$handler->display->display_options['fields']['name']['label'] = '';
$handler->display->display_options['fields']['name']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['name']['hide_alter_empty'] = FALSE;
/* Field: COUNT(DISTINCT User: Uid) */
$handler->display->display_options['fields']['uid']['id'] = 'uid';
$handler->display->display_options['fields']['uid']['table'] = 'users';
$handler->display->display_options['fields']['uid']['field'] = 'uid';
$handler->display->display_options['fields']['uid']['relationship'] = 'uid2';
$handler->display->display_options['fields']['uid']['group_type'] = 'count_distinct';
$handler->display->display_options['fields']['uid']['label'] = '';
$handler->display->display_options['fields']['uid']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['uid']['hide_alter_empty'] = FALSE;
$handler->display->display_options['defaults']['sorts'] = FALSE;
/* Sort criterion: COUNT(DISTINCT User: Uid) */
$handler->display->display_options['sorts']['uid']['id'] = 'uid';
$handler->display->display_options['sorts']['uid']['table'] = 'users';
$handler->display->display_options['sorts']['uid']['field'] = 'uid';
$handler->display->display_options['sorts']['uid']['relationship'] = 'uid2';
$handler->display->display_options['sorts']['uid']['group_type'] = 'count_distinct';
$handler->display->display_options['sorts']['uid']['order'] = 'DESC';

/* Display: Volume */
$handler = $view->new_display('block', 'Volume', 'block_volumes');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Volume';
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['relationship'] = 'uid1';
$handler->display->display_options['fields']['name']['label'] = '';
$handler->display->display_options['fields']['name']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['name']['hide_alter_empty'] = FALSE;
/* Field: SUM(Transaction index: Volume) */
$handler->display->display_options['fields']['volume']['id'] = 'volume';
$handler->display->display_options['fields']['volume']['table'] = 'mcapi_index';
$handler->display->display_options['fields']['volume']['field'] = 'volume';
$handler->display->display_options['fields']['volume']['group_type'] = 'sum';
$handler->display->display_options['fields']['volume']['label'] = '';
$handler->display->display_options['fields']['volume']['element_label_colon'] = FALSE;
$handler->display->display_options['defaults']['sorts'] = FALSE;
/* Sort criterion: SUM(Transaction index: Volume) */
$handler->display->display_options['sorts']['volume']['id'] = 'volume';
$handler->display->display_options['sorts']['volume']['table'] = 'mcapi_index';
$handler->display->display_options['sorts']['volume']['field'] = 'volume';
$handler->display->display_options['sorts']['volume']['group_type'] = 'sum';
$handler->display->display_options['sorts']['volume']['order'] = 'DESC';

/* Display: Trades */
$handler = $view->new_display('block', 'Trades', 'block_trades');
$handler->display->display_options['display_description'] = 'Number of trades';
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['relationship'] = 'uid1';
$handler->display->display_options['fields']['name']['label'] = '';
$handler->display->display_options['fields']['name']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['name']['hide_alter_empty'] = FALSE;
/* Field: COUNT(User: Name) */
$handler->display->display_options['fields']['name_1']['id'] = 'name_1';
$handler->display->display_options['fields']['name_1']['table'] = 'users';
$handler->display->display_options['fields']['name_1']['field'] = 'name';
$handler->display->display_options['fields']['name_1']['relationship'] = 'uid1';
$handler->display->display_options['fields']['name_1']['group_type'] = 'count';
$handler->display->display_options['fields']['name_1']['label'] = '';
$handler->display->display_options['fields']['name_1']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['name_1']['hide_alter_empty'] = FALSE;
$handler->display->display_options['defaults']['sorts'] = FALSE;
/* Sort criterion: COUNT(User: Name) */
$handler->display->display_options['sorts']['name']['id'] = 'name';
$handler->display->display_options['sorts']['name']['table'] = 'users';
$handler->display->display_options['sorts']['name']['field'] = 'name';
$handler->display->display_options['sorts']['name']['relationship'] = 'uid1';
$handler->display->display_options['sorts']['name']['group_type'] = 'count';
$handler->display->display_options['sorts']['name']['order'] = 'DESC';

/* Display: Incomes */
$handler = $view->new_display('block', 'Incomes', 'block_incomes');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Incomes';
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['relationship'] = 'uid1';
$handler->display->display_options['fields']['name']['label'] = '';
$handler->display->display_options['fields']['name']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['name']['hide_alter_empty'] = FALSE;
/* Field: SUM(Transaction index: Income) */
$handler->display->display_options['fields']['income']['id'] = 'income';
$handler->display->display_options['fields']['income']['table'] = 'mcapi_index';
$handler->display->display_options['fields']['income']['field'] = 'income';
$handler->display->display_options['fields']['income']['group_type'] = 'sum';
$handler->display->display_options['defaults']['sorts'] = FALSE;
/* Sort criterion: SUM(Transaction index: Income) */
$handler->display->display_options['sorts']['income']['id'] = 'income';
$handler->display->display_options['sorts']['income']['table'] = 'mcapi_index';
$handler->display->display_options['sorts']['income']['field'] = 'income';
$handler->display->display_options['sorts']['income']['group_type'] = 'sum';
$handler->display->display_options['sorts']['income']['order'] = 'DESC';

/* Display: Expenditure */
$handler = $view->new_display('block', 'Expenditure', 'block_expenditures');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'expenditures';
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['defaults']['sorts'] = FALSE;
/* Sort criterion: SUM(Transaction index: Expenditure) */
$handler->display->display_options['sorts']['expenditure']['id'] = 'expenditure';
$handler->display->display_options['sorts']['expenditure']['table'] = 'mcapi_index';
$handler->display->display_options['sorts']['expenditure']['field'] = 'expenditure';
$handler->display->display_options['sorts']['expenditure']['group_type'] = 'sum';
$handler->display->display_options['sorts']['expenditure']['order'] = 'DESC';
$translatables['user_rankings'] = array(
  t('Master'),
  t('Most trades'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Items per page'),
  t('- All -'),
  t('Offset'),
  t('« first'),
  t('‹ previous'),
  t('next ›'),
  t('last »'),
  t('1st user'),
  t('2nd user'),
  t('Promiscuity'),
  t('Volume'),
  t('Trades'),
  t('Number of trades'),
  t('Incomes'),
  t('Income'),
  t('Expenditure'),
  t('expenditures'),
);

<<<>>>
$view = new view();
$view->name = 'user_transactions_summaries';
$view->description = 'per currency transaction summary for individual users';
$view->tag = 'mcapi (index)';
$view->base_table = 'mcapi_index';
$view->human_name = 'User transaction summaries';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['group_by'] = TRUE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['access']['perm'] = 'transact';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['row_plugin'] = 'fields';
/* Field: SUM(Transaction index: Change in balance) */
$handler->display->display_options['fields']['diff']['id'] = 'diff';
$handler->display->display_options['fields']['diff']['table'] = 'mcapi_index';
$handler->display->display_options['fields']['diff']['field'] = 'diff';
$handler->display->display_options['fields']['diff']['group_type'] = 'sum';
$handler->display->display_options['fields']['diff']['label'] = 'Balance';
$handler->display->display_options['fields']['diff']['hide_alter_empty'] = FALSE;
/* Field: Broken/missing handler */
$handler->display->display_options['fields']['uid_1']['id'] = 'uid_1';
$handler->display->display_options['fields']['uid_1']['table'] = 'users';
$handler->display->display_options['fields']['uid_1']['field'] = 'uid1';
$handler->display->display_options['fields']['uid_1']['group_type'] = 'count';
$handler->display->display_options['fields']['uid_1']['label'] = 'Trades';
$handler->display->display_options['fields']['uid_1']['hide_alter_empty'] = FALSE;
/* Field: SUM(Transaction index: Expenditure) */
$handler->display->display_options['fields']['expenditure']['id'] = 'expenditure';
$handler->display->display_options['fields']['expenditure']['table'] = 'mcapi_index';
$handler->display->display_options['fields']['expenditure']['field'] = 'expenditure';
$handler->display->display_options['fields']['expenditure']['group_type'] = 'sum';
$handler->display->display_options['fields']['expenditure']['label'] = 'Gross expenditure';
/* Field: SUM(Transaction index: Income) */
$handler->display->display_options['fields']['income']['id'] = 'income';
$handler->display->display_options['fields']['income']['table'] = 'mcapi_index';
$handler->display->display_options['fields']['income']['field'] = 'income';
$handler->display->display_options['fields']['income']['group_type'] = 'sum';
$handler->display->display_options['fields']['income']['label'] = 'Gross income';
/* Field: COUNT(DISTINCT Transaction index: 2nd user) */
$handler->display->display_options['fields']['uid2']['id'] = 'uid2';
$handler->display->display_options['fields']['uid2']['table'] = 'mcapi_index';
$handler->display->display_options['fields']['uid2']['field'] = 'uid2';
$handler->display->display_options['fields']['uid2']['group_type'] = 'count_distinct';
$handler->display->display_options['fields']['uid2']['label'] = 'Promiscuity';
/* Contextual filter: Transaction index: 1st user */
$handler->display->display_options['arguments']['uid1']['id'] = 'uid1';
$handler->display->display_options['arguments']['uid1']['table'] = 'mcapi_index';
$handler->display->display_options['arguments']['uid1']['field'] = 'uid1';
$handler->display->display_options['arguments']['uid1']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['uid1']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['uid1']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['uid1']['summary_options']['items_per_page'] = '25';

/* Display: Block */
$handler = $view->new_display('block', 'Block', 'user_summ_per_curr');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['block_description'] = 'User transactions summary per currency';
$translatables['user_transactions_summaries'] = array(
  t('Master'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Items per page'),
  t('- All -'),
  t('Offset'),
  t('« first'),
  t('‹ previous'),
  t('next ›'),
  t('last »'),
  t('Balance'),
  t('Trades'),
  t('Gross expenditure'),
  t('Gross income'),
  t('Promiscuity'),
  t('All'),
  t('Block'),
  t('User transactions summary per currency'),
);

