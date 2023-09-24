
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
<h1 class="h1"> Registro de resetas medicas</h1>
    <tr class="tr">
      <th>Id Diagnostico</th>
      <th>Id Medicamento</th>    
      <th>Reseta medica</th>   
      <th>Fecha Registro</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($data as $row)
    {
      echo "<tr>";
      echo "<td>".$row->getId_diagnostico()."</td>";
      echo "<td>".$row->getId_medicamento()."</td>";       
      echo "<td>".$row->getMedicamento()."</td>"; 
      echo "<td>".$row->getF_reg()."</td>";
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
          <a class= "b4" href= "/icepalWeb1/MVC/Reg_med" class="sectionb-linkb"  > atras</a>
          
          <a class= "b4" href= "/icepalWeb1/MVC/" class="sectionb-linkb"  > volver al inicio</a>
         
          </div>
          </div>

</body>
</html>