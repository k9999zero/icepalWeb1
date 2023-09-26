// fetch("http://localhost/IcepalWeb1/MVC/ajax",
//     {
//     method: 'GET',
//     headers: {
//         'Content-Type': 'application/json'        
//     }
//      }
//     ).then(response => response.json())
//     .then(data => {
//         console.log(data);
//     });

    document.addEventListener('DOMContentLoaded', function() {
        var filasEliminar = document.querySelectorAll('.fila-madre');
        
        filasEliminar.forEach(function(fila) {
            var btnEliminar = fila.querySelector('.eliminar-btn');
            var id_madre = fila.getAttribute('data-id');

            btnEliminar.addEventListener('click', function(e) {
                e.preventDefault();

                if (confirm('¿Estás seguro de que deseas eliminar este elemento?')) {
                    fetch('Madre/' + id_madre, {
                        method: 'DELETE',
                        headers: {
                            'Content-type': 'application/x-www-form-urlencoded'
                        }
                    })
                    .then(function(response) {
                        if (response.ok) {
                            // Realizar acciones después de eliminar (opcional)
                            fila.remove(); // Eliminar la fila de la tabla
                        } else {
                            // Manejar errores (opcional)
                            console.error('Error al eliminar el elemento', response.statusText);
                        }
                    })
                    .catch(function(error) {
                        // Manejar errores (opcional)
                        console.error('Error al eliminar el elemento', error);
                    });
                }
            });
        });
    });