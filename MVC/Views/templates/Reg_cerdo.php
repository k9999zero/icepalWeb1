<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="style/tablas.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/Views/styles/Main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body >
<section class="mt-5">
            
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_lechon" class="sectionb-link"  > Registro de lechones</a>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_madre" class="sectionb-link"  > Registro de madres</a>
                    <a class= "b2"  href= "/icepalWeb1/MVC/Reg_cerdo" class="sectionb-link"  >  Registro de cerdos</a>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_parto" class="sectionb-link" > Registro de ficha parto</a>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_diagnostico" class="sectionb-link">  diagnostico</a>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_med" class="sectionb-link"  > Registro medicamento</a>

            <h1></h1>
          </section>

  <div class="bg-primary bg-opacity-25 d-flex justify-content-center">
  <div class="bg-secondary  bg-opacity-25 p-5 border rounded">
    
  <form action="Create_cerdo" name="" method="POST">
  
          <div class="Tlechon mb-3 d-flex flex-column text-uppercase fw-bolder">
              <label for="">Registro de cerdos </label>
                  
          </div> 

          <div class="Tlechon mb-3 fw-semibold">
              <label for="">Peso cerdo</label>
                    <input type="number" name="peso_cerdo" id="name2" required  />
          </div> 

          <div class="Tlechon mb-3 fw-semibold">
              <label for="">fecha nacimiento</label>
                    <input type="number" name="f_nacimiento" id="name2" required  />
          </div> 

          <div class="Tlechon mb-3 fw-semibold">
              <label for="">fecha salida</label>
                    <input type="number" name="f_salida" id="name2" required  />
          </div> 

          <div class="Tlechon mb-3">
              <label for="">raza</label>
                    <input type="text" name="raza" id="name2" required  />
          </div> 

          
          <div class="Tlechon mb-3">
               <label for="">sexo</label>
                   <input type="text" name="sexo" id="name2" required  />
          </div> 
          <div class="Tlechon mb-3">
               <label for="">cod corral</label>
                   <input type="text" name="cod_corral" id="name2" required  />
          </div> 

          <div class="Tlechon mb-3">
               <label for="">fecha registro</label>
                   <input type="text" name="f_reg" id="name2" required  />
          </div> 
          <div class="d-grid gap-2 col-6 mx-auto">
                 <button class="btn btn-primary" type="submit" id = "id1">Guardar</button>
          </div>
          <?php
                echo '<select name="id_corral">';
                foreach($corrales as $corral)
                {
                    echo '<option value="'.$corral->getId_corral().'">'.$corral->getCod_corral().'</option>';
                }
                echo '</select>';
                
                ?>
          

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
          <div class="d-grid gap-2 col-6 mx-auto">
                 <button class="btn btn-primary" type="Button">volver</button>
          </div>
</body>
</html>