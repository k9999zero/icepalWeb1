<?php
namespace Controllers;
use Views\ProductoIndexView;
use Views\CategoriaRegisterView;
use Controllers\Controller;
use Models\Producto;
use Models\Categoria;

class CategoriaController extends Controller {
    //select id, nombre from User
    public function index()
    {          
        require_once __DIR__ . '/../Views/ProductoIndexView.php';
        $view = new ProductoIndexView();
        $producto=producto::select("nombre,descripcion")->where('nombre','=','test2')->orWhere('nombre','=','test3')->get();        
        $view->render($producto);
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

        $data = [            
            'Nombre'=> $nombre                    
        ];
        $user = Categoria::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/user");
    }
    
    
}