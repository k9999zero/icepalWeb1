<?php
namespace Controllers;
use Views\CeloView;
use Views\CeloIndexView;
use Controllers\Controller;
use Models\Celo;
use Models\Madre;
class CeloController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/CeloIndexView.php';
        $view = new CeloIndexView();
        $celo=Celo::select("*")->get();         
        $view->render($celo);
    }
    public function celoForm()
    {          
        require_once __DIR__ . '/../Views/CeloView.php';
        $madres = Madre::select("*")->get();
        $view = new CeloView($madres);        
        $view->renderForm($madres);
    }
    public function create()
    {
        $f_celo = $_POST['f_celo'];
        $n_celo = $_POST['n_celo'];
        $f_reg = $_POST['f_reg'];
        $id_madre = $_POST['id_madre'];
       

        $data = [            
            'F_celo'=> $f_celo,
            'N_celo'=> $n_celo ,
            'F_reg'=> $f_reg,            
            'Id_madre'=> $id_madre,       
        ];
        $user = Celo::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/Celo");
    }

}