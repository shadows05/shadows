<?php

namespace shadows\library\pattern\singleton;

class Singleton
{
    private static  $instalce = null;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if(self::$instalce == null)
        {
            self::$instalce = new self();
        }

        return self::$instalce;
    }
}