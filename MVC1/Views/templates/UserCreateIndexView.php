
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
<header id="site-header" class="fixed-hide">
	
  <div class="wrap-inner">
  <div id="site-logo">
  </div>
    <nav id="main-nav" class="main-nav">
      <ul> 
         <li class="last-li" ><a href="http:////localhost/icepalWeb1/MVC"><span>home</span></a></li>
       </ul>
     </nav>
  </div>
</header>

<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Año_nacimiento</th>  
      <th>Ci</th>  
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($data as $row)
    {
      echo "<tr>";
      echo "<td>".$row->getNombre()."</td>";
      echo "<td>".$row->getApellido()."</td>";  
      echo "<td>".$row->getAño_nacimiento()."</td>";    
      echo "<td>".$row->getCi()."</td>";  
      echo "</tr>";
    }
    ?>        
    <!-- Puedes agregar más filas aquí -->
  </tbody>
</table>


</body>
</html>

