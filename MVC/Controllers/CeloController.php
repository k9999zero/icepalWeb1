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
    public function delete($id)
    {
        $user=User::select('*')->where('id','=',$id)->get()[0]; 
        $user->delete();
        echo "test";
    }
     //Metodo editForm que muestra el formulario de edicion de un user
     public function editForm($id)
     {
         require_once __DIR__ . '/../Views/UserEditView.php';
         $view = new UserEditView();
         $user=User::select('*')->where('id','=',$id)->get();           
         $view->render($user);
     }
     //Metodo edit que mediante POST recibe los datos de editForm y realizar los cambios en base de datos
    public function edit()
    {
        $id = $_POST['Id'];
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $email = $_POST['Email'];
        $user=User::select('*')->where('id','=',$id)->get()[0];           
        $user->setNombre($nombre);
        $user->setApellido($apellido);
        $user->setEmail($email);
        $user->save();
        $this->redirect("/icepalWeb1/MVC/user",$id);
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