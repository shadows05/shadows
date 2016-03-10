<?php
namespace shadows\library\pattern\method_factory;

use shadows\library\pattern\method_factory\Bmw532Factory;
use shadows\library\pattern\method_factory\Bmw302Factory;


class Customer
{

    public function getBmw($type){
//            switch ($type) {
//                case 302:
//                    $BWM320 = new Bmw302Factory();
//                    return $BWM320->createBmw();
//                case 523:
//                    $BWM523 = new Bmw532Factory();
//                    return $BWM523->createBMW();
//                //....
//            }
        /**
         * 反射机制
         *
         * 类名需要是带命名空间的
         */
        $class = new \ReflectionClass('shadows\library\pattern\method_factory\Bmw' .$type . "Factory");
        $instance  = $class->newInstanceArgs();

        /**
         *
         */
//        $class_name = "shadows\library\pattern\method_factory\Bmw".$type."Factory";
//        $instance = new $class_name();


        return $instance->createBmw();
    }

}