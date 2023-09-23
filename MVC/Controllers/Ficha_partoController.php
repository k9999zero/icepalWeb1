<?php
namespace Controllers;
use Views\Ficha_partoView;
use Views\PartoIndexView;


use Controllers\Controller;
use Models\Ficha_parto;
use Models\Madre;

class Ficha_partoController extends Controller {
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/PartoIndexView.php';
        $view = new PartoIndexView();
        $ficha_parto=Ficha_parto::select("*")->get();        
        $view->render($ficha_parto);
    }
    public function partoForm()
    {          
        require_once __DIR__ . '/../Views/Ficha_partoView.php';
        $madres = Madre::select("*")->get();
        $view = new Ficha_partoView($madres);
        $view->renderForm($madres);
        
    }
    public function create()
    {
        $f_parto = $_POST['f_parto'];
        $vivos = $_POST['vivos'];
        $muertos = $_POST['muertos'];
        $n_lechones = $_POST['n_lechones'];
        $n_parto = $_POST['n_parto'];
        $id_madre = $_POST['id_madre'];

        $data = [            
            'F_parto'=> $f_parto,
            'Vivos'=> $vivos ,
            'Muertos'=> $muertos,            
            'N_lechones'=> $n_lechones,
            'N_parto'=> $n_parto, 
            'Id_madre'=> $id_madre,       
        ];
        $user = Ficha_parto::insert($data);
                    
        $this->redirect("/icepalWeb1/MVC/Parto");
    }

}