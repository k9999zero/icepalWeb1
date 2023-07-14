<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    
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
    <form method="post">
    	<h1>¡tu tia!</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>