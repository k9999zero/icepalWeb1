<?php
namespace Controllers;
require_once __DIR__ . '/../Models/Model.php';
require_once 'UserController.php';
require_once 'ComidaController.php';
require_once 'UserCreateController.php';
class Controller
{
    public function redirect($route,$data = null)
    {
        $url = $route;
        if($data!=null)
        {
            $params="?";
            foreach($data as $key => $value)
            {
                $params= $params.$key."=".$value.",";
            }
            $params = rtrim($params,",");
            $url = $url.$params;
        }
        header("Location: ".$url);
        exit();
    }
    public function index()
    {          
        require_once __DIR__ . '/../Views/WelcomeView.php';
        $view = new WelcomeView();
        $user=User::select("nombre")->where('nombre','=','DesdeUpdate')
        ->where('password','=','test4')->get();
        $view->render($user);
    }
}