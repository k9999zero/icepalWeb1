<?php
namespace Models;
use DataBases\Connector;
class UserCreate extends Model {
         
    public $nombre;    
    public $apellido;   
    public $ci;   
    public $año_nacimiento;
    public $password;
    public $id;        
    private $data = [];

    public function __construct($data)
    {
        if($data!=null)
        {
            $this->data["id"] = null;
            foreach ($data as $key=>$value) {
                
                eval('$this->set'.$key.'("'.$value.'");');
                            
                $this->data[$key] = $value;
            }
        }
        
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
    public function setCi($ci)
    {
        $this->ci = $ci;
        $this->data["Ci"] = $ci;
    }
    public function getCi()
    {
        return $this->ci;
    } 
    public function setAño_nacimiento($año_nacimiento)
    {
        $this->año_nacimiento = $año_nacimiento;
        $this->data["Año_nacimiento"] = $año_nacimiento;
    }
    public function getAño_nacimiento()
    {
        return $this->año_nacimiento;
    } 
    public function setPassword($password)
    {
        $this->password = $password;
        $this->data["Password"] = $password;
    }
    public function getPassword()
    {
        return $this->password;
    } 
}
?>