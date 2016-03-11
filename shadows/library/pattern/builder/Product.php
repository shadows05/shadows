<?php

namespace shadows\library\pattern\builder;


class Product
{
    public $products = array();

    public function add($name, $value)
    {
        $this->products[$name] = $value;
    }

    public function showToClient()
    {
        foreach($this->products as $key => $value)
        {
            echo $key , '=' , $value ,'<br>';
        }
    }
}