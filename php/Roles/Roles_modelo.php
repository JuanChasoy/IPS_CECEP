<?php
    require_once("../modeloAbstractoDB.php");
    class Roles extends ModeloAbstractoDB {
		private $id_rol;
		private $nom_rol;
        
		
		function __construct() {
			//$this->db_name = '';
		}

		public function getId_rol(){
			return $this->id_rol;
		}

		public function getNom_rol(){
			return $this->nom_rol;
		}
		
	

		public function consultar($id_rol='') {
			if($id_rol !=''):
				$this->query = "
				SELECT id_rol, nom_rol
				FROM tb_roles
				WHERE id_rol = '$id_rol' order by id_rol
				";
				$this->obtener_resultados_query(); // se ejecuta cuando sea consulta select 
			endif;
			if(count($this->rows) == 1):
				foreach ($this->rows[0] as $propiedad=>$valor):
					$this->$propiedad = $valor;
				endforeach;
			endif;
		}
		
		public function lista() {
			$this->query = "
			SELECT id_rol, nom_rol 
			FROM tb_roles
			";
			
			$this->obtener_resultados_query();
			return $this->rows;
			
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('id_rol', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$nom_rol= utf8_decode($nom_rol);
				$this->query = "
					INSERT INTO tb_roles
					(id_rol, nom_rol)
					VALUES
					(NULL, '$nom_rol')
					";
				$resultado = $this->ejecutar_query_simple();
				return $resultado;
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$nom_rol= utf8_decode($nom_rol);
			$this->query = "
			UPDATE tb_roles
			SET nom_rol='$nom_rol'
			
			WHERE id_rol = '$id_rol'
			";
			$resultado = $this->ejecutar_query_simple();
			return $resultado;
		}
		
		public function borrar($id_rol='') {
			$this->query = "
			DELETE FROM tb_roles
			WHERE id_rol = '$id_rol'
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>