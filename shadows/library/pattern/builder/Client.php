<?php

namespace shadows\library\pattern\builder;

use shadows\library\pattern\builder\DirectorCashier;

class Client
{
    public function buy($type)
    {
        $cashire = new DirectorCashier();

        $class = new \ReflectionClass("\shadows\library\pattern\builder\ConcreteBuilder".$type);

        $builder = $class->newInstanceArgs(array(new \shadows\library\pattern\builder\Product()));

        $cashire->buildFoold($builder);

        $builder->getProduct()->showToClient();
    }
}