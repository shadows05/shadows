<?php
/**
 * Created by PhpStorm.
 * User: gaoduntao
 * Date: 2016/3/11
 * Time: 16:07
 */

namespace shadows\library\pattern\adapter\class_adapter;


class Adatper implements Target
{
    private $adaptee;

    public function __construct($adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function hello()
    {
        // TODO: Implement hello() method.
        $this->adaptee->greet();
    }

    public function world()
    {
        // TODO: Implement world() method.
        $this->adaptee->world();
    }


}