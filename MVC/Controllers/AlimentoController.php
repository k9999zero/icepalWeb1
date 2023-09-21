<?php
namespace Controllers;
use Views\AlimentoView;
use Controllers\Controller;


class AlimentoController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/AlimentoView.php';
        $view = new AlimentoView();
                
        $view->render();
    }
    

}