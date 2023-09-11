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
            
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_corral" class="sectionb-link"  > Registro de corrales</a>
                    <a class= "b2" href="/icepalWeb1/MVC/Reg_lechon" class="sectionb-link"  > Registro de lechones</a>
                    <a class= "b2" href="/icepalWeb1/MVC/Reg_madre" class="sectionb-link"  > Registro de madres</a>
                    <a class= "b2"  href="/icepalWeb1/MVC/Reg_cerdo" class="sectionb-link"  >  Registro de cerdos</a>
                    <a class= "b2" href="/icepalWeb1/MVC/Reg_parto" class="sectionb-link" > Registro de ficha parto</a>
                    <a class= "b2" href="/icepalWeb1/MVC/Reg_diag" class="sectionb-link">  diagnostico</a>
                    <a class= "b2" href="/icepalWeb1/MVC/Reg_med" class="sectionb-link"  > Registro medicamento</a>

            <h1></h1>
          </section>



  <div class="bg-primary bg-opacity-25 d-flex justify-content-center">
  <div class="bg-secondary  bg-opacity-25 p-5 border rounded">

  <form action="Create_cerdo" name="" method="POST">
  
            <div class="Tlechon mb-3 d-flex flex-column text-uppercase fw-bolder">
                <label for="">Registro de Madres </label>
                    
            </div> 

            <div class="Tlechon mb-3 fw-semibold">
                <label for="">Raza</label>
                      <input type="number" name="raza" id="name2" required  />
            </div> 

            <div class="Tlechon mb-3 fw-semibold">
                <label for="">fecha monta</label>
                      <input type="number" name="f_monta" id="name2" required  />
            </div> 

            <div class="Tlechon mb-3 fw-semibold">
                <label for="">fecha registro</label>
                      <input type="number" name="f_reg" id="name2" required  />
            </div> 

           
  <?php
        echo '<select name="CerdoId">';
        foreach($id_cerdo as $cerdo)
        {
            echo '<option value="'.$cerdo->getId().'">'.$cerdo->getId_cerdo().'</option>';
        }
        echo '</select>';
        
        ?>
  
  </form>
       
  
  <div class="d-grid gap-2 col-6 mx-auto">
         <button class="btn btn-primary" type="Button">volver</button>
  </div>
  

</body>
</html>