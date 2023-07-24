<?php
namespace Controllers;
use Views\ComidaIndexView;
use Views\ComidaRegisterView;
use Controllers\Controller;
use Models\Comida;

class ComidaController extends Controller {
    //select id, nombre from User
    public function index()
    {          
        require_once __DIR__ . '/../Views/ComidaIndexView.php';
        $view = new ComidaIndexView();
        $comida=Comida::select("nombre,descripcion")->where('nombre','=','test2')->orWhere('nombre','=','test3')->get();        
        $view->render($comida);
    }
    public function registerForm()
    {
        require_once __DIR__ . '/../Views/ComidaRegisterView.php';
        $view = new ComidaRegisterView();        
        $view->render();
    }
    public function create()
    {
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Descripcion'];
        

        $data = [            
            'Nombre'=> $nombre,
            'Descripcion'=> $apellido            
        ];
        $user = Comida::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/Comida");
    }
    
    
}