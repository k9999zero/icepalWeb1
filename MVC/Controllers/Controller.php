<?php
namespace Controllers;
require_once __DIR__ . '/../Models/Model.php';
require_once 'UserController.php';
require_once 'ComidaController.php';
require_once 'MainController.php';
require_once 'EncargadoController.php';
require_once 'VeterinarioController.php';
require_once 'MadreController.php';
require_once 'CerdoController.php';
require_once 'CorralController.php';
require_once 'LechonController.php';
require_once 'Ficha_partoController.php';
require_once 'DiagnosticoController.php';
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