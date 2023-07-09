<?php
namespace Controllers;
use Models\User;
use Views\WelcomeView;
use Views\UserRegisterView;
class UserController {
    public function create()
    {
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        $data = [
            'Nombre'=> $nombre,
            'Apellido'=> $apellido,
            'Email'=> $email,
            'Password'=> $password
        ];
        $user = User::insert($data);
        $user->setNombre("DesdeUpdate");
        $user->save();
        $this->index();
    }
    public function index()
    {          
        require_once __DIR__ . '/../Views/WelcomeView.php';
        $view = new WelcomeView();
        $data=['test1'=>'hola', 'test2'=>'adios'];
        $view->render($data);
    }
    public function registerForm()
    {
        require_once __DIR__ . '/../Views/UserRegisterView.php';
        $view = new UserRegisterView();        
        $view->render();
    }
    
}