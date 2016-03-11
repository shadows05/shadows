<?php


namespace shadows\library\pattern\builder;

use shadows\library\pattern\builder\Builderl;

class ConcreteBuilder2
{
    private $_product = null;

    public function __construct($product)
    {
        $this->_product = $product;
    }

    public function buildPart1()
    {
        $this->_product->add("key1", "value1");
    }

    public function buildPart2()
    {
        $this->_product->add("key2", "value2");
    }

    public function buildPart3()
    {
        $this->_product->add("key3", "value3");
    }

    public function getProduct()
    {
        return $this->_product;
    }
}