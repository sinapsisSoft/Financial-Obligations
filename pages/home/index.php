<?php
    require_once('../../php/class/route.php');

    $route=isset($_GET['route'])?$_GET['route']:'home';
    $dendrite=new Router($route);


?>