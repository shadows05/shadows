<?php
/**
 * Created by PhpStorm.
 * User: gaoduntao
 * Date: 2016/3/11
 * Time: 14:42
 */

namespace shadows\library\pattern\prototype\prototype_manager;

use shadows\library\pattern\prototype\prototype_manager\ColorPrototype;

class Color extends ColorPrototype
{
    private $red;
    private $green;
    private $blue;

    public function __construct($red, $green, $blue)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }

    /**
     * @return mixed
     */
    public function getRed()
    {
        return $this->red;
    }

    /**
     * @param mixed $red
     */
    public function setRed($red)
    {
        $this->red = $red;
    }

    /**
     * @return mixed
     */
    public function getGreen()
    {
        return $this->green;
    }

    /**
     * @param mixed $green
     */
    public function setGreen($green)
    {
        $this->green = $green;
    }

    /**
     * @return mixed
     */
    public function getBlue()
    {
        return $this->blue;
    }

    /**
     * @param mixed $blue
     */
    public function setBlue($blue)
    {
        $this->blue = $blue;
    }

    public function copy()
    {
        return clone $this;
    }

    function display() {
        echo $this->red , ',', $this->green, ',', $this->blue ,'<br>';
    }
}