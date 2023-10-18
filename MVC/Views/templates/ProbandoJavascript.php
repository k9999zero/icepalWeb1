<!DOCTYPE Html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        #miDiv {
            background:red;
            height:100px;
            width:100px;
            position:absolute;
        }
        </style>
    </head>
    <body>
        <h1>hola</h1>
        <input id="miInput" type="text" value="" placeholder="PROBANDO">
        <button id="miBoton"> Probando CLick! </button>
        <button id="miBoton2"> Probando Animacion! </button>
        <div id="miDiv">
        </div>
        <script>
            var variable1 = 12;
            var variable1 = 18;
            variable1 = 100;
            let variable2 = 13;
            variable2 = 20;
            const variable3 = "hola mundo";                 
            var jhoselin = document.getElementById("miInput"); 
            var miBoton = document.getElementById("miBoton");
            var contador = 0;
            miBoton.addEventListener('click',miMetodo);
            function miMetodo()
            {
                contador ++;
                jhoselin.value = "Mi valor es "+ contador;
            }
            var miDiv = $('#miDiv'); //document.getElementById("miDiv"); 
            var miBoton2 = $('#miBoton2');
            miBoton2.click(function(){
                miDiv.animate({left: '250px'});  
            });

        </script>
    </body>
</html>