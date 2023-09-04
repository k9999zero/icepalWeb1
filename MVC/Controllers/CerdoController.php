<?php
namespace Controllers;
use Views\CerdoView;

use Controllers\Controller;
use Models\Cerdo;

class CerdoController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/CerdoView.php';
        $view = new CerdoView();
                
        $view->render();
    }
    public function cerdoForm()
    {          
        require_once __DIR__ . '/../Views/CerdoView.php';
        $view = new CerdoView();
                
        $view->renderForm();
    }
    public function create()
    {
        $peso_cerdo = $_POST['peso_cerdo'];
        $f_nacimiento = $_POST['f_nacimiento'];
        $f_salida = $_POST['f_salida'];
        $raza = $_POST['raza'];
        $sexo = $_POST['sexo'];
        $f_registro = $_POST['f_registro'];
       

        $data = [            
            'Peso_cerdo'=> $peso_cerdo,
            'F_nacimiento'=> $f_nacimiento ,
            'F_salida'=> $f_salida,          
            'Raza'=> $raza,
            'Sexo'=> $sexo,
            'F_registro'=> $f_registro        
        ];
        $user = Cerdo::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/Cerdo");
    }

}