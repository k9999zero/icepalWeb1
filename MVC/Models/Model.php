<?php
namespace Models;
use DataBases\Connector;
require_once __DIR__ . '/../DataBase/connector.php';
require_once 'User.php';
require_once 'Comida.php';

class Model
{
    public static function select($columns)
    {
        $database = Connector::getInstance(); 
        $instance = basename(str_replace('\\', '/',static::class)); 
        return $database->select($columns,lcfirst($instance));
    }
    public static function insert($data)
    {
        //$className = "\\Models\\".basename(static::class);
        $className = basename(static::class);
        //$className = basename(str_replace('\\', '/',static::class)); 
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