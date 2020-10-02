<?php

	$db_host ="localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "bdatos_ips";

	$conexion = new mysqli($db_host, $db_user, $db_pass, $db_name);

	$sql = "select * from tb_medicos order by id_sede";

	$resultado = $conexion->query($sql);

	$listado =array();
	while($fila = $resultado->fetch_assoc()){
			$listado[]=$fila;
	}

	$conexion->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    	integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
		crossorigin="anonymous">

	<title>Listado medicos</title>
</head>
<body>
	<div class="container">
		<div class="jumbotron">		
			<h1 alaign="center">Listado de Empleados </h1>
			<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">			
				<thead>
					<tr>
						<th>Código Id</th>
						<th>Nombre</th>
						<th>celualr</th>
						<th>Correo</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($listado as $fila){ ?>
					<tr>
						<td><?php echo $fila['id_medico'] ?> </td>
						<td><?php echo utf8_encode($fila['nom_medico']) ?> </td>
						<td><?php echo utf8_encode($fila['celu_medico']) ?> </td> 
						<td><?php echo utf8_encode($fila['correo_medico']) ?> </td> 
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	






		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    		<!--<script src="../js/bootstrap.min.js"></script> llama archivo js  -->
    	
			<script>
				$(document).ready(function(){
					alert("cargada suceefull");
					console.log("cargada la tabla ");
					
				});

				
			</script>

			<script>
				$(table).c
			</script>
</body>
</html>