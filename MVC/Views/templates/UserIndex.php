
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
<nav id="main-nav" class="main-nav">
		<ul>            
            <li ><a href="http:////localhost/icepalWeb1/MVC/"><span>Home</span></a></li>
        </ul>
    </nav>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombres</th>    
      <th>Apellido</th>
      <th>Email</th>
      <th>Opciones</th>   
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($data as $row)
    {
      echo '<tr class="fila-user" data-id="'.$row->getId().'">';
      echo "<tr>";
      echo "<td>".$row->getId()."</td>";
      echo "<td>".$row->getNombre()."</td>";  
      echo "<td>".$row->getApellido()."</td>"; 
      echo "<td>".$row->getEmail()."</td>";
      echo "<td><a href=\"".BASE_URL."/userEdit/".$row->getId()."\">Editar</a>";   
      echo '<td><a class="eliminar-btn" href="#">Eliminar</a></td>'; 
      echo "</tr>";
    }
    ?>        
    <!-- Puedes agregar más filas aquí -->
  </tbody>
</table>


</body>
</html>

