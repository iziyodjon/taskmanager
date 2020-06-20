<?php

class Db
{

    public static function getConnect()
    {
        $config = require_once (ROOT.'/config/config.php');

        //$link = mysqli_connect($config['host'], $config['user'], $config['password'], $config['dbname']);
        $link = mysqli_connect($config['host'],$config['user'],$config['password'],$config['dbname']);

        if (!$link) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }



        return $link;
        mysqli_close($link);
    }

}
