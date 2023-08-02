

<!DOCTYPE html>
<html>
<head>
  <!-- Cargar estylos de materialize para CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Carga de javascript para materialize -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Título de la página</title>
</head>
<body>
<div class="container">
<h3>Formulario con Materialize</h3>
    <form class="col s12" action="user" method="POST" enctype="multipart/form-data">
        <!-- Campos del formulario -->
        <div class="row">
            <div class="input-field col s9">
                <input id="nombre" type="text" name="Nombre">
                <label for="nombre">Nombre</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s9">
                <input id="apellido" type="text" name="Apellido">
                <label for="apellido">Apellido</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s9">
                <input id="email" type="email" name="Email">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s9">
                <input id="password" type="password" name="Password">
                <label for="password">Password</label>
            </div>
        </div>
        <div class="row">
            <div class="file-field input-field col s9">
                <div class="btn">
                    <span>Seleccionar archivo</span>
                    <input type="file" name="Imagen">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
            
        </div>
        <!-- Botón de envío del formulario -->
        <div class="row">
                    <div class="input-field col s12">
                        <button class="btn waves-effect waves-light" type="submit">Enviar
                        </button>
                    </div>
        </div>
        
    </form>
</div>

</body>
</html>