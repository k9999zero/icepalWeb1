

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
  $instrumento = $resultado->getInstrumento();
  $hora = $resultado->getHora();
  ?>
  <input type="hidden" name="Id" value=<?php echo $id;?>>
  <input type="text" name="Nombre" value=<?php echo $nombre; ?>>
  <input type="text" name="Instrumento" value=<?php echo $instrumento; ?>>
  <input type="text" name="Hora" value=<?php echo $hora; ?>>   

  
  <!-- Botón de envío del formulario -->
  <button type="submit">Enviar</button>
  <div>

</div>

  <a class="nav-link" href="/icepalWeb1/MVC/user">Volver</a>
</form>
</body>
</html>