<?php
 
require_once 'Afiliados_Modelo.php';
$datos = $_GET;
switch ($_GET['accion']){
    case 'editar':
        $afiliados = new Afiliados();
        $resultado = $afiliados->editar($datos);
        $respuesta = array(
                'respuesta' => $resultado
            );
        echo json_encode($respuesta);
        break;
    case 'nuevo':
        $afiliados = new Afiliados();
		$resultado = $afiliados->nuevo($datos);
        if($resultado > 0) {
            $respuesta = array(
                'respuesta' => 'correcto'
            );
        }  else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        echo json_encode($respuesta);
        break;
    case 'borrar':
		$afiliados = new Afiliados();
		$resultado = $afiliados->borrar($datos['codigo']);
        if($resultado > 0) {
            $respuesta = array(
                'respuesta' => 'correcto'
            );
        }  else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        echo json_encode($respuesta);
        break;

    case 'consultar':
        $afiliados = new Afiliados();
        $afiliados->consultar($datos['codigo']);

        if($afiliados->getId_afiliado() == null) {
            $respuesta = array(
                'respuesta' => 'no existe'
            );
        }  else {
            $respuesta = array(
                'codigo' => $afiliados->getId_afiliado(),
                'nombre' => $afiliados->getNom_afiliado(),
                'cedula' =>$afiliados->getCedu_afiliado(),
                'celular' => $afiliados->getCelu_afiliado(),
                'tipoAfi' => $afiliados->getTipo_afiliacion(),
                'sede' =>$afiliados->getId_sede(),
                'respuesta' =>'existe'
            );
        }
        echo json_encode($respuesta);
        break;

    case 'listar':
        $afiliados = new Afiliados();
        $listado = $afiliados->lista();
        echo json_encode(array('data'=>$listado), JSON_UNESCAPED_UNICODE);    
        break;
}
?>
