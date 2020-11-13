<?php

namespace Steven\Base;
class Activate
{
    public static function activate()
    {
        flush_rewrite_rules();
    }

}
