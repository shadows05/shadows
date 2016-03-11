<?php
/**
 * Created by PhpStorm.
 * User: gaoduntao
 * Date: 2016/3/11
 * Time: 16:08
 */

namespace shadows\library\pattern\adapter\class_adapter;


class Client
{

    public static function main()
    {
        $adapter = new Adatper(new Adaptee());
        $adapter->world();
        $adapter->hello();
    }

}