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
						<th>celualar</th>
						<th>Correo</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($listado as $fila){ ?>
					<tr>
						<td><?php echo $fila['id_empleado'] ?> </td>
						<td><?php echo utf8_encode($fila['nom_empleado']) ?> </td>
						<td><?php echo utf8_encode($fila['celu_empleado']) ?> </td> 
						<td><?php echo utf8_encode($fila['email_empleado']) ?> </td> 
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>	
</body>
</html>