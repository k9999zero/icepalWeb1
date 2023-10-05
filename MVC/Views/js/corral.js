/*fetch("http://localhost:8080/icepalWeb1/MVC/ajax",
    {
    method: 'GET',
    headers: {
        'Content-Type': 'application/json'        
    }
     }
    ).then(response => response.json())
    .then(data => {
        console.log(data);
    });*/

    document.addEventListener('DOMContentLoaded', function() {
        var nombre = document.getElementById("cod1");
        var btnGuardar = document.getElementById("btnGuardar");
        var formularioValidado = true;
        var formularioCorral = document.getElementById("forumuarioCorral");
        var nombreMensajeError= document.getElementById("cod1Error");
        btnGuardar.addEventListener('click', function(e) {
                e.preventDefault();
            var valorNombre = cod1.value;
                
                fetch('ajaxExiste?cod1=' + valorNombre, {
                    method: 'GET',
                    headers: {
                        'Content-type': 'application/x-www-form-urlencoded'
                    }
                })
                .then(function(response) {
                    return response.json();
                }).then(function(response)
                {
                    console.log(response.respuesta);
                    if(!response.status)
                    {
                        cod1.classList.add("is-invalid");
                        formularioValidado = false;
                        cod1MensajeError.innerText=response.respuesta;
                    }
                    else{
                        formularioValidado = true;
                        cod1.classList.remove("is-valid");
                    }
                    if(formularioValidado)
                    {
                        formularioCorral.submit();
                    }
                })
                .catch(function(error) {
                    // Manejar errores (opcional)
                    console.error('Error al eliminar el elemento', error);
                });
                
            }); 
    });