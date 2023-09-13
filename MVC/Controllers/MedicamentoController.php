<?php
namespace Controllers;
use Views\MedicamentoView;

use Controllers\Controller;
use Models\Medicamento;


class MedicamentoController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/MedicamentoView.php';
        $view = new MedicamentoView();
                
        $view->render();
    }
    public function medicamentoForm()
    {          
        require_once __DIR__ . '/../Views/MedicamentoView.php';
        $view = new MedicamentoView();
                
        $view->renderForm();
    }
    public function create()
    {
        $medicamento = $_POST['medicamento'];
        $f_reg = $_POST['f_reg'];

       

        $data = [            
            'Medicamento'=> $medicamento,
            'F_reg'=> $f_reg,  
                  
        ];
        $user = Medicamento::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/Medicamento");
    }

}