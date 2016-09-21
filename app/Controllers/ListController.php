<?php

namespace app\controllers;

use app\models\ArticlesModel;

class ListController extends \riki\core\Controller {

    function __construct() {
        $this->model = new ArticlesModel();
        $this->view = new \riki\core\View();
    }

    function actionIndex($params) {
        $this->view->generateView('template', 'list', null, $params);
    }

}