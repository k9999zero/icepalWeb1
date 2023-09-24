
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
<h1 class="h1"> Registro de cerdos</h1>
  <thead>
    <tr  class="tr">
      <th>Id Corral</th>
      <th>Id Cerdo</th>    
      <th>Peso del cerdo</th> 
      <th>Raza</th>
      <th>Fecha de nacimiento</th>    
      <th>Fecha de despacho o salida</th>
      <th>Sexo</th>    
      <th>Fecha de registro</th>  
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($data as $row)
    {
      echo "<tr>";
      echo "<td>".$row->getId_corral()."</td>";   
      echo "<td>".$row->getId_cerdo()."</td>";
      echo "<td>".$row->getPeso_cerdo()."</td>";  
      echo "<td>".$row->getRaza()."</td>";  
      echo "<td>".$row->getF_nacimiento()."</td>";
      echo "<td>".$row->getF_salida()."</td>";  
      echo "<td>".$row->getSexo()."</td>";  
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
          <a class= "b4" href= "/icepalWeb1/MVC/Reg_cerdo" class="sectionb-linkb"  > atras</a>
          
          <a class= "b4" href= "/icepalWeb1/MVC/" class="sectionb-linkb"  > volver al inicio</a>
         
          </div>
          </div>
</body>
</html>