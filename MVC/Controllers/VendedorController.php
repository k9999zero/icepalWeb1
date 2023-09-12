<?php
namespace Controllers;
use Views\VendedorIndexView;
use Views\VendedorRegisterView;
use Views\VendedorEditView;
use Models\Vendedor;
use Models\user;
use Models\Categoria;
use Models\Contratos;
use Controllers\Controller;

class VendedorController extends Controller {
    public function ajaxExiste()
    {
        $nombre = $_GET['nombre'];
        $categorias = Categoria::select("*")->where('nombre',"=",$nombre)->get();
        if(count($categorias)>0)
        {
            $respuesta = [
                'respuesta' => 'el nombre de categoria '.$nombre.' ya existe',
                'status' => false
            ];     
                    
            echo json_encode($respuesta);
        }
        else{
            $respuesta = [
                'respuesta' => 'el nombre de categoria '.$nombre.' no existe'
                ,
                'status' => true
            ];  
                       
            echo json_encode($respuesta);
        }
    }
    public function index()
    {          
        require_once __DIR__ . '/../Views/VendedorIndexView.php';
        $view = new VendedorIndexView();
        $user=Vendedor::select('*')->get();           
        $view->render($user);
    }
    //Metodo show que muestra en tabla solo datos de un solo user
    public function show($id)
    {          
        require_once __DIR__ . '/../Views/VendedorIndexView.php';
        $view = new UserIndexView();
        $vendedor=User::select('*')->where('id','=',$id)->get();           
        $view->render($vendedor);
    }
    public function showCategoria($id)
    {          
        require_once __DIR__ . '/../Views/VendedorIndexView.php';
        $view = new UserIndexView();
        $vendedor=User::select('*')->where('id','=',$id)->get();           
        $view->render($vendedor);
    }
    //Metodo editForm que muestra el formulario de edicion de un user
    public function editForm($id)
    {
        require_once __DIR__ . '/../Views/VendedorEditView.php';
        $view = new VendedorEditView();
        $vendedor=vendedor::select('*')->where('id','=',$id)->get()[0];           
        $view->render($vendedor);
    }
    //Metodo edit que mediante POST recibe los datos de editForm y realizar los cambios en base de datos
    public function edit()
    {
        $id = $_POST['Id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $genero = $_POST['genero'];

        /*$nameUsers = $_POST['NameUsers'];
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
        move_uploaded_file($rutaTemporal, $rutaDestino); */      
       $vendedor=vendedor::select('*')->where('id','=',$id)->get()[0];           
        $vendedor->setNombre($nombre);
        $vendedor->setApellido($apellido);
        $vendedor->setGenero($genero);
        $vendedor->save();
        $this->redirect("/icepalWeb1/MVC/Vendedor");
    }
    //Metodo registerForm que muestra el formulario para crear un nuevo user
    public function registerForm()
    {
        require_once __DIR__ . '/../Views/VendedorRegisterView.php';
        $view = new VendedorRegisterView();
        $users = user::select("*")->get();
        $categorias =  Categoria::select("*")->get();   
        $view->render($users,$categorias);

       
    }
    public function delete($id)
    {
        $user=Vendedor::select('*')->where('id','=',$id)->get()[0]; 
        $user->delete();
        echo "test";
    }
    //Metodo create que recibe datos de registerForm y crea el nuevo user en base de datos
    public function create()
    {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $genero = $_POST['genero'];
        $categorias = $_POST['categorias'];
        $Id_user = $_POST['Id_USER'];
        $data = [            
            'nombre'=> $nombre,
            'apellido' => $apellido,
            'genero' => $genero,
            'Id_user' => $Id_user
        ];
        $vendedor = Vendedor::insert($data);
        foreach($categorias as $categoria)
            {
                $contractData = [
                    'id_vendedor' => $vendedor->getId(),
                    'id_categoria' => $categoria
                ];
                Contratos::insert($contractData);
            }
        
        $this->redirect("/icepalWeb1/MVC/Vendedor");
    }
    
}