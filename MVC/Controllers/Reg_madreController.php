<?php
namespace Controllers;
use Views\Reg_madreView;

use Controllers\Controller;

class Reg_madreController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/Reg_madreView.php';
        $view = new Reg_madreView();
                
        $view->render();
    }
}