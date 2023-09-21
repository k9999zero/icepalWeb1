<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/Views/styles/styles.css">  
  <title>Título de la página</title>
</head>
<body>
<form action="user" method="POST" enctype="multipart/form-data">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Registro de Usuario</h1>
      </div>
    </div>
  <!-- Campos del formulario -->
  <div class="form-container">
    <form action="/icepalWeb1/MVC/UserCreate/create" method="POST" enctype="multipart/form-data">
        <div class="mb-2 col-7">
          <label class="form-label" for="fname">Nombre :</label>
          <input class="miInput form-control" type="text" id="fname" name="Nombre" placeholder="Nombre de el uzuario">
          <label for="lname">Apellido :</label>
          <input class="miInput form-control" type="text" id="lname" name="Apellido" placeholder="Apellido">
          <label for="lname">Email :</label>
          <input class="miInput form-control" type="text" id="lname" name="Email" placeholder="Email">
          <label for="lname">Contraseña :</label>
          <input class="miInput form-control" type="text" id="lname" name="Password" placeholder="Contraseña">
          <label for="lname">Imagen para tu usuario:</label>
          <input type="file" name="Imagen">
            <button type="submit">Enviar</button>
        </div>
      </form>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>