<?php

class NewsController
{
    public function actionIndex(){
        echo 'NewsController - actionIndex <br>';
        echo 'Просмотр всех новостей';
    }

    public function actionView(){
        echo 'Просмотр одной новости';
        return true;
    }
}