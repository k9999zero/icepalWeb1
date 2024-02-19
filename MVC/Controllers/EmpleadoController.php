<?php
namespace Controllers;
use Views\EmpleadoIndexView;
use Views\EmpleadoRegisterView;
use Controllers\Controller;
use Models\Empleado;
use Views\EmpleadoEditView;

class EmpleadoController extends Controller {
public function ajaxResponse()
    {
        $respuesta = [
            'dato1' => 'prueba1',
            'dato2' => 'prueba2'
        ];
        $Empleado=Empleado::select('*')->get();   
        echo json_encode($Empleado);
    }

    //select id, nombre from User
    public function index()
    {          
        require_once __DIR__ . '/../Views/EmpleadoIndexView.php';
        $view = new EmpleadoIndexView();
        $Empleado=Empleado::select("*")->get();        
        $view->render($Empleado);
    }

public function show($id)
    {          
        require_once __DIR__ . '/../Views/EmpleadoIndexView.php';
        $view = new EmpleadoIndexView();
        $Empleado=Empleado::select('*')->where('id','=',$id)->get();           
        $view->render($Empleado);
    }
    //Metodo editForm que muestra el formulario de edicion de un user
    public function editForm($id)
    {
        require_once __DIR__ . '/../Views/EmpleadoEditView.php';
        $view = new EmpleadoEditView();
        $Empleado=Empleado::select('*')->where('id','=',$id)->get();           
        $view->render($Empleado);
    }
    //Metodo edit que mediante POST recibe los datos de editForm y realizar los cambios en base de datos
    public function edit()
    {
        $id = $_POST['Id'];
        $nombre = $_POST['Nombre'];
    
        $Empleado=Empleado::select('*')->where('id','=',$id)->get()[0];           
        $Empleado->setNombre($nombre);
    
        $Empleado->save();
        $this->redirect("/ESOOO/MVC/Empleado",$id);
    }
    //Metodo registerForm que muestra el formulario para crear un nuevo user
    

    public function registerForm()
    {
        require_once __DIR__ . '/../Views/EmpleadoRegisterView.php';
        $view = new EmpleadoRegisterView();        
        $view->render();
    }

public function delete($id)
    {
        $Empleado=Empleado::select('*')->where('id','=',$id)->get()[0]; 
        $Empleado->delete();
        echo "test";
    }
    //Metodo create que recibe datos de registerForm y crea el nuevo user en base de datos
  

    public function create()
    {
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $ci = $_POST['Ci'];
        $ingreso = $_POST['Ingreso'];

        $data = [            
            'Nombre'=> $nombre,
            'Apellido'=> $apellido,    
            'Ci'=> $ci,
            'Ingreso'=> $ingreso
               
        ];
        $user = Empleado::insert($data);
                    
        $this->redirect("/esooo/MVC/inicio/Empleado");
    }
    
    
}