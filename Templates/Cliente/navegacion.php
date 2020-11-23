<?php include_once ("./Funciones/sessiones.php"); ?>
<!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
        <img src="./Recursos/img/<?php echo $_SESSION['foto'] ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION["nombre"]; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Activo</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENÚ DE CLIENTE</li>
          <li class="treeview">          
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Nada disponible </a></li>
            </ul>
          </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i>
            <span>Menu</span>
          </a>
          <ul class="treeview-menu">
           
            <li><a href="./Templates/Cliente/Medicamentos/index.php"><i class="fas fa-globe-americas"></i> Medicamentos</a></li>            
            <li><a href="./Templates/Cliente/Afiliados/index.php"><i class="fab fa-accessible-icon"></i> Afiliados</a></li> 
            <li><a href="./Templates/Cliente/Citas/index.php"><i class="fab fa-accessible-icon"></i> Citas</a></li>
            <li><a href="./Templates/Cliente/Usuarios/index.php"><i class="fab fa-accessible-icon"></i> Usuarios</a></li> 
            <li><a href="./Templates/Cliente/Medicos/index.php"><i class="fas fa-globe-americas"></i> Medicos</a></li> 
            <li><a href="./Templates/Cliente/Paises/index.php"><i class="fas fa-globe-americas"></i> Paises</a></li> 
            <li><a href="./Templates/Cliente/Ciudades/index.php"><i class="fas fa-globe-americas"></i> Ciudades</a></li> 
            <li><a href="./Templates/Cliente/Sedes/index.php"><i class="fas fa-globe-americas"></i> Sedes</a></li>
            <li><a href="./Templates/Cliente/Servicios/index.php"><i class="fas fa-globe-americas"></i> Servicios</a></li> 
          </ul>
        </li>
       
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->