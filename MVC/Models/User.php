<?php
namespace Models;
use DataBases\Connector;
class User extends Model {
         
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    public $id;  
    public $urlImagen;  
    private $data = [];

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
    public function getUrlImagen($urlImagen)
    {
        return $this->urlImagen;
    }
    public function setUrlImagen($urlImagen) 
    {
        $this->urlImagen = $urlImagen;
        $this->data["UrlImagen"] = $urlImagen;
    }
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
    public function setEmail($email)
    {
        $this->email = $email;
        $this->data["Email"] = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    
}
?>