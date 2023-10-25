<!DOCTYPE Html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        #miDiv {
            background:green;
            height:100px;
            width:100px;
            position:absolute;
        }
        .overlay {
            position:fixed;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background:rgba(0,0,0,0.5);
            opacity :0;
            transition: .5s ease;
            z-index:-1;
        }
        .overlay.active{
            opacity:1;
            z-index:2;
        }
        .jmodal {
            max-heigth: calc(100% - 100px);
            position:fixed;
            transform: translate(-50%,-50%);
            top:50%;
            left:50%;
            max-width: 500px;
            color:gray;
            background:Black;
            z-index: 3;
            visibility: hidden;
            box.shadow: 0 1px 3px rgba(0,0,0,0.15), 0 1px 2px rgba(0,0,0,0.5);
        }
        .jmodal.active{
            visibility: visible;
            opacity: 1;
            
        }
        .open-jmodal{
            display: inline-block;
            background:blue;
            border:1px solid transparent;
            color :white;
            padding:10px 20px;
            cursor: pointer:
        }
        .close-jmodal{
            position: absolute;
            top: 5px;
            right: 5px;
            display: inline-block;
            width: 25px;
            height: 25px;
            background: #c44a4a;
            COLOR: white;
            line-height: 25px;
            cursor: pointer;
            border-radius: 50%;
        }
        </style>
    </head>
    <body>
        
        <h1>hola</h1>
        <input id="miInput" type="text" value="" placeholder="PROBANDO">
        <button id="miBoton"> Probando CLick! </button>
        <button id="miBoton2"> Probando CLick! </button>

        <div id="miDiv"></div>
        <div class="overlay"></div>
        <div class="jmodal">
                <h2>Modal Window</h2>
                <p>Mi Mensaje de jmodal view.</p>
                <button class="close-jmodal"> X </button>
        </div>
        <button class="open-jmodal">Open Modal</button>
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
            var miDiv = $("#miDiv");
            var miBoton2 = $("#miBoton2");
            miBoton2.click(function(){
                miDiv.animate({
                    left: '250px',
                    opacity: '0.5',
                    height: '150px',
                    width: '150px'
                });
            });
            // aqui va logica jmodal
            console.log("hola");
            $(".open-jmodal").on("click",function(){
                $(".overlay, .jmodal").addClass("active");
                console.log("hola");
            });
            $(".close-jmodal").on("click",function(){
                $(".overlay, .jmodal").removeClass("active");
                console.log("hola");
            });
            $(document).keyup(function(e){
                if(e.key === "Escape"){
                    $(".overlay, .jmodal").removeClass("active");
                }
            });
            
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>