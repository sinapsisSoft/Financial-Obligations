<?php
class Autoload
{
    public function __construct($class_name)
    {
        spl_autoload_register(function ($class_name) {
            $dao_path = '../dao/' . $class_name . '.php';
            $dto_path = '../dto/' . $class_name . '.php';

            echo"<p>$dao_path</p><p>$dto_path</p>";
           
        });

      
    }
    public function __destruct()
    {
        //unset($this);
    }
}

$autoload=new Autoload("user");

