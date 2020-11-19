
function usua(){
  var  dt = $("#tabla").DataTable({
    "ajax": "php/Usuarios/controladorUsua.php?accion=listar",
    "columns": [
        { "data": "id_usuario"} ,
        { "data": "usua_user" },
        { "data": "nom_usuario" }, 
        { "data": "nom_rol"} ,
        { "data": "id_usuario",
            render: function (data) {
                      return '<a href="#" data-codigo="'+ data + 
                            '" class="btn btn-danger btn-sm borrar"> <i class="fa fa-trash">eliminar</i></a>' 
            }
        },
        { "data": "id_usuario",
            render: function (data) {
                      return '<a href="#" data-codigo="'+ data + 
                            '" class="btn btn-warning btn-sm editar"> <i">editar</i></a>';
            }
        }
    ]
});




$(".box-body").on("click","a.borrar",function(){
    //Recupera datos del formulario
    var codigo = $(this).data("codigo");

    swal({
          title: '¿Está seguro?',
          text: "¿Realmente desea borrar el usuario con codigo : " + codigo + " ?",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si, Borrarlo!'
    }).then((decision) => {
            if (decision.value) {

                var request = $.ajax({
                    method: "get",
                    url: "php/Usuarios/controladorUsua.php",
                    data: {codigo: codigo, accion:'borrar'},
                    dataType: "json"
                })

                request.done(function( resultado ) {
                    if(resultado.respuesta == 'correcto'){
                        swal(
                            'Borrado!',
                            'el usuario con codigo : ' + codigo + ' fue borrada',
                            'success'
                        )     
                        dt.ajax.reload();                            
                    } else {
                        swal({
                          type: 'error',
                          title: 'Oops...',
                          text: 'Something went wrong!'                         
                        })
                    }
                });
                 
                request.fail(function( jqXHR, textStatus ) {
                    swal({
                      type: 'error',
                      title: 'Oops...',
                      text: 'Something went wrong!' + textStatus                          
                    })
                });
            }
    })

});

}


