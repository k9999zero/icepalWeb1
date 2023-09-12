
<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Views/styles/styles.css">

    <style>
    </style>
</head>
<body>
<nav id="main-nav" class="main-nav">
		<ul>            
            <li ><a href="http:////localhost/icepalWeb1/MVC/"><span>Home</span></a></li>
        </ul>
    </nav>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Genero</th>
      <th>Id_user</th>
      <th>Id_categoria</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($data as $row)
    {
      echo "<tr>";
      echo "<td>". $row->getId(), "</td>";
      echo "<th>". $row->getNombre(), "</th>";
      echo "<th>". $row->getApellido(), "</th>";
      echo "<th>". $row->getGenero(), "</th>";
      echo "<td>".$row->getId_user()."</td>";
      echo "<td>".$row->getId_categoria()."</td>";
      //echo "<img>".$row->getUrlImagen()."</td>";
      //echo "<td><img src=\"".$row->getUrlImagen()."\"></td>";
      echo "<td><a href=\"".BASE_URL."/VendedorEdit/".$row->getId()."\">Editar</a>";   
      echo '<td><a class="eliminar-btn" href="#">Eliminar</a></td>'; 
      echo "</tr>";
    }
    ?>        
    <!-- Puedes agregar más filas aquí -->
  </tbody>
</table>


</body>
</html>

