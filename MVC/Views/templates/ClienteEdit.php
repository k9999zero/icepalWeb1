<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
</head>
<body>
<form action=<?php echo BASE_URL."/clienteEdit"; ?> method="POST" enctype="multipart/form-data">
  <!-- Campos del formulario -->
  <?php 
  $resultado = $data[0];
  $id = $resultado->getId();
  $nameUser = $resultado->getNameUser();
  ?>
  <input type="hidden" name="Id" value=<?php echo $id;?>>
  <input type="text" name="NameUser" value=<?php echo $nombre; ?>>
  
  <!-- Botón de envío del formulario -->
  <button type="submit">Enviar</button>
</form>
</body>
</html>