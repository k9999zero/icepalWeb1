<?php
namespace Controllers;
use Views\DiagnosticoView;

use Controllers\Controller;
use Models\Diagnostico;

class DiagnosticoController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/DiagnosticoView.php';
        $view = new DiagnosticoView();
                
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
        $detalles = $_POST['detalles'];
        $f_reg = $_POST['f_reg'];
       

        $data = [            
            'Detalles'=> $detalles,
            'F_reg'=> $f_reg,
                    
        ];
        $user = Diagnostico::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/Diagnostico");
    }

}