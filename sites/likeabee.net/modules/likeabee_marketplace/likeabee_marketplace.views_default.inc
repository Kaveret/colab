<?php

function likeabee_marketplace_views_default_views() {


$view = new view();
$view->name = 'likeabee_catalog';
$view->description = 'Catalog';
$view->tag = '';
$view->base_table = 'node';
$view->human_name = '';
$view->core = 0;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Defaults */
$handler = $view->new_display('default', 'Defaults', 'default');
$handler->display->display_options['title'] = 'Catalog';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['columns'] = array(
  'entity_id' => 'entity_id',
  'model' => 'model',
  'title' => 'title',
  'timestamp' => 'title',
  'display_price' => 'display_price',
  'buyitnowbutton' => 'buyitnowbutton',
);
$handler->display->display_options['style_options']['default'] = '-1';
$handler->display->display_options['style_options']['info'] = array(
  'entity_id' => array(
    'align' => 'views-align-center',
    'separator' => '',
  ),
  'model' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => 'views-align-left',
    'separator' => '',
  ),
  'title' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => 'views-align-left',
    'separator' => '',
  ),
  'timestamp' => array(
    'align' => '',
    'separator' => '',
  ),
  'display_price' => array(
    'align' => 'views-align-right',
    'separator' => '',
  ),
  'buyitnowbutton' => array(
    'align' => 'views-align-center',
    'separator' => '',
  ),
);
$handler->display->display_options['style_options']['sticky'] = TRUE;
/* Field: Content: Image */
$handler->display->display_options['fields']['entity_id']['id'] = 'entity_id';
$handler->display->display_options['fields']['entity_id']['table'] = 'field_data_uc_product_image';
$handler->display->display_options['fields']['entity_id']['field'] = 'uc_product_image';
$handler->display->display_options['fields']['entity_id']['label'] = '';
$handler->display->display_options['fields']['entity_id']['hide_empty'] = TRUE;
$handler->display->display_options['fields']['entity_id']['settings'] = array(
  'image_style' => 'uc_product_list',
  'image_link' => 'content',
);
$handler->display->display_options['fields']['entity_id']['delta_limit'] = '1';
/* Field: Product: SKU */
$handler->display->display_options['fields']['model']['id'] = 'model';
$handler->display->display_options['fields']['model']['table'] = 'uc_products';
$handler->display->display_options['fields']['model']['field'] = 'model';
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
/* Field: Content: Has new content */
$handler->display->display_options['fields']['timestamp']['id'] = 'timestamp';
$handler->display->display_options['fields']['timestamp']['table'] = 'history';
$handler->display->display_options['fields']['timestamp']['field'] = 'timestamp';
/* Field: Product: Display price */
$handler->display->display_options['fields']['display_price']['id'] = 'display_price';
$handler->display->display_options['fields']['display_price']['table'] = 'uc_products';
$handler->display->display_options['fields']['display_price']['field'] = 'display_price';
/* Field: Product: Buy it now button */
$handler->display->display_options['fields']['buyitnowbutton']['id'] = 'buyitnowbutton';
$handler->display->display_options['fields']['buyitnowbutton']['table'] = 'uc_products';
$handler->display->display_options['fields']['buyitnowbutton']['field'] = 'buyitnowbutton';
$handler->display->display_options['fields']['buyitnowbutton']['label'] = '';
/* Contextual filter: Content: Has taxonomy term ID (with depth) */
$handler->display->display_options['arguments']['term_node_tid_depth']['id'] = 'term_node_tid_depth';
$handler->display->display_options['arguments']['term_node_tid_depth']['table'] = 'node';
$handler->display->display_options['arguments']['term_node_tid_depth']['field'] = 'term_node_tid_depth';
$handler->display->display_options['arguments']['term_node_tid_depth']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['term_node_tid_depth']['title'] = '%1';
$handler->display->display_options['arguments']['term_node_tid_depth']['breadcrumb_enable'] = TRUE;
$handler->display->display_options['arguments']['term_node_tid_depth']['breadcrumb'] = 'Catalog';
$handler->display->display_options['arguments']['term_node_tid_depth']['default_argument_type'] = 'taxonomy_tid';
$handler->display->display_options['arguments']['term_node_tid_depth']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['term_node_tid_depth']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['term_node_tid_depth']['summary_options']['items_per_page'] = '25';
$handler->display->display_options['arguments']['term_node_tid_depth']['specify_validation'] = TRUE;
$handler->display->display_options['arguments']['term_node_tid_depth']['validate']['type'] = 'taxonomy_term';
$handler->display->display_options['arguments']['term_node_tid_depth']['validate_options']['vocabularies'] = array(
  'catalog' => 'catalog',
);
$handler->display->display_options['arguments']['term_node_tid_depth']['validate']['fail'] = 'empty';
$handler->display->display_options['arguments']['term_node_tid_depth']['depth'] = '0';
$handler->display->display_options['arguments']['term_node_tid_depth']['set_breadcrumb'] = TRUE;
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = '1';
/* Filter criterion: Node: Is a product */
$handler->display->display_options['filters']['is_product']['id'] = 'is_product';
$handler->display->display_options['filters']['is_product']['table'] = 'uc_products';
$handler->display->display_options['filters']['is_product']['field'] = 'is_product';
$handler->display->display_options['filters']['is_product']['value'] = '1';

/* Display: Table */
$handler = $view->new_display('page', 'Table', 'catalog');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = '_catalog';

/* Display: Grid */
$handler = $view->new_display('page', 'Grid', 'catalog_grid');
$handler->display->display_options['defaults']['css_class'] = FALSE;
$handler->display->display_options['css_class'] = 'uc-catalog';
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['defaults']['style_plugin'] = FALSE;
$handler->display->display_options['style_plugin'] = 'grid';
$handler->display->display_options['style_options']['columns'] = '3';
$handler->display->display_options['defaults']['style_options'] = FALSE;
$handler->display->display_options['defaults']['row_plugin'] = FALSE;
$handler->display->display_options['row_plugin'] = 'fields';
$handler->display->display_options['defaults']['row_options'] = FALSE;
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
/* Field: Product: SKU */
$handler->display->display_options['fields']['model']['id'] = 'model';
$handler->display->display_options['fields']['model']['table'] = 'uc_products';
$handler->display->display_options['fields']['model']['field'] = 'model';
$handler->display->display_options['fields']['model']['label'] = '';
/* Field: Content: Image */
$handler->display->display_options['fields']['entity_id']['id'] = 'entity_id';
$handler->display->display_options['fields']['entity_id']['table'] = 'field_data_uc_product_image';
$handler->display->display_options['fields']['entity_id']['field'] = 'uc_product_image';
$handler->display->display_options['fields']['entity_id']['label'] = '';
$handler->display->display_options['fields']['entity_id']['hide_empty'] = TRUE;
$handler->display->display_options['fields']['entity_id']['settings'] = array(
  'image_style' => 'uc_product_list',
  'image_link' => 'content',
);
$handler->display->display_options['fields']['entity_id']['delta_limit'] = '1';
/* Field: Product: Display price */
$handler->display->display_options['fields']['display_price']['id'] = 'display_price';
$handler->display->display_options['fields']['display_price']['table'] = 'uc_products';
$handler->display->display_options['fields']['display_price']['field'] = 'display_price';
$handler->display->display_options['fields']['display_price']['label'] = '';
/* Field: Product: Buy it now button */
$handler->display->display_options['fields']['buyitnowbutton']['id'] = 'buyitnowbutton';
$handler->display->display_options['fields']['buyitnowbutton']['table'] = 'uc_products';
$handler->display->display_options['fields']['buyitnowbutton']['field'] = 'buyitnowbutton';
$handler->display->display_options['fields']['buyitnowbutton']['label'] = '';
$handler->display->display_options['path'] = '_catalog_grid';
$translatables ['uc_catalog'] = array(
  t('Catalog'),
  t('Has new content'),
  t('Price'),
  t('All'),
  t('%1'),
  t('Table'),
  t('Grid'),
);
$views[$view->name] = $view;



$view = new view();
$view->name = 'uc_catalog_terms';
$view->description = 'Catalog categories';
$view->tag = '';
$view->base_table = 'taxonomy_term_data';
$view->human_name = '';
$view->core = 0;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Defaults */
$handler = $view->new_display('default', 'Defaults', 'default');
$handler->display->display_options['css_class'] = 'uc-catalog-terms';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = '12';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['pager']['options']['id'] = '0';
$handler->display->display_options['style_plugin'] = 'grid';
$handler->display->display_options['style_options']['columns'] = '3';
$handler->display->display_options['row_plugin'] = 'fields';
$handler->display->display_options['row_options']['hide_empty'] = TRUE;
/* Field: Taxonomy term: Term ID */
$handler->display->display_options['fields']['tid']['id'] = 'tid';
$handler->display->display_options['fields']['tid']['table'] = 'taxonomy_term_data';
$handler->display->display_options['fields']['tid']['field'] = 'tid';
$handler->display->display_options['fields']['tid']['label'] = '';
$handler->display->display_options['fields']['tid']['exclude'] = TRUE;
$handler->display->display_options['fields']['tid']['separator'] = '';
/* Field: Taxonomy term: Image */
$handler->display->display_options['fields']['entity_id']['id'] = 'entity_id';
$handler->display->display_options['fields']['entity_id']['table'] = 'field_data_uc_catalog_image';
$handler->display->display_options['fields']['entity_id']['field'] = 'uc_catalog_image';
$handler->display->display_options['fields']['entity_id']['label'] = '';
$handler->display->display_options['fields']['entity_id']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['entity_id']['alter']['path'] = 'catalog/[tid]';
$handler->display->display_options['fields']['entity_id']['hide_empty'] = TRUE;
$handler->display->display_options['fields']['entity_id']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['entity_id']['settings'] = array(
  'image_style' => 'uc_category',
  'image_link' => '',
);
$handler->display->display_options['fields']['entity_id']['delta_limit'] = '1';
/* Field: Taxonomy term: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'taxonomy_term_data';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['label'] = '';
$handler->display->display_options['fields']['name']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['name']['alter']['path'] = 'catalog/[tid]';
/* Sort criterion: Taxonomy term: Weight */
$handler->display->display_options['sorts']['weight']['id'] = 'weight';
$handler->display->display_options['sorts']['weight']['table'] = 'taxonomy_term_data';
$handler->display->display_options['sorts']['weight']['field'] = 'weight';
/* Sort criterion: Taxonomy term: Name */
$handler->display->display_options['sorts']['name']['id'] = 'name';
$handler->display->display_options['sorts']['name']['table'] = 'taxonomy_term_data';
$handler->display->display_options['sorts']['name']['field'] = 'name';
/* Contextual filter: Taxonomy term: Parent term */
$handler->display->display_options['arguments']['parent']['id'] = 'parent';
$handler->display->display_options['arguments']['parent']['table'] = 'taxonomy_term_hierarchy';
$handler->display->display_options['arguments']['parent']['field'] = 'parent';
$handler->display->display_options['arguments']['parent']['default_action'] = 'default';
$handler->display->display_options['arguments']['parent']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['parent']['default_argument_options']['argument'] = '0';
$handler->display->display_options['arguments']['parent']['summary']['format'] = 'default_summary';
/* Filter criterion: Taxonomy term: Vocabulary */
$handler->display->display_options['filters']['vid']['id'] = 'vid';
$handler->display->display_options['filters']['vid']['table'] = 'taxonomy_term_data';
$handler->display->display_options['filters']['vid']['field'] = 'vid';
$handler->display->display_options['filters']['vid']['value'] = array(
  6 => '6',
);
$views[$view->name] = $view;



$view = new view();
$view->name = 'uc_customers';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'users';
$view->human_name = 'uc_customers';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Customers';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['group_by'] = TRUE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['access']['perm'] = 'view customers';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['exposed_form']['options']['submit_button'] = 'Search';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = '30';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['pager']['options']['id'] = '0';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['columns'] = array(
  'uid' => 'uid',
  'name' => 'name',
  'billing_full_name' => 'billing_full_name',
  'primary_email' => 'primary_email',
  'billing_city' => 'billing_city',
  'zone_code' => 'billing_city',
  'country_name' => 'billing_city',
  'order_id' => 'order_id',
  'order_total' => 'order_total',
);
$handler->display->display_options['style_options']['default'] = 'order_id';
$handler->display->display_options['style_options']['info'] = array(
  'uid' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
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
  'billing_full_name' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'primary_email' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'billing_city' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => ', ',
    'empty_column' => 0,
  ),
  'zone_code' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'country_name' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'order_id' => array(
    'sortable' => 1,
    'default_sort_order' => 'desc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'order_total' => array(
    'sortable' => 1,
    'default_sort_order' => 'desc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
);
/* Relationship: User: Orders */
$handler->display->display_options['relationships']['uc_orders']['id'] = 'uc_orders';
$handler->display->display_options['relationships']['uc_orders']['table'] = 'users';
$handler->display->display_options['relationships']['uc_orders']['field'] = 'uc_orders';
$handler->display->display_options['relationships']['uc_orders']['required'] = TRUE;
/* Field: User: Uid */
$handler->display->display_options['fields']['uid']['id'] = 'uid';
$handler->display->display_options['fields']['uid']['table'] = 'users';
$handler->display->display_options['fields']['uid']['field'] = 'uid';
$handler->display->display_options['fields']['uid']['label'] = '';
$handler->display->display_options['fields']['uid']['exclude'] = TRUE;
$handler->display->display_options['fields']['uid']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['uid']['link_to_user'] = FALSE;
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['label'] = 'User';
/* Field: Order: Billing address: Full name */
$handler->display->display_options['fields']['billing_full_name']['id'] = 'billing_full_name';
$handler->display->display_options['fields']['billing_full_name']['table'] = 'uc_orders';
$handler->display->display_options['fields']['billing_full_name']['field'] = 'billing_full_name';
$handler->display->display_options['fields']['billing_full_name']['relationship'] = 'uc_orders';
$handler->display->display_options['fields']['billing_full_name']['label'] = 'Name';
/* Field: Order: Email address */
$handler->display->display_options['fields']['primary_email']['id'] = 'primary_email';
$handler->display->display_options['fields']['primary_email']['table'] = 'uc_orders';
$handler->display->display_options['fields']['primary_email']['field'] = 'primary_email';
$handler->display->display_options['fields']['primary_email']['relationship'] = 'uc_orders';
/* Field: Order: Billing address: City */
$handler->display->display_options['fields']['billing_city']['id'] = 'billing_city';
$handler->display->display_options['fields']['billing_city']['table'] = 'uc_orders';
$handler->display->display_options['fields']['billing_city']['field'] = 'billing_city';
$handler->display->display_options['fields']['billing_city']['relationship'] = 'uc_orders';
$handler->display->display_options['fields']['billing_city']['label'] = 'Location';
/* Field: Order: Billing address: State/Province code */
$handler->display->display_options['fields']['zone_code']['id'] = 'zone_code';
$handler->display->display_options['fields']['zone_code']['table'] = 'billing_zones';
$handler->display->display_options['fields']['zone_code']['field'] = 'zone_code';
$handler->display->display_options['fields']['zone_code']['relationship'] = 'uc_orders';
$handler->display->display_options['fields']['zone_code']['label'] = '';
$handler->display->display_options['fields']['zone_code']['element_label_colon'] = FALSE;
/* Field: Order: Billing address: Country */
$handler->display->display_options['fields']['country_name']['id'] = 'country_name';
$handler->display->display_options['fields']['country_name']['table'] = 'billing_countries';
$handler->display->display_options['fields']['country_name']['field'] = 'country_name';
$handler->display->display_options['fields']['country_name']['relationship'] = 'uc_orders';
$handler->display->display_options['fields']['country_name']['label'] = '';
$handler->display->display_options['fields']['country_name']['element_label_colon'] = FALSE;
/* Field: COUNT(Order: Order ID) */
$handler->display->display_options['fields']['order_id']['id'] = 'order_id';
$handler->display->display_options['fields']['order_id']['table'] = 'uc_orders';
$handler->display->display_options['fields']['order_id']['field'] = 'order_id';
$handler->display->display_options['fields']['order_id']['relationship'] = 'uc_orders';
$handler->display->display_options['fields']['order_id']['group_type'] = 'count';
$handler->display->display_options['fields']['order_id']['label'] = 'Orders';
$handler->display->display_options['fields']['order_id']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['order_id']['alter']['path'] = 'admin/store/customers/orders/[uid]';
/* Field: SUM(Order: Order total) */
$handler->display->display_options['fields']['order_total']['id'] = 'order_total';
$handler->display->display_options['fields']['order_total']['table'] = 'uc_orders';
$handler->display->display_options['fields']['order_total']['field'] = 'order_total';
$handler->display->display_options['fields']['order_total']['relationship'] = 'uc_orders';
$handler->display->display_options['fields']['order_total']['group_type'] = 'sum';
$handler->display->display_options['fields']['order_total']['label'] = 'Total';
$handler->display->display_options['fields']['order_total']['precision'] = '0';
/* Filter criterion: User: Name */
$handler->display->display_options['filters']['uid']['id'] = 'uid';
$handler->display->display_options['filters']['uid']['table'] = 'users';
$handler->display->display_options['filters']['uid']['field'] = 'uid';
$handler->display->display_options['filters']['uid']['operator'] = 'not in';
$handler->display->display_options['filters']['uid']['value'] = array(
  0 => 0,
);
$handler->display->display_options['filters']['uid']['group'] = 0;
$handler->display->display_options['filters']['uid']['expose']['operator_id'] = 'uid_op';
$handler->display->display_options['filters']['uid']['expose']['label'] = 'Name';
$handler->display->display_options['filters']['uid']['expose']['operator'] = 'uid_op';
$handler->display->display_options['filters']['uid']['expose']['identifier'] = 'uid';
/* Filter criterion: Order: Order status */
$handler->display->display_options['filters']['order_status']['id'] = 'order_status';
$handler->display->display_options['filters']['order_status']['table'] = 'uc_orders';
$handler->display->display_options['filters']['order_status']['field'] = 'order_status';
$handler->display->display_options['filters']['order_status']['relationship'] = 'uc_orders';
$handler->display->display_options['filters']['order_status']['value'] = array(
  '_active' => '_active',
);
$handler->display->display_options['filters']['order_status']['group'] = 0;
/* Filter criterion: Order: Billing address: First name */
$handler->display->display_options['filters']['billing_first_name']['id'] = 'billing_first_name';
$handler->display->display_options['filters']['billing_first_name']['table'] = 'uc_orders';
$handler->display->display_options['filters']['billing_first_name']['field'] = 'billing_first_name';
$handler->display->display_options['filters']['billing_first_name']['relationship'] = 'uc_orders';
$handler->display->display_options['filters']['billing_first_name']['operator'] = 'allwords';
$handler->display->display_options['filters']['billing_first_name']['group'] = 0;
$handler->display->display_options['filters']['billing_first_name']['exposed'] = TRUE;
$handler->display->display_options['filters']['billing_first_name']['expose']['operator_id'] = 'billing_first_name_op';
$handler->display->display_options['filters']['billing_first_name']['expose']['label'] = 'First name';
$handler->display->display_options['filters']['billing_first_name']['expose']['operator'] = 'billing_first_name_op';
$handler->display->display_options['filters']['billing_first_name']['expose']['identifier'] = 'billing_first_name';
/* Filter criterion: Order: Billing address: Last name */
$handler->display->display_options['filters']['billing_last_name']['id'] = 'billing_last_name';
$handler->display->display_options['filters']['billing_last_name']['table'] = 'uc_orders';
$handler->display->display_options['filters']['billing_last_name']['field'] = 'billing_last_name';
$handler->display->display_options['filters']['billing_last_name']['relationship'] = 'uc_orders';
$handler->display->display_options['filters']['billing_last_name']['operator'] = 'allwords';
$handler->display->display_options['filters']['billing_last_name']['group'] = 0;
$handler->display->display_options['filters']['billing_last_name']['exposed'] = TRUE;
$handler->display->display_options['filters']['billing_last_name']['expose']['operator_id'] = 'billing_last_name_op';
$handler->display->display_options['filters']['billing_last_name']['expose']['label'] = 'Last name';
$handler->display->display_options['filters']['billing_last_name']['expose']['operator'] = 'billing_last_name_op';
$handler->display->display_options['filters']['billing_last_name']['expose']['identifier'] = 'billing_last_name';
/* Filter criterion: Order: Email address */
$handler->display->display_options['filters']['primary_email']['id'] = 'primary_email';
$handler->display->display_options['filters']['primary_email']['table'] = 'uc_orders';
$handler->display->display_options['filters']['primary_email']['field'] = 'primary_email';
$handler->display->display_options['filters']['primary_email']['relationship'] = 'uc_orders';
$handler->display->display_options['filters']['primary_email']['operator'] = 'allwords';
$handler->display->display_options['filters']['primary_email']['group'] = 0;
$handler->display->display_options['filters']['primary_email']['exposed'] = TRUE;
$handler->display->display_options['filters']['primary_email']['expose']['operator_id'] = 'primary_email_op';
$handler->display->display_options['filters']['primary_email']['expose']['label'] = 'Email address';
$handler->display->display_options['filters']['primary_email']['expose']['operator'] = 'primary_email_op';
$handler->display->display_options['filters']['primary_email']['expose']['identifier'] = 'primary_email';

/* Display: Admin page */
$handler = $view->new_display('page', 'Admin page', 'admin_page');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'admin/store/customers/view';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'View customers';
$handler->display->display_options['menu']['description'] = 'View and search customer information.';
$handler->display->display_options['menu']['weight'] = '-10';
$handler->display->display_options['menu']['name'] = 'management';
$translatables ['uc_customers'] = array(
  t('Customers'),
  t('User'),
  t('Name'),
  t('Email address'),
  t('Location'),
  t('Orders'),
  t('First name'),
  t('Last name'),
  t('Admin page'),
);
$views[$view->name] = $view;

$view = new view();
$view->name = 'uc_orders';
$view->description = '';
$view->tag = 'Ubercart';
$view->base_table = 'uc_orders';
$view->human_name = '';
$view->core = 0;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Defaults */
$handler = $view->new_display('default', 'Defaults', 'default');
$handler->display->display_options['title'] = 'Orders';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['access']['perm'] = 'view all orders';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = '30';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['pager']['options']['id'] = '0';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['columns'] = array(
  'actions' => 'actions',
  'order_id' => 'order_id',
  'billing_full_name' => 'billing_full_name',
  'order_status' => 'order_status',
  'created' => 'created',
  'order_total' => 'order_total',
);
$handler->display->display_options['style_options']['default'] = 'order_id';
$handler->display->display_options['style_options']['info'] = array(
  'actions' => array(
    'align' => '',
    'separator' => '',
  ),
  'order_id' => array(
    'sortable' => 1,
    'align' => '',
    'separator' => '',
  ),
  'billing_full_name' => array(
    'align' => '',
    'separator' => '',
  ),
  'order_status' => array(
    'sortable' => 1,
    'align' => '',
    'separator' => '',
  ),
  'created' => array(
    'sortable' => 1,
    'align' => '',
    'separator' => '',
  ),
  'order_total' => array(
    'sortable' => 1,
    'align' => '',
    'separator' => '',
  ),
);
$handler->display->display_options['style_options']['sticky'] = TRUE;
$handler->display->display_options['style_options']['order'] = 'desc';
/* Field: Order: Actions */
$handler->display->display_options['fields']['actions']['id'] = 'actions';
$handler->display->display_options['fields']['actions']['table'] = 'uc_orders';
$handler->display->display_options['fields']['actions']['field'] = 'actions';
/* Field: Order: Order ID */
$handler->display->display_options['fields']['order_id']['id'] = 'order_id';
$handler->display->display_options['fields']['order_id']['table'] = 'uc_orders';
$handler->display->display_options['fields']['order_id']['field'] = 'order_id';
$handler->display->display_options['fields']['order_id']['link_to_order'] = 1;
/* Field: User: Uid */
$handler->display->display_options['fields']['uid']['id'] = 'uid';
$handler->display->display_options['fields']['uid']['table'] = 'users';
$handler->display->display_options['fields']['uid']['field'] = 'uid';
$handler->display->display_options['fields']['uid']['label'] = '';
$handler->display->display_options['fields']['uid']['exclude'] = TRUE;
$handler->display->display_options['fields']['uid']['alter']['text'] = '[billing_full_name]';
$handler->display->display_options['fields']['uid']['alter']['path'] = '[uid]';
$handler->display->display_options['fields']['uid']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['uid']['link_to_user'] = FALSE;
/* Field: Order: Billing address: Full name */
$handler->display->display_options['fields']['billing_full_name']['id'] = 'billing_full_name';
$handler->display->display_options['fields']['billing_full_name']['table'] = 'uc_orders';
$handler->display->display_options['fields']['billing_full_name']['field'] = 'billing_full_name';
$handler->display->display_options['fields']['billing_full_name']['label'] = 'Customer';
$handler->display->display_options['fields']['billing_full_name']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['billing_full_name']['alter']['path'] = 'user/[uid]';
/* Field: Order: Order total */
$handler->display->display_options['fields']['order_total']['id'] = 'order_total';
$handler->display->display_options['fields']['order_total']['table'] = 'uc_orders';
$handler->display->display_options['fields']['order_total']['field'] = 'order_total';
$handler->display->display_options['fields']['order_total']['label'] = 'Total';
$handler->display->display_options['fields']['order_total']['hide_alter_empty'] = FALSE;
$handler->display->display_options['fields']['order_total']['precision'] = '0';
/* Field: Order: Creation date */
$handler->display->display_options['fields']['created']['id'] = 'created';
$handler->display->display_options['fields']['created']['table'] = 'uc_orders';
$handler->display->display_options['fields']['created']['field'] = 'created';
$handler->display->display_options['fields']['created']['label'] = 'Purchase date';
$handler->display->display_options['fields']['created']['hide_alter_empty'] = FALSE;
$handler->display->display_options['fields']['created']['date_format'] = 'uc_store';
/* Field: Order: Order status */
$handler->display->display_options['fields']['order_status']['id'] = 'order_status';
$handler->display->display_options['fields']['order_status']['table'] = 'uc_orders';
$handler->display->display_options['fields']['order_status']['field'] = 'order_status';
$handler->display->display_options['fields']['order_status']['label'] = 'Status';
$handler->display->display_options['fields']['order_status']['hide_alter_empty'] = FALSE;
/* Filter criterion: Order: Order ID */
$handler->display->display_options['filters']['order_id']['id'] = 'order_id';
$handler->display->display_options['filters']['order_id']['table'] = 'uc_orders';
$handler->display->display_options['filters']['order_id']['field'] = 'order_id';
$handler->display->display_options['filters']['order_id']['group'] = 0;
$handler->display->display_options['filters']['order_id']['exposed'] = TRUE;
$handler->display->display_options['filters']['order_id']['expose']['operator_id'] = 'order_id_op';
$handler->display->display_options['filters']['order_id']['expose']['label'] = 'View order number';
$handler->display->display_options['filters']['order_id']['expose']['operator'] = 'order_id_op';
$handler->display->display_options['filters']['order_id']['expose']['identifier'] = 'order_id';
/* Filter criterion: Order: Order status */
$handler->display->display_options['filters']['order_status']['id'] = 'order_status';
$handler->display->display_options['filters']['order_status']['table'] = 'uc_orders';
$handler->display->display_options['filters']['order_status']['field'] = 'order_status';
$handler->display->display_options['filters']['order_status']['value'] = array(
  '_active' => '_active',
);
$handler->display->display_options['filters']['order_status']['group'] = 0;
$handler->display->display_options['filters']['order_status']['exposed'] = TRUE;
$handler->display->display_options['filters']['order_status']['expose']['operator_id'] = 'order_status_op';
$handler->display->display_options['filters']['order_status']['expose']['label'] = 'View by status';
$handler->display->display_options['filters']['order_status']['expose']['operator'] = 'order_status_op';
$handler->display->display_options['filters']['order_status']['expose']['identifier'] = 'order_status';

/* Display: Admin page */
$handler = $view->new_display('page', 'Admin page', 'admin_page');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'admin/store/orders/view';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'View orders';
$handler->display->display_options['menu']['description'] = 'View and process the orders received through your website.';
$handler->display->display_options['menu']['weight'] = '-10';
$handler->display->display_options['menu']['name'] = 'management';

/* Display: Search */
$handler = $view->new_display('page', 'Search', 'search');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Search orders';
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: Order: Billing address: First name */
$handler->display->display_options['filters']['billing_first_name']['id'] = 'billing_first_name';
$handler->display->display_options['filters']['billing_first_name']['table'] = 'uc_orders';
$handler->display->display_options['filters']['billing_first_name']['field'] = 'billing_first_name';
$handler->display->display_options['filters']['billing_first_name']['operator'] = 'allwords';
$handler->display->display_options['filters']['billing_first_name']['group'] = 0;
$handler->display->display_options['filters']['billing_first_name']['exposed'] = TRUE;
$handler->display->display_options['filters']['billing_first_name']['expose']['operator_id'] = 'billing_first_name_op';
$handler->display->display_options['filters']['billing_first_name']['expose']['label'] = 'Billing first name';
$handler->display->display_options['filters']['billing_first_name']['expose']['operator'] = 'billing_first_name_op';
$handler->display->display_options['filters']['billing_first_name']['expose']['identifier'] = 'billing_first_name';
$handler->display->display_options['filters']['billing_first_name']['expose']['remember'] = TRUE;
/* Filter criterion: Order: Billing address: Last name */
$handler->display->display_options['filters']['billing_last_name']['id'] = 'billing_last_name';
$handler->display->display_options['filters']['billing_last_name']['table'] = 'uc_orders';
$handler->display->display_options['filters']['billing_last_name']['field'] = 'billing_last_name';
$handler->display->display_options['filters']['billing_last_name']['operator'] = 'allwords';
$handler->display->display_options['filters']['billing_last_name']['group'] = 0;
$handler->display->display_options['filters']['billing_last_name']['exposed'] = TRUE;
$handler->display->display_options['filters']['billing_last_name']['expose']['operator_id'] = 'billing_last_name_op';
$handler->display->display_options['filters']['billing_last_name']['expose']['label'] = 'Billing last name';
$handler->display->display_options['filters']['billing_last_name']['expose']['operator'] = 'billing_last_name_op';
$handler->display->display_options['filters']['billing_last_name']['expose']['identifier'] = 'billing_last_name';
$handler->display->display_options['filters']['billing_last_name']['expose']['remember'] = TRUE;
/* Filter criterion: Order: Billing address: Company */
$handler->display->display_options['filters']['billing_company']['id'] = 'billing_company';
$handler->display->display_options['filters']['billing_company']['table'] = 'uc_orders';
$handler->display->display_options['filters']['billing_company']['field'] = 'billing_company';
$handler->display->display_options['filters']['billing_company']['operator'] = 'allwords';
$handler->display->display_options['filters']['billing_company']['group'] = 0;
$handler->display->display_options['filters']['billing_company']['exposed'] = TRUE;
$handler->display->display_options['filters']['billing_company']['expose']['operator_id'] = 'billing_company_op';
$handler->display->display_options['filters']['billing_company']['expose']['label'] = 'Billing company';
$handler->display->display_options['filters']['billing_company']['expose']['operator'] = 'billing_company_op';
$handler->display->display_options['filters']['billing_company']['expose']['identifier'] = 'billing_company';
$handler->display->display_options['filters']['billing_company']['expose']['remember'] = TRUE;
/* Filter criterion: Order: Delivery address: First name */
$handler->display->display_options['filters']['delivery_first_name']['id'] = 'delivery_first_name';
$handler->display->display_options['filters']['delivery_first_name']['table'] = 'uc_orders';
$handler->display->display_options['filters']['delivery_first_name']['field'] = 'delivery_first_name';
$handler->display->display_options['filters']['delivery_first_name']['operator'] = 'allwords';
$handler->display->display_options['filters']['delivery_first_name']['group'] = 0;
$handler->display->display_options['filters']['delivery_first_name']['exposed'] = TRUE;
$handler->display->display_options['filters']['delivery_first_name']['expose']['operator_id'] = 'delivery_first_name_op';
$handler->display->display_options['filters']['delivery_first_name']['expose']['label'] = 'Delivery first name';
$handler->display->display_options['filters']['delivery_first_name']['expose']['operator'] = 'delivery_first_name_op';
$handler->display->display_options['filters']['delivery_first_name']['expose']['identifier'] = 'delivery_first_name';
$handler->display->display_options['filters']['delivery_first_name']['expose']['remember'] = TRUE;
/* Filter criterion: Order: Delivery address: Last name */
$handler->display->display_options['filters']['delivery_last_name']['id'] = 'delivery_last_name';
$handler->display->display_options['filters']['delivery_last_name']['table'] = 'uc_orders';
$handler->display->display_options['filters']['delivery_last_name']['field'] = 'delivery_last_name';
$handler->display->display_options['filters']['delivery_last_name']['operator'] = 'allwords';
$handler->display->display_options['filters']['delivery_last_name']['group'] = 0;
$handler->display->display_options['filters']['delivery_last_name']['exposed'] = TRUE;
$handler->display->display_options['filters']['delivery_last_name']['expose']['operator_id'] = 'delivery_last_name_op';
$handler->display->display_options['filters']['delivery_last_name']['expose']['label'] = 'Delivery last name';
$handler->display->display_options['filters']['delivery_last_name']['expose']['operator'] = 'delivery_last_name_op';
$handler->display->display_options['filters']['delivery_last_name']['expose']['identifier'] = 'delivery_last_name';
$handler->display->display_options['filters']['delivery_last_name']['expose']['remember'] = TRUE;
/* Filter criterion: Order: Delivery address: Company */
$handler->display->display_options['filters']['delivery_company']['id'] = 'delivery_company';
$handler->display->display_options['filters']['delivery_company']['table'] = 'uc_orders';
$handler->display->display_options['filters']['delivery_company']['field'] = 'delivery_company';
$handler->display->display_options['filters']['delivery_company']['operator'] = 'allwords';
$handler->display->display_options['filters']['delivery_company']['group'] = 0;
$handler->display->display_options['filters']['delivery_company']['exposed'] = TRUE;
$handler->display->display_options['filters']['delivery_company']['expose']['operator_id'] = 'delivery_company_op';
$handler->display->display_options['filters']['delivery_company']['expose']['label'] = 'Delivery company';
$handler->display->display_options['filters']['delivery_company']['expose']['operator'] = 'delivery_company_op';
$handler->display->display_options['filters']['delivery_company']['expose']['identifier'] = 'delivery_company';
$handler->display->display_options['filters']['delivery_company']['expose']['remember'] = TRUE;
/* Filter criterion: Order: Creation date */
$handler->display->display_options['filters']['created']['id'] = 'created';
$handler->display->display_options['filters']['created']['table'] = 'uc_orders';
$handler->display->display_options['filters']['created']['field'] = 'created';
$handler->display->display_options['filters']['created']['operator'] = 'between';
$handler->display->display_options['filters']['created']['group'] = 0;
$handler->display->display_options['filters']['created']['exposed'] = TRUE;
$handler->display->display_options['filters']['created']['expose']['operator_id'] = 'created_op';
$handler->display->display_options['filters']['created']['expose']['operator'] = 'created_op';

$handler->display->display_options['filters']['created']['expose']['identifier'] = 'created';
/* Filter criterion: Order: Order status */
$handler->display->display_options['filters']['order_status']['id'] = 'order_status';
$handler->display->display_options['filters']['order_status']['table'] = 'uc_orders';
$handler->display->display_options['filters']['order_status']['field'] = 'order_status';
$handler->display->display_options['filters']['order_status']['value'] = array(
  '_active' => '_active',
);
$handler->display->display_options['filters']['order_status']['group'] = 0;
$handler->display->display_options['filters']['order_status']['exposed'] = TRUE;
$handler->display->display_options['filters']['order_status']['expose']['operator_id'] = 'order_status_op';
$handler->display->display_options['filters']['order_status']['expose']['label'] = 'View by status';
$handler->display->display_options['filters']['order_status']['expose']['operator'] = 'order_status_op';
$handler->display->display_options['filters']['order_status']['expose']['identifier'] = 'order_status';
$handler->display->display_options['path'] = 'admin/store/orders/search';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'Search orders';
$handler->display->display_options['menu']['description'] = 'Search existing orders.';
$handler->display->display_options['menu']['weight'] = '0';
$handler->display->display_options['menu']['name'] = 'management';

/* Display: By customer */
$handler = $view->new_display('page', 'By customer', 'by_customer');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['defaults']['arguments'] = FALSE;
/* Contextual filter: User: Uid */
$handler->display->display_options['arguments']['uid']['id'] = 'uid';
$handler->display->display_options['arguments']['uid']['table'] = 'users';
$handler->display->display_options['arguments']['uid']['field'] = 'uid';
$handler->display->display_options['arguments']['uid']['default_action'] = 'not found';
$handler->display->display_options['arguments']['uid']['title_enable'] = TRUE;
$handler->display->display_options['arguments']['uid']['title'] = 'Customer orders: %1';
$handler->display->display_options['arguments']['uid']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['uid']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['uid']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['uid']['summary_options']['items_per_page'] = '25';
$handler->display->display_options['arguments']['uid']['specify_validation'] = TRUE;
$handler->display->display_options['arguments']['uid']['validate']['type'] = 'user';
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: Order: Order status */
$handler->display->display_options['filters']['order_status']['id'] = 'order_status';
$handler->display->display_options['filters']['order_status']['table'] = 'uc_orders';
$handler->display->display_options['filters']['order_status']['field'] = 'order_status';
$handler->display->display_options['filters']['order_status']['value'] = array(
  '_active' => '_active',
);
$handler->display->display_options['filters']['order_status']['group'] = 0;
$handler->display->display_options['filters']['order_status']['exposed'] = TRUE;
$handler->display->display_options['filters']['order_status']['expose']['operator_id'] = 'order_status_op';
$handler->display->display_options['filters']['order_status']['expose']['label'] = 'View by status';
$handler->display->display_options['filters']['order_status']['expose']['operator'] = 'order_status_op';
$handler->display->display_options['filters']['order_status']['expose']['identifier'] = 'order_status';
$handler->display->display_options['path'] = 'admin/store/customers/orders';
$translatables ['uc_orders'] = array(
  t('Orders'),
  t('Actions'),
  t('Order ID'),
  t('[billing_full_name]'),
  t('Purchase date'),
  t('Status'),
  t('View order number'),
  t('View by status'),
  t('Admin page'),
  t('Search'),
  t('Search orders'),
  t('Billing first name'),
  t('Billing last name'),
  t('Billing company'),
  t('Delivery first name'),
  t('Delivery last name'),
  t('Delivery company'),
  t('By customer'),
  t('All'),
  t('Customer orders: %1'),
);
$views[$view->name] = $view;




$view = new view();
$view->name = 'uc_orders_user';
$view->description = '';
$view->tag = 'Ubercart';
$view->base_table = 'uc_orders';
$view->human_name = 'uc_orders_user';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'My order history';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['access']['perm'] = 'view own orders';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = '20';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['pager']['options']['id'] = '0';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['columns'] = array(
  'created' => 'created',
  'order_id' => 'order_id',
  'actions' => 'order_id',
  'order_status' => 'order_status',
  'product_count' => 'product_count',
  'order_total' => 'order_total',
);
$handler->display->display_options['style_options']['default'] = 'created';
$handler->display->display_options['style_options']['info'] = array(
  'created' => array(
    'sortable' => 1,
    'default_sort_order' => 'desc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'order_id' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => ' ',
    'empty_column' => 0,
  ),
  'actions' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'order_status' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'product_count' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'order_total' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
);
/* Field: Order: Creation date */
$handler->display->display_options['fields']['created']['id'] = 'created';
$handler->display->display_options['fields']['created']['table'] = 'uc_orders';
$handler->display->display_options['fields']['created']['field'] = 'created';
$handler->display->display_options['fields']['created']['label'] = 'Date';
$handler->display->display_options['fields']['created']['date_format'] = 'uc_store';
/* Field: Order: Order ID */
$handler->display->display_options['fields']['order_id']['id'] = 'order_id';
$handler->display->display_options['fields']['order_id']['table'] = 'uc_orders';
$handler->display->display_options['fields']['order_id']['field'] = 'order_id';
$handler->display->display_options['fields']['order_id']['label'] = 'Order #';
$handler->display->display_options['fields']['order_id']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['order_id']['link_to_order'] = 1;
/* Field: Order: Actions */
$handler->display->display_options['fields']['actions']['id'] = 'actions';
$handler->display->display_options['fields']['actions']['table'] = 'uc_orders';
$handler->display->display_options['fields']['actions']['field'] = 'actions';
/* Field: Order: Order status */
$handler->display->display_options['fields']['order_status']['id'] = 'order_status';
$handler->display->display_options['fields']['order_status']['table'] = 'uc_orders';
$handler->display->display_options['fields']['order_status']['field'] = 'order_status';
$handler->display->display_options['fields']['order_status']['label'] = 'Status';
/* Field: Order: Product count */
$handler->display->display_options['fields']['product_count']['id'] = 'product_count';
$handler->display->display_options['fields']['product_count']['table'] = 'uc_orders';
$handler->display->display_options['fields']['product_count']['field'] = 'product_count';
$handler->display->display_options['fields']['product_count']['label'] = 'Products';
/* Field: Order: Order total */
$handler->display->display_options['fields']['order_total']['id'] = 'order_total';
$handler->display->display_options['fields']['order_total']['table'] = 'uc_orders';
$handler->display->display_options['fields']['order_total']['field'] = 'order_total';
$handler->display->display_options['fields']['order_total']['label'] = 'Total';
$handler->display->display_options['fields']['order_total']['precision'] = '0';
/* Contextual filter: User: Uid */
$handler->display->display_options['arguments']['uid']['id'] = 'uid';
$handler->display->display_options['arguments']['uid']['table'] = 'users';
$handler->display->display_options['arguments']['uid']['field'] = 'uid';
$handler->display->display_options['arguments']['uid']['default_action'] = 'not found';
$handler->display->display_options['arguments']['uid']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['uid']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['uid']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['uid']['summary_options']['items_per_page'] = '25';
$handler->display->display_options['arguments']['uid']['specify_validation'] = TRUE;
$handler->display->display_options['arguments']['uid']['validate']['type'] = 'user_or_permission';
/* Filter criterion: Order: Order status */
$handler->display->display_options['filters']['order_status']['id'] = 'order_status';
$handler->display->display_options['filters']['order_status']['table'] = 'uc_orders';
$handler->display->display_options['filters']['order_status']['field'] = 'order_status';
$handler->display->display_options['filters']['order_status']['value'] = array(
  '_active' => '_active',
);

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'user/%/orders';
$handler->display->display_options['menu']['type'] = 'tab';
$handler->display->display_options['menu']['title'] = 'Orders';
$handler->display->display_options['menu']['description'] = 'View your order history.';
$handler->display->display_options['menu']['weight'] = '0';
$handler->display->display_options['menu']['name'] = 'user-menu';
$translatables ['uc_orders_user'] = array(
  t('My order history'),
  t('Date'),
  t('Order #'),
  t('Actions'),
  t('Products'),
);
$views[$view->name] = $view;

$view = new view();
$view->name = 'uc_products';
$view->description = '';
$view->tag = 'Ubercart';
$view->base_table = 'node';
$view->human_name = '';
$view->core = 0;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Defaults */
$handler = $view->new_display('default', 'Defaults', 'default');
$handler->display->display_options['title'] = 'Products';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['access']['perm'] = 'administer products';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = '50';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['pager']['options']['id'] = '0';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['columns'] = array(
  'uc_product_image' => 'uc_product_image',
  'title' => 'title',
  'display_price' => 'display_price',
  'changed' => 'changed',
);
$handler->display->display_options['style_options']['default'] = 'changed';
$handler->display->display_options['style_options']['info'] = array(
  'uc_product_image' => array(
    'align' => 'views-align-center',
    'separator' => '',
  ),
  'title' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
  ),
  'display_price' => array(
    'align' => '',
    'separator' => '',
  ),
  'changed' => array(
    'sortable' => 1,
    'default_sort_order' => 'desc',
    'align' => '',
    'separator' => '',
  ),
);
$handler->display->display_options['style_options']['sticky'] = TRUE;
$handler->display->display_options['style_options']['order'] = 'desc';
/* Field: Content: Image */
$handler->display->display_options['fields']['uc_product_image']['id'] = 'uc_product_image';
$handler->display->display_options['fields']['uc_product_image']['table'] = 'field_data_uc_product_image';
$handler->display->display_options['fields']['uc_product_image']['field'] = 'uc_product_image';
$handler->display->display_options['fields']['uc_product_image']['hide_alter_empty'] = FALSE;
$handler->display->display_options['fields']['uc_product_image']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['uc_product_image']['settings'] = array(
  'image_style' => 'uc_product_list',
  'image_link' => 'content',
);
$handler->display->display_options['fields']['uc_product_image']['delta_limit'] = '1';
$handler->display->display_options['fields']['uc_product_image']['delta_offset'] = '0';
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
/* Field: Product: Display price */
$handler->display->display_options['fields']['display_price']['id'] = 'display_price';
$handler->display->display_options['fields']['display_price']['table'] = 'uc_products';
$handler->display->display_options['fields']['display_price']['field'] = 'display_price';
/* Field: Content: Updated date */
$handler->display->display_options['fields']['changed']['id'] = 'changed';
$handler->display->display_options['fields']['changed']['table'] = 'node';
$handler->display->display_options['fields']['changed']['field'] = 'changed';
$handler->display->display_options['fields']['changed']['label'] = 'Updated';
$handler->display->display_options['fields']['changed']['hide_alter_empty'] = FALSE;
$handler->display->display_options['fields']['changed']['date_format'] = 'uc_store';
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: Node: Is a product */
$handler->display->display_options['filters']['is_product']['id'] = 'is_product';
$handler->display->display_options['filters']['is_product']['table'] = 'uc_products';
$handler->display->display_options['filters']['is_product']['field'] = 'is_product';
$handler->display->display_options['filters']['is_product']['value'] = 1;
$handler->display->display_options['filters']['is_product']['expose']['operator'] = FALSE;
/* Filter criterion: Content: Title */
$handler->display->display_options['filters']['title']['id'] = 'title';
$handler->display->display_options['filters']['title']['table'] = 'node';
$handler->display->display_options['filters']['title']['field'] = 'title';
$handler->display->display_options['filters']['title']['operator'] = 'contains';
$handler->display->display_options['filters']['title']['exposed'] = TRUE;
$handler->display->display_options['filters']['title']['expose']['operator_id'] = 'title_op';
$handler->display->display_options['filters']['title']['expose']['label'] = 'Title';
$handler->display->display_options['filters']['title']['expose']['operator'] = 'title_op';
$handler->display->display_options['filters']['title']['expose']['identifier'] = 'title';

/* Display: Admin page */
$handler = $view->new_display('page', 'Admin page', 'admin_page');
$handler->display->display_options['defaults']['hide_admin_links'] = FALSE;
$handler->display->display_options['path'] = 'admin/store/products/view';
$handler->display->display_options['menu']['type'] = 'normal';
$handler->display->display_options['menu']['title'] = 'View products';
$handler->display->display_options['menu']['description'] = 'View and search products available through your website.';
$handler->display->display_options['menu']['weight'] = '-10';
$handler->display->display_options['menu']['name'] = 'management';
$translatables ['uc_products'] = array(
  t('Products'),
  t('Image'),
  t('Title'),
  t('Price')
);

  return $views;
}
