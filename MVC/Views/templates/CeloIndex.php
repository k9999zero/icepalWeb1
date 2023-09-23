
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
      <th>Id Celo</th>    
      <th>Numero de celo</th>   
      <th>Fecha celo</th>
      <th>Fecha Registro</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($data as $row)
    {
      echo "<tr>";
      echo "<td>".$row->getId_madre()."</td>";
      echo "<td>".$row->getId_celo()."</td>";       
      echo "<td>".$row->getN_celo()."</td>"; 
      echo "<td>".$row->getF_celo()."</td>";
      echo "<td>".$row->getF_reg()."</td>";
      echo "</tr>";
    }
    ?>        
    <!-- Puedes agregar más filas aquí -->
  </tbody>
</table>


</body>
</html>