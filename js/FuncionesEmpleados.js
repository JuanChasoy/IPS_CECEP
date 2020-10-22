var dt;

function empleados(){
    $("#contenido").on("click","button#actualizar",function(){
         var datos=$("#fempleados").serialize();
         $.ajax({
            type:"get",
            url:"./php/Empleados/ControladorEmpleados.php",
            data: datos,
            dataType:"json"
          }).done(function( resultado ) {
              if(resultado.respuesta){
                swal(
                    'Actualizado!',
                    'Se actaulizaron los datos correctamente',
                    'success'
                )     
                dt.ajax.reload();
                $("#titulo").php("Listado Empleados");
                $("#nuevo-editar").php("");
                $("#nuevo-editar").removeClass("show");
                $("#nuevo-editar").addClass("hide");
                $("#empleado").removeClass("hide");
                $("#empleado").addClass("show")
             } else {
                swal({
                  type: 'error',
                  title: 'Oops...',
                  text: 'Something went wrong!'                         
                })
            }
        });
    })

    $("#contenido").on("click","a.borrar",function(){
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

    $("#contenido").on("click","button#nuevo",function(){
        $("#titulo").html("Nuevo Empleado");
        $("#nuevo-editar" ).load("./php/Empleados/NuevoEmpleado.php"); 
        $("#nuevo-editar").removeClass("hide");
        $("#nuevo-editar").addClass("show");
        $("#empleado").removeClass("show");
        $("#empleado").addClass("hide");
         $.ajax({
             type:"get",
             url:"./php/Sedes/ControladorSedes.php",
             data: {accion:'listar'},
             dataType:"json"
           }).done(function( resultado ) {   
              //console.log(resultado.data)           
              $("#id_sede option").remove()       
              $("#id_sede").append("<option selecte value=''>Seleccione una sede</option>")
              $.each(resultado.data, function (index, value) { 
                $("#id_sede").append("<option value='" + value.id_sede + "'>" + value.nom_sede + "</option>")
              });
           });
    })

    $("#contenido").on("click","button#grabar",function(){
        /*var comu_codi = $("#comu_codi").attr("value");
        var comu_nomb = $("#comu_nomb").attr("value");
        var muni_codi = $("#muni_codi").attr("value");
        var datos = "comu_codi="+comu_codi+"&comu_nomb="+comu_nomb+"&muni_codi="+muni_codi;*/
      
      var datos=$("#fempleados").serialize();
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
                dt.ajax.reload();
                $("#titulo").html("Listado Empleados");
                $("#nuevo-editar").html("");
                $("#nuevo-editar").removeClass("show");
                $("#nuevo-editar").addClass("hide");
                $("#empleados").removeClass("hide");
                $("#empleados").addClass("show")
             } else {
                swal({
                  type: 'error',
                  title: 'Oops...',
                  text: 'Something went wrong!'                         
                })
            }
        });
    });


    $("#contenido").on("click","a.editar",function(){
       $("#titulo").html("Editar Comuna");
       //Recupera datos del fromulario
       var codigo = $(this).data("codigo");
       var sede;
        $("#nuevo-editar").load("./php/Empleados/ControladorEmpleados.php");
        $("#nuevo-editar").removeClass("hide");
        $("#nuevo-editar").addClass("show");
        $("#empleado").removeClass("show");
        $("#empleado").addClass("hide");
       $.ajax({
           type:"get",
           url:"./php/Empleados/ControladorEmpleados.php",
           data: {codigo: codigo, accion:'consultar'},
           dataType:"json"
           }).done(function( Empleado ) {        
                if(Empleado.respuesta === "no existe"){
                    swal({
                      type: 'error',
                      title: 'Oops...',
                      text: 'Comuna no existe!!!!!'                         
                    })
                } else {
                    $("#comu_codi").val(Empleado.codigo);                   
                    $("#comu_nomb").val(Empleado.Empleado);
                    sede = Empleado.sede;
                }
           });

           $.ajax({
             type:"get",
             url:"./php/municipio/controladorEmpleados.php", // falta poner el el controlador de sedes
             data: {accion:'listar'},
             dataType:"json"
           }).done(function( resultado ) {                     
              $("#id_empleado option").remove();
              $.each(resultado.data, function (index, value) { 
                
                if(Empleado === value.muni_codi){
                  $("#id_empleado").append("<option selected value='" + value.id_empleado + "'>" + value.id_empleado + "</option>")
                }else {
                  $("#id_empleado").append("<option value='" + value.id_empleado + "'>" + value.id_empleado + "</option>")
                }
              });
           });    
            
       })
}

$(document).ready(() => {
  $("#contenido").off("click", "a.editar");
  $("#contenido").off("click", "button#actualizar");
  $("#contenido").off("click","a.borrar");
  $("#contenido").off("click","button#nuevo");
  $("#contenido").off("click","button#grabar");
  $("#titulo").html("TODOS LOS EMPLEADOS");
  dt = $("#tabla").DataTable({
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
  empleados();
});