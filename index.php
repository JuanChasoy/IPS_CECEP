<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>IPS CECEP</title>
  </head>
  <body>
    
  
    <div class="text-center"> 
    
    <img  src="../img/ipscecep.jpg" alt="" style="width: 180px;
    height: 200px;
    margin: auto;">  
    </div>
    
    


<nav class="navbar navbar-expand-lg  navbar-dark " style="background-color: rgb(7, 43, 121);  " >
  <a class="navbar-brand" href="../html/inicio.html">Inicio </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active ">
        <a class="nav-link" href="../html/afiliados.html">Afiliados    <!--<span class="sr-only">(current)</span> --></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="php/Empleados/index.php">Empleados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../html/medicos.html">Medicos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../html/servicios.html">Servicios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../html/medicamentos.html">Medicamentos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../html/sedes.html">Sedes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../html/ciudades.html">Ciudades</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../html/paises.html">Paises</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../html/citas.html">Citas</a>
      </li>
     </ul>

     <div class="panel-group hide" id="contenedor"><div class="panel panel-primary">
            <div class="panel-heading" id="titulo"></div>
            <div class="panel-body">
                
                <div class="form-group" id="contenido">        
                    
                </div>
            </div>
        </div>
    </div>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar" aria-label="Buscar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>




<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 1000px;
height: 400px;
margin: auto;
margin-top: 25px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/banner1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/banner2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/banner4.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    
      <input type="hidden" id="pagina" value="index" name="editar"/>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
          <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
          <!-- Librearía para las funcionalidades de la tabla -->
          <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
          <!-- Librería para las alertas -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>
          <!-- jQuery UI 1.11.4 -->
          <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

          <!-- Funciones de Lógica de negocio -->
          <script src="js/funcionesJquery.js"></script>
          <!-- Funciones de Lógica de neogcio -->
          <script>
              $(document).ready(Inicio);
          </script>
  </body>
</html>







