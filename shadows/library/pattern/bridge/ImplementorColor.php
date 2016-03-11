<?php
/**
 * Created by PhpStorm.
 * User: gaoduntao
 * Date: 2016/3/11
 * Time: 17:39
 */

namespace shadows\library\pattern\bridge;


class ImplementorColor
{

    protected $value;

    public  function bepaint(){
        echo $this->value;
    }
}