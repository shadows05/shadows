<?php

namespace shadows\library\pattern\simple_factory;

use shadows\library\pattern\simple_factory\Bmw320;
use shadows\library\pattern\simple_factory\Bmw532;

class Factory
{

    public static function createBMW($type)
    {
        switch ($type) {
            case 320:
                return new Bmw320();
            case 523:
                return new Bmw532();
            //....
        }

    }
}