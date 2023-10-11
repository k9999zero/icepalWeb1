

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
<div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Registro de Categorias</h1>
      </div>
    </div>
  <!-- Campos del formulario -->
  <script src="<?php echo BASE_URL; ?>/Views/js/PrimerJavascript.js"></script>
<div class="container">
  <form id="forumuarioCategoria" class="col-12" action="categoriaCreate" method="POST" enctype="multipart/form-data">
    <!-- Campos del formulario -->
    <div class="mb-3 col-9">
    <label class="form-label" for="nombre">Nombre Categoria</label>
      <input id="nombre" class="form-control" type="text" name="Nombre">
      <div class="invalid-feedback" id="nombreError">
        test
    </div>    
    <!-- Botón de envío del formulario -->
    <button id="btnGuardar"  type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>