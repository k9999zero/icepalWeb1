
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
<script src="<?php echo BASE_URL; ?>/Views/js/deletemadre.js"></script>
<div id = "main-container">
<table>
<thead>
<h1 class="h1"> Registro de madres</h1>
    <tr class="tr">
      <th>Id Corral</th>
      <th>Id Madre</th>    
      <th>Raza</th>   
      <th>Fecha monta</th>
      <th>Fecha registro</th> 
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($data as $row)
    {
      echo '<tr class="fila-madre" data-id="'.$row->getId_madre().'">';
      echo "<td>".$row->getId_corral()."</td>";
    
      echo "<td>".$row->getRaza()."</td>";  
      echo "<td>".$row->getF_monta()."</td>";    
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
                       
                              <a class= "b4" href= "/icepalWeb1/MVC/Reg_madre" class="sectionb-linkb"  > atras</a>

                              <a class= "b4" href= "/icepalWeb1/MVC/Encargado" class="sectionb-linkb"  > Ver registros</a>
                              
                              <a class= "b4" href= "/icepalWeb1/MVC/" class="sectionb-linkb"  > volver al inicio</a>
                        
                          </div>
                   </div>
</body>
</html>