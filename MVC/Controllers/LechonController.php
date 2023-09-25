<?php
namespace Controllers;
use Views\LechonView;
use Views\LechonIndexView;

use Controllers\Controller;
use Models\Lechon;
use Models\Corral;
use Models\Madre;

class LechonController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/LechonIndexView.php';
        $view = new LechonIndexView();
        $lechon=Lechon::select("*")->get();         
        $view->render($lechon);
    }
    public function lechonForm()
    {          
        require_once __DIR__ . '/../Views/LechonView.php';
        $corrales = Corral::select("*")->get();
        $view = new LechonView($corrales);
        $madres = Madre::select("*")->get();
        $view->renderForm($corrales,$madres);
        
        
        /*$view = new LechonView($madres); 
        $view->renderFormM($madres);*/
    }
    public function create()
    {
        $peso_lechon = $_POST['peso_lechon'];
        $f_entrada = $_POST['f_entrada'];
        $f_salida = $_POST['f_salida'];
        $raza = $_POST['raza'];
        $sexo = $_POST['sexo'];
        $f_reg = $_POST['f_reg'];
        $id_corral = $_POST['id_corral'];
        $id_madre = $_POST['id_madre'];

        $data = [            
            'Peso_lechon'=> $peso_lechon,
            'F_entrada'=> $f_entrada ,
            'F_salida'=> $f_salida,          
            'Raza'=> $raza,
            'Sexo'=> $sexo,
            'F_reg'=> $f_reg,  
            'Id_corral'=> $id_corral, 
            'Id_madre'=> $id_madre,       
        ];
        $user = Lechon::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/Lechon");
    }

}