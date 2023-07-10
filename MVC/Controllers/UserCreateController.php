<?php
namespace Controllers;
use Views\UserCreateIndexView;
use Views\UserCreateView;
use Controllers\Controller;
use Models\UserCreate;

class UserCreateController extends Controller {
    //select id, nombre from User
    public function index()
    {          
        require_once __DIR__ . '/../Views/UserCreateindexView.php';
        $view = new UserCreateindexView();
        $userCreate=UserCreate::select("nombre")->where('nombre','=','test2')->orWhere('nombre','=','test3')->get();        
        $view->render($userCreate);
    }
    public function registerForm()
    {
        require_once __DIR__ . '/../Views/UserCreateRegisterView.php';
        $view = new UserCreaterView();        
        $view->render();
    }
    public function create()
    {
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $Ci = $_POST['ci'];
        $Año_nacimiento = $_POST['año_nacimiento'];
        $Password = $_POST['password'];

        $data = [            
            'Nombre'=> $nombre,
            'Apellido'=> $apellido,
            'Ci'=> $ci,
            'año_nacimiento'=> $año_nacimiento,
            'password'=> $password,         
        ];
        $user = UserCreate::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/UserCreate");
    }
    
    
}