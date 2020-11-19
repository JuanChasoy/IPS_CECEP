
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

   }


