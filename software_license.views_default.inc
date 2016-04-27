<?php

function software_license_views_default_views() {
  $files = file_scan_directory(drupal_get_path('module', 'software_license'). '/views', '/.*\.view\.php$/');
  foreach ($files as $filepath => $file) {
    require $filepath;
    if (isset($view)) {
      $views[$view->name] = $view;
    }
  }
  return $views;
}

