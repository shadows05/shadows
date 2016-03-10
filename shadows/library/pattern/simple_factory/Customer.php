<?php

namespace shadows\library\pattern\simple_factory;

use shadows\library\pattern\simple_factory\Factory;

class Customer
{

    public function getBmw($type)
    {
        return Factory::createBMW($type);
    }
}