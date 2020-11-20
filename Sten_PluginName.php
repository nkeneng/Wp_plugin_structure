<?php
/**
 * @package  Sten_PluginName
 */

/*
Plugin Name: Sten_PluginName
Plugin URI:http://Steven_plugin.com
Description: This is my first plugin
Version: 1.0.0
Author: Steven Nkeneng
author URI: http://steven.com
License: GPLv2 or Later
Text Domain : Sten_PluginName
 */

use Sten_PluginName\Base\Activate;
use Sten_PluginName\Base\Deactivate;

defined('ABSPATH') or die;

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

define('Sten_PluginName_PLUGIN_URL', plugin_dir_url(__FILE__));
define('Sten_PluginName_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('Sten_PluginName_PLUGIN', plugin_basename(__FILE__));

function activate_Sten_PluginName()
{
    Activate::activate();
}

function deactivate_Sten_PluginName()
{
    Deactivate::deactivate();
}

register_activation_hook(__FILE__, 'activate_Sten_PluginName');
register_deactivation_hook(__FILE__, 'deactivate_Sten_PluginName');

if (class_exists('Sten_PluginName\\Init')) {
    Sten_PluginName\Init::register_services();
}

