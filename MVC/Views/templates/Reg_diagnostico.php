<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="style/tablas.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/Views/styles/Main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/Views/styles/inicio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body >
<section class="mt-5">

                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_corral" class="sectionb-link"  > Registro de corrales</a>
            
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_lechon" class="sectionb-link"  > Registro de lechones</a>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_madre" class="sectionb-link"  > Registro de madres</a>
                    <a class= "b2"  href= "/icepalWeb1/MVC/Reg_cerdo" class="sectionb-link"  >  Registro de cerdos</a>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_parto" class="sectionb-link" > Registro de ficha parto</a>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_celo" class="sectionb-link"  > Registro de Celo</a>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_diagnostico" class="sectionb-link">  diagnostico</a>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_med" class="sectionb-link"  > Registro medicamento</a>

            <h1></h1>
          </section>

  <div class="bg-primary bg-opacity-25 d-flex justify-content-center">
  <nav class="ocultarSeccionNav" id="nav">
        <!-- Tipo 1 -->
        <div class="header">

            <h2>Menu</h2>
            <img id="mostrarOcultarNav" src="<?php echo BASE_URL; ?>/Views/styles/IMG/IconoMenu.svg" alt="Icono de comedor" loading="lazy" width="200px"
                height="300px">
        </div>
        <!-- Tipo 2 -->
        <div class="seccionNav">
            <div class="visible">
                <img src="<?php echo BASE_URL; ?>/Views/styles/IMG/IconoHome.svg" alt="Icono Home" loading="lazy" width="200px" height="300px">
                <a class= "b2" href="/icepalWeb1/MVC/" class="sectionb-link"  > Inicio</a>
                <img src="<?php echo BASE_URL; ?>/Views/styles/IMG/IconoFlecha.svg" class="abajo" id="desplegar" alt="Icono Flecha" loading="lazy"
                    width="200px" height="300px">
            </div>
            <div class="oculto" id="oculto">
                <div class="blanco">
                    <h4>vistas en inicio</h4>

                    <a class= "b2" href="/icepalWeb1/MVC/Encargado" class="sectionb-link"><span> Rol encargado</span></a>
             <a class= "b2" href="/icepalWeb1/MVC/Veterinario" class="sectionb-link"><span> Rol veterinario</span></a>

                </div>
            </div>
        </div>

        <!-- Tipo 3 -->
        <div class="seccionNav" id="seccionNav">
            <div class="visible">
                <img src="<?php echo BASE_URL; ?>/Views/styles/IMG/IconoProductos.svg" alt="Icono de Productos" loading="lazy" width="200px" height="300px">
                <a class= "b2" href="/icepalWeb1/MVC/Reg_completo" class="sectionb-link"  > Vista de todos los registros</a>
                <img src="<?php echo BASE_URL; ?>/Views/styles/IMG/IconoFlecha.svg" class="abajo" id="desplegar" alt="Icono Flecha" loading="lazy"
                    width="200px" height="300px">

            </div>
            <div class="oculto" id="oculto">
                <div class="blanco">
                    <h4>Algunos registros</h4>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_corral" class="sectionb-link"  > Registro de corrales</a>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_lechon" class="sectionb-link"  > Registro de lechones</a>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_madre" class="sectionb-link"  > Registro de madres</a>
                    <a class= "b2"  href= "/icepalWeb1/MVC/Reg_cerdo" class="sectionb-link"  >  Registro de cerdos</a>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_parto" class="sectionb-link" > Registro de ficha parto</a>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_celo" class="sectionb-link"  > Registro de Celo</a>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_diagnostico" class="sectionb-link">  diagnostico</a>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_med" class="sectionb-link"  > Registro medicamento</a>
                </div>
            </div>
        </div>
 
        <div class="seccionNav" id="seccionNav">
            <div class="darkMode">
                <img src="<?php echo BASE_URL; ?>/Views/styles/IMG//logo7.png" alt="Icono Dark mode" loading="lazy" width="200px" height="300px">
                <a class= "b2" href="/icepalWeb1/" class="sectionb-link">  Salir</a>
            </div>
        </div>
    </nav> 
    <script src="<?php echo BASE_URL; ?>/Views/styles/app.js"></script>
  <div class="bg-secondary  bg-opacity-25 p-5 border rounded">
    
  <form action="Create_diagnostico" name="" method="POST">
  
  <div class="Tlechon mb-3 d-flex flex-column text-uppercase fw-bolder">
      <label for="">Registro de diagnostico o enfermedades</label>
          
  </div> 

  <div class="Tlechon mb-3 fw-semibold">
      <label for="">Detalle de enfermedad</label>
            <input type="text" name="detalles" id="name2" required  />
  </div> 

  <div class="Tlechon mb-3 fw-semibold">
      <label for="">Fecha de registro</label>
            <input type="date" name="f_reg" id="name2" required  />
  </div> 

  <!-- <div class="Tlechon mb-3 fw-semibold">
                <label for="">corral al que pertenece el lechon</label>
                <?php
                            echo '<select name="id_corral">';
                            foreach($corrales as $corral)
                            {
                                echo '<option value="'.$corral->getId_corral().'">'.$corral->getcod_corral().'</option>';
                            }
                            echo '</select>';
                            
                   ?>
            </div>  

            <div class="Tlechon mb-3 fw-semibold">
                <label for="">Madre del lechon </label>
                <?php
                            echo '<select name="id_madre">';
                            foreach($madres as $madre)
                            {
                                echo '<option value="'.$madre->getId_madre().'">'.$madre->getId_madre().'</option>';
                                
                            }
                            echo '</select>';
                            
                   ?>
            </div>   -->

 
  <div class="d-grid gap-2 col-6 mx-auto">
         <button class="btn btn-primary" type="submit" id = "id1">Guardar</button>
  </div>

  </form>
       </div>
  </div>
  
  <div>
          <a class= "b4" href= "/icepalWeb1/MVC/Veterinario" class="sectionb-linkb"  > Atras</a>
          <a class= "b4" href= "/icepalWeb1/MVC/Diagnostico" class="sectionb-linkb"  > Ver registro</a>
          <a class= "b4" href= "/icepalWeb1/MVC/" class="sectionb-linkb"  > Volver al inicio</a>
         
          </div>
</body>
</html>