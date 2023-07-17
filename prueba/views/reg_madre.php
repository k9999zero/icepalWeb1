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
    <form action="BD_madres.php" name="" method="POST">
     <table class="Tlechon">
        <tr class="Tlechon">
            <!--<th class="Tlechon">id_madre</th>-->
            <th class="Tlechon">fecha_monta</th>
            <th class="Tlechon">fecha_parto</th>
            <th class="Tlechon">numero_parto</th>
            <th class="Tlechon">numero_lechones</th>
            <th class="Tlechon">vivos</th>
            <th class="Tlechon">muertos</th>
            <th class="Tlechon">peso_camada</th>
            <th class="Tlechon">fecha_celo</th>
            <th class="Tlechon">tipo_alimento</th>
            <th class="Tlechon">vacuna</th>
        </tr>
        <tr class="Tlechon">
            
             <th class="Tlechon">
             <input type="text" name="f_monta" id="name1" required  />
             </th> 
             <th class="Tlechon">
             <input type="text" name="f_parto" id="name2" required  />
             </th> 
             <th class="Tlechon">
             <input type="text" name="n_parto" id="name3" required  />
             </th> 
             <th class="Tlechon">
             <input type="text" name="n_lechones" id="name4" required  />
             </th> 
             <th class="Tlechon">
             <input type="text" name="vivos" id="name5" required  />
             </th> 
             <th class="Tlechon">
             <input type="text" name="muertos" id="name6" required  />
             </th> 
             <th class="Tlechon">
             <input type="text" name="peso_camada" id="name7" required  />
             </th> 
             <th class="Tlechon">
             <input type="text" name="f_celo" id="name8" required  />
             </th> 
             <th class="Tlechon">
             <input type="text" name="tipo_alimento" id="name9" required  />
             </th> 
             <th class="Tlechon">
             <input type="text" name="vacuna" id="name10" required  />
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