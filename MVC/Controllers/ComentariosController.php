<?php
namespace Controllers;
use Views\ComentariosIndexView;
use Views\ComentariosRegisterView;
use Controllers\Controller;
use Models\Adorno;
use Models\Comentarios;

class ComentariosController extends Controller {
    //select id, nombre from User
    public function index()
    {          
        require_once __DIR__ . '/../Views/ComentariosIndexView.php';
        $view = new ComentariosIndexView();
        $comentarios=Comentarios::select("*")->get();        
        $view->render($comentarios);
    }
    public function registerForm()
    {
        require_once __DIR__ . '/../Views/ComentariosRegisterView.php';
        $view = new ComentariosRegisterView();      
        $comentarios =  Comentarios::select("*")->get(); 
        $view->render($comentarios);
    }
    public function create()
    {
        $comentarios = $_POST['Comentario'];               

        $data = [            
            'Comentarios'=> $comentarios                    
        ];
        $user = Comentarios::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/");
    }
    
    
}