<?php
/**
 * Created by PhpStorm.
 * User: gaoduntao
 * Date: 2016/3/11
 * Time: 17:41
 */

namespace shadows\library\pattern\bridge;


class oncreteImplementorWhite extends ImplementorColor
{

    public function __construct($color)
    {
        $this->value = $color;
    }

}