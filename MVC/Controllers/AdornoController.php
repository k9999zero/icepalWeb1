<?php
namespace Controllers;
use Views\AdornoIndexView;
use Views\AdornoRegisterView;
use Controllers\Controller;
use Views\AdornoEditView;
use Models\Adorno;
use Models\Categoria;

class AdornoController extends Controller {
    //select id, nombre from User
    public function index()
    {          
        require_once __DIR__ . '/../Views/AdornoIndexView.php';
        $view = new AdornoIndexView();
        $Adorno=Adorno::select("*")->get();        
        $view->render($Adorno);
    }
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
    public function registerForm()
    {
        require_once __DIR__ . '/../Views/AdornoRegisterView.php';
        $view = new AdornoRegisterView(); 
        $categorias =  Categoria::select("*")->get();       
        $view->render($categorias);
    }
    public function create()
    {
        $nombre = $_POST['Nombre_adorno'];
        $stock = $_POST['Stock'];
        $precio = $_POST['Precio'];
        $id_categoria = $_POST['Id_categoria'];
        $Url_imagen = $_POST['Url_imagen'];  
        $Id_categoria = $_POST['Id_categoria'];  

        $directorioDestino = "Imagenes/prueba/";
        if ($_FILES["Imagen"]["error"] == UPLOAD_ERR_OK) {
            $nombreArchivo = $_FILES["Imagen"]["name"];
            $rutaTemporal = $_FILES["Imagen"]["tmp_name"];
            $rutaDestino = $directorioDestino . $nombreArchivo;
        }
        $data = [            
            'Nombre_adorno'=> $nombre,
            'Stock'=> $stock,
            'Precio'=> $precio,
            'Id_categoria'=> $id_categoria,
            'Url_imagen'=> $rutaDestino          
        ];
        $user = Adorno::insert($data);
        if (!is_dir($directorioDestino)) {
            mkdir($directorioDestino, 0777, true);
        }
        move_uploaded_file($rutaTemporal, $rutaDestino);           
        $this->redirect("/icepalWeb1/MVC/adorno",$testData);
    }
    public function editForm($id)
    {
        require_once __DIR__ . '/../Views/AdornoEditView.php';
        $view = new AdornoEditView();
        $adorno=Adorno::select('*')->where('id','=',$id)->get()[0];           
        $view->render($adorno);
    }
    public function edit()
    {
        $id = $_POST['Id'];
        $nombre_adorno = $_POST['Nombre_adorno'];
        $stock = $_POST['Stock'];
        $precio = $_POST['Precio'];
        $Url_imagen = $_POST['Url_imagen'];
        $adorno=Adorno::select('*')->where('id','=',$id)->get()[0];           
        $adorno->setNombre_adorno($nombre_adorno);
        $adorno->setStock($stock);
        $adorno->setprecio($precio);
        $directorioDestino = "Imagenes/prueba/";
        if ($_FILES["Imagen"]["error"] == UPLOAD_ERR_OK) {
            $nombreArchivo = $_FILES["Imagen"]["name"];
            $rutaTemporal = $_FILES["Imagen"]["tmp_name"];
            $rutaDestino = $directorioDestino . $nombreArchivo;
        }
        $adorno->setUrlImagen($rutaDestino);	
        $adorno->save();
        if (!is_dir($directorioDestino)) {
            mkdir($directorioDestino, 0777, true);
        }
        move_uploaded_file($rutaTemporal, $rutaDestino);
        $this->redirect("/icepalWeb1/MVC/adorno",$testData);
    }
    
}