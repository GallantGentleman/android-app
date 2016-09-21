<?php

error_reporting(E_ALL);

define('SITE_NAME', "http://gug.tv/");
//define(SITE_NAME, "http://winmyskin.com/");

use riki\core;
use riki\config;
use app\controllers;
use app\models;

include "vendor/riki/core/Loader.php";
include "vendor/riki/core/Router.php";

function autoload($className) {
    Loader::autoload($className);
}

spl_autoload_register('autoload');

$router = new \riki\core\Router();
$router->start();
?>
