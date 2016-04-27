<?php
$view = new view();
$view->name = 'software_licenses_by_user';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'software_license';
$view->human_name = 'Software Licenses By User';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Software Licenses';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['access']['perm'] = 'view own software_license entities';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = '25';
$handler->display->display_options['style_plugin'] = 'table_megarows';
$handler->display->display_options['style_options']['columns'] = array(
  'serial_id' => 'serial_id',
  'license_key' => 'license_key',
  'order_product_id' => 'order_product_id',
  'product_name' => 'product_name',
  'product_size' => 'product_size',
  'end_date' => 'end_date',
  'start_date' => 'start_date',
  'nothing' => 'nothing',
);
$handler->display->display_options['style_options']['default'] = '-1';
$handler->display->display_options['style_options']['info'] = array(
  'serial_id' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'license_key' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'order_product_id' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'product_name' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'product_size' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'end_date' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'start_date' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'nothing' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
);
$handler->display->display_options['style_options']['sticky'] = TRUE;
$handler->display->display_options['style_options']['scroll_padding'] = '120';
$handler->display->display_options['row_plugin'] = 'fields';
/* Header: Global: Text area */
$handler->display->display_options['header']['area']['id'] = 'area';
$handler->display->display_options['header']['area']['table'] = 'views';
$handler->display->display_options['header']['area']['field'] = 'area';
$handler->display->display_options['header']['area']['label'] = 'Virtualmin Licenses Section Title';
$handler->display->display_options['header']['area']['content'] = '<h3>Virtualmin</h3>';
$handler->display->display_options['header']['area']['format'] = 'full_html';
/* Footer: Global: Text area */
$handler->display->display_options['footer']['area']['id'] = 'area';
$handler->display->display_options['footer']['area']['table'] = 'views';
$handler->display->display_options['footer']['area']['field'] = 'area';
$handler->display->display_options['footer']['area']['label'] = 'Cloudmin Licenses Section Title';
$handler->display->display_options['footer']['area']['empty'] = TRUE;
$handler->display->display_options['footer']['area']['content'] = '<h3>Cloudmin</h3>';
$handler->display->display_options['footer']['area']['format'] = 'full_html';
/* Footer: Global: View area */
$handler->display->display_options['footer']['view']['id'] = 'view';
$handler->display->display_options['footer']['view']['table'] = 'views';
$handler->display->display_options['footer']['view']['field'] = 'view';
$handler->display->display_options['footer']['view']['label'] = 'Cloudmin Licenses Section';
$handler->display->display_options['footer']['view']['view_to_insert'] = 'cloudmin_licenses_test:default';
$handler->display->display_options['footer']['view']['inherit_arguments'] = TRUE;
/* Field: Software License: Software license ID */
$handler->display->display_options['fields']['serial_id']['id'] = 'serial_id';
$handler->display->display_options['fields']['serial_id']['table'] = 'software_license';
$handler->display->display_options['fields']['serial_id']['field'] = 'serial_id';
$handler->display->display_options['fields']['serial_id']['separator'] = '';
/* Field: Software License: License_key */
$handler->display->display_options['fields']['license_key']['id'] = 'license_key';
$handler->display->display_options['fields']['license_key']['table'] = 'software_license';
$handler->display->display_options['fields']['license_key']['field'] = 'license_key';
$handler->display->display_options['fields']['license_key']['label'] = 'License key';
/* Field: Software License: Product_size */
$handler->display->display_options['fields']['product_size']['id'] = 'product_size';
$handler->display->display_options['fields']['product_size']['table'] = 'software_license';
$handler->display->display_options['fields']['product_size']['field'] = 'product_size';
$handler->display->display_options['fields']['product_size']['label'] = 'Domains';
/* Field: Software License: Start_date */
$handler->display->display_options['fields']['start_date']['id'] = 'start_date';
$handler->display->display_options['fields']['start_date']['table'] = 'software_license';
$handler->display->display_options['fields']['start_date']['field'] = 'start_date';
$handler->display->display_options['fields']['start_date']['label'] = 'Start date';
/* Field: Software License: End_date */
$handler->display->display_options['fields']['end_date']['id'] = 'end_date';
$handler->display->display_options['fields']['end_date']['table'] = 'software_license';
$handler->display->display_options['fields']['end_date']['field'] = 'end_date';
$handler->display->display_options['fields']['end_date']['label'] = 'Expires on';
$handler->display->display_options['fields']['end_date']['element_label_colon'] = FALSE;
/* Field: Global: Custom text */
$handler->display->display_options['fields']['nothing']['id'] = 'nothing';
$handler->display->display_options['fields']['nothing']['table'] = 'views';
$handler->display->display_options['fields']['nothing']['field'] = 'nothing';
$handler->display->display_options['fields']['nothing']['label'] = 'Download Link';
$handler->display->display_options['fields']['nothing']['alter']['text'] = 'Download Install Script';
$handler->display->display_options['fields']['nothing']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['nothing']['alter']['path'] = 'http://software.virtualmin.com/cgi-bin/install.cgi?serial=[serial_id]&key=[license_key]';
$handler->display->display_options['fields']['nothing']['alter']['external'] = TRUE;
$handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
/* Contextual filter: Software License: Uid */
$handler->display->display_options['arguments']['uid_1']['id'] = 'uid_1';
$handler->display->display_options['arguments']['uid_1']['table'] = 'software_license';
$handler->display->display_options['arguments']['uid_1']['field'] = 'uid';
$handler->display->display_options['arguments']['uid_1']['default_action'] = 'access denied';
$handler->display->display_options['arguments']['uid_1']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['uid_1']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['uid_1']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['uid_1']['summary_options']['items_per_page'] = '25';
$handler->display->display_options['arguments']['uid_1']['specify_validation'] = TRUE;
$handler->display->display_options['arguments']['uid_1']['validate']['type'] = 'current_user_or_role';
$handler->display->display_options['arguments']['uid_1']['validate_options']['restrict_roles'] = TRUE;
$handler->display->display_options['arguments']['uid_1']['validate_options']['roles'] = array(
  3 => '3',
);
$handler->display->display_options['arguments']['uid_1']['validate']['fail'] = 'access denied';
/* Filter criterion: Software License: Product_name */
$handler->display->display_options['filters']['product_name']['id'] = 'product_name';
$handler->display->display_options['filters']['product_name']['table'] = 'software_license';
$handler->display->display_options['filters']['product_name']['field'] = 'product_name';
$handler->display->display_options['filters']['product_name']['value'] = 'vm';

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['path'] = 'user/%/serial';
$handler->display->display_options['menu']['type'] = 'tab';
$handler->display->display_options['menu']['title'] = 'Software Licenses';
$handler->display->display_options['menu']['description'] = 'View your software licenses';
$handler->display->display_options['menu']['weight'] = '0';
$handler->display->display_options['menu']['name'] = 'management';
$handler->display->display_options['menu']['context'] = 0;
$handler->display->display_options['menu']['context_only_inline'] = 0;

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page_1');
$handler->display->display_options['exposed_block'] = TRUE;
$handler->display->display_options['path'] = 'software-licenses-test';
$translatables['software_licenses_by_user'] = array(
  t('Master'),
  t('Software Licenses'),
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
  t('Virtualmin Licenses Section Title'),
  t('<h3>Virtualmin</h3>'),
  t('Cloudmin Licenses Section Title'),
  t('<h3>Cloudmin</h3>'),
  t('Cloudmin Licenses Section'),
  t('Software license ID'),
  t('.'),
  t('License key'),
  t('Domains'),
  t(','),
  t('Start date'),
  t('Expires on'),
  t('Download Link'),
  t('Download Install Script'),
  t('All'),
  t('Page'),
);

