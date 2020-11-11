<?php
#Author: DIEGO CASALLAS
#Date: 01/06/2020
#Description : Is class routes
//require_once "../controller/view_controller.php";
class Router
{
    public $route;

    public function __construct($route)
    {

        if (!isset($_SESSION)) session_start();
        if (!isset($_SESSION['ok'])) $_SESSION['ok'] = false;

        if ($_SESSION['ok']) {
        } else {
            $login_page = new ViewController();
            $login_page->loadView('login');
        }
    }

    public function __destruct()
    {
        // unset($this);
    }
}
