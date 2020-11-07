
// actualizar es el nombre del boton en el form editar 
function servicios(){ 

    var  dt = $("#tabla").DataTable({
        "ajax": "php/Servicios/ControladorServicios.php?accion=listar",
        "columns": [
            { "data": "id_servicio"} ,
            { "data": "tipo_servicio" },
            { "data": "nom_sede" }, 
            { "data": "id_servicio",
                render: function (data) {
                          return '<a href="#" data-codigo="'+ data + 
                                '" class="btn btn-danger btn-sm borrar"> <i class="fa fa-trash">eliminar</i></a>' 
                }
            },
            { "data": "id_servicio",
                render: function (data) {
                          return '<a href="#" data-codigo="'+ data + 
                                '" class="btn btn-warning btn-sm editar"> <i">editar</i></a>';
                }
            }
        ]
    });



$(".box-body").on("click","button#actualizar",function(){
     var datos=$("#fservicio").serialize();
     $.ajax({
        type:"get",
        url:"./php/Servicios/controladorServicios.php",
        data: datos,
        dataType:"json"
      }).done(function( resultado ) {
   
        if(resultado.respuesta){    
          swal({
              position: 'center',
              type: 'success',
              title: 'Se actaulizaron los datos correctamente',
              showConfirmButton: false,
              timer: 1500
          }) 
          $(".box-title").html("Listado de Ciudades");
          $("#editar").html('');
          $("#editar").addClass('hide');
          $("#editar").removeClass('show');
          $("#listado").addClass('show');
          $("#listado").removeClass('hide');
          dt.ajax.reload(null, false);       
       } else {
          swal({
            type: 'error',
            title: 'Oops...',
            text: 'Something went wrong!'                         
          })
      }
  });
})

$(".box-body").on("click","a.borrar",function(){
    //Recupera datos del formulario
    var codigo = $(this).data("codigo");

    swal({
          title: '¿Está seguro?',
          text: "¿Realmente desea borrar el servicio con codigo : " + codigo + " ?",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si, Borrarlo!'
    }).then((decision) => {
            if (decision.value) {

                var request = $.ajax({
                    method: "get",
                    url: "./php/Servicios/controladorServicios.php",
                    data: {codigo: codigo, accion:'borrar'},
                    dataType: "json"
                })

                request.done(function( resultado ) {
                    if(resultado.respuesta == 'correcto'){
                        swal(
                            'Borrado!',
                            'La ciudad con codigo : ' + codigo + ' fue borrada',
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

$("#contenido").on("click","button.btncerrar2",function(){
    $("#titulo").html("Listado Empleados");
    $("#nuevo-editar").html("");
    $("#nuevo-editar").removeClass("show");
    $("#nuevo-editar").addClass("hide");
    $("#empleado").removeClass("hide");
    $("#empleado").addClass("show");

})

$("#contenido").on("click","button.btncerrar",function(){
    $("#contenedor").removeClass("show");
    $("#contenedor").addClass("hide");
    $("#contenido").html('')
})

//se modifico el codigo para cargar el formulario de empleados 
  $(".box").on("click","#nuevo", function(){
    $(this).hide();
    $(".box-title").html("Crear Sevicio");
    $("#editar").addClass('show');
    $("#editar").removeClass('hide');
    $("#listado").addClass('hide');
    $("#listado").removeClass('show');
    $("#editar").load('./php/Servicios/NuevoServicio.php', function(){
        $.ajax({
          type:"get",
          url:"./php/Sedes/ControladorSedes.php",
          data: {accion:'listar'},
          dataType:"json"
        }).done(function( resultado ) {                    ;
            $.each(resultado.data, function (index, value) { 
              $("#editar #id_sede").append("<option value='" + value.id_sede + "'>" + value.nom_sede + "</option>")
            });
        });
    });
    
})




$("#editar").on("click","button#grabar",function(){
  var datos=$("#fservicios").serialize();
  //console.log(datos);
  $.ajax({
        type:"get",
        url:"./php/Servicios/controladorServicios.php",
        data: datos,
        dataType:"json"
      }).done(function( resultado ) {
          if(resultado.respuesta){
            swal(
              'Grabado!!',
              'El registro se grabó correctamente',
              'success'
            )     
                $(".box-title").html("Listado de Empleados");
                $(".box #nuevo").show();
                $("#editar").html('');
                $("#editar").addClass('hide');
                $("#editar").removeClass('show');
                $("#listado").addClass('show');
                $("#listado").removeClass('hide');
                dt.page( 'last' ).draw( 'page' );
                dt.ajax.reload(null, false);                   
         } else {
            swal({
                position: 'center',
                type: 'error',
                title: 'Ocurrió un erro al grabar',
                showConfirmButton: false,
                timer: 1500
            });
           
        }
    });
});




//codigo hace parte para cargar datos al momento de darle en editar
$(".box-body").on("click","a.editar",function(){
  
   var codigo = $(this).data("codigo");
   var sede;
   $(this).hide();
    $(".box-title").html("Actualizar Servicio");
    $("#editar").addClass('show');
    $("#editar").removeClass('hide');
    $("#listado").addClass('hide');
    $("#listado").removeClass('show');  
   
    /*$("#editar").removeClass("hide");
    $("#editar").addClass("show");
    $("#empleado").removeClass("show");
    $("#empleado").addClass("hide");
   
   
   */

    $("#editar").load("./php/Servicios/editarServicio.php");

  

   $.ajax({
       type:"get",
       url:"./php/Servicios/controladorServicios.php",
       data: {codigo: codigo, accion:'consultar'},
       dataType:"json"
       }).done(function( servicios ) {        
            if(servicios.respuesta === "no existe"){
                swal({
                  type: 'error',
                  title: 'Oops...',
                  text: 'Empleado no existe!!!!!'                         
                })
            } else {
                $("#id_servicio").val(servicios.codigo);                   
                $("#tipo_servicio").val(servicios.servicio);             
                sede = servicios.sede;
            }
       });

       $.ajax({
         type:"get",
         url:"./php/Sedes/ControladorSedes.php", // falta poner el el controlador de sedes
         data: {accion:'listar'},
         dataType:"json"
       }).done(function( resultado ) {                     
          $("#id_sede option").remove();
          $.each(resultado.data, function (index, value) { 
            
            if(sede === value.id_sede){
              $("#id_sede").append("<option selected value='" + value.id_sede + "'>" + value.nom_sede + "</option>")
            }else {
              $("#id_sede").append("<option value='" + value.id_sede + "'>" + value.nom_sede + "</option>")
            }
          });
       });    
        
   })
}

