<?php
namespace Models;
use DataBases\Connector;
class Comida extends Model {
         
    public $nombre;    
    public $descripcion;    
    public $id;   
    public $comidaId;     
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
    public function getComidaId()
    {
        return $this->comidaId;
    }
    public function setComidaId($comidaId)
    {
        $this->comidaId = $comidaId;
        $this->data["ComidaId"] = $comidaId;
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
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
        $this->data["Descripcion"] = $descripcion;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }    
    
}
?>