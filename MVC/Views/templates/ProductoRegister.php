

<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
</head>
<body>
<form action="/icepalWeb1/MVC/producto/create" method="POST" enctype="multipart/form-data">
  <!-- Campos del formulario -->
  <form action="/icepalWeb1/MVC/UserCreate/create" method="POST" enctype="multipart/form-data">
    <div class="form-container">
        <form action="/action_page.php">
              <label for="fname">Nombre</label>
              <input type="text" id="fname" name="Nombre" placeholder="Nombre">
              <label for="lname">Apellido</label>
              <input type="text" id="lname" name="Apellido" placeholder="Descriccion">
        </form>
    </div>
</form>
  <!-- Botón de envío del formulario -->
  <button type="submit">Enviar</button>
</form>
</body>
</html>