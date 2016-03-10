<?php

namespace shadows\library\pattern\method_factory;

use shadows\library\pattern\method_factory\IFactory;
use shadows\library\pattern\method_factory\Bmw532;


class Bmw532Factory implements IFactory
{
    public function createBmw()
    {
        return new Bmw532();
    }
}