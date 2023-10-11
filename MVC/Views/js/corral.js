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
        var cod_corral = document.getElementById("cod_corral");
        var btnGuardar = document.getElementById("btnGuardar");
        var formularioValidado = true;
        var formularioCorral = document.getElementById("forumuarioCorral");
        var cod_corralMensajeError= document.getElementById("cod_corralError");
        btnGuardar.addEventListener('click', function(e) {
                e.preventDefault();
            var valorNombre = cod_corral.value;
                
                fetch('ajaxExiste?cod_corral=' + valorNombre, {
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
                        cod_corral.classList.add("is-invalid");
                        formularioValidado = false;
                        cod_corralMensajeError.innerText=response.respuesta;
                    }
                    else{
                        formularioValidado = true;
                        cod_corral.classList.remove("is-valid");
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