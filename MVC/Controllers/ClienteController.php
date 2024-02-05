<?php
namespace Controllers;
use Views\ClienteIndexView;
use Views\ClienteRegisterView;
use Views\ClienteEditView;
use Models\Cliente;
use Controllers\Controller;

class ClienteController extends Controller {
    public function ajaxResponse()
    {
        $respuesta = [
            'dato1' => 'prueba1',
            'dato2' => 'prueba2'
        ];
        $Cliente=Cliente::select('*')->get();   
        echo json_encode($Cliente);
    }
    //Metodo index que muestra en una tabla todos los datos de Cliente
    public function index()
    {          
        require_once __DIR__ . '/../Views/ClienteIndexView.php';
        $view = new ClienteIndexView();
        $Cliente=Cliente::select('*')->get();           
        $view->render($Cliente);
    }
    //Metodo show que muestra en tabla solo datos de un solo Cliente
    public function show($id)
    {          
        require_once __DIR__ . '/../Views/ClienteIndexView.php';
        $view = new ClienteIndexView();
        $Cliente=Cliente::select('*')->where('id','=',$id)->get();           
        $view->render($Cliente);
    }
    //Metodo editForm que muestra el formulario de edicion de un Cliente
    public function editForm($id)
    {
        require_once __DIR__ . '/../Views/ClienteEditView.php';
        $view = new ClienteEditView();
        $Cliente=Cliente::select('*')->where('id','=',$id)->get();           
        $view->render($Cliente);
    }
    //Metodo edit que mediante POST recibe los datos de editForm y realizar los cambios en base de datos
    public function edit()
    {
        $id = $_POST['Id'];
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $email = $_POST['Email'];
        $edad = $_POST['Edad'];
        $Telefono = $_POST['Telefono'];
        $genero = $_POST['Genero'];
        $estado = $_POST['Estado'];
        $Cliente=Cliente::select('*')->where('id','=',$id)->get()[0];           
        $Cliente->setNombre($nombre);
        $Cliente->setApellido($apellido);
        $Cliente->setEmail($email);
        $Cliente->setEdad($edad);
        $Cliente->setTelefono($Telefono);
        $Cliente->setGenero($genero);
        $Cliente->setEstado($estado);
        $Cliente->save();
        $this->redirect("/icepalWeb1/MVC/Cliente",$id);
    }
    //Metodo registerForm que muestra el formulario para crear un nuevo Cliente
    public function registerForm()
    {
        require_once __DIR__ . '/../Views/ClienteRegisterView.php';
        $view = new ClienteRegisterView();        
        $view->render();
    }

    public function registerFormMaterialize()
    {
        require_once __DIR__ . '/../Views/ClienteRegisterView.php';
        $view = new ClienteRegisterView();        
        //$view->renderMaterialize();
    }

    public function registerFormMaterialDesign()
    {
        require_once __DIR__ . '/../Views/ClienteRegisterView.php';
        $view = new ClienteRegisterView();        
        //$view->renderMaterialDesign();
    }

    public function registerFormBootstrap()
    {
        require_once __DIR__ . '/../Views/ClienteRegisterView.php';
        $view = new ClienteRegisterView();        
        //$view->renderBootstrap();
    }

    public function delete($id)
    {
        $Cliente=Cliente::select('*')->where('id','=',$id)->get()[0]; 
        $Cliente->delete();
        echo "Registro eliminado";
    }
    //Metodo create que recibe datos de registerForm y crea el nuevo Cliente en base de datos
    public function create()
    {
        $datosJSON = file_get_contents('php://input');
        $datos = json_decode($datosJSON, true);
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $email = $_POST['Email'];
        $edad = $_POST['Edad'];
        $Telefono = $_POST['Telefono'];
        $genero = $_POST['Genero'];
        $estado = $_POST['Estado'];

        $data = [            
            'Nombre'=> $nombre,
            'Apellido'=> $apellido,
            'Email'=> $email,
            'Edad'=> $edad,
            'Telefono'=> $Telefono,
            'Genero'=> $genero,
            'Estado'=> $estado
        ];
        $Cliente = Cliente::insert($data);
        $testData=$Cliente->getId();
        $this->redirect("/icepalWeb1/MVC/Cliente",$testData);
    }
    
    
}