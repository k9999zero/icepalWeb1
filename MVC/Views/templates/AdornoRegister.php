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
        <h1>Registro de Adorno</h1>
      </div>
    </div>
  <!-- Campos del formulario -->
    <div class="container">
        <form class="col-6" action="AdornoRegister" method="POST" enctype="multipart/form-data">
        <div class="mb-3 col-12">
            <label class="form-label" for="fname">Nombre_adorno</label>
            <input class="miInput form-control" type="text" id="fname" name="Nombre_adorno" placeholder="Nombre de el adorno">
            <label class="form-label" for="fname">Stock</label>
            <input class="miInput form-control" type="text" id="fname" name="Stock" placeholder="cantidad de stock">
            <lobel class="form-label" for="fname">Precio</lobel>
            <input class="miInput form-control" type="text" id="fname" name="Precio" placeholder="precio del producto">
            <label for="lname">Imagen del producto:</label>
              <input type="file" name="Imagen">
              <?php
              echo '<select name="Id_categoria">';
              foreach($categorias as $categoria)
              {
                echo '<option value="'.$categoria->getId().'">'.$categoria->getNombre().'</option>';
              }
              echo '</select>';
                ?>
        </div>           
              <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>