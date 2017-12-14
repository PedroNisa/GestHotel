/**
 * Created by miran on 25/11/2017.
 */


//metodos personalizados para las validaciones especiales
jQuery.validator.addMethod("caracteresInvalidos",
    function(value, element) {
        return  /^[a-zA-Z\s]*$/.test(value);
    },
    "El caracter introducido no es válido"
);

jQuery.validator.addMethod("DNIvalido",
    function(value, element) {
        return  /^[0-9]{7,8}[A-Za-z]+$/.test(value);
    },
    "Introduzca un DNI válido"
);

jQuery.validator.addMethod("telefValido",
    function(value, element) {
        return  /^[9|6|7][0-9]{8}$/.test(value);
    },
    "Introduzca un número de teléfono válido"
);



//Validaciones para los formularios del Front

$(document).ready(function() {

    $("#reserva").validate({
        rules: {
            nombreCompleto: { required: true,
                minlength: 3,
                caracteresInvalidos:true},
            dni:{DNIvalido:true},
            email:{ required:true, email: true},
            id_tipo_habitacion: { required: true},
            descripcion:{caracteresInvalidos:true},
            asunto: { required: true},
            mensaje: { required: true}
        },
        messages: {
           nombreCompleto: {required:"Debe introducir su nombre y apellidos.",
                minlength:'debe contener al menos 3 caracteres'},
            email : "Debe introducir un email válido.",
            id_tipo_habitacion:"Debe seleccionar el tipo de habitación",
            asunto: "Es necesario que nos indique el motivo de su correo",
            mensaje: "Es necesario que nos indique el mensaje de su correo"
        }

    });
});
// valida el envio del formulario del front
$('#btn_reserva').on('click', function() { $("#reserva").valid(); });


//validaciones modal nuevo cliente
$(document).ready(function() {
    $("#new-client").validate({
        rules: {
            nombre: { required: true,
                minlength: 3,
                caracteresInvalidos:true},
            apellido1: { required: true,
                minlength: 3,
                caracteresInvalidos:true},
            apellido2: { required: true,
                minlength: 3,
                caracteresInvalidos:true},
            telefono:{required: true,telefValido:true},
            dni:{DNIvalido:true},
            email:{ required:true, email: true},

        },
        messages: {
            nombre: {required:"Debe introducir el nombre.",
                minlength:'debe contener al menos 3 caracteres'},
            apellido1: {required:"Debe introducir el primer apellido.",
                minlength:'debe contener al menos 3 caracteres'},
            apellido2: {required:"Debe introducir el segundo apellido.",
                minlength:'debe contener al menos 3 caracteres'},
            email : "Debe introducir un email válido.",

        },


    });
});
//valida el envio del formulario
$('#guardar-cliente').on('click', function() { $("#new-client").valid(); });
