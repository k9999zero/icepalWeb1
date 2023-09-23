<?php
namespace Models;
use DataBases\Connector;
class Celo extends Model {
         
    
    public $id_celo;
    public $f_celo;  
    public $n_celo;  
    public $id_madre;

    private $data = [];

    public function __construct($data)
    {
        if($data!=null)
        {
            $this->data["id_celo"] = null;
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
    public function setId($id_celo)
    {
        $this->id_celo = $id_celo;
        $this->data["Id_celo"] = $id_celo;
    }
    public function getId()
    {
        return $this->id_celo;
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
    

     public function setF_celo($f_celo)
    {
        $this->f_celo = $f_celo;
        $this->data["F_celo"] = $f_celo;
    }
    public function getF_celo()
    {
        return $this->f_celo;
    }

    public function setN_celo($n_celo)
    {
        $this->n_celo = $n_celo;
        $this->data["N_celo"] = $n_celo;
    }
    public function getN_celo()
    {
        return $this->n_celo;
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
    public function setId_celo($id_celo)
    {
        $this->id_celo = $id_celo;
        $this->data["Id_celo"] = $id_celo;
    }
    public function getId_celo()
    {
        return $this->id_celo;
    } 
}
?>