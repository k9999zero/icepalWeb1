<?php
namespace Controllers;
use Views\DiagnosticoView;
use Views\DiagnosticoIndexView;
use Controllers\Controller;
use Models\Diagnostico;

use Models\Madre;
use Models\Lechon;
use Models\Cerdo;
class DiagnosticoController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/DiagnosticoIndexView.php';
        $view = new DiagnosticoIndexView();
        $diagnostico=Diagnostico::select("*")->get();        
        $view->render($diagnostico);
    }
    public function diagnosticoForm()
    {          
        require_once __DIR__ . '/../Views/DiagnosticoView.php';
        $cerdos = Cerdo::select("*")->get();
        $view = new DiagnosticoView($cerdos);
        $madres = Madre::select("*")->get(); 
        $lechones = Lechon::select("*")->get();   
        $view->renderForm($cerdos,$madres,$lechones);
    }
    public function create()
    {
        $detalles = $_POST['detalles'];
        $f_reg = $_POST['f_reg'];
        $id_madre = $_POST['id_madre'];
        $id_cerdo = $_POST['id_cerdo'];
        $id_lechon = $_POST['id_lechon'];


        $data = [            
            'Detalles'=> $detalles,
            'F_reg'=> $f_reg,
            'Id_madre'=> $id_madre,
            'Id_cerdo'=> $id_cerdo,
            'Id_lechon'=> $id_lechon,

        ];
        $user = Diagnostico::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/Diagnostico");
    }

}