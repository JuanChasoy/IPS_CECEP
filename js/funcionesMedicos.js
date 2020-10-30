// actualizar es el nombre del boton en el form editar 
function empleados(){ 

    var  dt = $("#tabla").DataTable({
        "ajax": "php/Empleados/ControladorEmpleados.php?accion=listar",
        "columns": [
            { "data": "id_empleado"} ,
            { "data": "nom_empleado" },
            { "data": "celu_empleado" },
            { "data": "email_empleado" }, 
            { "data": "nom_sede" }, 
            { "data": "id_empleado",
                render: function (data) {
                          return '<a href="#" data-codigo="'+ data + 
                                '" class="btn btn-danger btn-sm borrar"> <i class="fa fa-trash">eliminar</i></a>' 
                }
            },
            { "data": "id_empleado",
                render: function (data) {
                          return '<a href="#" data-codigo="'+ data + 
                                '" class="btn btn-warning btn-sm editar"> <i">editar</i></a>';
                }
            }
        ]
    });



$(".box-body").on("click","button#actualizar",function(){
     var datos=$("#fempleados").serialize();
     $.ajax({
        type:"get",
        url:"./php/Empleados/ControladorEmpleados.php",
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
          $(".box-title").html("Listado de Empleados");
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
          text: "¿Realmente desea borrar la comuna con codigo : " + codigo + " ?",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si, Borrarlo!'
    }).then((decision) => {
            if (decision.value) {

                var request = $.ajax({
                    method: "get",
                    url: "./php/Empleados/ControladorEmpleados.php",
                    data: {codigo: codigo, accion:'borrar'},
                    dataType: "json"
                })

                request.done(function( resultado ) {
                    if(resultado.respuesta == 'correcto'){
                        swal(
                            'Borrado!',
                            'La comuna con codigo : ' + codigo + ' fue borrada',
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
    $(".box-title").html("Crear Empleado");
    $("#editar").addClass('show');
    $("#editar").removeClass('hide');
    $("#listado").addClass('hide');
    $("#listado").removeClass('show');
    $("#editar").load('./php/Empleados/NuevoEmpleado.php', function(){
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
  var datos=$("#fempleados").serialize();
  //console.log(datos);
  $.ajax({
        type:"get",
        url:"./php/Empleados/ControladorEmpleados.php",
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
   $(".box-title").html("Actualizar Empleados");
   $("#editar").addClass('show');
   $("#editar").removeClass('hide');
   $("#listado").addClass('hide');
   $("#listado").removeClass('show');  
   
    /*$("#editar").removeClass("hide");
    $("#editar").addClass("show");
    $("#empleado").removeClass("show");
    $("#empleado").addClass("hide");
   
   
   */

    $("#editar").load("./php/Empleados/EditarEmpleado.php");

  

   $.ajax({
       type:"get",
       url:"./php/Empleados/ControladorEmpleados.php",
       data: {codigo: codigo, accion:'consultar'},
       dataType:"json"
       }).done(function( empleados ) {        
            if(empleados.respuesta === "no existe"){
                swal({
                  type: 'error',
                  title: 'Oops...',
                  text: 'Empleado no existe!!!!!'                         
                })
            } else {
                $("#id_empleado").val(empleados.codigo);                   
                $("#nom_empleado").val(empleados.empleado);
                $("#cedu_emplado").val(empleados.cedula);                   
                $("#dire_empleado").val(empleados.direccion);
                $("#celu_empleado").val(empleados.celular);                   
                $("#email_empleado").val(empleados.email);
                sede = empleados.sede;
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