
<!DOCTYPE html>
<html>
    <head>
        <title>Título de la página</title>    
            <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/Views/styles/styles.css">
            <script src="/Views/js/main.js"></script>
            <style>
            </style>
        </head>
    <body>

        <header id="site-header" class="fixed-hide">
            
            <div class="wrap-inner">
                <div id="site-logo">
                    <div id="site-logo-inner" style="max-width:300px;">
                        <img src="Imagenes/prueba/adorno2.jpg" alt="AI Collaborator">
                    </div>
            </div>

                <nav id="main-nav" class="main-nav">
                    <ul>            
                        <li ><a href="http:////localhost/icepalWeb1/MVC/userRegister"><span>Registro</span></a></li>
                        <li ><a href="http:////localhost/icepalWeb1/MVC/clienteRegister"><span>Registrar Clientes</span></a></li>
                        <li ><a href="http:////localhost/icepalWeb1/MVC/VendedorRegister"><span>Registrar Vendedores</span></a></li>
                        <li ><a href="http:////localhost/icepalWeb1/MVC/AdornoRegister"><span>Registrar Nuevo Producto</span></a></li>
                        <li ><a href="http:////localhost/icepalWeb1/MVC/Adorno"><span>Listar Productos</span></a></li>
                        <li ><a href="http:////localhost/icepalWeb1/MVC/"><span>Realizar Venta</span></a></li>
                        <li ><a href="http:////localhost/icepalWeb1/MVC/"><span>Opciones</span></a></li>
                        <li class="last-li" ><a href="http:////localhost/icepalWeb1/MVC/cliente"><span>Usuarios registrados</span></a></li>
                    </ul>
                </nav>
            </div>
        </header>
            <h1></h1>
        <nav class="nav">
            <ul class="list">
                <li class="list__item listen__item--click">
                    <div class="list__ button list__button--click">
                        <a herf="#" class="list__link">Registros</a>
                        
                    </div>
                
                    <ul class="list__show">
                        <li class="list_inside">
                            <a href="http:////localhost/icepalWeb1/MVC/userRegister" class="nav__link nav__link--inside"><span>Registro</span></a>
                        </li>
                        <li class="list_inside">
                            <a href="http:////localhost/icepalWeb1/MVC/clienteRegister"><span>Registrar Clientes</span></a>
                        </li>
                        <li class="list_inside">
                            <a href="http:////localhost/icepalWeb1/MVC/VendedorRegister"><span>Registrar Vendedores</span></a>
                        </li>
                        <li class="list_inside">
                            <a href="http:////localhost/icepalWeb1/MVC/AdornoRegister"><span>Registrar Nuevo Producto</span></a>
                        </li>
                    </ul>
                </li>
                    <li class="list__item">
                        <div class="list__ button list__button--click">
                            <a herf="#" class="list__link">Productos</a>
                        </div>
                     
                        <ul class="list__show">
                            <li class="list_inside">
                                <a href="http:////localhost/icepalWeb1/MVC/Adorno"><span>Lista de productos</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="list__item">
                        <div class="list__ button list__button--click">
                            <a herf="#" class="list__link">Ventas</a>
                        </div>
                
                        <ul class="list__show">
                            <li class="list_inside">
                                <a href="http:////localhost/icepalWeb1/MVC/"><span>Realizar Venta</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="list__item listen__item--click">
                        <div class="list__ button list__button--click">
                            <a herf="#" class="list__link">Usuarios</a>
                        </div>
                    
                        <ul class="list__show">
                            <li class="list_inside">
                                <a href="http:////localhost/icepalWeb1/MVC/cliente"><span>Usuarios registrados</span></a>
                            </li>
                            <li class="list_inside">
                                <a href="http:////localhost/icepalWeb1/MVC/Vendedor"><span>Vendedores registrados</span></a>
                            </li>
                            <li class="list_inside">
                                <a href="http:////localhost/icepalWeb1/MVC/user"><span>Administradores registrados</span></a>
                            </li>
                        </ul>
                    </li>

            </ul>
        </nav>
    </body>
</html>
