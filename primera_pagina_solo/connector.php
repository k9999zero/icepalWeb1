<?php
    function connect(){
        $conn;
        $serverName="localhost";
        $userName="root";
        $password="";
        $dbName="formulariophp";
        try{
            $conn = new mysqli($servername, $username, $password, $dbName);
        }catch(myspl_sql_exception $e){
            echo "Error" . $e->getMessage();
        }
        return $conn;
    }

    $nombre = $_POST['nombre'];
    $apellido = $_POST['Apellido'];
    $genero = $_POST['Genero'];

    $sql = "INSERT INTO usuario ( Nombre,Apellido,Genero) VALUES ('".$nombre."','".$apellido."','".$genero."')";
    $conn = connect();
    $sentence= $conn ->prepare($sql);
    $sentence->execute();

    if($sentence->affected_rows>0){
        echo "Guardado!!!!!";
    }
    else{
        echo"Error al inserttar ". $conn->error;
    }
?>