<?php
	class modelo_sneakers{
		private $db;
		private $calzado;

		public function __construct(){
			require_once 'Conexion.php';
			$obj = new Conexion();
			$this->db = $obj->conectar();
			$this->calzado = array();
		}

		public function listar_calzado(){
			$sql = $this->db->query("CALL LISTAR CALZADO");
			while ($fila = $sql->fetch(PDO::FETCH_ASSOC)) {
				$this->calzado[] = $fila;
			}
			return $calzado;
		}
	}
?>