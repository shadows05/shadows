<?php
/**
 * Created by PhpStorm.
 * User: gaoduntao
 * Date: 2016/3/11
 * Time: 17:38
 */

namespace shadows\library\pattern\bridge;


abstract class BrushPenAbstraction
{

    protected  $_implementorColor = null;

    public function setImplementorColor(ImplementorColor $color) {
        $this->_implementorColor = $color;
    }

    public abstract function operationDraw();

}