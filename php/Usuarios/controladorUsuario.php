<?php
require_once 'Modelousuario.php';

$usuario = htmlspecialchars(trim("$_POST[usuario]"));
$password = htmlspecialchars(trim("$_POST[password]"));
$datos = array("usuario" => $usuario, "password" => $password);

switch ($_POST['accion']) {

    case 'login':
        $usuario = new Usuario();
        $usuario->consultar($datos);

        if ($usuario->getId_usuario() == null) {
            $respuesta = array(
                'respuesta' => 'no existe'
            );
        } else {
            if (password_verify($datos['password'], $usuario->getUsua_pass())) {
                session_start();
                $_SESSION['usuario'] = $usuario->getUsua_user();
                $_SESSION['nombre'] = $usuario->getNom_usuario();
                $_SESSION['foto'] = $usuario->getUsua_foto();
                //$_SESSION['rol'] = $usuario->getId_rol();
                $_SESSION['nombre_rol'] = $usuario->getNom_rol();
                $respuesta = array(
                    'respuesta' => 'existe',
                    'rol' => $_SESSION['nombre_rol']
                );
            } else {
                $respuesta = array(
                    'respuesta' => 'no existe'
                );
            }
        }
        echo json_encode($respuesta);
        break;
        break;
    case 'editar':
        $usuario = new Usuario();
        $resultado = $usuario->editar($datos);
        $respuesta = array(
            'respuesta' => $resultado
        );
        echo json_encode($respuesta);
        break;
    case 'nuevo':
        $usuario = new Usuario();
        $resultado = $usuario->nuevo($datos);
        if ($resultado > 0) {
            $respuesta = array(
                'respuesta' => $resultado
            );
        } else {
            $respuesta = array(
                'respuesta' => $resultado
            );
        }
        echo json_encode($respuesta);
        break;

    case 'borrar':
        $usuario = new Usuario();
        $resultado = $usuario->borrar($datos['codigo']);
        if ($resultado > 0) {
            $respuesta = array(
                'respuesta' => 'correcto'
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        echo json_encode($respuesta);
        break;

    case 'consultar':
        $usuario = new Usuario();
        $usuario->consultar($datos['codigo']);

        if ($usuario->getComu_codi() == null) {
            $respuesta = array(
                'respuesta' => 'no existe'
            );
        } else {
            $respuesta = array(
                'codigo' => $usuario->getComu_codi(),
                'comuna' => $usuario->getComu_nomb(),
                'municipio' => $usuario->getMuni_codi(),
                'respuesta' => 'existe'
            );
        }
        echo json_encode($respuesta);
        break;

    case 'listar':
        $usuarios = new Usuario();
        $listado = $usuario->lista();
        echo json_encode(array('data' => $listado), JSON_UNESCAPED_UNICODE);
        break;
}
