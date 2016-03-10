<?php

namespace shadows\library;


class Loader
{

    public static function autoLoad($class)
    {
        require_once(BASE_DIR . str_replace("\\", "/", $class) . ".php");
    }
}