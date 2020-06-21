<?php

class Router
{


    private function getURI(){
        return $uri = $_SERVER['REQUEST_URI'];
    }

    public function run() {

        /*Контроллер и action по умолчанию*/
        $controllerName = "MainController";
        $action = "actionIndex";
        $uri = $this->getURI();

        $route = explode("/", $uri);

        /*Определяем контроллер*/
        if($route[1] != '') {
            $controllerName = ucfirst($route[1]. "Controller");
        }

        // Если контроллер существует то подключаем если нет то страница 404

        if(!file_exists( ROOT .'/controller/'. $controllerName . ".php"))
        {
            //echo 'Bad file';
            require_once (ROOT.'/view/404/404.php');
            exit;
        }else{
            require_once (ROOT .'/controller/'. $controllerName . ".php");
        }


        if(isset($route[2]) && $route[2] !='') {
            $action = 'action'.$route[2];
        }

        $controller = new $controllerName();
        $controller->$action(); // $controller->actionIndex();

    }

}

