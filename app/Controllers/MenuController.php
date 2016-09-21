<?php

namespace app\controllers;


class MenuController extends \riki\core\Controller {

    public $content;

    function __construct() {
        $this->view = new \riki\core\View();
    }

    function actionIndex($params) {
        $this->view->generateView('template', $this->content);
    }

    function actionAuth() {
        $this->content = 'auth';
        $this->actionIndex(null);
    }

    function actionReg() {
        $this->content = 'reg';
        $this->actionIndex(null);
    }

    function actionFb() {
        $this->content = 'fb';
        $this->actionIndex(null);
    }

}