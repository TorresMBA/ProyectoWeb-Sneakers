<?php
	class modelo_sneakers{
		private $db;
		private $zapatilla;

		public function __construct(){
			require_once 'Conexion.php';
			$obj = new Conexion();
			$this->db = $obj->conectar();
			$this->zapatilla = array();
		}

		public function listar_calzado(){
			$sql = $this->db->query("SELECT * FROM calzado");
			while ($fila = $sql->fetch(PDO::FETCH_ASSOC)) {
				$this->zapatilla[] = $fila;
			}
			return $this->zapatilla;
		}
	}
?>