<?php

namespace shadows\library\pattern\singleton;


class MultiSingleton
{

    private static $_instance = array();
    private $_uid;

    private function __construct($uid)
    {
        $this->_uid = $uid;
    }

    public function getInstance($uid)
    {
        if(!isset(self::$_instance) || !isset(self::$_instance[$uid]))
        {
            self::$_instance[$uid] = new self($uid);
        }

        return self::$_instance[$uid];
    }

}