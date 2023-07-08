<?php
namespace Controllers;
use Views\WelcomeView;
use Views\UserRegisterView;
use Models\User;
use Controllers\Controller;

class UserController extends Controller {
    
    public function index()
    {          
        require_once __DIR__ . '/../Views/WelcomeView.php';
        $view = new WelcomeView();
        $user=User::select("id,user.nombre")->where('nombre','=','test')->get();
        $data=['test1'=>'hola', 'test2'=>'adios'];
        $view->render($data);
    }
    public function registerForm()
    {
        require_once __DIR__ . '/../Views/UserRegisterView.php';
        $view = new UserRegisterView();        
        $view->render();
    }
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
        $user->setNombre("DesdeUpdate");
        $user->save();
        $this->redirect("/icepalWeb1/MVC/");
    }
    
    
}