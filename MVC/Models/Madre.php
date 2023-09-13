<?php
namespace Models;
use DataBases\Connector;
class Madre extends Model {
         
    
    public $raza;
    public $f_monta;  
    public $f_reg;
    public $id_cerdo;   
    public $id_madre;
    private $data = [];

    public function __construct($data)
    {
        if($data!=null)
        {
            $this->data["id_madre"] = null;
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
    public function setId_madre($id_madre)
    {
        $this->id_madre = $id_madre;
        $this->data["Id_madre"] = $id_madre;
    }
   
    public function getId_madre()
    {
        return $this->id_madre;
    }
    public function setId_cerdo($id_cerdo)
    {
        $this->id_cerdo = $id_cerdo;
        $this->data["Id_cerdo"] = $id_cerdo;
    }
    public function getId_cerdo()
    {
        return $this->id_cerdo;
    }

     public function setRaza($raza)
    {
        $this->raza = $raza;
        $this->data["Raza"] = $raza;
    }
    public function getRaza()
    {
        return $this->raza;
    }

    public function setF_monta($f_monta)
    {
        $this->f_monta = $f_monta;
        $this->data["F_monta"] = $f_monta;
    }
    public function getF_monta()
    {
        return $this->f_monta;
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