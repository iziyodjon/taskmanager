<?php
require_once (ROOT.'/components/Db.php');

class AuthModel
{
    public static function checkLogin($post){
       if($post){
           _do($post);
       }
    }
}