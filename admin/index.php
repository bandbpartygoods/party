<?php
// Version
define('VERSION', '2.2.0.0');

// Configuration
if (is_file('gs://goods-1356.appspot.com/admin/config.php')) {
	require_once('gs://goods-1356.appspot.com/admin/config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: ../install/index.php');
	exit;
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

$application_config = 'admin';

// Application
require_once(DIR_SYSTEM . 'framework.php');