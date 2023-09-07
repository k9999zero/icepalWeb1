<?php
namespace Models;
use DataBases\Connector;
class Comentarios extends Model {
         
    public $comentarios;           
    public $id;      
    public $id_producto;  
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
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;
        $this->data["comentarios"] = $comentarios;
    }
    public function getComentarios()
    {
        return $this->comentarios;
    }   
    public function setId_producto($id_producto)
    {
        $this->id_producto = $id_producto;
        $this->data["id_producto"] = $id_producto;
    }
    public function getId_producto()
    {
        return $this->id_producto;
    }
}
?>