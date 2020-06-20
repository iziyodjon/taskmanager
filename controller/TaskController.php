<?php

class TaskController
{
    public function actionIndex(){
        $title = 'Add task';
        require_once (ROOT.'/view/task/index.php');
    }
}