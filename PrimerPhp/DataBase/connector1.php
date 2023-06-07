<?php
namespace DataBase;
//Carga las variables de entorno
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__)); // Cargar el archivo .env desde el directorio actual
$dotenv->load(); 

// Acceder a las variables de entorno
$dbHost = $_ENV['DB_HOST'];
$dbUser = $_ENV['DB_USER'];
$dbPassword = $_ENV['DB_PASSWORD'];
$dbName = $_ENV['DB_NAME'];

$servername = $dbHost;
$username = $dbUser;
$password = $dbPassword;
$dbname = $dbName;

class Connector {

    //mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_STRICT);
    public static $conn;                     
    private static function connect() {
        mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_STRICT);
        global $servername;
        global $username;
        global $password;
        global $dbname; 
        try {
            self::$conn = new mysqli($servername, $username, $password, $dbname);                                  
        } catch (mysqli_sql_exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    /*public static function insert($data)
    {
        self::connect();
        echo "prueba";
    }*/

    public static function insert($table, $data) {  
        self::connect();              
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
            echo 'Inserción exitosa.';
        } else {
            echo 'Error en la inserción: ' . self::$conn->error;
            // Manejar el error adecuadamente...
        }
        
        $sentencia->close();
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

}
?>