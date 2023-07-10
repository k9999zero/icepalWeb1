
<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Views/styles/styles.css">

    <style>
    </style>
</head>
<body>

<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Año_nacimiento</th>  
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($data as $row)
    {
      echo "<tr>";
      echo "<td>".$row->getNombre()."</td>";
      echo "<td>".$row->getApellido()."</td>";  
      echo "<td>".$row->getAño_nacimiento()."</td>";      
      echo "</tr>";
    }
    ?>        
    <!-- Puedes agregar más filas aquí -->
  </tbody>
</table>


</body>
</html>

