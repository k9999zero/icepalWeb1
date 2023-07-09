
<!DOCTYPE html>
<html>
<head>
    <title>Título de la página</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
#site-header.fixed-hide {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    z-index: 9989;
    transition: background ease 0.3s;
    box-shadow: 0 0px 10px rgba(0, 0, 0, 0.1);
    background-color: rgba(29, 43, 55, 0.7);
}

     #main-nav {
    display: block;
    float: center;
}
#main-nav {
    display: block;
    float: right;
}
#main-nav ul {
    margin: 0;
}
#main-nav ul li {
    position: relative;
    list-style: none;
    padding-top: 0;
    padding-bottom: 0;
    float: left;
    margin: 0 17px;
    
}
#main-nav > ul > li{
    
    height: 100px;
    
}
#main-nav > ul > li > a {
    display: block;
    /*font-family: "Muli", sans-serif;*/
    font-weight: 100;
    letter-spacing: 0.25px;
    height: 10px;
    line-height: 100px;
    text-decoration: none;
    color: black;
}
#main-nav > ul > li > a:not([href]) {
    cursor: pointer;
}
.last-li {
    magin-left:150px;
}

img {
    width: 80px; /* Set the width to 200 pixels */
    height: auto; 
}
/* Logo */

#site-logo {
    float: left;
    max-width: 100%;
    transition: all ease 0.3s;
    margin: 0px 0px 0px 120px;
}

#site-logo-inner {    
    transition: all ease 0.3s;
}
/*form style*/
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.form-container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

    </style>
</head>
<body>

<header id="site-header" class="fixed-hide">
	
<div class="wrap-inner">
<div id="site-logo">
	<div id="site-logo-inner" style="max-width:300px;">
					<a href="https://aicollaborator.com/" title="AI Collaborator" rel="home" class="main-logo"><img src="logo.jpg" alt="AI Collaborator"></a>
			</div>
</div>

	<nav id="main-nav" class="main-nav">
		<ul>            
            <li ><a href="http:////localhost:8080/icepalWeb1/PrimerPhp/"><span>Productos</span></a></li>
            <li ><a href="http:////localhost:8080/icepalWeb1/PrimerPhp/"><span>Registrar Nuevo Producto</span></a></li>
            <li ><a href="http:////localhost:8080/icepalWeb1/PrimerPhp/"><span>Listar Productos</span></a></li>
            <li ><a href="http:////localhost:8080/icepalWeb1/PrimerPhp/"><span>Realizar Venta</span></a></li>
            <li ><a href="http:////localhost:8080/icepalWeb1/PrimerPhp/"><span>Registrar Vendedores</span></a></li>
            <li ><a href="http:////localhost:8080/icepalWeb1/PrimerPhp/"><span>Opciones</span></a></li>
            <li class="last-li" ><a href="http:////localhost:8080/icepalWeb1/PrimerPhp/"><span>Perfil de Usuario</span></a></li>
        </ul>
</nav>
</div>
</header>
    
    <h1>Bienvenido</h1>
    <p>Este es un ejemplo de código HTML con bloques de PHP:</p>
    <?php 
    echo $data["test1"]; 
    echo "<br>";
    echo $data["test2"]; 
    

    ?>

    <p>Fin del ejemplo</p>


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

