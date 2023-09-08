<?php
namespace Models;
use DataBases\Connector;
class Cliente extends Model {
         
    public $nameUsers;
    public $id;  
    public $UrlImagen;  
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
    public function setUrlImagen($UrlImagen)
    {
        $this->UrlImagen = $UrlImagen;
        $this->data["UrlImagen"] = $UrlImagen;
    }
    
    public function getUrlImagen()
    {
        return $this->UrlImagen;
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
    public function setNameUsers($nameUsers)
    {
        $this->nameUsers = $nameUsers;
        $this->data["NameUsers"] = $nameUsers;
    }
    public function getNameUsers()
    {
        return $this->nameUsers;
    }
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;
        $this->data["Id_user"] = $id_user;
    }
    public function getId_user()
    {
        return $this->id_user;
    }
}
?>