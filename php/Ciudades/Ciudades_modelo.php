<?php
    require_once("../modeloAbstractoDB.php");
    class Ciudades extends ModeloAbstractoDB {
		private $id_ciudad ;
		private $nom_ciudad;
		private $id_pais ;
        
		
		function __construct() {
			//$this->db_name = '';
		}

		public function getId_ciudad(){
			return $this->id_ciudad;
		}

		public function getNom_ciudad(){
			return $this->nom_ciudad;
		}

		public function getId_pais(){
			return $this->id_pais;
		}
		
	

		public function consultar($id_ciudad='') {
			if($id_ciudad !=''):
				$this->query = "
				SELECT id_ciudad, nom_ciudad, id_pais
				FROM tb_ciudades
				WHERE id_ciudad = '$id_ciudad' order by id_ciudad
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
			SELECT id_ciudad, nom_ciudad, m.nom_pais 
			FROM tb_ciudades as c inner join tb_pais as m
			ON (c.id_pais = m.id_pais) order by id_ciudad
			";
				
			$this->obtener_resultados_query();
			return $this->rows;
			
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('id_ciudad', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$nom_ciudad= utf8_decode($nom_ciudad);
				$this->query = "
					INSERT INTO tb_ciudades
					(id_ciudad, nom_ciudad, id_pais)
					VALUES
					(NULL, '$nom_ciudad', '$id_pais')
					";
				$resultado = $this->ejecutar_query_simple();
				return $resultado;
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$nom_ciudad= utf8_decode($nom_ciudad);
			$this->query = "
			UPDATE tb_ciudades
			SET nom_ciudad='$nom_ciudad',
			id_pais='$id_pais'
			WHERE id_ciudad = '$id_ciudad'
			";
			$resultado = $this->ejecutar_query_simple();
			return $resultado;
		}
		
		public function borrar($id_ciudad='') {
			$this->query = "
			DELETE FROM tb_ciudades
			WHERE id_ciudad = '$id_ciudad'
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>