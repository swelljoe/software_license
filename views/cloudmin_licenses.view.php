<?php
$view = new view();
$view->name = 'cloudmin_licenses';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'software_license';
$view->human_name = 'Cloudmin Licenses';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Cloudmin Licenses';
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
$handler->display->display_options['fields']['product_size']['label'] = 'Virtual Machines';
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
$handler->display->display_options['fields']['nothing_1']['id'] = 'nothing_1';
$handler->display->display_options['fields']['nothing_1']['table'] = 'views';
$handler->display->display_options['fields']['nothing_1']['field'] = 'nothing';
$handler->display->display_options['fields']['nothing_1']['label'] = 'Download Links';
$handler->display->display_options['fields']['nothing_1']['alter']['text'] = '<a href="http://cloudmin.virtualmin.com/cgi-bin/cloudmin-redhat-install.cgi?serial=[serial_id]&key=[license_key]">RHEL/CentOS</a><br>
<a href="http://cloudmin.virtualmin.com/cgi-bin/cloudmin-debian-install.cgi?serial=[serial_id]&key=[license_key]">Debian</a><br>
<a href="http://cloudmin.virtualmin.com/cgi-bin/cloudmin-install.cgi?serial=[serial_id]&key=[license_key]">Generic (BSD or Linux)</a><br>
<a href="http://cloudmin.virtualmin.com/cgi-bin/cloudmin-solaris-install.cgi?serial=[serial_id]&key=[license_key]">Solaris</a><br>';
/* Contextual filter: Software License: Uid */
$handler->display->display_options['arguments']['uid']['id'] = 'uid';
$handler->display->display_options['arguments']['uid']['table'] = 'software_license';
$handler->display->display_options['arguments']['uid']['field'] = 'uid';
$handler->display->display_options['arguments']['uid']['default_action'] = 'access denied';
$handler->display->display_options['arguments']['uid']['default_argument_type'] = 'fixed';
$handler->display->display_options['arguments']['uid']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['uid']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['uid']['summary_options']['items_per_page'] = '25';
$handler->display->display_options['arguments']['uid']['specify_validation'] = TRUE;
$handler->display->display_options['arguments']['uid']['validate']['type'] = 'current_user_or_role';
$handler->display->display_options['arguments']['uid']['validate_options']['restrict_roles'] = TRUE;
$handler->display->display_options['arguments']['uid']['validate_options']['roles'] = array(
  3 => '3',
);
/* Filter criterion: Software License: Product_name */
$handler->display->display_options['filters']['product_name']['id'] = 'product_name';
$handler->display->display_options['filters']['product_name']['table'] = 'software_license';
$handler->display->display_options['filters']['product_name']['field'] = 'product_name';
$handler->display->display_options['filters']['product_name']['value'] = 'cm';

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['path'] = 'user/%/cloudmin-serial';
$translatables['cloudmin_licenses'] = array(
  t('Master'),
  t('Cloudmin Licenses'),
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
  t('Software license ID'),
  t('.'),
  t('License key'),
  t('Virtual Machines'),
  t(','),
  t('Start date'),
  t('Expires on'),
  t('Download Links'),
  t('<a href="http://cloudmin.virtualmin.com/cgi-bin/cloudmin-redhat-install.cgi?serial=[serial_id]&key=[license_key]">RHEL/CentOS</a><br>
<a href="http://cloudmin.virtualmin.com/cgi-bin/cloudmin-debian-install.cgi?serial=[serial_id]&key=[license_key]">Debian</a><br>
<a href="http://cloudmin.virtualmin.com/cgi-bin/cloudmin-install.cgi?serial=[serial_id]&key=[license_key]">Generic (BSD or Linux)</a><br>
<a href="http://cloudmin.virtualmin.com/cgi-bin/cloudmin-solaris-install.cgi?serial=[serial_id]&key=[license_key]">Solaris</a><br>'),
  t('All'),
  t('Page'),
);

