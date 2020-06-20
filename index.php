<?php

// FrontController

// print arrays
function _do($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

// Обшие натсройки
ini_set('display_errors',1);
error_reporting(E_ALL);


// Подключение системных файлов
define('ROOT',dirname(__FILE__));
require_once (ROOT.'/components/Router.php');


// Создать объект Router и вызвать метод run()
$router = new Router();
$router->run();