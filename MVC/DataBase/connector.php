<?php
namespace DataBases;
//Carga las variables de entorno
//require_once 'vendor/autoload.php';
/*$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__)); // Cargar el archivo .env desde el directorio actual
$dotenv->load(); 

// Acceder a las variables de entorno
$dbHost = $_ENV['DB_HOST'];
$dbUser = $_ENV['DB_USER'];
$dbPassword = $_ENV['DB_PASSWORD'];
$dbName = $_ENV['DB_NAME'];

$servername = $dbHost;
$username = $dbUser;
$password = $dbPassword;
$dbname = $dbName;*/

class Connector {

    private static $instance;
    //mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_STRICT);
    public static $conn;   
    private $query;    
    private $queryValues = [];
    private $queryTypes = "";
    private $queryTable;
    
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }       
        
        return self::$instance;
    }

    private static function connect() {
        mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_STRICT ^ MYSQLI_REPORT_INDEX);
        global $servername;
        global $username;
        global $password;
        global $dbname; 
        try {
            self::$conn = new \mysqli($servername, $username, $password, $dbname);                                  
        } catch (mysqli_sql_exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    /*public static function insert($data)
    {
        self::connect();
        echo "prueba";
    }*/

    public function saveData($model) {  
        self::connect();   
        $data = $model->getData();
        $table = basename(get_class($model));              
        $values = '';
        $tipos = '';        
        $columns = '';
        
        foreach ($data as $key=>$value) {
            $values .= '?,';
            $columns.= $key.',';
            $tipos .= self::getDataType($value);
            $valoresBind[] = $value;
        }
        
        $values = rtrim($values, ',');
        $columns = rtrim($columns, ',');
        
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        
        $sentencia = self::$conn->prepare($sql);
        
        $sentencia->bind_param($tipos, ...$valoresBind);
        $sentencia->execute();
        
        if ($sentencia->affected_rows > 0) {
            $id = $sentencia->insert_id;
            $model->setId($id);
        } else {
            echo 'Error en la inserción: ' . self::$conn->error;
            // Manejar el error adecuadamente...
        }
        
        $sentencia->close();
        self::$conn->close();
    }

    public function updateData($model)
    {
        self::connect(); 
        $id = $model->getId();
        $data = $model->getData();
        $tableName = basename(get_class($model));  
        $setData = '';
        $tipos = ''; 
        $values = '';
        foreach ($data as $key=>$value) {
            if($key!="id")
            {
                $values .= $key.' = ?,';            
                $tipos .= self::getDataType($value);
                $valoresBind[] = $value;
            }
            
        }
        $values = rtrim($values, ',');     
        $stmt = self::$conn->prepare("UPDATE ".$tableName." SET ".$values." WHERE id = ".$id);
        $stmt->bind_param($tipos, ...$valoresBind);

        if ($stmt->execute()) {
            // Actualización exitosa
        } else {
            // Manejo del error de actualización
        }

        $stmt->close();
        self::$conn->close();
    }
    
    public static function getDataType($valor) {
        if (is_int($valor)) {
            return 'i';
        } elseif (is_float($valor)) {
            return 'd';
        } elseif (is_bool($valor)) {
            return 's';
        } else {
            return 's';
        }
    }
    public function select($columns,$table)
    {
        $this->queryTable = $table;
        $query = "select id, ";
        if($columns == "*")
        {
            $query = "select *";
            $query = $query." from ".$table." ";
        }
        else{
            $query = $query.$columns." from ".$table." ";
        }
        
        $this->query = $query;
        return $this;
    }
    public function from($tables)
    {
        $query = $this->query;
        $query = $query.",".$tables." ";
        $this->query=$query;
        return $this;
    }

    public function orWhere($column,$operator,$value)
    {
        $query = $this->query;
        $where = " where ";
        
        if(str_contains($query,$where)) {
            $query = $query." or ".$column." ".$operator." ? ";
        } else {            
            $query = $query.$where.$column." ".$operator." ? ";
        }
        $type = self::getDataType($value);
        $this->queryTypes.=$type;
        $this->queryValues[]=$value;
        $this->query=$query;
        return $this;
    }

    public function where($column,$operator,$value)
    {
        $query = $this->query;
        $where = " where ";
        
        if(str_contains($query,$where)) {
            $query = $query." and ".$column." ".$operator." ? ";
        } else {            
            $query = $query.$where.$column." ".$operator." ? ";
        }
        $type = self::getDataType($value);
        $this->queryTypes.=$type;
        $this->queryValues[]=$value;
        $this->query=$query;
        return $this;
    }
    public function get()
    {
        $respuesta = [];
        self::connect();
        $stmt = self::$conn->prepare($this->query);
        $stmt->bind_param($this->queryTypes, ...$this->queryValues);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $Model="\\Models\\".$this->queryTable;
            $data=[];
            $keys = array_keys($row);
            foreach ($keys as $key) {
                $data[ucfirst($key)] = $row[$key];
            }
            $modelInstance = new $Model($data);
            $respuesta[] = $modelInstance;
            //$columnValue = $row['nombre_columna'];
        
            // Realizar acciones con los datos obtenidos
            // ...
        }
        
        $result->close();
        $stmt->close();
        return $respuesta;
    }

}
?>