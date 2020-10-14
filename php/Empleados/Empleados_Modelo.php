<?php
    require_once("../modeloAbstractoDB.php");
    class Empleados extends ModeloAbstractoDB {
		private $id_empleado;
		private $nom_empleado;
        private $cedu_emplado;
        private $celu_empleado;
        private $dire_empleado;
        private $email_empleado;
		private $id_sede;
		
		function __construct() {
			//$this->db_name = '';
		}

		public function getId_empleado(){
			return $this->id_empleado;
		}

		public function getNom_empleado(){
			return $this->nom_empleado;
		}
		
		public function getCedu_emplado(){
			return $this->cedu_emplado;
        }
        
        public function getCelu_empleado(){
			return $this->celu_empleado;
        }
        
        public function getDire_empleado(){
			return $this->dire_empleado;
        }
        
        public function getEmail_empleado(){
			return $this->email_empleado;
        }
        
        public function getId_sede(){
			return $this->id_sede;
		}

		public function consultar($id_empleado='') {
			if($id_empleado !=''):
				$this->query = "
				SELECT id_empleado, nom_empleado, cedu_emplado, celu_empleado, dire_empleado, email_empleado, id_sede
				FROM tb_empleados
				WHERE id_empleado = '$id_empleado' order by id_empleado
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
			SELECT id_empleado, nom_empleado, m.nom_sede
			FROM tb_empleados as c inner join tb_sedes as m
			ON (c.id_sede = m.id_sede) order by id_empleado
			";
			
			$this->obtener_resultados_query();
			return $this->rows;
			
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('id_empleado', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$nom_empleado= utf8_decode($nom_empleado);
				$this->query = "
					INSERT INTO tb_empleados
					(id_empleado, nom_empleado, cedu_emplado, celu_empleado, dire_empleado, email_empleado, id_sede)
					VALUES
					(NULL, '$nom_empleado', '$cedu_emplado', '$celu_empleado', '$dire_empleado', '$email_empleado', '$id_sede')
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