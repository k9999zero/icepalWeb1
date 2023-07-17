
<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Views/styles/styles.css">

    <style>
    </style>
</head>
<body>

<header id="site-header" class="fixed-hide">
	
<div class="wrap-inner">
    <div id="site-logo">
	    <div id="site-logo-inner" style="max-width:300px;">
			<a href="https://aicollaborator.com/" title="AI Collaborator" rel="home" class="main-logo"><img src="logo1.jpg" alt="AI Collaborator"></a>
		</div>
</div>

	<nav id="main-nav" class="main-nav">
		<ul>            
            <li ><a href="http:////localhost/icepalWeb1/MVC/UserCreate/register"><span>Registro</span></a></li>
            <li ><a href="http:////localhost/icepalWeb1/MVC/"><span>Registrar Nuevo Producto</span></a></li>
            <li ><a href="http:////localhost/icepalWeb1/MVC/"><span>Listar Productos</span></a></li>
            <li ><a href="http:////localhost/icepalWeb1/MVC/"><span>Realizar Venta</span></a></li>
            <li ><a href="http:////localhost/icepalWeb1/MVC/"><span>Registrar Vendedores</span></a></li>
            <li ><a href="http:////localhost/icepalWeb1/MVC/"><span>Opciones</span></a></li>
            <li class="last-li" ><a href="http:////localhost/icepalWeb1/MVC/Users"><span>Usuarios registrados</span></a></li>
        </ul>
    </nav>
</div>
</header>
    
    <h1>Bienvenido</h1>


    <div class="form-container">
        <form action="/action_page.php">
            <label for="fname">Nombre</label>
            <input type="text" id="fname" name="nombre" placeholder="Nombre">

            <label for="lname">Apellido</label>
            <input type="text" id="lname" name="apellido" placeholder="Apellido">

            <label for="country">Eres</label>
            <select id="gender" name="Genero">
            <option value="masculino">Hombre</option>
            <option value="femenino">Mujer</option>           
            </select>
        
            <input type="submit" value="Submit">
        </form>
    </div>
    

</body>
</html>

