<?php
    require_once("../modeloAbstractoDB.php");
    class Sedes extends ModeloAbstractoDB {
		private $id_sede;
		private $nom_sede;
        private $direc_sede;
        private $tele_sede;
        private $id_ciudad;
       
		
		function __construct() {
			//$this->db_name = '';
		}

		public function getId_sede(){
			return $this->id_sede;
		}

		public function getNom_sede(){
			return $this->nom_sede;
		}
		
		public function getDirec_sede(){
			return $this->direc_sede;
        }
        
        public function getTele_sede(){
			return $this->tele_sede;
        }
        
        public function getId_ciudad(){
			return $this->id_ciudad;
        }
        
        
		public function consultar($id_sede='') {
			if($id_sede !=''):
				$this->query = "
				SELECT id_sede, nom_sede, direc_sede, tele_sede, id_ciudad
				FROM tb_sedes
				WHERE id_sede = '$id_sede' order by id_sede
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
			SELECT id_sede, nom_sede, direc_sede, tele_sede, m.nom_ciudad 
			FROM tb_sedes as c inner join tb_ciudades as m
			ON (c.id_ciudad = m.id_ciudad) order by id_sede
			";
			
			$this->obtener_resultados_query();
			return $this->rows;
			
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('id_sede', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$nom_sede= utf8_decode($nom_sede);
				$this->query = "
					INSERT INTO tb_sedes
					(id_sede, nom_sede, direc_sede, tele_sede, id_ciudad)
					VALUES
					(NULL, '$id_sede', '$nom_sede', '$direc_sede', '$tele_sede', '$id_ciudad')
					";
				$resultado = $this->ejecutar_query_simple();
				return $resultado;
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$nom_empleado= utf8_decode($nom_empleado);
			$this->query = "
			UPDATE tb_empleados
			SET nom_empleado='$nom_empleado',
			id_sede='$id_sede'
			WHERE id_empleado = '$id_empleado'
			";
			$resultado = $this->ejecutar_query_simple();
			return $resultado;
		}
		
		public function borrar($id_empleado='') {
			$this->query = "
			DELETE FROM tb_empleados
			WHERE id_empleado = '$id_empleado'
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>