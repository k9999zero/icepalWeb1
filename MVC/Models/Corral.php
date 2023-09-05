<?php
namespace Models;
use DataBases\Connector;
class Corral extends Model {
         
    public $cod_corral; 
    public $cod_pocilga;
    public $id_corral;

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
    public function setId_corral($id_corral)
    {
        $this->id = $id_corral;
        $this->data["id_corral"] = $id_corral;
    }
   
    public function getId_corral()
    {
        return $this->id_corral;
    }
    public function setCod_corral($cod_corral)
    {
        $this->cod_corral = $cod_corral;
        $this->data["Cod_corral"] = $cod_corral;
    }
    public function getCod_corral()
    {
        return $this->cod_corral;
    }

     public function setCod_pocilga($cod_pocilga)
    {
        $this->cod_pocilga = $cod_pocilga;
        $this->data["Cod_pocilga"] = $cod_pocilga;
    }
    public function getCod_pocilga()
    {
        return $this->cod_pocilga;
    }

  
}
?>