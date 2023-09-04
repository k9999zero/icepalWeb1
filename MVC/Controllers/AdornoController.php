<?php
namespace Controllers;
use Views\AdornoIndexView;
use Views\AdornoRegisterView;
use Controllers\Controller;
use Models\Adorno;

class AdornoController extends Controller {
    //select id, nombre from User
    public function index()
    {          
        require_once __DIR__ . '/../Views/AdornoIndexView.php';
        $view = new AdornoIndexView();
        $Adorno=Adorno::select("Nombre_adorno,stock,precio")->get();        
        $view->render($Adorno);
    }
    public function registerForm()
    {
        require_once __DIR__ . '/../Views/AdornoRegisterView.php';
        $view = new AdornoRegisterView();        
        $view->render();
    }
    public function create()
    {
        $nombre = $_POST['Nombre_adorno'];
        $stock = $_POST['Stock'];
        $precio = $_POST['Precio'];
        $id_categoria = $_POST['Id_categoria'];
        $url_imagen = $_POST['Url_imagen'];      

        $data = [            
            'Nombre_adorno'=> $nombre,
            'Stock'=> $stock,
            'Precio'=> $precio,
            'Id_categoria'=> $id_categoria,
            'Url_imagen'=> $url_imagen          
        ];
        $user = Adorno::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/Adorno");
    }
    
    
}