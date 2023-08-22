<?php
namespace Models;
use DataBases\Connector;
require_once __DIR__ . '/../DataBase/Connector.php';
require_once 'User.php';
require_once 'Producto.php';

class Model
{
    public static function select($columns)
    {
        $database = Connector::getInstance(); 
        $instance = basename(static::class);
        return $database->select($columns,$instance);
    }
    public static function insert($data)
    {
        $className = "\\Models\\".basename(static::class);
        $instance = new $className($data);
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
    public function delete()
    {
        $database = Connector::getInstance();  
        $database->deleteData($this);
    }
}
?>