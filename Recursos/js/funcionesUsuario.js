function usuario() {
    $("#login-form").on('submit', function(e) {
        e.preventDefault();
        var datos = $(this).serialize();
        //console.log(datos)
        $.ajax({
            type: "post", //./Controlador/controladorUsuario.php
            url: "./php/Usuarios/controladorUsuario.php",
            data: datos,
            dataType: "json"
        }).done(function(resultado) {
            if (resultado.respuesta == "existe") {

                
                if(resultado.rol === 'Administrador')
                {
                   
                    location.href = "adminper.php";
                }

                if(resultado.rol === 'Medicos')
                {
                    location.href = "medicoper.php";
                }

                if(resultado.rol === 'Director')
                {
                   
                    location.href = "direcper.php";
                }

                if(resultado.rol === 'Especialistas')
                {
                    location.href = "especiaper.php";
                }

                if(resultado.rol === 'Asesores')
                {
                    location.href = "aseper.php";
                }

                
                if(resultado.rol === 'Cliente')
                {
                    location.href = "cliente.php";
                }
                
                
                
            } else {
                swal({
                        position: 'center',
                        type: 'error',
                        title: 'Usuario y/o Password incorrecto',
                        showConfirmButton: false,
                        timer: 1500
                    }),
                    function() {
                        $("#usuario").focus().select();
                    };
            }
        });
    })
}