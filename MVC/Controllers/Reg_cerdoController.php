<?php
namespace Controllers;
use Views\Reg_cerdoView;

use Controllers\Controller;

class Reg_cerdoController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/Reg_cerdoView.php';
        $view = new Reg_cerdoView();
                
        $view->render();
    }
}