<?php
namespace Controllers;

use Views\EncargadoView;

use Controllers\Controller;

class EncargadoController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/EncargadoView.php';
        $view = new EncargadoView();
                
        $view->render();
    }
}