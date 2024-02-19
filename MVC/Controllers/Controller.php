<?php
namespace Controllers;
require_once __DIR__ . '/../Models/Model.php';
require_once 'UserController.php';

require_once 'EmpleadoController.php';


class Controller
{
    public function redirect($route,$data = null)
    {
        $separator = "/";
        $url = $route;
        if($data!=null)
        {                                    
            $url = $url.$separator.$data;
        }
        header("Location: ".$url);
        exit();
    }
}