<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
</head>
<body>
<form action=<?php echo BASE_URL."/clienteEdit"; ?> method="POST" enctype="multipart/form-data">
  <!-- Campos del formulario -->
  <?php 
  $resultado = $data;
  $id = $resultado->getId();
  $nameUsers = $resultado->getNameUsers();
  $urlImagen = $resultado->geturlImagen();
  ?>
  <input type="hidden" name="Id" value=<?php echo $id;?>>
  <input type="text" name="NameUsers" value=<?php echo $nameUsers; ?>>
  <input type="file" name="Imagen" id="Imagen">
  
  <!-- Botón de envío del formulario -->
  <button type="submit">Enviar</button>
</form>
</body>
</html>