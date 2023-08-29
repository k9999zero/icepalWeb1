

<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
</head>
<body>
<form action="/icepalWeb1/MVC/comida/create" method="POST" enctype="multipart/form-data">
  <!-- Campos del formulario -->
  <input id="nombre" type="text" name="Nombre">
  <input type="text" name="Descripcion">  
  <?php
  echo '<select name="ComidaId">';
  foreach($categorias as $categoria)
  {
    echo '<option value="'.$categoria->getId().'">'.$categoria->getNombre().'</option>';
  }
  echo '</select>';
  ?>
  <!-- Botón de envío del formulario -->
  <button type="submit">Enviar</button>
</form>
</body>
</html>