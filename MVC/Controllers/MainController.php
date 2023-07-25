<?php
namespace Controllers;
use Views\MainView;

use Controllers\Controller;

class MainController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/MainView.php';
        $view = new MainView();
                
        $view->render();
    }
}