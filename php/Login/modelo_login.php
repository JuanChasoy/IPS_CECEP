<?php

require_once '../modelo.php';

/**|
 * 
 */
class Login extends ModeloAbstractoDB
{

	private $usuario;
	private $clave;
	private $rol;
	private $id;
	private $fid;

	function __construct()
	{
		# code...
	}
	public function editar()
	{
	}
	public function nuevo()
	{
	}
	public function borrar()
	{
	}
	public function lista()
	{
	}
	public function consultar($usuario = '')
	{
		if ($usuario != '') {

			$this->query = "
				SELECT u.id_usuario as id, s.usua_user AS usuario, s.usua_pass AS clave, r.rol_name AS rol
				FROM tb_usuarios AS s
				INNER JOIN tb_roles AS r
				ON s.id_rol=r.id_rol
				WHERE s.usua_user='$usuario'
				";

			$this->obtener_resultados_query();
		}

		if (count($this->rows) == 1) {
			foreach ($this->rows[0] as $clave => $valor) {
				$this->$clave = $valor;
			}
		}
	}
}
