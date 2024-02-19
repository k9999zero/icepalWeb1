

<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
</head>
<body>
<form action=<?php echo BASE_URL."/empleadoEdit"; ?> method="POST" enctype="multipart/form-data">
  <!-- Campos del formulario -->
  <?php 
  $resultado = $data[0];
  $id = $resultado->getId();
  $nombre = $resultado->getNombre();
  $apellido = $resultado->getApellido();
  $ci = $resultado->getCi();
  $ingreso = $resultado->getIngreso();
  ?>
  <input type="hidden" name="Id" value=<?php echo $id;?>>
  <input type="text" name="Nombre" value=<?php echo $nombre; ?>>
  <input type="text" name="Apellido" value=<?php echo $apellido; ?>>
  <input type="text" name="Ci" value=<?php echo $ci; ?>>   
  <input type="text" name="Ingreso" value=<?php echo $ingreso; ?>>  
  
  <!-- Botón de envío del formulario -->
  <button type="submit">Enviar</button>
</form>
</body>
</html>