
<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/Views/styles/style.css">
    

    <style>
    </style>
</head>
<body>

<table>
  <thead>
    <tr>
      <th>Id Corral</th>
      <th>Nombre del corral</th>    
      <th>Nombre de la pocilga</th>   
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($data as $row)
    {
      echo "<tr>";
      echo "<td>".$row->getId_cerdo()."</td>";
      echo "<td>".$row->getPeso_cerdo()."</td>";  
      echo "<td>".$row->getRaza()."</td>";  
      echo "<td>".$row->getF_nacimiento()."</td>";
      echo "<td>".$row->getF_salida()."</td>";  
      echo "<td>".$row->getSexo()."</td>";  
      echo "<td>".$row->getF_nacimiento()."</td>";
      echo "<td>".$row->getF_reg()."</td>";  
      echo "<td>".$row->getId_corral()."</td>";      
      echo "</tr>";
    }
    ?>        
    <!-- Puedes agregar más filas aquí -->
  </tbody>
</table>


</body>
</html>