<?php

	/*$db_host ="localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "persona";

	$conexion = new mysqli($db_host, $db_user, $db_pass, $db_name);

	$sql = "select * from tb_comuna order by comu_nomb";

	$resultado = $conexion->query($sql);
				//or die(mysqli_errno($this->conexion)." : " 
				//.mysqli_error($conexion)." | Query=".$sql);

	
	//$primerRegistro = $resultado->fetch_assoc();

	//print_r($primerRegistro);	

	$listado =array();
	while($fila = $resultado->fetch_assoc()){
			$listado[]=$fila;
	}

	$conexion->close();*/
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Listado de Empleados</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css">
    	<!-- Font Awesome -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	</head>
	<body>
		<h1 align="center">Listado de Empleados </h1>
		<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">			
			<thead>
				<tr>
					<th>Código Id</th>
					<th>Nombre</th>
                    <th>Epellido</th>
                    <th>celualr</th>
					<th>Direccion</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($listado as $fila){ ?>
				<tr>
					<td><?php echo $fila['comu_codi'] ?> </td>
					<td><?php echo utf8_encode($fila['comu_nomb']) ?> </td>
					<td><?php echo utf8_encode($fila['muni_codi']) ?> </td> 
				</tr>
				<?php } ?>
			</tbody>
		</table>

		<!-- jQuery 2.1.4 -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
	    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
	    <!-- jQuery UI 1.11.4 -->
	    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	    
	    <!-- Bootstrap 3.3.5 -->
    	<script src="bootstrap/js/bootstrap.min.js"></script>
    	<!-- Funciones de Lógica de neogcio -->
		<script>
    		$(document).ready(function(){
    			$("#tabla").DataTable();
    		});
		</script>
	</body>
</html>