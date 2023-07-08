<?php
namespace Controllers;
require_once __DIR__ . '/../Models/Model.php';
require_once 'UserController.php';
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
}