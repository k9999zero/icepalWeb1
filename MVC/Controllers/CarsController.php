<?php
namespace Controllers;
use Controllers\Controller;

use Views\CarsIndexView;
use Views\CarsRegisterView;
use Views\CarsEditView;
use Models\Cars;



class CarsController extends Controller {
    public function ajaxResponse()
    {
        $respuesta = [
            'dato1' => 'prueba1',
            'dato2' => 'prueba2'
        ];
        $cars=Cars::select('*')->get();   
        echo json_encode($cars);
    }
    //Metodo index que muestra en una tabla todos los datos de cars
    public function index()
    {          
        require_once __DIR__ . '/../Views/CarsIndexView.php';
        $view = new CarsIndexView();
        $cars=Cars::select('*')->get();           
        $view->render($cars);
    }
    //Metodo show que muestra en tabla solo datos de un solo cars
    public function show($id)
    {          
        require_once __DIR__ . '/../Views/CarsIndexView.php';
        $view = new CarsIndexView();
        $cars=Cars::select('*')->where('id','=',$id)->get();           
        $view->render($cars);
    }
    //Metodo editForm que muestra el formulario de edicion de un cars
    public function editForm($id)
    {
        require_once __DIR__ . '/../Views/CarsEditView.php';
        $view = new CarsEditView();
        $cars=Cars::select('*')->where('id','=',$id)->get();           
        $view->render($cars);
    }
    //Metodo edit que mediante POST recibe los datos de editForm y realizar los cambios en base de datos
    public function edit()
    {
        $id = $_POST['Id'];
        $nombre = $_POST['Nombre'];
        $modelo = $_POST['Modelo'];
        $email = $_POST['Email'];
        $cars=Cars::select('*')->where('id','=',$id)->get()[0];           
        $cars->setNombre($nombre);
        $cars->setModelo($modelo);
        $cars->setEmail($email);
        $cars->save();
        $this->redirect("/icepalWeb1/MVC/cars",$id);
    }
    //Metodo registerForm que muestra el formulario para crear un nuevo cars
    public function registerForm()
    {
        require_once __DIR__ . '/../Views/CarsRegisterView.php';
        $view = new CarsRegisterView();        
        $view->render();
    }

    // public function registerFormMaterialize()
    // {
    //     require_once __DIR__ . '/../Views/UserRegisterView.php';
    //     $view = new UserRegisterView();        
    //     $view->renderMaterialize();
    // }

    // public function registerFormMaterialDesign()
    // {
    //     require_once __DIR__ . '/../Views/UserRegisterView.php';
    //     $view = new UserRegisterView();        
    //     $view->renderMaterialDesign();
    // }

    // public function registerFormBootstrap()
    // {
    //     require_once __DIR__ . '/../Views/UserRegisterView.php';
    //     $view = new UserRegisterView();        
    //     $view->renderBootstrap();
    // }

    public function delete($id)
    {
        $cars=Cars::select('*')->where('id','=',$id)->get()[0]; 
        $cars->delete();
        echo "test";
    }
    //Metodo create que recibe datos de registerForm y crea el nuevo user en base de datos
    public function create()
    {
        $datosJSON = file_get_contents('php://input');
        $datos = json_decode($datosJSON, true);
        $nombre = $_POST['Nombre'];
        $modelo = $_POST['Modelo'];
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
            'Modelo'=> $modelo,
            'Email'=> $email,
            'Password'=> $password,
            'UrlImagen' => $rutaDestino
        ];
        $cars = Cars::insert($data);
        if (!is_dir($directorioDestino)) {
            mkdir($directorioDestino, 0777, true);
        }
        move_uploaded_file($rutaTemporal, $rutaDestino);
        $testData=$cars->getId();
        $this->redirect("/icepalWeb1/MVC/cars",$testData);
    }
    
    
}