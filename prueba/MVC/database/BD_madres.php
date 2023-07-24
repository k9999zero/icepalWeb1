

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
$host = "localhost";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
$monta = $_POST["f_monta"] ;
$parto = $_POST["f_parto"] ;
$num_parto = $_POST["n_parto"] ;
$num_lechon = $_POST["n_lechones"] ;
$vivos = $_POST["vivos"] ;
$muertos = $_POST["muertos"] ;
$peso_camada = $_POST["peso_camada"] ;
$celo = $_POST["f_celo"] ;
$t_alimento = $_POST["tipo_aliemento"] ;
$vacuna = $_POST["vacunas"] ;

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
        echo "<h3>Tabla seleccionada: registro de madres</h3>" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO madre( f_monta, f_parto, n_parto, n_lechones, vivos, muertos, peso_camada, f_celo, tipo_aliemento, vacunas)
        VALUES  ('$monta','$parto','$num_parto','$num_lechon', '$vivos','$muertos','$peso_camada','$celo','$t_alimento','$vacuna')";             
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM madre";
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th>id_madre</th>";
echo "<th>fecha_monta</th>";
echo " <th>fecha_parto</th>";
echo "<th>numero_parto</th>";
echo "<th>numero_lechones</th>";
echo "<th>vivos</th>";
echo "<th>muertos</th>";
echo "<th>peso_camada/th>";
echo "<th>f_celo</th>";
echo "<th>tipo_alimento</th>";
echo "<th>vacunas</th>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['id_madre']. "</td></h2>";
    echo "<td><h2>" . $colum['f_monta']. "</td></h2>";
    echo "<td><h2>" . $colum['f_parto'] . "</td></h2>";
    echo "<td><h2>" . $colum['n_parto'] . "</td></h2>";
    echo "<td><h2>" . $colum['n_lechones']. "</td></h2>";
    echo "<td><h2>" . $colum['vivos']. "</td></h2>";
    echo "<td><h2>" . $colum['muertos'] . "</td></h2>";
    echo "<td><h2>" . $colum['peso_camada'] . "</td></h2>";
    echo "<td><h2>" . $colum['f_celo']. "</td></h2>";
    echo "<td><h2>" . $colum['tipo_aliemento']. "</td></h2>";
    echo "<td><h2>" . $colum['vacunas'] . "</td></h2>";
    
    echo "</tr>";
}
echo "</table>";

mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="veterinario.php"> Volver Atrás</a>';


?>