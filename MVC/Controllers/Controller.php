<?php
namespace Controllers;
require_once __DIR__ . '/../Models/Model.php';
require_once 'UserController.php';
require_once 'ComidaController.php';
require_once 'MainController.php';
require_once 'EncargadoController.php';
require_once 'VeterinarioController.php';
require_once 'Reg_lechonController.php';
require_once 'Reg_madreController.php';
require_once 'CerdoController.php';
require_once 'Reg_partoController.php';
require_once 'Reg_diagController.php';
require_once 'Reg_medController.php';
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