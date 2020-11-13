<?php
/**
 * @package  Steven_plugin
 */

/*
Plugin Name: Steven Plugin
Plugin URI:http://Steven_plugin.com
Description: This is my first plugin
Version: 1.0.0
Author: Steven Nkeneng
author URI: http://steven.com
License: GPLv2 or Later
Text Domain : Steven_plugin
 */

use Steven\Base\Activate;
use Steven\Base\Deactivate;

defined('ABSPATH') or die;

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

define('PLUGIN_URL', plugin_dir_url(__FILE__));
define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN', plugin_basename(__FILE__));

function activate_steven_plugin()
{
    Activate::activate();
}

function deactivate_steven_plugin()
{
    Deactivate::deactivate();
}

register_activation_hook(__FILE__, 'activate_steven_plugin');
register_deactivation_hook(__FILE__, 'deactivate_steven_plugin');

if (class_exists('Steven\\Init')) {
    Steven\Init::register_services();
}

