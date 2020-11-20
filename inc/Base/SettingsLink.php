<?php

namespace Sten_PluginName\Base;

class SettingsLink
{
    protected $plugin;

    public function __construct()
    {
        $this->plugin = Sten_PluginName_PLUGIN;
    }

    public function register()
    {
        add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
    }

    public function settings_link($link)
    {
        $settings_link = '<a href= "admin.php/?page=Sten_PluginName">Settings</a>';
        array_push($link, $settings_link);
        return $link;
    }


}
