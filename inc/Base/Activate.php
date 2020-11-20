<?php

namespace Sten_PluginName\Base;
class Activate
{
    public static function activate()
    {
        flush_rewrite_rules();
    }

}
