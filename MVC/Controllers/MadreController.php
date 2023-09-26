<?php
namespace Controllers;
use Views\MadreView;
use Views\MadreIndexView;

use Controllers\Controller;
use Models\Madre;
use Models\Cerdo;
use Models\Corral;
class MadreController extends Controller {
    public function ajaxResponse()
    {
        $respuesta = [
            'dato1' => 'prueba1',
            'dato2' => 'prueba2'
        ];
        $madre=Madre::select('*')->get();   
        echo json_encode($madre);
    }
    public function delete($id)
    {
        $madre=Madre::select('*')->where('id_madre','=',$id)->get()[0]; 
        $madre->delete();
        echo "test";
    }
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/MadreIndexView.php';
        $view = new MadreIndexView();
        $madre=Madre::select("*")->get();        
        $view->render($madre);
    }
    public function madreForm()
    {          
        require_once __DIR__ . '/../Views/MadreView.php';
        $corrales = Corral::select("*")->get();
        $view = new MadreView($corrales);        
        $view->renderForm($corrales);
    }
    public function create()
    {
        $raza = $_POST['raza'];
        $f_monta = $_POST['f_monta'];
        $f_reg = $_POST['f_reg'];
        $id_corral = $_POST['id_corral'];
       

        $data = [            
            'Raza'=> $raza,
            'F_monta'=> $f_monta ,
            'F_reg'=> $f_reg,            
            'Id_corral'=> $id_corral,       
        ];
        $user = Madre::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/Madre");
    }

}