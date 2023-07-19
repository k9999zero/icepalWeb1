
<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/Views/styles/styles.css">

    <style>
    </style>
</head>
<body>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombres</th>    
      <th>Opciones</th>   
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($data as $row)
    {
      echo "<tr>";
      echo "<td>".$row->getId()."</td>";
      echo "<td>".$row->getNombre()."</td>";  
      echo "<td><a href=\"".BASE_URL."/userEdit/".$row->getId()."\">Editar</a>";    
      echo "</tr>";
    }
    ?>        
    <!-- Puedes agregar más filas aquí -->
  </tbody>
</table>


</body>
</html>

