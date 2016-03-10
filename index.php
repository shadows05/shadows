<?php

define("BASE_DIR", __DIR__ . "/");

require_once(BASE_DIR . "shadows/library/Loader.php");

spl_autoload_register("\\shadows\\library\\Loader::autoLoad");


$customer = new \shadows\library\pattern\method_factory\Customer();

var_dump($customer->getBmw("302"));