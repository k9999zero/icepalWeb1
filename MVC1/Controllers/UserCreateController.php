<?php
namespace Controllers;
use Views\UserCreateIndexView;
use Views\UserCreaterView;
use Controllers\Controller;
use Models\UserCreate;

class UserCreateController extends Controller {
    //select id, nombre from User
    public function index()
    {          
        require_once __DIR__ . '/../Views/UserCreateindexView.php';
        $view = new UserCreateindexView();
        $userCreate=UserCreate::select("nombre,apellido,año_nacimiento,ci")->get();        
        $view->render($userCreate);
    }
    public function register()
    {
        require_once __DIR__ . '/../Views/UserCreaterView.php';
        $view = new UserCreaterView();        
        $view->render();
    }
    public function create()
    {
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $Ci = $_POST['Ci'];
        $Año_nacimiento = $_POST['Anio'];
        $Password = $_POST['Password'];

        $data = [            
            'Nombre'=> $nombre,
            'Apellido'=> $apellido,
            'Ci'=> $Ci,
            'Año_nacimiento'=> $Año_nacimiento,
            'Password'=> $Password,         
        ];
        $user = UserCreate::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/Users");
    }
    
    
}