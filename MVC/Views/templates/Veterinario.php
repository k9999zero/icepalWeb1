<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/styles.css">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/Views/styles/Main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/Views/styles/inicio.css">
      
    </head>
    <body>
        
        
    <section class="mt-5">

            <a class= "b" href="/icepalWeb1/MVC/Reg_corral" class="sectionb-link"  > Registro corral</a>
            <a class= "b" href="/icepalWeb1/MVC/Reg_lechon" class="sectionb-link"  > Registro de lechones</a>
            <a class= "b" href="/icepalWeb1/MVC/Reg_madre" class="sectionb-link"  > Registro de madres</a>
            <a class= "b"  href="/icepalWeb1/MVC/Reg_cerdo" class="sectionb-link"  >  Registro de cerdos</a>
            <a class= "b" href="/icepalWeb1/MVC/Reg_parto" class="sectionb-link" > Registro de ficha parto</a>
            <a class= "b" href="/icepalWeb1/MVC/Reg_diag" class="sectionb-link">  diagnostico</a>
            <a class= "b" href="/icepalWeb1/MVC/Reg_med" class="sectionb-link"  > Registro medicamento</a>
            

    <h1></h1>

    
  </section>
  <nav class="ocultarSeccionNav" id="nav">
        <!-- Tipo 1 -->
        <div class="header">

            <h2>Menu</h2>
            <img id="mostrarOcultarNav" src="<?php echo BASE_URL; ?>/Views/styles/IMG/IconoMenu.svg" alt="Icono de comedor" loading="lazy" width="200px"
                height="300px">
        </div>
        <!-- Tipo 2 -->
        <div class="seccionNav">
            <div class="visible">
                <img src="<?php echo BASE_URL; ?>/Views/styles/IMG/IconoHome.svg" alt="Icono Home" loading="lazy" width="200px" height="300px">
                <a class= "b2" href="/icepalWeb1/MVC/" class="sectionb-link"  > Inicio</a>
                <img src="<?php echo BASE_URL; ?>/Views/styles/IMG/IconoFlecha.svg" class="abajo" id="desplegar" alt="Icono Flecha" loading="lazy"
                    width="200px" height="300px">
            </div>
            <div class="oculto" id="oculto">
                <div class="blanco">
                    <h4>vistas en inicio</h4>

                    <a class= "b2" href="/icepalWeb1/MVC/Encargado" class="sectionb-link"><span> Rol encargado</span></a>
             <a class= "b2" href="/icepalWeb1/MVC/Veterinario" class="sectionb-link"><span> Rol veterinario</span></a>

                </div>
            </div>
        </div>

        <!-- Tipo 3 -->
        <div class="seccionNav" id="seccionNav">
            <div class="visible">
                <img src="<?php echo BASE_URL; ?>/Views/styles/IMG/IconoProductos.svg" alt="Icono de Productos" loading="lazy" width="200px" height="300px">
                <a class= "b2" href="/icepalWeb1/MVC/Reg_completo" class="sectionb-link"  > Vista de todos los registros</a>
                <img src="<?php echo BASE_URL; ?>/Views/styles/IMG/IconoFlecha.svg" class="abajo" id="desplegar" alt="Icono Flecha" loading="lazy"
                    width="200px" height="300px">

            </div>
            <div class="oculto" id="oculto">
                <div class="blanco">
                    <h4>Algunos registros</h4>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_corral" class="sectionb-link"  > Registro de corrales</a>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_lechon" class="sectionb-link"  > Registro de lechones</a>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_madre" class="sectionb-link"  > Registro de madres</a>
                    <a class= "b2"  href= "/icepalWeb1/MVC/Reg_cerdo" class="sectionb-link"  >  Registro de cerdos</a>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_parto" class="sectionb-link" > Registro de ficha parto</a>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_celo" class="sectionb-link"  > Registro de Celo</a>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_diagnostico" class="sectionb-link">  diagnostico</a>
                    <a class= "b2" href= "/icepalWeb1/MVC/Reg_med" class="sectionb-link"  > Registro medicamento</a>
                </div>
            </div>
        </div>
 <!--
        <div class="seccionNav" id="seccionNav">
            <div class="visible">
                <img src="<?php echo BASE_URL; ?>/Views/styles/IMG//IconoCLiente.svg" alt="Icono clientes" loading="lazy" width="200px" height="300px">
                <p>Cliente</p>
                <img src="<?php echo BASE_URL; ?>/Views/styles/IMG//IconoFlecha.svg" class="abajo" id="desplegar" alt="Icono flecha" loading="lazy"
                    width="200px" height="300px">

            </div>
            <div class="oculto" id="oculto">
                <div class="blanco">
                    <h4>Servicio al cliente</h4>
                    <p>Politicas de la compañia</p>
                    <p>Devoluciones</p>
                    <p>FAQ</p>
                </div>
            </div>
        </div>
        <div class="seccionNav" id="seccionNav">
            <div class="visible">
                <img src="<?php echo BASE_URL; ?>/Views/styles/IMG/IconoNosotros.svg" alt="Icono nosotros" loading="lazy" width="200px" height="300px">
                <p>Nosotros</p>
                <img src="<?php echo BASE_URL; ?>/Views/styles/IMG//IconoFlecha.svg" class="abajo" id="desplegar" alt="Icono flecha" loading="lazy"
                    width="200px" height="300px">

            </div>
            <div class="oculto" id="oculto">
                <div class="blanco">
                    <h4>Conocenos</h4>
                    <p>Nuestros Clientes</p>
                    <p>Nuestra Historia</p>
                    <p>Contacto</p>
                </div>
            </div>
        </div>
       
         Tipo 4
        <div class="seccionNav" id="seccionNav">
            <div class="visible">
                <img src="<?php echo BASE_URL; ?>/Views/styles/IMG//IconoRedesSociales.png" alt="Icono Redes sociales" loading="lazy" width="200px"
                    height="300px">
                <p>Redes Sociales</p>
                <img src="<?php echo BASE_URL; ?>/Views/styles/IMG//IconoFlecha.svg" class="abajo" id="desplegar" alt="Icono flecha" loading="lazy"
                    width="200px" height="300px">
            </div>
       
            <div class="oculto" id="oculto">
                <div class="blanco">

                    <h4>Contactanos por estos medios</h4>
                    <div class="RedesSociales">
                        <div>
                            <img src="img/IconoFacebook.png" alt="Facebook Icono">
                            <p>Facebook</p>
                        </div>
                       
                        <div>
                            <img src="img/IconoWhatsapp.png" alt="whattsap icono">
                            <p>whattsapp</p>
                        </div>
                        

                    </div>
                </div>
            </div>

        </div>
        -->
        <div class="seccionNav" id="seccionNav">
            <div class="darkMode">
                <img src="<?php echo BASE_URL; ?>/Views/styles/IMG//logo7.png" alt="Icono Dark mode" loading="lazy" width="200px" height="300px">
                <a class= "b2" href="/icepalWeb1/" class="sectionb-link">  Salir</a>
            </div>
        </div>
    </nav>     

    <article class="seccionProductos">
        <h2>Cuidados</h2>
        <div class="contenedorProductos">
            <div>
                <div class="seccionImagen">
                    <img src="<?php echo BASE_URL; ?>/Views/styles/IMG/alimentacion.png" alt="imagen de producto" loading="lazy" width="200px" height="300px">
                    <p>Click Para mas informacion</p>
                </div>
                <div class="texto">
                    <p class="nombreProducto">Guia de alimentacion porcina</p>
                    <p class="precio">$85<span>.00</span></p>
                </div>
            </div>

            <div>
                <div class="seccionImagen">
                    <img src="<?php echo BASE_URL; ?>/Views/styles/IMG/raza.png" alt="imagen de producto" loading="lazy" width="200px" height="300px">
                    <p>Click Para mas informacion</p>
                </div>
                <div class="texto">
                    <p class="nombreProducto">Razas de cerdos</p>
                    <p class="precio">$00<span>.00</span></p>
                </div>
            </div>

            <div>
                <div class="seccionImagen">
                    <img src="<?php echo BASE_URL; ?>/Views/styles/IMG/manejo.png" alt="imagen de producto" loading="lazy" width="200px" height="300px">
                    <p>Click Para mas informacion</p>
                </div>
                <div class="texto">
                    <p class="nombreProducto">Manejo de lechones</p>
                    <p class="precio">$850<span>.00</span></p>
                </div>
            </div>
            <div>
                <div class="seccionImagen">
                    <img src="<?php echo BASE_URL; ?>/Views/styles/IMG/registrados.png" alt="imagen de producto" loading="lazy" width="200px" height="300px">
                    <p>Click Para mas informacion</p>
                </div>
                <div class="texto">
                    <p class="nombreProducto">Vista de todos los registrados</p>
                    <p class="precio">$250<span>.00</span></p>
                </div>
            </div>
        </div>
    </article>

    <script src="<?php echo BASE_URL; ?>/Views/styles/app.js"></script>
                  
            
        </div>
    </body>
</html>