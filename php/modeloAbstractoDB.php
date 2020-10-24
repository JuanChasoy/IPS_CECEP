<?php
	abstract class ModeloAbstractoDB {
		private static $db_host ="localhost";
		private static $db_user = "root";
		private static $db_pass = "";
		protected $db_name = "base_ips";
		protected $query;
		protected $rows = array(); 
		private $conexion; 
		
		abstract protected function consultar();
		abstract protected function nuevo();
		abstract protected function editar();
		abstract protected function borrar();
		abstract protected function lista();
		
		private function abrir_conexion() {
			$this->conexion = 
			new mysqli(self::$db_host, self::$db_user, self::$db_pass, $this->db_name);
		}

		private function cerrar_conexion() {
			$this->conexion->close();
		}
		
		protected function ejecutar_query_simple() {			
			try {
				$this->abrir_conexion();
		        $this->conexion->query($this->query) 
				or die(mysqli_errno($this->conexion)." : " 
				.mysqli_error($this->conexion)."  | Query=".$this->query);
				$resultado = $this->conexion->affected_rows;
				$this->cerrar_conexion();
				return $resultado;
		    } catch(Exception $e) {
		        echo "Error! : " . $e->getMessage();
		        return false;
		    }
		}
		
		protected function obtener_resultados_query() {
			try {
				$this->abrir_conexion();
				$result = $this->conexion->query($this->query) 
					or die(mysqli_errno($this->conexion)." : " 
					.mysqli_error($this->conexion)." | Query=".$this->query);

				while ($fila = $result->fetch_assoc()){
					$this->rows[] = array_map('utf8_encode',$fila);
				}
				$result->close();
				$this->cerrar_conexion();
			} catch(Exception $e) {
		        echo "Error! : " . $e->getMessage();
		        return false;
		    }
		}
	}
?>