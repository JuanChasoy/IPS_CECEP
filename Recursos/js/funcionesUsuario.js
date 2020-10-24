function usuario(){    
    $("#login-form").on('submit',function(e){    
        e.preventDefault();
        var datos = $(this).serialize();
        //console.log(datos)
        $.ajax({
            type:"post", //./Controlador/controladorUsuario.php
            url:"./php/Usuarios/controladorUsuario.php",
            data: datos,
            dataType:"json"
          }).done(function( resultado ) {
            if(resultado.respuesta == "existe"){
                location.href ="adminper.php";
            }
            else{
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
