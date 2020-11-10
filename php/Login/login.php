<?php

require_once './modelo_login.php';

if (!isset($_POST['usuario']) || !isset($_POST['password']) || $_POST['usuario'] == '' || $_POST['password'] == '') {
	header('location: ../../index.php');
}

$usuario = $_POST['usuario'];
$clave = $_POST['password'];

$login = new Login();
$login->consultar($usuario);

if ($login->getUsuario() == $usuario && $clave == $login->getClave()) {

	$rol = $login->getRol();

	session_start();

	$_SESSION['id_usuario'] = $login->getId();
	$_SESSION['usua_user'] = $login->getUsuario();
	$_SESSION['nom_rol'] = $rol;

	switch ($rol) {
		case 'Administrador':
			header('location: ../adminper.php');

			break;
		case 'Medicos':
			header('location: ../medico.php');
			break;
	}
} else {

	header('location: ../../index.php');
}
