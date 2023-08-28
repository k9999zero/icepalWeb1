<?php
namespace Controllers;
use Views\Reg_partoView;

use Controllers\Controller;

class Reg_partoController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/Reg_partoView.php';
        $view = new Reg_partoView();
                
        $view->render();
    }
}