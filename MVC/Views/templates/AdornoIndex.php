
<!DOCTYPE html>
<html>
<head>
<title>Título de la página</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/Views/styles/styles.css">    
    <style>
    </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Registro de Productos</h1>
      </div>
    </div>
<nav id="main-nav" class="main-nav">
		<ul>            
            <li ><a href="http:////localhost/icepalWeb1/MVC/"><span>Home</span></a></li>
        </ul>
    </nav>

<table>
  <thead>
    <tr>
      <th>Nombre Productos </th>
      <th>Cantidad </th>
      <th>precio </th>
      <th>id_categoria </th>   
      <th>Imagen </th>  
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($data as $row)
    {
      echo "<tr>";
      echo "<td>".$row->getNombre_adorno()."</td>";    
      echo "<td>".$row->getstock()."</td>";
      echo "<td>".$row->getprecio()."</td>";
      echo "<td>".$row->getid_categoria()."</td>";
      echo "<td><img src=\"".$row->getUrl_imagen()."\" width=\"100\" height=\"100\"></td>";
      echo "<td><a href=\"".BASE_URL."/AdornoEdit/".$row->getId()."\">Editar</a>";   
      echo '<td><a class=".eliminar-adorno-btn" href="#">Eliminar</a></td>'; 
      echo "</tr>";
    }
    ?>        
    <!-- Puedes agregar más filas aquí -->
  </tbody>
</table>


</body>
</html>

