!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="style/tablas.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body >

    <header>
        <div class="logo">
    <h1 class="titulo">Registro de maternidad porcina</h1>
        </div>
	 <a href="encargado.php" class="nav-link"><span> Rol encargado</span></a>
     <a href="veterinario.php" class="nav-link"><span> Rol veterinario</span></a>
     <h1></h1>
     
    </header>


  
<div class="bg-primary bg-opacity-25 d-flex justify-content-center">
  <div class="bg-secondary  bg-opacity-25 p-5 border rounded">
  <form action="../database/BD_lechones.php" name="" method="POST">
  
  <div class="Tlechon mb-3 d-flex flex-column text-uppercase fw-bolder">
    <label for="">camada</label>
      <input type="number" name="id_camada" id="name2" required  />
    </div> 
  <div class="Tlechon mb-3 fw-semibold">
  <label for="">madre</label>
  <input type="number" name="id_madre" id="name2" required  />
  </div> 
  <div class="Tlechon mb-3">
  <label for="">medicacion</label>
  <input type="text" name="medicacion" id="name2" required  />
  </div> 
  <div class="Tlechon mb-3">
  <label for="">f_nacimiento</label>
  <input type="text" name="f_nacimiento" id="name2" required  />
  </div> 
  <div class="Tlechon mb-3">
      <label for="">f_salida</label>
      <input type="text" name="f_salida" id="name2" required  />
  </div> 
  <div class="Tlechon mb-3">
      <label for="">t_alimento</label>
      <input type="text" name="t_alimento" id="name2" required  />
  </div> 
 
          <div class="d-grid gap-2 col-6 mx-auto">
          <button class="btn btn-primary" type="submit">Guardar</button>
          </div>

<!-- <td align="center">
 <input
   type="submit"
   name="enviar"
   id="enviar"
   value="guardar"
 />
</td>
<td align="center">
 <input type="reset" name="borrar" id="borrar" value="Restablecer" />
</td> -->
</form>
  </div>
</div>
</body>
</html>