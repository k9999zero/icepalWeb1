<?php
namespace Models;
use DataBases\Connector;
class User extends Model {
         
    public $nombre;
    public $intrumento;
    public $hora;
   
    public $id;  
    
 
    private $myAtt;
   
    //Constructor de la clase que establece todos los valores en data y los atributos usando los metodos SET por cada columna.
  
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
    public function obtenerVaribleId() {
        $reflectionClass = new \ReflectionClass($this);
        $properties = $reflectionClass->getProperties(\ReflectionProperty::IS_PUBLIC);

        foreach ($properties as $property) {
            if ($property->getValue($this) === $this->getId()) {
                return $property->getName();
            }
        }
        return null; // Si la propiedad no se encuentra  return null; // Si la variable no se encuentra en las variables locales
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


    public function setInstrumento($instrumento)
    {
        $this->instrumento = $instrumento;
        $this->data["Instrumento"] = $instrumento;
    }
    
    public function getInstrumento()
    {
        return $this->instrumento;
    }

    public function setHora($hora)
    {
        $this->hora = $hora;
        $this->data["Hora"] = $hora;
    }
    public function getHora()
    {
        return $this->hora;
    }

}
?>