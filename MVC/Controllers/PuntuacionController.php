<?php
namespace Controllers;
use Views\ComentariosIndexView;
use Views\PuntuacionRegisterView;
use Controllers\Controller;
use Models\Adorno;
use Models\Puntuacion;

class PuntuacionController extends Controller {
    //select id, nombre from User
    public function index()
    {          
        require_once __DIR__ . '/../Views/PuntuacionIndexView.php';
        $view = new PuntuacionIndexView();
        $puntuacion=Puntuacion::select("*")->get();        
        $view->render($puntuacion);
    }
    public function registerForm()
    {
        require_once __DIR__ . '/../Views/PuntuacionRegisterView.php';
        $view = new PuntuacionRegisterView();      
        $puntuacion =  Puntuacion::select("*")->get(); 
        $view->render($puntuacion);
    }
    public function create()
    {
        $comentarios = $_POST['Puntuacion'];               

        $data = [            
            'Puntuacion'=> $puntuacion                    
        ];
        $user = Puntuacion::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/");
    }
    
    
}