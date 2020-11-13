<?php

namespace Steven\Pages;

class AdminPages
{

    public function register()
    {
        add_action('admin_menu', array($this, 'add_admin_pages'));
    }

    public function add_admin_pages()
    {
        add_menu_page('Steven Plugin', 'steven', 'manage_options', 'steven_plugin',
            array($this, 'admin_index'), 'dashicons-store', 110);
    }

    public function admin_index()
    {
        require_once PLUGIN_PATH . 'Templates/admin.php';
    }
}
