<?php

namespace Steven\Base;

class SettingsLink
{
    protected $plugin;

    public function __construct()
    {
        $this->plugin = PLUGIN;
    }

    public function register()
    {
        add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
    }

    public function settings_link($link)
    {
        $settings_link = '<a href= "admin.php/?page=steven_plugin">Settings</a>';
        array_push($link, $settings_link);
        return $link;
    }


}
