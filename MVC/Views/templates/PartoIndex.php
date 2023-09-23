
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
      <th>Id Madre</th>
      <th>Id Parto</th>    
      <th>Fecha Parto</th>   
      <th>Vivos</th>
      <th>Muertos</th>    
      <th>Total de lechones nacidos</th>
      <th>Numero de parto</th>  
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($data as $row)
    {
      echo "<tr>";
      echo "<td>".$row->getId_madre()."</td>";
      echo "<td>".$row->getId_parto()."</td>";  
      echo "<td>".$row->getF_parto()."</td>";      
      echo "<td>".$row->getVivos()."</td>";
      echo "<td>".$row->getMuertos()."</td>";  
      echo "<td>".$row->getN_lechones()."</td>";  
      echo "<td>".$row->getN_parto()."</td>"; 
      echo "</tr>";
    }
    ?>        
    <!-- Puedes agregar más filas aquí -->
  </tbody>
</table>


</body>
</html>