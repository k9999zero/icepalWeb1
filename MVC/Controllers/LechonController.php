<?php
namespace Controllers;
use Views\LechonView;

use Controllers\Controller;
use Models\Lechon;


class LechonController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/LechonView.php';
        $view = new LechonView();
                
        $view->render();
    }
    public function lechonForm()
    {          
        require_once __DIR__ . '/../Views/LechonView.php';
        $view = new LechonView();
                
        $view->renderForm();
    }
    public function create()
    {
        $peso_lechon = $_POST['peso_lechon'];
        $f_entrada = $_POST['f_entrada'];
        $f_salida = $_POST['f_salida'];
        $raza = $_POST['raza'];
        $sexo = $_POST['sexo'];
        $f_reg = $_POST['f_reg'];

       

        $data = [            
            'Peso_lechon'=> $peso_lechon,
            'F_entrada'=> $f_entrada ,
            'F_salida'=> $f_salida,          
            'Raza'=> $raza,
            'Sexo'=> $sexo,
            'F_reg'=> $f_reg,  
                  
        ];
        $user = Lechon::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/Lechon");
    }

}