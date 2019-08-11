<?php
	include '../Modelo/modelo_sneakers.php';

	$opcion = $_GET['op'];
	switch ($opcion) {
		case 1:
			$obj = new modelo_sneakers();
			$datos = $obj->listar_calzado();
			include '../Vista/shops.php';
			break;
		case 2:
			# code...
			break;
		case 3:
			# code...
			break;
		case 4:
			# code...
			break;
		default:
			# code...
			break;
	}
?>