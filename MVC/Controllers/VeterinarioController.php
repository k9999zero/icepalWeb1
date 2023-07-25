<?php
namespace Controllers;
use Views\VeterinarioView;

use Controllers\Controller;

class VeterinarioController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/VeterinarioView.php';
        $view = new VeterinarioView();
                
        $view->render();
    }
}