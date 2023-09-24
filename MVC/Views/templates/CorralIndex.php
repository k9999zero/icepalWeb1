
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
      echo "<td>".$row->getId_corral()."</td>";
      echo "<td>".$row->getCod_corral()."</td>";  
      echo "<td>".$row->getCod_pocilga()."</td>";      
      echo "</tr>";
    }
    ?>        
    <!-- Puedes agregar más filas aquí -->
  </tbody>
</table>
</div>
<div class="b4">
              <input type="button" value = "imprimir registro" onclick = "window.print()">
          </div>
          <div>
          <a class= "b4" href= "/icepalWeb1/MVC/Reg_corral" class="sectionb-linkb"  > atras</a>
          
          <a class= "b4" href= "/icepalWeb1/MVC/" class="sectionb-linkb"  > volver al inicio</a>
         
          </div>
</body>
</html>