<?php
/**
 * Created by PhpStorm.
 * User: gaoduntao
 * Date: 2016/3/11
 * Time: 15:53
 */

namespace shadows\library\pattern\adapter\class_adapter;


class Adapter extends Adaptee implements Target
{

    public function hello()
    {
        parent::greet();
    }
}