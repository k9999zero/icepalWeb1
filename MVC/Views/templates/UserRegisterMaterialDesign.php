

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Título de la página</title>
  <!-- Enlazar estilos de Material Design Lite alojados en Google -->
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <!-- Enlazar archivos JavaScript de Material Design Lite alojados en Google -->
  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <!-- Enlazar iconos de Material Design alojados en Google -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <style>
    /* Estilos personalizados para el input de tipo "file" */
    .custom-file-upload {
      display: inline-block;
      cursor: pointer;
      font-size: 14px;
      color: #3f51b5; /* Color primario de Material Design */
      border: 1px solid #3f51b5; /* Bordes de Material Design */
      padding: 10px 20px;
      border-radius: 4px;
      background-color: transparent;
    }

    .custom-file-upload:hover {
      background-color: #3f51b5; /* Color primario de Material Design */
      color: #ffffff; /* Texto en color blanco */
    }

    /* Ocultar el input de tipo "file" */
    input[type="file"] {
      display: none;
    }
    /* Estilos personalizados para centrar el contenido horizontalmente */
    .custom-container {
      max-width: 2000px; /* Ancho máximo del contenido */
      margin: 0 auto; /* Centrar el contenido horizontalmente */
      padding: 16px; /* Espacio de relleno alrededor del contenido */
    }
  </style>
</head>
<body>
<div class="custom-container">
<div class="mdl-grid">
<h3>Formulario con Material Design</h3>
    <form class="mdl-cell mdl-cell--12-col" action="user" method="POST" enctype="multipart/form-data">
        <!-- Campos del formulario -->        
        <div class="input-field mdl-cell mdl-cell--9-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" id="nombre" type="text" name="Nombre">
            <label  class="mdl-textfield__label" for="nombre">Nombre</label>
        </div>  

        <div class="input-field mdl-cell mdl-cell--9-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" id="apellido" type="text" name="Apellido">
            <label class="mdl-textfield__label" for="apellido">Apellido</label>
        </div>
        
        
        <div class="input-field mdl-cell mdl-cell--9-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input  class="mdl-textfield__input" id="email" type="email" name="Email">
            <label class="mdl-textfield__label" for="email">Email</label>
        </div>
        
        
        <div class="input-field mdl-cell mdl-cell--9-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input  class="mdl-textfield__input" id="password" type="password" name="Password">
            <label class="mdl-textfield__label" for="password">Password</label>
        </div>
        
        <div class="input-field mdl-cell mdl-cell--9-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <label class="custom-file-upload">
            <i class="material-icons">attach_file</i> Seleccionar archivo
            <input type="file" id="fileInput" name="fileInput" onchange="showFileName(this)">
          </label>
        </div>
        
            
        
        <!-- Botón de envío del formulario -->
        <div class="row">
                    <div class="input-field col s12">
                    <!-- Colored raised button -->
<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
  Button
</button>
                    </div>
        </div>
        
    </form>
</div>
</div>
<script>
    // Función para mostrar el nombre del archivo seleccionado en el botón personalizado
    function showFileName(input) {
      var fileName = input.files[0].name;
      var customUpload = document.querySelector(".custom-file-upload");
      var contenido = '<i class="material-icons">attach_file</i> Archivo seleccionado: '+ fileName +
            ' <input type="file" id="fileInput" name="fileInput" onchange="showFileName(this)">';
      customUpload.innerHTML = contenido;
    }
  </script>

</body>
</html>