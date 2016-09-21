<?php

namespace riki\core;

use \app\controllers;

class Router {

    public static function start()
    {

        $controller = 'Main';
        $action = 'index';
        $params = null;

        $uri = $_SERVER['REQUEST_URI'];
        //$uri = "/main/index";
        $uri = trim($uri);
        $uri = htmlspecialchars($uri);
        $uri = strip_tags($uri);

        $arr = explode('/', $uri);

        if ((!empty($arr[1])) && (isset($arr[1]))) {
            $controller = "app\\controllers\\" . ucfirst($arr[1]);

            if ((!empty($arr[2])) && (isset($arr[2]))) {
                $action = $arr[2];

                if((!empty($arr[3])) && (isset($arr[3]))) {
                    $params = $arr[3];
                }
            }

        }

        $controller =  $controller . 'Controller';
        $action = 'action' . ucfirst($action);

        if (!class_exists($controller)) $controller = "app\\controllers\\" . 'MainController';

        $controller_obj = new $controller();

        if(!method_exists($controller_obj, $action)) $action = 'actionIndex';

        $controller_obj->$action($params);

    }

}