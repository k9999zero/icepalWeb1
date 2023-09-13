<?php
namespace Controllers;
use Views\Ficha_partoView;

use Controllers\Controller;
use Models\Ficha_parto;

class Ficha_partoController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/Ficha_partoView.php';
        $view = new Ficha_partoView();
                
        $view->render();
    }
    public function partoForm()
    {          
        require_once __DIR__ . '/../Views/Ficha_partoView.php';
        $view = new Ficha_partoView();
                
        $view->renderForm();
    }
    public function create()
    {
        $f_parto = $_POST['f_parto'];
        $vivos = $_POST['vivos'];
        $muertos = $_POST['muertos'];
        $n_lechones = $_POST['n_lechones'];
        $n_parto = $_POST['n_parto'];

        $data = [            
            'F_parto'=> $f_parto,
            'Vivos'=> $vivos ,
            'Muertos'=> $muertos,            
            'N_lechones'=> $n_lechones,
            'N_parto'=> $n_parto,       
        ];
        $user = Ficha_parto::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/Parto");
    }

}