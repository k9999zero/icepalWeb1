

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Título de la página</title>
</head>

<body>

<h1 style="color: #192327;">Empleado </h1>
<form class="col-6" action="create" method="POST" enctype="multipart/form-data">
        <div class="mb-3 col-12">
            <label class="form-label" for="fname">Nombre</label>
            <input class="miInput form-control" type="text" id="fname" name="Nombre" placeholder="Nombre">
            <br>
            <label class="form-label" for="fname">Apellido</label>
            <input class="miInput form-control" type="text" id="fname" name="Apellido" placeholder="Apellido">
            <br>
            <label class="form-label" for="fname">Ci</label>
            <input class="miInput form-control" type="text" id="fname" name="Ci" placeholder="Ci">
            <br>
            <label class="form-label" for="fname">Ingreso</label>
            <input class="miInput form-control" type="text" id="fname" name="Ingreso" placeholder="Ingreso">
            <br>

        </div>           
              <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
</body>
</html>