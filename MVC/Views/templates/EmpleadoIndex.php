

        
<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/Views/styles/styles.css">    
    <style>
    </style>
</head>
<body>
<script src="<?php echo BASE_URL; ?>/Views/js/main.js"></script>
<table>
  <thead">
    <tr>
      <div >
      <th  >ID </th>
      <th  >Nombres</th>    
      <th >Apellido</th>    
      <th >Ci</th>
      <th >Ingreso</th>
      </div>
    </tr>
  </thead>
             
  <body>
    <?php
    foreach($data as $row)
    
    {
      echo '<tr class="fila-Empleado" data-id="'.$row->getId().'">'; 
      echo "<td>".$row->getId()."</td>";
      echo "<td>".$row->getNombre()."</td>";  
      echo "<td>".$row->getApellido()."</td>";  
      echo "<td>".$row->getCi()."</td>"; 
      echo "<td>".$row->getIngreso()."</td>"; 
      echo "<td><a href=\"".BASE_URL."/empleadoEdit/".$row->getId()."\">Editar</a>";   
      echo '<td><a class="eliminar-btn" href="#">Eliminar</a></td>'; 
      echo "</tr>";
      
      
    }
    ?>        
    <!-- Puedes agregar más filas aquí -->
  </tbody>
</table>


</body>
</html>

