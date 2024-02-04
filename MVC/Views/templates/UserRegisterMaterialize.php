

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Cargar estylos de materialize para CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Carga de javascript para materialize -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Título de la página</title>
</head>
<body>
<div class="container">
<h3>Formulario De Inscripcion</h3>

    <form class="col s12" action="user" method="POST" enctype="multipart/form-data">
        <!-- Campos del formulario -->
        <div class="row">
            <div class="input-field col s9">

            <input type="text" name="Nombre">
                <label for="nombre">Nombre</label>

            </div>
        </div>

        <div class="row">

            <div class="input-field col s9">

                <input id="instrumento" type="text" name="Instrumento">
                <label for="instrumento">instrumento</label>

            </div>

        </div>

         <div class="row">

                <div class="input-field col s9">

                    <input id="hora" type="text" name="Hora">
                    <label for="hora">hora</label>

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