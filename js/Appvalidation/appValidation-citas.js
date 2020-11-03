$(document).ready(function(){
	
    $( "#Fecha" ).datepicker();


    $("#formulario").validate({
        rules: {
            Nombre: {
                required: true
            },
            Apellido: {
                required: true
            },
            Seleccion: {
                required: true
            },
            Fecha: {
                required: true,
                date: true
            },
            Telefono: {
                requited: true,
                number: true
            },
            Seleccion2: {
                required: true
            },
            Numero: "required",
            Numero2: {
                required: true,
                equalTo: "#Numero"
            },
            Seleccion3: {
                required: true
            }
        },
        messages: {
            Nombre: {
                required: "*Campo Obligatorio"
            },
            Apellido: {
                required: "*Campo Obligatorio"
            },
            Seleccion: {
                required: "*Campo Obligatorio"
            },
            Fecha: {
                required: "*Campo Obligatorio"
            },
            Telefono: {
                required: "*Campo Obligatorio",
                number: "El Campo debe ser Numerico"
            },
            Seleccion2: {
                required: "*Campo Obligatorio"
            },
            Numero: {
                required: "*Campo Obligatorio"
            },Numero2:{
                required: "*Campo Obligatorio",
                equalTo: "Numero Identificacion Diferente"
            }
        },
        submitHandler: function(form){
            console.log("True Validation...");
            alert("Todos los campos son correctos\nBienvenido a IPS CECEP");
        }
    });
    /*$("#formulario").validate({
        rules: {
            Codigo: {
                  required: true,
                  number: true
            },
            Mail: {
                  required: true,
                email:true,
            },
            password: "required",
            password_again: {
                  required: true,
                equalTo: "#password"
            }
          },
        messages:{
            Codigo: {
                required: "Dato obligatorio",
                number: "Solo datos numericos"
            },
            Mail: {
                required: "Dato obligatorio",
                email: "Formato de correo"
            },
            password: {
                required: "Dato obligatorio"
            },
            password_again: {
                required: "Dato obligatorio",
                equalTo: "Passwor Diferente"
            },
            
        },
        submitHandler: function(form) {
               alert("Pasaron todas las validaciones");
         }
    });*/
});