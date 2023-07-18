

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
    </div>
      <nav id="main-nav" class="main-nav">
        <ul> 
        <li class="last-li" ><a href="http:////localhost/icepalWeb1/MVC"><span>home</span></a></li>
          <li class="last-li" ><a href="http:////localhost/icepalWeb1/MVC/Users"><span>Usuarios registrado</span></a></li>
        </ul>
      </nav>
    </div>
  </header>


<form action="/icepalWeb1/MVC/UserCreate/create" method="POST" enctype="multipart/form-data">
    <div class="form-container">
        <form action="/action_page.php">
              <label for="fname">Nombre</label>
              <input type="text" id="fname" name="Nombre" placeholder="Nombre">
              <label for="lname">Apellido</label>
              <input type="text" id="lname" name="Apellido" placeholder="Apellido">
              <label for="lname">Ci</label>
              <input type="text" id="lname" name="Ci" placeholder="Ci">
              <label for="lname">Año</label>
              <input type="text" id="lname" name="Anio" placeholder="Año"> 
              <label for="lname">Password</label>
              <input type="text" id="lname" name="Password" placeholder="Password">
              <button type="submit">Enviar</button>
        </form>
    </div>
</form>
</body>
</html>