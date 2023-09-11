<?php
namespace Controllers;
use Views\ClienteIndexView;
use Views\ClienteRegisterView;
use Views\ClienteEditView;
use Models\Cliente;
use Models\user;
use Controllers\Controller;

class ClienteController extends Controller {
    public function ajaxExiste()
    {
        $nombre = $_GET['nameUser'];
        $categorias = Categoria::select("*")->where('nameUser',"=",$nameUser)->get();
        if(count($categorias)>0)
        {
            $respuesta = [
                'respuesta' => 'el nombre de categoria '.$nameUser.' ya existe',
                'status' => false
            ];     
                    
            echo json_encode($respuesta);
        }
        else{
            $respuesta = [
                'respuesta' => 'el nombre de categoria '.$nameUser.' no existe'
                ,
                'status' => true
            ];  
                       
            echo json_encode($respuesta);
        }
    }
    public function index()
    {          
        require_once __DIR__ . '/../Views/ClienteIndexView.php';
        $view = new ClienteIndexView();
        $user=Cliente::select('*')->get();           
        $view->render($user);
    }
    //Metodo show que muestra en tabla solo datos de un solo user
    public function show($id)
    {          
        require_once __DIR__ . '/../Views/ClienteIndexView.php';
        $view = new UserIndexView();
        $cliente=User::select('*')->where('id','=',$id)->get();           
        $view->render($cliente);
    }
    //Metodo editForm que muestra el formulario de edicion de un user
    public function editForm($id)
    {
        require_once __DIR__ . '/../Views/clienteEditView.php';
        $view = new ClienteEditView();
        $cliente=Cliente::select('*')->where('id','=',$id)->get()[0];           
        $view->render($cliente);
    }
    //Metodo edit que mediante POST recibe los datos de editForm y realizar los cambios en base de datos
    public function edit()
    {
        $id = $_POST['Id'];
        $nameUsers = $_POST['NameUsers'];
        $urlImagen = $_POST['UrlImagen'];
        $cliente=Cliente::select('*')->where('id','=',$id)->get()[0];           
        $cliente->setNameUsers($nameUsers);
        $directorioDestino = "Imagenes/prueba/";
        if ($_FILES["Imagen"]["error"] == UPLOAD_ERR_OK) {
            $nombreArchivo = $_FILES["Imagen"]["name"];
            $rutaTemporal = $_FILES["Imagen"]["tmp_name"];
            $rutaDestino = $directorioDestino . $nombreArchivo;
        }
        $cliente->setUrlImagen($rutaDestino);	
        $cliente->save();
        if (!is_dir($directorioDestino)) {
            mkdir($directorioDestino, 0777, true);
        }
        move_uploaded_file($rutaTemporal, $rutaDestino);       
       
        $this->redirect("/icepalWeb1/MVC/cliente",$id);
    }
    //Metodo registerForm que muestra el formulario para crear un nuevo user
    public function registerForm()
    {
        require_once __DIR__ . '/../Views/ClienteRegisterView.php';
        $view = new ClienteRegisterView();
        $users = user::select("*")->get();
        $view->render($users);
    }
    public function delete($id)
    {
        $user=Cliente::select('*')->where('id','=',$id)->get()[0]; 
        $user->delete();
        echo "test";
    }
    //Metodo create que recibe datos de registerForm y crea el nuevo user en base de datos
    public function create()
    {
        $nameUsers = $_POST['NameUsers'];
        $directorioDestino = "Imagenes/prueba/";
        if ($_FILES["Imagen"]["error"] == UPLOAD_ERR_OK) {
            $nombreArchivo = $_FILES["Imagen"]["name"];
            $rutaTemporal = $_FILES["Imagen"]["tmp_name"];
            $rutaDestino = $directorioDestino . $nombreArchivo;
        }

        $data = [            
            'NameUsers'=> $nameUsers,
            'UrlImagen' => $rutaDestino
        ];
        $user = Cliente::insert($data);
        if (!is_dir($directorioDestino)) {
            mkdir($directorioDestino, 0777, true);
        }
        move_uploaded_file($rutaTemporal, $rutaDestino);
        $testData=$user->getId();
        $this->redirect("/icepalWeb1/MVC/cliente",$testData);
    }
    
}