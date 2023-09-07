<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
</head>
<body>
<form action=<?php echo BASE_URL."/AdornoEdit"; ?> method="POST" enctype="multipart/form-data">
  <!-- Campos del formulario -->
  <?php 
  $resultado = $data[0];
  $id = $resultado->getId();
  $nombre_adorno = $resultado->getNombre_adorno();
  $stock = $resultado->getStock();
  $precio = $resultado->getPrecio();
  ?>
  <input type="hidden" name="Id" value=<?php echo $id;?>>
  <input type="text" name="Nombre_adorno" value=<?php echo $nombre_adorno; ?>>
  <input type="text" name="Stock" value=<?php echo $stock; ?>>
  <input type="text" name="Precio" value=<?php echo $precio; ?>>   
  
  <!-- Botón de envío del formulario -->
  <button type="submit">Enviar</button>
</form>
</body>
</html>