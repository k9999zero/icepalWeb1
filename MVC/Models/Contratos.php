<?php
namespace Models;
use DataBases\Connector;
class Contratos extends Model {
                 
    public $id;  
    public $id_categoria;
    public $id_vendedor;   
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
    public function setId_categoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;
        $this->data["id_categoria"] = $id_categoria;
    }
    public function getId_categoria()
    {
        return $this->id_categoria;
    }
    public function setId_vendedor($id_vendedor)
    {
        $this->id_vendedor = $id_vendedor;
        $this->data["id_vendedor"] = $id_vendedor;
    }
    public function getId_vendedor()
    {
        return $this->id_vendedor;
    }  
    
}
?>