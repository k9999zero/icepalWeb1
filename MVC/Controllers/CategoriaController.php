<?php
namespace Controllers;
use Views\ProductoIndexView;
use Views\CategoriaRegisterView;
use Controllers\Controller;
use Models\Categoria;

class CategoriaController extends Controller {
    //select id, nombre from User
    public function index()
    {          
        require_once __DIR__ . '/../Views/CategoriaIndexView.php';
        $view = new CategoriaIndexView();
        $Categoria=Categoria::select("nombre")->get();        
        $view->render($Categoria);
    }
    public function probandoJavascript()
    {
        require_once __DIR__ . '/../Views/CategoriaRegisterView.php';
        $view = new CategoriaRegisterView();        
        $view->renderProbandoJavascript();
    }
    
    public function ajaxExiste()
    {
        $nombre = $_GET['Nombre'];
        $categoria = Categoria::select("*")->get();
        if(count($categoria)>0)
        {
            $respuesta = [
                'respuesta' => 'el nombre de categoria '.$nombre.' ya existe',
                'status' => false
            ];     
                    
            echo json_encode($respuesta);
        }
        else{
            $respuesta = [
                'respuesta' => 'el nombre de categoria '.$nombre.' no existe'
                ,
                'status' => true
            ];  
                       
            echo json_encode($respuesta);
        }
    }
    public function registerForm()
    {
        require_once __DIR__ . '/../Views/CategoriaRegisterView.php';
        $view = new CategoriaRegisterView();      
        $Categoria =  Categoria::select("*")->get(); 
        $view->render($Categoria);
    }
    public function create()
    {
        $nombre = $_POST['Nombre'];               

        $data = [            
            'Nombre'=> $nombre                    
        ];
        $user = Categoria::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/");
    }
    
    
}