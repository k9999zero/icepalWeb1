<?php
namespace Models;
use DataBases\Connector;
require_once __DIR__ . '/../DataBase/Connector.php';
require_once 'User.php';
require_once 'Comida.php';
require_once 'Cerdo.php';
require_once 'Corral.php';
require_once 'Madre.php';
require_once 'Lechon.php';
require_once 'Ficha_parto.php';
require_once 'Diagnostico.php';
require_once 'Medicamento.php';
require_once 'Celo.php';
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
        if ($this->getId()) {
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