<?php
namespace Controllers;
use Views\MainIndexView;

use Controllers\Controller;

class MainController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/MainIndexView.php';
        $view = new MainIndexView();
                
        $view->render();
    }
    
    
}