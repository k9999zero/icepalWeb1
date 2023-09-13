<?php
namespace Models;
use DataBases\Connector;
class Ficha_parto extends Model {
         
    public $f_parto; 
    public $vivos;
    public $muertos;  
    public $n_lechones;
    public $n_parto;
       
    public $id;

    private $data = [];

    public function __construct($data)
    {
        if($data!=null)
        {
            $this->data["id_parto"] = null;
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
    public function setId_parto($id_parto)
    {
        $this->id_parto = $id_parto;
        $this->data["Id_parto"] = $id_parto;
    }
   
    public function getId_parto()
    {
        return $this->id_parto;
    }

    public function setF_parto($f_parto)
    {
        $this->f_parto = $f_parto;
        $this->data["F_parto"] = $f_parto;
    }
    public function getF_parto()
    {
        return $this->f_parto;
    }

     public function setVivos($vivos)
    {
        $this->vivos = $vivos;
        $this->data["Vivos"] = $vivos;
    }
    public function getVivos()
    {
        return $this->vivos;
    }

    public function setMuertos($muertos)
    {
        $this->muertos = $muertos;
        $this->data["Muertos"] = $muertos;
    }
    public function getMuertos()
    {
        return $this->muertos;
    }

    public function setN_lechones($n_lechones)
    {
        $this->n_lechones = $n_lechones;
        $this->data["N_lechones"] = $n_lechones;
    }
    public function getN_lechones()
    {
        return $this->n_lechones;
    }

    public function setN_parto($n_parto)
    {
        $this->n_parto = $n_parto;
        $this->data["N_parto"] = $n_parto;
    }
    public function getN_parto()
    {
        return $this->n_parto;
    }
    
    
}
?>