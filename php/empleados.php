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
            <div class="col-sm-6">
              <div>
                <label for="formGroupExampleInput">Nombre del empleado</label>
                  <input type="text" class="form-control" id="Nom_Empleado" name="Nom_Empleado" value=""
                  placeholder="Ingresar nombre del empleado ">
              </div>
              <div>
                <label for="formGroupExampleInput">Apellidos</label>
                  <input type="text" class="form-control" id="Ape_Empleado" name="Ape_Empleado" value=""
                  placeholder="Ingresar los aplellidos ">
              </div>
              <div>
                <label for="formGroupExampleInput">Edad</label>
                  <input type="text" class="form-control" id="Eda_Empleado" name="Eda_Empleado" value=""
                  placeholder="Ingresar la edad ">
              </div>
              <div>
                <label for="formGroupExampleInput">Fecha de nacimiento</label>
                  <input type="text" class="form-control" id="Fecha_Empleado" name="Fecha_Empleado" value=""
                  placeholder="Ingresar fecha de nacimiento">
              </div>              
            </div>
            <div class="col-sm-6 botones">
              <button type="button" class="btn btn-primary btn-lg btn-block">Crear Empleado</button>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Eliminar empleado</button>
              <button type="button" class="btn btn-primary btn-lg btn-block">Modificar empleado</button>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Ir al inicio</button>
            </div>
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