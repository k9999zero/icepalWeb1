<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
</head>
<body>
<form action=<?php echo BASE_URL."/VendedorEdit"; ?> method="POST" enctype="multipart/form-data">
  <!-- Campos del formulario -->
  <?php 
  $resultado = $data;
  $id = $resultado->getId();
  $nombre = $resultado->getNombre();
  $apellido = $resultado->getApellido();
  $genero = $resultado->getGenero();
  $id_adorno = $resultado->getId_categoria();
  ?>
    <input type="hidden" name="Id" value=<?php echo $id;?>>
    <input type="text" name="Nombre" value=<?php echo $nombre; ?>>
    <input type="text" name="Apellido" value=<?php echo $apellido; ?>>
    <div class="custom-control custom-radio">
    <input type="radio" id="customRadio1" name="genero" class="custom-control-input" value="Masculino">
    <label class="custom-control-label" for="customRadio1">Masculino</label>
    <input type="radio" id="customRadio2" name="genero" class="custom-control-input" value="Femenino">
    <label class="custom-control-label" for="customRadio2">Femenino</label>
    </div>
              <button type="submit">Enviar</button>
</form>
</body>
</html>