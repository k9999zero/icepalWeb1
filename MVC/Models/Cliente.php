<?php
namespace Models;
use DataBases\Connector;
class Cliente extends Model {
         
    public $id;  
    public $nombre;
    public $apellido;
    public $email;
    public $edad;
    public $telefono;
    public $genero;
    public $estado;
    private $data = [];

    //Constructor de la clase que establece todos los valores en data y los atributos usando los metodos SET por cada columna.
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
    public function setEdad($edad)
    {
        $this->edad = $edad;
        $this->data["Edad"] = $edad;
    }
    public function getEdad()
    {
        return $this->edad;
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
        $this->data["Telefono"] = $telefono;
    }
    public function getTelefono()
    {
        return $this->telefono;
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
    public function setEstado($estado)
    {
        $this->estado = $estado;
        $this->data["Estado"] = $estado;
    }
    public function getEstado()
    {
        return $this->estado;
    }
}
?>