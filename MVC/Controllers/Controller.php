<?php
namespace Controllers;
require_once __DIR__ . '/../Models/Model.php';
require_once 'UserController.php';
require_once 'ProductoController.php';
require_once 'CategoriaController.php';
require_once 'AdornoController.php';
require_once 'ComentariosController.php';
require_once 'PuntuacionController.php';
require_once 'ClienteController.php';
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






































































































































































































require_once $test;
require_once 'UserController.php';
require_once 'ComidaController.php';
require_once 'MainController.php';
require_once 'CategoriaController.php';
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
