

<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
</head>
<body>
<form action="user" method="POST" enctype="multipart/form-data">
  <!-- Campos del formulario -->
  <form action="/icepalWeb1/MVC/UserCreate/create" method="POST" enctype="multipart/form-data">
    <div class="form-container">
        <form action="/action_page.php">
              <label for="fname">Nombre</label>
              <input type="text" id="fname" name="Nombre" placeholder="Nombre">
              <label for="lname">Apellido</label>
              <input type="text" id="lname" name="Apellido" placeholder="Apellido">
              <label for="lname">Email</label>
              <input type="text" id="lname" name="Email" placeholder="Email">
              <label for="lname">Password</label>
              <input type="text" id="lname" name="Password" placeholder="Password">
              <label for="lname">Imagen</label>
              <input type="file" name="Imagen">
              <button type="submit">Enviar</button>
        </form>
    </div>
</form>
  <!-- Botón de envío del formulario -->
</form>
</body>
</html>