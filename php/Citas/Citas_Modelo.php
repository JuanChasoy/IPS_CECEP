<?php
    require_once("../modeloAbstractoDB.php");
    
    class Citas extends ModeloAbstractoDB {

        private $id_cita;
        private $nom_usu_cita;
        private $cedu_usu_cita;
        private $correo_cita;
        private $id_servicio;
		
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

		public function consultar($id_cita='') {
			if($id_cita !=''):
				$this->query = "
                SELECT id_cita,nom_usu_cita,cedu_usu_cita,correo_cita,id_servicio
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
			SELECT id_cita,nom_usu_cita,cedu_usu_cita,correo_cita, s.tipo_servicio
			FROM tb_citas as c inner join tb_servicio as s
			ON (c.id_servicio = s.id_servicio) order by id_cita
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
					(id_cita,nom_usu_cita,cedu_usu_cita,correo_cita,id_servicio)
					VALUES
					(NULL, '$id_cita','$nom_usu_cita','$cedu_usu_cita','$correo_cita','$id_servicio')
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
			UPDATE tb_empleados
			SET nom_usu_cita='$nom_usu_cita',
			nom_usu_cita='$nom_usu_cita',
			cedu_usu_cita='$cedu_usu_cita',
			correo_cita='$correo_cita',
			id_servicio='$id_servicio',
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