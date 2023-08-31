<?php
namespace Models;
use DataBases\Connector;
class Cerdo extends Model {
         
    public $peso_cerdo; 
    public $raza;
    public $fecha_nacimiento;  
    public $f_salida;
    public $sexo;  
    public $f_registro; 

    public $descripcion;    
    public $id;        
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

    public function setFecha_nacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->data["Fecha_nacimiento"] = $fecha_nacimiento;
    }
    public function getFecha_nacimiento()
    {
        return $this->fecha_nacimiento;
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

     public function setF_registro($f_registro)
    {
        $this->f_registro = $f_registro;
        $this->data["F_registro"] = $f_registro;
    }
    public function getF_registro()
    {
        return $this->f_registro;
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