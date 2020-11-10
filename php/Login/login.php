<?php

require_once 'modelo_login.php';

if (!isset($_POST['usua_user']) || !isset($_POST['usa_pass']) || $_POST['usua_user'] == '' || $_POST['usua_pass'] == '') {
	header('location: ../../index.php');
}

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$login = new Login();
$login->consultar($usuario);

if ($login->getUsuario() == $usuario && $clave == $login->getClave()) {

	$rol = $login->getRol();

	session_start();

	$_SESSION['id'] = $login->getId();
	$_SESSION['usuario'] = $login->getUsuario();
	$_SESSION['nom_rol'] = $rol;

	switch ($rol) {
		case 'Administrador':
			header('location: ../admin.php');

			break;
		case 'Medicos':
			header('location: ../jefe.php');
			break;
		case 'empleado':
			header('location: ../empleado.php');
			break;
	}
} else {

	header('location: ../../index.html');
}
