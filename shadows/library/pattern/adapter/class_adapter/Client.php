<?php

namespace shadows\library\pattern\adapter\class_adapter;

use shadows\library\pattern\adapter\class_adapter\Target;

class Client
{

    public static function main()
    {
        $adapter = new Adapter();
        $adapter->hello();
        $adapter->world();
    }
}