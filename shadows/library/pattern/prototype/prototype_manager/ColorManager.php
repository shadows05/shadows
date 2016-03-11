<?php
/**
 * Created by PhpStorm.
 * User: gaoduntao
 * Date: 2016/3/11
 * Time: 14:44
 */

namespace shadows\library\pattern\prototype\prototype_manager;


class ColorManager
{

    static $colors = array();

    public static function add($name, $value)
    {
        self::$colors[$name] = $value;
    }

    public static function getCopy($name)
    {
        return self::$colors[$name]->copy();
    }

}