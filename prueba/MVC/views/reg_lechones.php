<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="style/tablas.css">
  
</head>
<body>

    <header>
        <div class="logo">
    <h1 class="titulo">Registro de maternidad porcina</h1>
        </div>
	 <a href="encargado.php" class="nav-link"><span> Rol encargado</span></a>
     <a href="veterinario.php" class="nav-link"><span> Rol veterinario</span></a>
     <h1></h1>
     
    </header>


  
    <form action="../database/BD_lechones.php" name="" method="POST">
     <table class="Tlechon">
     <tr>
        <th class = "th2" colspan="6">Formulario de registro para lechones</th>
      </tr>
        <tr class="Tlechon">
            <th class="Tlechon">id_camada</th>
            <th class="Tlechon">id_madre</th>
            <th class="Tlechon">medicamento_admininistrado</th>
            <th class="Tlechon">fecha_nacimiento</th>
            <th class="Tlechon">fecha_salida</th>
            <th class="Tlechon">tipo_alimento</th>
        </tr>

        <tr class="Tlechon">

            <th class="Tlechon">
            <input type="text" name="id_camada" id="name2" required  />
            </th> 
            <th class="Tlechon">
            <input type="text" name="id_madre" id="name2" required  />
            </th> 
            <th class="Tlechon">
            <input type="text" name="medicacion" id="name2" required  />
            </th> 
            <th class="Tlechon">
            <input type="text" name="f_nacimiento" id="name2" required  />
            </th> 
            <th class="Tlechon">
            <input type="text" name="f_salida" id="name2" required  />
            </th> 
            <th class="Tlechon">
            <input type="text" name="t_alimento" id="name2" required  />
            </th> 
       </tr>

       <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
       </tr>
       <tr>
         <td align="center">
           <input
             type="submit"
             name="enviar"
             id="enviar"
             value="guardar"
           />
         </td>
         <td align="center">
           <input type="reset" name="borrar" id="borrar" value="Restablecer" />
         </td>
       </tr>
     </table>
</form>
</body>
</html>