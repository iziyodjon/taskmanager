<?php
require_once (ROOT.'/model/AuthModel.php');
class AuthController
{
    public function actionIndex()
    {
        $authModel = new AuthModel();
        $authModel::checkLogin($_POST);
        $title = 'Login';

        require_once (ROOT.'/view/login/index.php');
    }
}