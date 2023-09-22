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
        <h1>Registro de Vendedor</h1>
      </div>
    </div>
  <!-- Campos del formulario -->
    <div class="container">
        <form class="col-6" action="VendedorRegister" method="POST" enctype="multipart/form-data">
        <div class="mb-3 col-12">
            <label class="form-label" for="fname">Nuevo nombre :</label>
            <input class="miInput form-control" type="text" id="fname" name="nombre" placeholder="Coloca un Nombre">
            <label class="form-label" for="fname">Apellido :</label>
            <input class="miInput form-control" type="text" id="fname" name="apellido" placeholder="Coloca un Apellido ">
            <label class="form-label" for="fname">Genero :</label>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio1" name="genero" class="custom-control-input" value="Masculino">
              <label class="custom-control-label" for="customRadio1">Masculino</label>

              <input type="radio" id="customRadio2" name="genero" class="custom-control-input" value="Femenino">
              <label class="custom-control-label" for="customRadio2">Femenino</label>
            </div>
            <label class="form-label" for="fname">Nombre de usuario Usuario :</label>
            <?php
              echo '<select name="Id_USER">';
              foreach($users as $user)
              {
                echo '<option value="'.$user->getId().'">'.$user->getNombre().'</option>';
              }
              echo '</select>';
            ?>
            <label for="lname">Categoria a la que pertenece :</label>
              <div class"checkButtton">
                <?php
                  foreach($categorias as $categoria)
                  {
                    echo '<input type="checkbox" id="vehicle1" name="categorias[]" value="'.$categoria->getId().'">';
                    echo '<label for="vehicle1">'.$categoria->getNombre().'</label><br>';
                  }
                ?>
        </div>           
              <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>