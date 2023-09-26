
<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>

    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/Views/styles/style.css">
    

    <style>
    </style>
</head>
<body>
<script src="<?php echo BASE_URL; ?>/Views/js/deletemedicamento.js"></script>
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
      echo '<tr class="fila-medicamento" data-id="'.$row->getId_medicamento().'">';
      echo "<td>".$row->getId_diagnostico()."</td>";
             
      echo "<td>".$row->getMedicamento()."</td>"; 
      echo "<td>".$row->getF_reg()."</td>";
      echo '<td><a class="eliminar-btn" href="#">Eliminar</a></td>';
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
                       
                              <a class= "b4" href= "/icepalWeb1/MVC/Reg_medicamemto" class="sectionb-linkb"  > atras</a>

                              <a class= "b4" href= "/icepalWeb1/MVC/Encargado" class="sectionb-linkb"  > Ver registros</a>
                              
                              <a class= "b4" href= "/icepalWeb1/MVC/" class="sectionb-linkb"  > volver al inicio</a>
                        
                          </div>
                   </div>

</body>
</html>