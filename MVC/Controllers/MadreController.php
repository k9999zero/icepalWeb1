<?php
namespace Controllers;
use Views\MadreView;

use Controllers\Controller;
use Models\Madre;
use Models\Cerdo;

class MadreController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/MadreView.php';
        $view = new MadreView();
                
        $view->render();
    }
    public function madreForm()
    {          
        require_once __DIR__ . '/../Views/MadreView.php';
        $cerdos = Cerdo::select("*")->get();
        $view = new MadreView($cerdos);        
        $view->renderForm($cerdos);
    }
    public function create()
    {
        $raza = $_POST['raza'];
        $f_monta = $_POST['f_monta'];
        $f_reg = $_POST['f_reg'];
        $id_cerdo = $_POST['id_cerdo'];
       

        $data = [            
            'Raza'=> $raza,
            'F_monta'=> $f_monta ,
            'F_reg'=> $f_reg,            
            'Id_cerdo'=> $id_cerdo,       
        ];
        $user = Madre::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/Madre");
    }

}