<?php
    require_once("../modeloAbstractoDB.php");
    
    class Citas extends ModeloAbstractoDB {

        private $id_cita;
        private $nom_usu_cita;
        private $cedu_usu_cita;
        private $correo_cita;
		private $id_servicio;    
		private $id_sede;
        private $id_medico;
        private $fecha;
		
		function __construct() {
			
		}

		public function getId_cita(){
			return $this->id_cita;
		}

		public function getNom_usu_cita(){
			return $this->nom_usu_cita;
		}
		
		public function getCedu_usu_cita(){
			return $this->cedu_usu_cita;
        }

        public function getCorreo_cita(){
			return $this->correo_cita;
        }
        
        public function getId_servicio(){
			return $this->id_servicio;
		}
		
		public function getId_sede(){
			return $this->id_sede;
        }

        public function getId_medico(){
			return $this->id_medico;
        }
        
        public function getFecha(){
			return $this->fecha;
        }

		public function consultar($id_cita='') {
			if($id_cita !=''):
				$this->query = "
                SELECT id_cita, nom_usu_cita, cedu_usu_cita, correo_cita, id_servicio, id_sede, id_medico, fecha
                FROM tb_citas
                WHERE id_cita = '$id_cita' ORDER BY id_cita
				";
				$this->obtener_resultados_query();
			endif;
			if(count($this->rows) == 1):
				foreach ($this->rows[0] as $propiedad=>$valor):
					$this->$propiedad = $valor;
				endforeach;
			endif;
		}
		
		
		public function lista() {
			$this->query = "
			SELECT id_cita, nom_usu_cita, cedu_usu_cita, correo_cita, fecha, tb_sedes.nom_sede, tb_servicio.tipo_servicio, tb_medicos.nom_medico
			FROM tb_citas
			INNER JOIN tb_sedes on (tb_citas.id_sede = tb_sedes.id_sede)
			INNER JOIN tb_servicio on (tb_citas.id_servicio = tb_servicio.id_servicio)
			INNER JOIN tb_medicos on (tb_citas.id_medico = tb_medicos.id_medico)
			";
			
			$this->obtener_resultados_query();
			return $this->rows;
		}


		
		public function nuevo($datos=array()) {
			if(array_key_exists('id_cita', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$nom_usu_cita= utf8_decode($nom_usu_cita);
				$this->query = "
					INSERT INTO tb_citas
					(id_cita, nom_usu_cita, cedu_usu_cita, correo_cita, fecha, id_servicio, id_sede, id_medico)
					VALUES
					(NULL, '$nom_usu_cita','$cedu_usu_cita','$correo_cita','$fecha','$id_servicio','$id_sede','$id_medico')
					";
				$resultado = $this->ejecutar_query_simple();
				return $resultado;
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$nom_usu_cita= utf8_decode($nom_usu_cita);
			$this->query = "
			UPDATE tb_citas
			SET nom_usu_cita='$nom_usu_cita',
			cedu_usu_cita='$cedu_usu_cita',
			correo_cita='$correo_cita',
			id_servicio='$id_servicio',
			id_medico='$id_medico',
			id_sede='$id_sede',
			fecha='$fecha'
			WHERE id_cita = '$id_cita'
			";
			$resultado = $this->ejecutar_query_simple();
			return $resultado;
		}
		
		public function borrar($id_cita='') {
			$this->query = "
			DELETE FROM tb_citas
			WHERE id_cita = '$id_cita'
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
		function __destruct() {
			
		}
	}
?>