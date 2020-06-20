<?php
require_once (ROOT.'/components/Db.php');
class MainModel
{
    public static function getTask()
    {
        $db = new Db();
        $link = $db::getConnect();
        $data = mysqli_query($link,"SELECT * FROM tasks ORDER BY task_name DESC");
        $tasks = mysqli_fetch_all($data,MYSQLI_ASSOC);

        return $tasks;
    }
}