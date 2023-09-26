<?php
namespace Controllers;
use Views\CerdoView;
use Views\CerdoIndexView;
use Controllers\Controller;
use Models\Cerdo;
use Models\Corral;

class CerdoController extends Controller {
    public function ajaxResponse()
    {
        $respuesta = [
            'dato1' => 'prueba1',
            'dato2' => 'prueba2'
        ];
        $cerdo=Cerdo::select('*')->get();   
        echo json_encode($cerdo);
    }
    public function delete($id)
    {
        $cerdo=Cerdo::select('*')->where('id_cerdo','=',$id)->get()[0]; 
        $cerdo->delete();
        echo "test";
    }
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/CerdoIndexView.php';
        $view = new CerdoIndexView();
        $cerdo=Cerdo::select("*")->get();        
        $view->render($cerdo);
    }
    public function cerdoForm()
    {          
        require_once __DIR__ . '/../Views/CerdoView.php';
        $corrales = Corral::select("*")->get();
        $view = new CerdoView($corrales);
                
        $view->renderForm($corrales);
    }
    public function create()
    {
        $peso_cerdo = $_POST['peso_cerdo'];
        $f_nacimiento = $_POST['f_nacimiento'];
        $f_salida = $_POST['f_salida'];
        $raza = $_POST['raza'];
        $sexo = $_POST['sexo'];
        $f_reg = $_POST['f_reg'];
        $id_corral = $_POST['id_corral'];
       

        $data = [            
            'Peso_cerdo'=> $peso_cerdo,
            'F_nacimiento'=> $f_nacimiento ,
            'F_salida'=> $f_salida,          
            'Raza'=> $raza,
            'Sexo'=> $sexo,
            'F_reg'=> $f_reg,  
            'Id_corral'=> $id_corral,       
        ];
        $user = Cerdo::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/Cerdo");
    }

}