

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Título de la página</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
<form class="col-12"action="user" method="POST" enctype="multipart/form-data">
  <!-- Campos del formulario -->
  <div class="mb-3 col-9">
    <label class="form-label" for="nombre">Nombre</label>
    <input id="nombre" class="form-control" type="text" name="Nombre">
  </div>
  <div class="mb-3 col-9">
    <label class="form-label" for="apellido">Apellido</label>
    <input id="apellido" class="form-control" type="text" name="Apellido">
  </div>
  <div class="mb-3 col-9">
    <label class="form-label" for="email">Email</label>
    <input id="email" class="form-control" type="email" name="Email">
  </div>
  <div class="mb-3 col-9">
    <label class="form-label" for="password">Password</label>
    <input id="password" class="form-control" type="password" name="Password">
  </div>
  <div class="row mb-3 col-6">
  <div class="input-group">
    <input type="file" class="form-control" id="imagen" name="Imagen">
    <label class="input-group-text" for="imagen">Seleccionar archivo</label>
  </div>
  </div>
  
  <!-- Botón de envío del formulario -->
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>