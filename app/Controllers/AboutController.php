<?php

namespace app\controllers;


class AboutController extends \riki\core\Controller {

    function __construct() {
        $this->view = new \riki\core\View();
    }

    function actionIndex($params) {
        $this->view->generateView('template', 'about');
    }

}