<?php
namespace Models;
use DataBases\Connector;
class Diagnostico extends Model {
         
    public $detalles; 
    public $f_reg;
    public $id_diagnostico;

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
    public function setId_diagnostico($id_diagnostico)
    {
        $this->id_diagnostico = $id_diagnostico;
        $this->data["Id_diagnostico"] = $id_diagnostico;
    }
   
    public function getId_diagnostico()
    {
        return $this->id_diagnostico;
    }
    public function setId($id_diagnostico)
    {
        $this->id_diagnostico = $id_diagnostico;
        $this->data["Id_diagnostico"] = $id_diagnostico;
    }
    public function getId()
    {
        return $this->id_diagnostico;
    }

    public function setDetalles($detalles)
    {
        $this->detalles = $detalles;
        $this->data["Detalles"] = $detalles;
    }
   
    public function getDetalles()
    {
        return $this->detalles;
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

    public function setId_lechon($id_lechon)
    {
        $this->id_lechon = $id_lechon;
        $this->data["Id_lechon"] = $id_lechon;
    }
   
    public function getId_lechon()
    {
        return $this->id_lechon;
    }
  
}
?>