<?php
define('BASE_URL', '');
// invocar dependencias por el gestor de paquetes
require_once 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__); // Cargar el archivo .env desde el directorio actual
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

require_once 'Routes.php';


?>


