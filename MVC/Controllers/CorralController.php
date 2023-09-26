<?php
namespace Controllers;
use Views\CorralView;
use Views\CorralIndexView;
use Controllers\Controller;
use Models\Corral;

class CorralController extends Controller {

    public function ajaxResponse()
    {
        $respuesta = [
            'dato1' => 'prueba1',
            'dato2' => 'prueba2'
        ];
        $corral=Corral::select('*')->get();   
        echo json_encode($corral);
    }
    public function delete($id)
    {
        $corral=Corral::select('*')->where('id_corral','=',$id)->get()[0]; 
        $corral->delete();
        echo "test";
    }
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/CorralIndexView.php';
        $view = new CorralIndexView();
        $corral=Corral::select("*")->get();        
        $view->render($corral);
    }
    public function CorralForm()
    {          
        require_once __DIR__ . '/../Views/CorralView.php';
        $view = new CorralView();
                
        $view->renderForm();
    }
    public function create()
    {
      
        $cod_corral = $_POST['cod_corral'];
        $cod_pocilga = $_POST['cod_pocilga'];
       

        $data = [   
                   
            'Cod_corral'=> $cod_corral,
            'Cod_pocilga'=> $cod_pocilga,
                    
        ];
        $user = Corral::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/Corral");
    }

}