<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Downy Shoes an Ecommerce Category Bootstrap Responsive Website Template | Contact :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Downy Shoes Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<!-- //custom-theme -->
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/style7.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Owl-carousel-CSS -->
	<link rel="stylesheet" type="text/css" href="../css/contact.css">
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="../css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
	<?php
		include_once 'header.php';
	?>
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<h3 class="head">Login</h3>
			<p class="head_para">Inicie sesion</p>
			<div class="inner_section_w3ls">
				<div class="col-md-7 contact_grid_right">
					<h6>Completo los datos para ingresar</h6>
					<form action="../Controlador/controlador_sesion.php?op=1" method="post">		
						<div class="col-md-6 col-sm-6 contact_left_grid">
							<input type="text" name="username" placeholder="Usuario" required="">
							<input type="text" name="password" placeholder="Contraseña" required="">
						</div>				
						<div class="clearfix">  </div>
						<br>
						<input type="submit" value="Ingresar">
					</form>
				</div>	
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<?php
		include_once 'footer.php';
	?>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<script src="../js/classie.js"></script>
	<script src="../js/easy-responsive-tabs.js"></script>
	<script type="text/javascript" src="../js/easing.js"></script>
	<script type="text/javascript" src="../js/bootstrap-3.1.1.min.js"></script>
</body>
</html>