
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
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombres</th> 
      <th>Apellidos</th>
      <th>Email</th>
      <th>Edad</th>
      <th>Telefono</th>
      <th>Genero</th>
      <th>Estado</th>   
      <th>Opciones</th>   
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($data as $row)
    {
      echo '<tr class="fila-Cliente" data-id="'.$row->getId().'">';
      echo "<td>".$row->getId()."</td>";
      echo "<td>".$row->getNombre()."</td>";
      echo "<td>".$row->getApellido()."</td>";
      echo "<td>".$row->getEmail()."</td>";
      echo "<td>".$row->getEdad()."</td>";
      echo "<td>".$row->getTelefono()."</td>";
      echo "<td>".$row->getGenero()."</td>";
      echo "<td>".$row->getEstado()."</td>";  
      echo "<td><a href=\"".BASE_URL."/ClienteEdit/".$row->getId()."\">Editar</a>";   
      echo '<td><a class="eliminar-btn" href="#">Eliminar</a></td>'; 
      echo "</tr>";
    }
    ?>        
    <!-- Puedes agregar más filas aquí -->
  </tbody>
</table>


</body>
</html>

