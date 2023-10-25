<!DOCTYPE Html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        #miDiv {
            background:red;
            height:100px;
            width:100px;
            position:absolute;
        }
        .overlay {
            position: fixed;
            top:0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
            transition: .5s ease;
            opacity: 0;
        }
        .overlay.active{
            opacity: 1;
            z-index: 2;
        }
        .jmodal {
           max-height: calc(100% - 100px);
           position: fixed;
           top:50%;
           left: 50%;
           transform: translate(-50%, -50%);
           max-width: 500px;
           color: gray;
           background: blue;
           box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
           z-index: 3;
           visibility: hidden;
           transition: .5s ease;
           border-radius: 10px;
            
        }
        .jmodal.active {
            visibility: visible;
            opacity: 1;
        }
        .open {
            display: inline-block;
            background: yellow;
            border: 1px solid transparent;
            color:black;
            cursor: pointer;
        }
        .jmodal .close{
            margin-left: 5rem;
        }
        .jmodal h2 {
            font-weight: 400;
            padding: 1rem;
            border-bottom: 1px solid while;
        }
        .jmodal p {
            padding: 1rem;
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
        <div class="overlay"></div>
        <div class="jmodal">
            <h2>Mi jmodal con JQuery</h2>
            <p>Mi Mensaje de jmodal view.</p>
            <button class="close btn btn-success">Cerrar</button>
        </div>
        <button class="open">Abrir</button>
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
            //aqui va logica para jmodal
            $(".open").on("click",function() {
                $(".overlay, .jmodal").addClass("active");
            });
            $(".close").on("click",function() {
                $(".overlay, .jmodal").removeClass("active");
            });
            $(document).keyup(function(e){
                if(e.keyCode == 27)
                {
                    $(".overlay, .jmodal").removeClass("active");
                }
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>