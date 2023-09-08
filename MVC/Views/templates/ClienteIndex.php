
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
      <th>Id_user</th>
      <th>Nongre de cliente</th>
      <th>Imagen</th>  
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($data as $row)
    {
      echo "<tr>";
      echo "<td>".$row->getid_user()."</td>";
      echo "<td>".$row->getNameUsers()."</td>";
      echo "<img>".$row->getUrlImagen()."</td>";
      echo "<td><a href=\"".BASE_URL."/AdornoEdit/".$row->getId()."\">Editar</a>";   
      echo '<td><a class="eliminar-btn" href="#">Eliminar</a></td>'; 
      echo "</tr>";
    }
    ?>        
    <!-- Puedes agregar más filas aquí -->
  </tbody>
</table>


</body>
</html>

