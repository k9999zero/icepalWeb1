

<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
</head>
<body>
<form action=<?php echo BASE_URL."/ClienteEdit"; ?> method="POST" enctype="multipart/form-data">
  <!-- Campos del formulario -->
  <?php 
  $resultado = $data[0];
  $id = $resultado->getId();
  $nombre = $resultado->getNombre();
  $apellido = $resultado->getApellido();
  $email = $resultado->getEmail();
  $edad = $resultado->getEdad();
  $telefono = $resultado->getTelefono();
  $genero = $resultado->getGenero();
  $estado = $resultado->getEstado();
  ?>
  <input type="hidden" name="Id" value=<?php echo $id;?>>
  <input type="text" name="Nombre" value=<?php echo $nombre; ?>>
  <input type="text" name="Apellido" value=<?php echo $apellido; ?>>
  <input type="text" name="Email" value=<?php echo $email; ?>>
  <input type="text" name="Edad" value=<?php echo $edad; ?>>
  <input type="text" name="Telefono" value=<?php echo $telefono; ?>>
  <input type="text" name="Genero" value=<?php echo $genero; ?>>
  <input type="text" name="Estado" value=<?php echo $estado; ?>>   
  
  <!-- Botón de envío del formulario -->
  <button type="submit">Enviar</button>
</form>
</body>
</html>