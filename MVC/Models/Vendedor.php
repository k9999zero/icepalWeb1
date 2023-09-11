<?php
namespace Models;
use DataBases\Connector;
class Vendedor extends Model {
         
    public $nombre;
    public $id;  
    public $apellido;
    public $genero;
    public $id_user;
    public $id_producto;
    //public $UrlImagen;  
    private $data = [];
    private $myAtt;
    //Constructor de la clase que establece todos los valores en data y los atributos usando los metodos SET por cada columna.
    public function __construct($data)
    {
        if($data!=null)
        {
            $this->data["id"] = null;
            foreach ($data as $key=>$value) {
                if($key!='Password')
                {
                    eval('$this->set'.$key.'("'.$value.'");');
                }            
                $this->data[$key] = $value;
            }
        }
        
    }
    /*public function setUrlImagen($UrlImagen)
    {
        $this->UrlImagen = $UrlImagen;
        $this->data["UrlImagen"] = $UrlImagen;
    }
    
    public function getUrlImagen()
    {
        return $this->UrlImagen;
    }	*/
    public function getData()
    {
        return $this->data;
    }
    public function setId($id)
    {
        $this->id = $id;
        $this->data["id"] = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        $this->data["Nombre"] = $nombre;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
        $this->data["Apellido"] = $apellido;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function setGenero($genero)
    {
        $this->genero = $genero;
        $this->data["Genero"] = $genero;
    }
    public function getGenero()
    {
        return $this->genero;
    }
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;
        $this->data["Id_user"] = $id_user;
    }
    public function getId_user()
    {
        return $this->id_user;
    }
    public function setId_producto($id_producto)
    {
        $this->id_producto = $id_producto;
        $this->data["Id_producto"] = $id_producto;
    }
    public function getId_producto()
    {
        return $this->id_producto;
    }
}
?>