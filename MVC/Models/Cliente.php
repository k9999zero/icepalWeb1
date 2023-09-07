<?php
namespace Models;
use DataBases\Connector;
class Cliente extends Model {
         
    public $nameUser;
    public $id;  
    public $urlImagen;  
    private $data = [];
    private $myAtt;
    //Constructor de la clase que establece todos los valores en data y los atributos usando los metodos SET por cada columna.
    public function __construct($data)
    {
        if($data!=null)
        {
            $this->data["id"] = null;
            foreach ($data as $key=>$value) {
                if($key!='Password')
                {
                    eval('$this->set'.$key.'("'.$value.'");');
                }            
                $this->data[$key] = $value;
            }
        }
        
    }
    public function getUrlImagen($urlImagen)
    {
        return $this->urlImagen;
    }
    public function setUrlImagen($urlImagen) 
    {
        $this->urlImagen = $urlImagen;
        $this->data["UrlImagen"] = $urlImagen;
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
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        $this->data["Nombre"] = $nombre;
    }
    public function setNameUser($nameUser)
    {
        $this->nameUser = $nameUser;
        $this->data["NameUser"] = $nameUser;
    }
    public function getNameUser()
    {
        return $this->nameUser;
    }
}
?>