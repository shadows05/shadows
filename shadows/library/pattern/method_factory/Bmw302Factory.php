<?php

namespace shadows\library\pattern\method_factory;

use shadows\library\pattern\method_factory\IFactory;
use shadows\library\pattern\method_factory\Bmw302;

class Bmw302Factory implements IFactory
{
    public function createBmw()
    {
        return new Bmw302();
    }

}