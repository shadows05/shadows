<?php

namespace shadows\library\pattern\ab_factory;

use shadows\library\pattern\ab_factory\IFactory;
use shadows\library\pattern\ab_factory\Bmw302;
use shadows\library\pattern\ab_factory\Condition302;

class Factory302 implements  IFactory
{

    public function createBmw()
    {
        return new Bmw302();
    }

    public function createCondition()
    {
        return new Condition302();
    }

}