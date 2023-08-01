<?php
namespace Controllers;
use Views\UserIndexView;
use Views\UserRegisterView;
use Views\UserEditView;
use Models\User;
use Controllers\Controller;

class UserController extends Controller {
    public function ajaxResponse()
    {
        $respuesta = [
            'dato1' => 'prueba1',
            'dato2' => 'prueba2'
        ];
        $user=User::select('*')->get();   
        echo json_encode($user);
    }
    //Metodo index que muestra en una tabla todos los datos de user
    public function index()
    {          
        require_once __DIR__ . '/../Views/UserIndexView.php';
        $view = new UserIndexView();
        $user=User::select('*')->get();           
        $view->render($user);
    }
    //Metodo show que muestra en tabla solo datos de un solo user
    public function show($id)
    {          
        require_once __DIR__ . '/../Views/UserIndexView.php';
        $view = new UserIndexView();
        $user=User::select('*')->where('id','=',$id)->get();           
        $view->render($user);
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
    //Metodo registerForm que muestra el formulario para crear un nuevo user
    public function registerForm()
    {
        require_once __DIR__ . '/../Views/UserRegisterView.php';
        $view = new UserRegisterView();        
        $view->render();
    }
    public function delete($id)
    {
        $user=User::select('*')->where('id','=',$id)->get()[0]; 
        $user->delete();
        echo "test";
    }
    //Metodo create que recibe datos de registerForm y crea el nuevo user en base de datos
    public function create()
    {
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        $directorioDestino = "Imagenes/prueba/";
        if ($_FILES["Imagen"]["error"] == UPLOAD_ERR_OK) {
            $nombreArchivo = $_FILES["Imagen"]["name"];
            $rutaTemporal = $_FILES["Imagen"]["tmp_name"];
            $rutaDestino = $directorioDestino . $nombreArchivo;
        }

        $data = [            
            'Nombre'=> $nombre,
            'Apellido'=> $apellido,
            'Email'=> $email,
            'Password'=> $password,
            'UrlImagen' => $rutaDestino
        ];
        $user = User::insert($data);
        if (!is_dir($directorioDestino)) {
            mkdir($directorioDestino, 0777, true);
        }
        move_uploaded_file($rutaTemporal, $rutaDestino);
        $testData=$user->getId();
        $this->redirect("/icepalWeb1/MVC/user",$testData);
    }
    
    
}