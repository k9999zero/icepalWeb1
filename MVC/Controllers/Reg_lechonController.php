<?php
namespace Controllers;
use Views\Reg_lechonView;

use Controllers\Controller;

class Reg_lechonController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/Reg_lechonView.php';
        $view = new Reg_lechonView();
                
        $view->render();
    }
}