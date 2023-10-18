<?php
namespace Controllers;
use Views\ComidaIndexView;
use Views\ComidaRegisterView;
use Views\CategoriaRegisterView;
use Controllers\Controller;
use Models\Categoria;
use Models\COmida;

class CategoriaController extends Controller {
    //select id, nombre from User
    public function index()
    {          
        require_once __DIR__ . '/../Views/ComidaIndexView.php';
        $view = new ComidaIndexView();
        $comida=Comida::select("nombre,descripcion")->where('nombre','=','test2')->orWhere('nombre','=','test3')->get();        
        $view->render($comida);
    }
    public function probandoJavascript()
    {
        require_once __DIR__ . '/../Views/CategoriaRegisterView.php';
        $view = new CategoriaRegisterView();        
        $view->renderProbandoJavascript();
    }
    
    public function ajaxExiste()
    {
        $nombre = $_GET['nombre'];
        $categorias = Categoria::select("*")->where('nombre',"=",$nombre)->get();
        if(count($categorias)>0)
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
        $user = Categoria::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/user");
    }
    
    
}