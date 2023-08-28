<?php
namespace Controllers;
use Views\Reg_diagView;

use Controllers\Controller;

class Reg_diagController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/Reg_diagView.php';
        $view = new Reg_diagView();
                
        $view->render();
    }
}