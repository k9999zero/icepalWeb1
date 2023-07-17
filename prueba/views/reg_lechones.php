<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="tablas.css">
</head>
<body>

    <header>
        <div class="logo">
    <h1 class="titulo">Registro de maternidad porcina</h1>
        </div>
	 <a href="encargado.php" class="nav-link"><span> Rol encargado</span></a>
     <a href="veterinario.php" class="nav-link"><span> Rol veterinario</span></a>
     <h1></h1>
     <img src="logo4.avif" alt="cerdo" style="width: 200px; height: 200px; border-radius: 500px;">
    </header>


    <h1>Formulario de registro para madres</h1>
    <form action="BD_lechones.php" name="" method="POST">
     <table class="Tlechon">
        <tr class="Tlechon">

            <th class="Tlechon">medicamento_admininistrado</th>
            <th class="Tlechon">fecha_nacimiento</th>
            <th class="Tlechon">fecha_salida</th>
            <th class="Tlechon">tipo_alimento</th>
        </tr>

        <tr class="Tlechon">
            
            <th class="Tlechon">
            <input type="text" name="medicacion" id="id1" required  />
            </th> 
            <th class="Tlechon">
            <input type="text" name="f_nacimiento" id="id2" required  />
            </th> 
            <th class="Tlechon">
            <input type="text" name="f_salida" id="id3" required  />
            </th> 
            <th class="Tlechon">
            <input type="text" name="t_alimento" id="id4" required  />
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
             value="Registrarse"
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