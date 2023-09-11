<?php
namespace Models;
use DataBases\Connector;
class Diagnostico extends Model {
         
    public $detalle; 
    public $f_reg;
   

    private $data = [];

    public function __construct($data)
    {
        if($data!=null)
        {
            $this->data["id_diagnostico"] = null;
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
    public function setDetalle($detalle)
    {
        $this->id = $id_corral;
        $this->data["Detalle"] = $detalle;
    }
   
    public function getDetalle()
    {
        return $this->detalle;
    }
    public function setF_reg($f_reg)
    {
        $this->f_reg = $f_reg;
        $this->data["F_reg"] = $f_reg;
    }
    public function getF_reg()
    {
        return $this->f_reg;
    }

     

  
}
?>