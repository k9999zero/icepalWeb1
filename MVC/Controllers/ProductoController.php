<?php
namespace Controllers;
use Views\ProductoIndexView;
use Views\ProductoRegisterView;
use Controllers\Controller;
use Models\Producto;

class ProductoController extends Controller {
    //select id, nombre from User
    public function index()
    {          
        require_once __DIR__ . '/../Views/ProductoIndexView.php';
        $view = new ProductoIndexView();
        $producto=producto::select("nombre,descripcion")->get();        
        $view->render($producto);
    }
    public function registerForm()
    {
        require_once __DIR__ . '/../Views/ProductoRegisterView.php';
        $view = new ProductoRegisterView();        
        $view->render();
    }
    public function create()
    {
        $nombre = $_POST['Nombre'];
        $descriccion = $_POST['Descripcion'];
        

        $data = [            
            'Nombre'=> $nombre,
            'Descripcion'=> $descriccion            
        ];
        $user = Producto::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/producto");
    }
    
    
}