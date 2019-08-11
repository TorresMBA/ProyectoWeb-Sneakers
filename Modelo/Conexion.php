<?php
	class Conexion{
		public static function conectar(){
			try{
				$cn = new PDO('mysql:host=localhost; dbname=market', '', '');
				$cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$cn->exec('SET CHARACTER UTF8');
				}catch(Exception $e){
					echo 'Linea de Erro: '. $e->getLine();
					echo 'Erro:'.$e->getMessage();
			}
			return $cn;
		}
	}

?>