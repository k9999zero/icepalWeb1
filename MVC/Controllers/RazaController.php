<?php
namespace Controllers;
use Views\RazaView;
use Controllers\Controller;


class RazaController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/RazaView.php';
        $view = new RazaView();
                
        $view->render();
    }
    

}