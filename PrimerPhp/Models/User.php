<?php
namespace Models;
use DataBases\Connector;
class User {
        
    public $tableName = 'users';   
    private $nombre;
    private $apellido;
    private $email;
    private $password;
    private $id;    
    private $data = [];

    public function __construct($data)
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
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
        $this->data["Apellido"] = $apellido;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function setEmail($email)
    {
        $this->email = $email;
        $this->data["Email"] = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public static function insert($data)
    {
        //Connector::insert($table,$data);
        $instance = new User($data);
        $instance->save();

        return $instance;
    }
    public function save()
    {
        $database = Connector::getInstance();        
        if ($this->id) {
            $database->updateData($this);
        } else {
            $database->saveData($this);
        }
    }
}
?>