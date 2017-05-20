<!DOCTYPE html>
<html lang="es">
<head>
<!--esta es el master aqi esta las referencias de boosttrap-->
	<title>CRUD-CI3-COMBUSTIBLE</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</head>



<body>

<header>
	cabeza
</header>

<div id="container">
	<!--aqi va el contenido de las vistas sele estilo al index.php-->
	<div class="col-md-10">
		<?php 
		$this->load->view($contenido);
		?>
	</div>
</div>

<footer>
	pie
</footer>
</body>

</html>