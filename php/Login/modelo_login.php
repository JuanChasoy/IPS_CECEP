<?php

require_once '../modeloAbstractoDB.php';

/**|
 * 
 */
class Login extends ModeloAbstractoDB
{

	private $usuario;
	private $clave;
	private $rol;
	private $id;

	function __construct()
	{
		# code...
	}
	public function getUsuario()
	{
		return $this->usuario;
	}

	public function getClave()
	{
		return $this->clave;
	}

	public function getRol()
	{
		return $this->rol;
	}

	public function getId()
	{
		return $this->id;
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
				SELECT s.id_usuario as id, s.usua_user AS usuario, s.usua_pass AS clave, r.nom_rol AS rol
				FROM tb_usuarios AS s
				INNER JOIN tb_roles AS r
				ON s.id_rol=r.id_rol
				WHERE s.usua_user='$usuario'
				";

			$this->obtener_resultados_query();
		}

		if (count($this->rows) == 1) {
			foreach ($this->rows[0] as $clave => $valor) {
				echo $clave . ' - ' . $valor;
				$this->$clave = $valor;
			}
		}
	}
}
