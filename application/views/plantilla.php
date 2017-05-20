<!DOCTYPE html>
<html lang="es">
<head>
<!--esta es el master aqi esta las referencias de boosttrap-->
	<title>CRUD-CI3-COMBUSTIBLE</title>
	<link href="<?php  echo base_url('public/css/bootstrap.css')?>" rel="stylesheet">
	<script src="<?php echo base_url('public/js/jquery.min.js')?>"></script>
	<script src="<?php echo base_url('public/js/bootstrap.js')?>"></script>
	<script src="<?php echo base_url('public/js/bootstrap.js')?>"></script>
	<script src="<?php echo base_url('public/js/jquery.js')?>"></script>
	<script src="<?php echo base_url('public/js/bootstrap.min.js')?>"></script>

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