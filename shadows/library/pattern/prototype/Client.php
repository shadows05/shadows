<?php
/**
 * Created by PhpStorm.
 * User: gaoduntao
 * Date: 2016/3/11
 * Time: 13:52
 */

namespace shadows\library\pattern\prototype;


class Client
{

    public function main()
    {
        $obj1 = new ConcretePrototype("obj1");
        $obj2 = $obj1->copy();

        $obj2->setName("obj2");

        echo "obj1:" . $obj1->getName() . "\n obj2:" . $obj2->getName();
    }
}