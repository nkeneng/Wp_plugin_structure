<?php

namespace Steven\Base;
class Deactivate
{
    public static function deactivate()
    {
        flush_rewrite_rules();
    }
}
