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
  $id_producto = $resultado->getId_producto();
  ?>
  <input type="hidden" name="Id" value=<?php echo $id;?>>
  <input type="text" name="Nombre" value=<?php echo $nombre; ?>>
  <input type="text" name="Apellido" value=<?php echo $apellido; ?>>
  <input type="text" name="Genero" value=<?php echo $genero; ?>>
  <swlep> <?php
              echo '<select name="Id_producto">';
              foreach($productos as $producto)
              {
                echo '<option value="'.$producto->getId().'">'.$producto->getId().'</option>';
              }
              echo '</select>';
            ?></swlep>
  
  <!-- Botón de envío del formulario -->
  <button type="submit">Enviar</button>
</form>
</body>
</html>