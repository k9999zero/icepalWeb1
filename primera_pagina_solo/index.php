<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>|Pension</title>
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
            #main-nav{
                display: block;
                float: right;
            }
            #main-nav ul{
                margin: 0;
            }
            #main-nav ul li{
                position: relative;
                list-style: none;
                padding-top: 0;
                padding-bottom: 0;
                float: left;
                margin: 0.37px;
                height: 100px;
            }#main-nav > ul > li > a{
                display: block;
                foun-weigyh:100;
                letter-spacing: 0.25px;
                height: 10px;
                line-height:100px;
                text-decoration: none;
                color: black;
            }
            img{
                width: 800 px:
                height: auto;
            }
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
        <header id="site-hear" calss="fidex-hilde">
            <div calss="wrep-inner">
                <div id="site-logo">
                    <div id="site-logo-inner" stile="max-width:300px">
                        <a href="C:\xampp\htdocs\primera_pagina_solo"title="Ptimerform" rel="home" class="main-logo"><img src="logo.jpg" alt="PrimerForm"></a>
                    </div>
                </div>
            </div>

            <nav id="main-nav" class="main=nav">
                <ul>
                    <li><a href="C:\xampp\htdocs\primera_pagina_solo"></a><span>Menu</span></li>
                    <li><a href="C:\xampp\htdocs\primera_pagina_solo"></a><span>Registrarse</span></li>
                    <li><a href="C:\xampp\htdocs\primera_pagina_solo"></a><span>Loguearse</span></li>
                    <li><a href="C:\xampp\htdocs\primera_pagina_solo"></a><span>Realizar pedido</span></li>
                    <li><a href="C:\xampp\htdocs\primera_pagina_solo"></a><span>Reservaciones</span></li>
                    <li><a href="C:\xampp\htdocs\primera_pagina_solo"></a><span>Opciones</span></li>
                </ul>
            </nav>
        </header>
        <h1>Biembenidos</h1>
        <div class="form-container">
            <form action="/primera_pagina_solo/connector.php"nethod="POST">
                <label for="fname">Nombre</label>
                <input type="text" id="fname" name="Nombre" placeholder="Nombre">

                <label for="lname">Apellido</label>
                <input type="text" id="lname" name="Apellido" placeholder="Apellido">

                <label for="Genero">Eres</label>
                <select id="gender" name="Genero">
                <option value="masculino">Hombre</option>
                <option value="femenino">Mujer</option>           
                </select>
            
                <input type="submit" value="Submit">
            </form>
    </div>
        
    </body>
</html>
