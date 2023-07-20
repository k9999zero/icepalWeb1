

<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
</head>
<body>
<form action=<?php echo BASE_URL."/userEdit"; ?> method="POST" enctype="multipart/form-data">
  <!-- Campos del formulario -->
  <?php 
  $resultado = $data[0];
  $id = $resultado->getId();
  $nombre = $resultado->getNombre();
  $apellido = $resultado->getApellido();
  $email = $resultado->getEmail();
  ?>
  <input type="hidden" name="Id" value=<?php echo $id;?>>
  <input type="text" name="Nombre" value=<?php echo $nombre; ?>>
  <input type="text" name="Apellido" value=<?php echo $apellido; ?>>
  <input type="text" name="Email" value=<?php echo $email; ?>>   
  
  <!-- Botón de envío del formulario -->
  <button type="submit">Enviar</button>
  <button type="submit">Borrar</button>
</form>
</body>
</html>