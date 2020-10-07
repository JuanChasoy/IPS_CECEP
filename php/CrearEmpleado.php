<?php
    $NombreE = $_POST['Nom_Empleado'];
    $Cedula = $_POST['Cedu_Empleado'];
    $Direcion = $_POST['Dire_Empleado'];
    $Celular = $_POST['celu_Empleado'];
    $Email = $_POST['Emal_Empleado'];

    //conexion 
    $db_host ="localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "base_ips";

    $conexion = new mysqli($db_host, $db_user, $db_pass, $db_name);
    
    

    $resultado = $conexion->query($sql);

	$listado =array();
	while($fila = $resultado->fetch_assoc()){
			$listado[]=$fila;
	}

    $conexion->close();
    
    alert("se creo empleado");
?>