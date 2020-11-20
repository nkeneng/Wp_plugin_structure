<?php

namespace Sten_PluginName\Base;
class Deactivate
{
    public static function deactivate()
    {
        flush_rewrite_rules();
    }
}
