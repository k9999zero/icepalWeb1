
<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
    
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/Views/styles/style.css">
    

    <style>
    </style>
</head>
<body>

<script src="<?php echo BASE_URL; ?>/Views/js/deletecorral.js"></script>
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
      echo '<tr class="fila-corral" data-id="'.$row->getId_corral().'">';
      
      echo "<td>".$row->getId_corral()."</td>";
      echo "<td>".$row->getCod_corral()."</td>";  
      echo "<td>".$row->getCod_pocilga()."</td>";    
      echo '<td> <a class="eliminar-btn" href=" # "> Eliminar</a></td>' ; 
      echo "</tr>";
    }
    ?>        
    <!-- Puedes agregar más filas aquí -->
  </tbody>
</table>
<div class = "div1">
                        <div class="boton2">
                              <div class="b4">
                                  <input type="button" value = "imprimir registro" onclick = "window.print()">
                              </div>
                       
                              <a class= "b4" href= "/icepalWeb1/MVC/Reg_corral" class="sectionb-linkb"  > atras</a>

                              <a class= "b4" href= "/icepalWeb1/MVC/Encargado" class="sectionb-linkb"  > Ver registros</a>
                              
                              <a class= "b4" href= "/icepalWeb1/MVC/" class="sectionb-linkb"  > volver al inicio</a>
                        
                          </div>
                   </div>
</body>
</html>