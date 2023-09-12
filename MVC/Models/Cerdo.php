<?php
namespace Models;
use DataBases\Connector;
class Cerdo extends Model {
         
    public $peso_cerdo; 
    public $raza;
    public $f_nacimiento;  
    public $f_salida;
    public $sexo;  
    public $f_reg; 
    public $id_corral;      
    public $id_cerdo;
    private $data = [];

    public function __construct($data)
    {
        if($data!=null)
        {
            $this->data["id_cerdo"] = null;
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
    public function setId_cerdo($id)
    {
        $this->id = $id;
        $this->data["id"] = $id;
    }
   
    public function getId_cerdo()
    {
        return $this->id;
    }
    public function setPeso_cerdo($peso_cerdo)
    {
        $this->peso_cerdo = $peso_cerdo;
        $this->data["Peso_cerdo"] = $peso_cerdo;
    }
    public function getPeso_cerdo()
    {
        return $this->peso_cerdo;
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

    public function setF_nacimiento($f_nacimiento)
    {
        $this->fecha_nacimiento = $f_nacimiento;
        $this->data["F_nacimiento"] = $f_nacimiento;
    }
    public function getF_nacimiento()
    {
        return $this->f_nacimiento;
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