<?php

namespace Sten_PluginName\Pages;

class AdminPages
{

    public function register()
    {
        add_action('admin_menu', array($this, 'add_admin_pages'));
    }

    public function add_admin_pages()
    {
        add_menu_page('Sten_PluginName', 'steven', 'manage_options', 'Sten_PluginName',
            array($this, 'admin_index'), 'dashicons-store', 110);
    }

    public function admin_index()
    {
        require_once Sten_PluginName_PLUGIN_PATH . 'Templates/admin.php';
    }
}
