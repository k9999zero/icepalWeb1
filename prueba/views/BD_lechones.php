
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta db</title>
    <style type="text/css">
     
      table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color: #edf797;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }


    </style>
</head>
<body>
    
</body>
</html>


<?php
//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
$medicacion = $_POST["medicacion"] ;
$nacimiento = $_POST["f_nacimiento"] ;
$salida = $_POST["f_salida"] ;
$alimento = $_POST["t_alimento"] ;


//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>Hemos conectado al servidor</h3></b>" ;
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
        echo "<h3>Tabla seleccionada:</h3>" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO lechon( medicacion, f_nacimiento, f_salida, t_alimento)
        VALUES  ('$medicacion','$nacimiento','$salida','$alimento')";             
                            
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
echo "<th>id_camada</th>";
echo "<th>id_madre</th>";
echo " <th>medicacion</th>";
echo "<th>f_nacimiento</th>";
echo "<th>f_salida</th>";
echo "<th>t_alimento</th>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['id_camada']. "</td></h2>";
    echo "<td><h2>" . $colum['madre']. "</td></h2>";
    echo "<td><h2>" . $colum['medicacion'] . "</td></h2>";
    echo "<td><h2>" . $colum['f_nacimiento'] . "</td></h2>";
    echo "<td><h2>" . $colum['f_salida']. "</td></h2>";
    echo "<td><h2>" . $colum['t_alimento']. "</td></h2>";
    echo "</tr>";
}
echo "</table>";

mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="veterinario.php"> Volver Atrás</a>';


?>