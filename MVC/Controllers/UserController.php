<?php
namespace Controllers;
use Views\WelcomeView;

class UserController {
    
    public function index()
    {          
        require_once __DIR__ . '/../Views/WelcomeView.php';
        $view = new WelcomeView();
        $data=['test1'=>'hola', 'test2'=>'adios'];
        $view->render($data);
    }
    
    
}