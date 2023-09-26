<?php
namespace Models;
use DataBases\Connector;
class Adorno extends Model {
         
    public $nombre_adorno;
    public $stock;
    public $precio;
    public $id_categoria;
    public $Url_imagen;
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
    public function setNombre_adorno($nombre_adorno)
    {
        $this->nombre_adorno = $nombre_adorno;
        $this->data["nombre_adorno"] = $nombre_adorno;
    }
    public function getNombre_adorno()
    {
        return $this->nombre_adorno;
    }
    public function setstock($stock)
    {
        $this->stock = $stock;
        $this->data["stock"] = $stock;
    }
    public function getstock()
    {
        return $this->stock;
    }    
    public function setprecio($precio)
    {
        $this->precio = $precio;
        $this->data["precio"] = $precio;
    }
    public function getPrecio()
    {
        return $this->precio;
    } 
    public function setid_categoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;
        $this->data["Id_categoria"] = $id_categoria;
    }
    public function getid_categoria()
    {
        return $this->id_categoria;
    }
    public function getUrl_imagen()
    {
        return $this->Url_imagen;
    }
    public function setUrl_imagen($Url_imagen)
    {
        $this->Url_imagen = $Url_imagen;
        $this->data["Url_imagen"] = $Url_imagen;
    }
    
}
?>