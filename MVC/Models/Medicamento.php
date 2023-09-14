<?php
namespace Models;
use DataBases\Connector;
class Medicamento extends Model {
         
    public $medicamento; 
    public $f_reg;
    public $id_med;

    private $data = [];

    public function __construct($data)
    {
        if($data!=null)
        {
            $this->data["id_med"] = null;
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
    public function setId_med($id_med)
    {
        $this->id_med = $id_med;
        $this->data["Id_med"] = $id_med;
    }
   
    public function getId_medicamento()
    {
        return $this->id_med;
    }
    public function setMedicamento($medicamento)
    {
        $this->medicamento = $medicamento;
        $this->data["Medicamento"] = $medicamento;
    }
    public function getMedicamento()
    {
        return $this->medicamento;
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