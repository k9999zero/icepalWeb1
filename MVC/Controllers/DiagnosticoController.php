<?php
namespace Controllers;
use Views\DiagosticoView;

use Controllers\Controller;
use Models\Diagnostico;

class DiagnosticoController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/DiagnosticoIndexView.php';
        $view = new DiagnosticoIndexView();
                
        $view->render();
    }
    public function diagnosticoForm()
    {          
        require_once __DIR__ . '/../Views/DiagnosticoView.php';
        $view = new DiagnosticoView();
                
        $view->renderForm();
    }
    public function create()
    {
        $detalle = $_POST['detalle'];
        $f_reg = $_POST['f_reg'];
       

        $data = [            
            'Detalle'=> $detalle,
            'F_reg'=> $f_reg,
                    
        ];
        $user = Diagnostico::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/Diagnostico");
    }

}