<?php
namespace Controllers;
use Views\Reg_medView;

use Controllers\Controller;

class Reg_medController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/Reg_medView.php';
        $view = new Reg_medView();
                
        $view->render();
    }
}