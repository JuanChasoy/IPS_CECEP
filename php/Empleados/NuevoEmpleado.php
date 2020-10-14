<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
    crossorigin="anonymous">
    <title>IPS CECEP-Empleados</title>
    <style>
      .botones{
        margin-top: 40px;
      }
      .jum {
        background-color: rgb(108, 203, 219);      
         
      }

    </style>
  </head>
  <body>
    
    <div class="text-center">    
      <img  src="../img/ipscecep.jpg" alt="" style="width: 180px;
      height: 200px;
      margin: auto;">  
    </div>
    <div class="container">
      <div class="jumbotron jum">
          <h1>Gestion de Empleados</h1>
          <div class="row">
            <form class="form-horizontal" role="form"  id="fempleados">

              <div class="form-group">
                        <label class="control-label col-sm-2" for="id_empleado">Id Empleado:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_empleado" name="id_empleado" placeholder="Ingrese Codigo de empleado"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                </div>
                <div class="form-group">
                        <label class="control-label col-sm-2" for="nom_empleado">Nombre del empleado:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nom_empleado" name="nom_empleado" placeholder="Ingrese nombre del empleado"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                </div>
                <div class="form-group">
                        <label class="control-label col-sm-2" for="cedu_emplado">Cedula:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="cedu_emplado" name="cedu_emplado" placeholder="Ingrese la cedula del empleado"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                </div>
                <div class="form-group">
                        <label class="control-label col-sm-2" for="dire_empleado">Direccion:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="dire_empleado" name="dire_empleado" placeholder="Ingrese direccion del empleado"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                </div>
                <div class="form-group">
                        <label class="control-label col-sm-2" for="celu_empleado">Celular:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="celu_empleado" name="celu_empleado" placeholder="Ingrese el celualar del empleado"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                </div>
                <div class="form-group">
                        <label class="control-label col-sm-2" for="email_empleado">Email:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email_empleado" name="email_empleado" placeholder="Ingrese Email de empleado"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                </div>
                <div class="form-group">
                        <label class="control-label col-sm-2" for="id_sede">Sede:</label>
                        <div class="col-sm-10">
                          <select class="form-control" id="id_sede" name="id_sede">
                          
                          </select>
                        </div>
                </div>
                <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar" class="btn btn-primary" data-toggle="tooltip" title="Grabar Comuna">Guardar Empleado</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar2" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

                  <input type="hidden" id="nuevo" value="nuevo" name="accion"/>
              </fieldset>

            </form>
           
            
          </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>