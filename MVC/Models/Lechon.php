<?php
namespace Models;
use DataBases\Connector;
class Lechon extends Model {
         
    public $peso_lechon; 
    public $raza;
    public $f_entrada;  
    public $f_salida;
    public $sexo;  
    public $f_reg; 
    public $id_lechon;
    public $id_corral;
    public $id_madre;

    private $data = [];

    public function __construct($data)
    {
        if($data!=null)
        {
            $this->data["id_lechon"] = null;
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

    
    public function setId($id_lechon)
    {
        $this->id_lechon = $id_lechon;
        $this->data["Id_lechon"] = $id_lechon;
    }
    public function getId()
    {
        return $this->id_lechon;
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

    public function setId_madre($id_madre)
    {
        $this->id_madre = $id_madre;
        $this->data["Id_madre"] = $id_madre;
    }
   
    public function getId_madre()
    {
        return $this->id_madre;
    }

    public function setPeso_Lechon($peso_lechon)
    {
        $this->peso_lechon = $peso_lechon;
        $this->data["Peso_lechon"] = $peso_lechon;
    }
    public function getPeso_lechon()
    {
        return $this->peso_lechon;
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

    public function setF_entrada($f_entrada)
    {
        $this->f_entrada = $f_entrada;
        $this->data["F_entrada"] = $f_entrada;
    }
    public function getF_entrada()
    {
        return $this->f_entrada;
    }

    public function setF_salida($f_salida)
    {
        $this->f_salida = $f_salida;
        $this->data["F_salida"] = $f_salida;
    }
    public function getF_salida()
    {
        return $this->f_salida;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
        $this->data["Sexo"] = $sexo;
    }
    public function getSexo()
    {
        return $this->sexo;
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

    
    public function setId_corral($id_corral)
    {
        $this->id_corral = $id_corral;
        $this->data["Id_corral"] = $id_corral;
    }
    public function getId_corral()
    {
        return $this->id_corral;
    } 
}
?>