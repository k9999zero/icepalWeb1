
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta db</title>
    <link rel="stylesheet" href="../views/style/vista_registro.css">
</head>
<body>
    
</body>
</html>


<?php
//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost:3308/conexion";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario

$id_camada = $_POST["id_camada"] ;
$id_madre = $_POST["id_madre"] ;
$medicacion = $_POST["medicacion"] ;
$nacimiento = $_POST["f_nacimiento"] ;
$salida = $_POST["f_salida"] ;
$alimento = $_POST["t_alimento"] ;
$fechareg = date("d/m/y");


//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>correctamente conectado</h3></b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "registro_maternidad";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Tabla seleccionada: registro de lechones</h3>" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO lechon( id_camada,id_madre,medicacion, f_nacimiento, f_salida, t_alimento,fecha_reg)
        VALUES  ('$id_camada','$id_madre','$medicacion','$nacimiento','$salida','$alimento','$fechareg')";             
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM lechon";
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th>id_lechon</th>";
echo "<th>id_madre</th>";
echo "<th>id_camada</th>";
echo "<th>medicacion</th>";
echo "<th>fecha_nacimiento</th>";
echo "<th>fecha_salida</th>";
echo "<th>tipo_alimento</th>";
echo "<th>fecha_registros</th>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['id_lechon']. "</td></h2>";
    echo "<td><h2>" . $colum['id_madre']. "</td></h2>";
    echo "<td><h2>" . $colum['id_camada']. "</td></h2>";
    echo "<td><h2>" . $colum['medicacion'] . "</td></h2>";
    echo "<td><h2>" . $colum['f_nacimiento'] . "</td></h2>";
    echo "<td><h2>" . $colum['f_salida']. "</td></h2>";
    echo "<td><h2>" . $colum['t_alimento']. "</td></h2>";
    echo "<td><h2>" . $colum['fecha_reg']. "</td></h2>";
    echo "</tr>";
}
echo "</table>";

mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="veterinario.php"> Volver Atrás</a>';


?>