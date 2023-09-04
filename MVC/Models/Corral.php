<?php
namespace Models;
use DataBases\Connector;
class Corral extends Model {
         
    public $cod_corral; 
    public $cod_pocilga;
    public $id;

    private $data = [];

    public function __construct($data)
    {
        if($data!=null)
        {
            $this->data["id_corral"] = null;
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
    public function setcod_corral($cod_corral)
    {
        $this->cod_corral = $cod_corral;
        $this->data["Cod_corral"] = $cod_corral;
    }
    public function getcod_corral()
    {
        return $this->cod_corral;
    }

     public function setcod_pocilga($cod_pocilga)
    {
        $this->cod_pocilga = $cod_pocilga;
        $this->data["Cod_pocilga"] = $cod_pocilga;
    }
    public function getcod_pocilga()
    {
        return $this->cod_pocilga;
    }

  
}
?>