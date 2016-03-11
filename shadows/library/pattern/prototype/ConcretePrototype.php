<?php

namespace shadows\library\pattern\prototype;


use shadows\library\pattern\prototype\IPrototype;

class ConcretePrototype implements IPrototype
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function copy()
    {
        return clone $this;
    }
}