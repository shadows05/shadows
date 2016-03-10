<?php
/**
 * Created by PhpStorm.
 * User: gaoduntao
 * Date: 2016/3/10
 * Time: 14:21
 */

namespace shadows\library\pattern\ab_factory;

use shadows\library\pattern\ab_factory\IFactory;
use shadows\library\pattern\ab_factory\Bmw532;
use shadows\library\pattern\ab_factory\Condition532;

class Factory532 implements IFactory
{

    public function createBmw()
    {
        return new Bmw532();
    }

    public function createCondition()
    {
        return new Condition532();
    }
}