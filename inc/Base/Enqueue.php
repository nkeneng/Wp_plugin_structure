<?php

namespace Sten_PluginName\Base;

class Enqueue
{
    public function register()
    {
        //for backend
        add_action('admin_enqueue_scripts', array($this, 'enqueueBackend'));
        // for frontend
        add_action('wp_enqueue_scripts', array($this, 'enqueueFrontend'));
    }

    function enqueueFrontend()
    {
        wp_enqueue_style('Sten_PluginName_frontend_style', Sten_PluginName_PLUGIN_URL . 'assets/frontend/style.css');
        wp_enqueue_script('Sten_PluginName_frontend_script', Sten_PluginName_PLUGIN_URL . 'assets/frontend/script.js');
    }

    function enqueueBackend()
    {
        wp_enqueue_style('Sten_PluginName_backend_style', Sten_PluginName_PLUGIN_URL . 'assets/backend/style.css');
        wp_enqueue_script('Sten_PluginName_frontend_style', Sten_PluginName_PLUGIN_URL . 'assets/backend/script.js');
    }

}
