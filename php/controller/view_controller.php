<?php
#Author: DIEGO CASALLAS
#Date: 15/08/2019
#Description : Is BO User
class ViewController
{

    private static $page_path = '../pages/';
    public function loadView($page)
    {
        require_once(self::$page_path . $page . '.php');
    }
    public function __destruct()
    {
        //unset($this);
    }
}
