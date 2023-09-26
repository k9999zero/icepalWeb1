
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
<div id = "main-container">
<table>
  <thead>
  <h1 class="h1"> Registro de corrales</h1>
    <tr class="tr">
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
      echo '<td><a class="eliminar-btn" href="#">Eliminar</a></td>';
      echo "</tr>";
    }
    ?>        
    <!-- Puedes agregar más filas aquí -->
  </tbody>
</table>
<div class="b4">
              <input type="button" value = "imprimir registro" onclick = "window.print()">
          </div>
          <div>
          <a class= "b4" href= "/icepalWeb1/MVC/Reg_parto" class="sectionb-linkb"  > atras</a>
          
          <a class= "b4" href= "/icepalWeb1/MVC/" class="sectionb-linkb"  > volver al inicio</a>
         
          </div>
          </div>

</body>
</html>