/*document.addEventListener('DOMContentLoaded', function() {
    console.log("test");
  });*/
  console.log("test2");
document.addEventListener('DOMContentLoaded', MiFuncion);

function MiFuncion() {
    var nombre = document.getElementById("nombre");
    var btnGuardar = document.getElementById("btnGuardar");
    var formularioValidado = true;
    var formularioCategoria = document.getElementById("forumuarioCategoria");
    var nombreMensajeError= document.getElementById("nombreError");
    btnGuardar.addEventListener('click', function(e) {
        e.preventDefault();
        var valorNombre = nombre.value;
        fetch('ajaxExiste?nombre=' + valorNombre, {
            method: 'GET',
            headers: {
                'Content-type': 'application/x-www-form-urlencoded'
            }
        }).then(function(response) {
            return response.json();
        }).then(function(response)
        {
            console.log(response.respuesta);
            if(!response.status)
            {
                nombre.classList.add("is-invalid");
                formularioValidado = false;
                nombreMensajeError.innerText=response.respuesta;
            }
            else{
                formularioValidado = true;
                nombre.classList.remove("is-valid");
            }
            if(formularioValidado)
            {
                formularioCategoria.submit();
            }
        })
        console.log("Me tocaste!!");
    }); 
}
