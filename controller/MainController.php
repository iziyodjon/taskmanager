<?php
require_once (ROOT.'/model/MainModel.php');
class MainController
{
    public function actionIndex(){
        $mainModel = new MainModel;
        $title = 'Главная страница';
        $tasks = $mainModel::getTask();
        require_once (ROOT.'/view/main/index.php');
    }

    public function actionName(){

    }


}