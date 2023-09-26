<?php
namespace Controllers;
use Views\MedicamentoView;
use Views\MedicamentoIndexView;
use Controllers\Controller;
use Models\Medicamento;
use Models\Diagnostico;


class MedicamentoController extends Controller {
    public function ajaxResponse()
    {
        $respuesta = [
            'dato1' => 'prueba1',
            'dato2' => 'prueba2'
        ];
        $medicamento=Medicamento::select('*')->get();   
        echo json_encode($medicamento);
    }
    public function delete($id)
    {
        $medicamento=Medicamento::select('*')->where('id_medicamento','=',$id)->get()[0]; 
        $medicamento->delete();
        echo "test";
    }
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/MedicamentoIndexView.php';
        $view = new MedicamentoIndexView();
        $medicamento=Medicamento::select("*")->get();        
        $view->render( $medicamento);
    }
    public function medicamentoForm()
    {          
        require_once __DIR__ . '/../Views/MedicamentoView.php';
        $diagnosticos = Diagnostico::select("*")->get();
        $view = new MedicamentoView($diagnosticos);        
        $view->renderForm($diagnosticos);
    }
    public function create()
    {
        $medicamento = $_POST['medicamento'];
        $f_reg = $_POST['f_reg'];
        $id_diagnostico = $_POST['id_diagnostico'];

       

        $data = [            
            'Medicamento'=> $medicamento,
            'F_reg'=> $f_reg, 
            'Id_diagnostico'=> $id_diagnostico,   
                  
        ];
        $user = Medicamento::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/Medicamento");
    }

}