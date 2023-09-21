<?php
namespace Controllers;
use Views\CuidadoView;
use Controllers\Controller;


class CuidadoController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/CuidadoView.php';
        $view = new CuidadoView();
                
        $view->render();
    }
    

}