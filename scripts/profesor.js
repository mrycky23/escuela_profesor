// script.js


document.addEventListener('DOMContentLoaded', function() {

// Obtener el formulario por su ID
const formulario = document.getElementById('form_profesor');

// Agregar un event listener para el evento submit del formulario
formulario.addEventListener('submit', function(event) {
    // Prevenir el envío del formulario por defecto
    event.preventDefault();
    
    // Crear un objeto FormData para obtener los datos del formulario
    const formData = new FormData(formulario);
    
    // Crear una nueva instancia de XMLHttpRequest
    
    formData.append('nombre_profesor', nombre_profesor);
    formData.append('asignatura', asignatura);
    formData.append('horario', horario);
    formData.append('anio_ingreso', anio_ingreso); 
    const xhr = new XMLHttpRequest();
    // Especificar el método HTTP y la URL del controlador PHP
    xhr.open('POST', '../controllers/profesor.controllers.php');

    // Configurar la función de callback que se ejecutará cuando la solicitud AJAX se complete
    xhr.onload = function() {
        // Comprobar si la solicitud se ha completado correctamente (código de estado HTTP 200)
        if (xhr.status === 200) {
            // Manejar la respuesta del controlador PHP
            console.log(xhr.responseText);
            console.log("Script exitoso");
        } else {
            // Manejar errores en la solicitud
            console.error('Error en la solicitud AJAX');
        }
    };

    // Enviar la solicitud AJAX con los datos del formulario
    xhr.send(formData);
});

$(document).ready(function() {
    $('#mostrarProfesores').click(function() {
        $.ajax({
            url: '../controllers/profesor.controllers.php', // Ruta al controlador de profesores
            type: 'GET', // Tipo de solicitud HTTP
            data: { action: 'mostrarTodosLosProfesores' }, // Datos adicionales si es necesario
            success: function(response) {
                // Manejar la respuesta del servidor aquí
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Manejar errores de la solicitud aquí
                console.error("Error en la solicitud AJAX:", status);
            }
        });
    });
});

});

