<?php require_once('config.php');?>
<?php require_once(ABSPATH . 'functions/library.php');?>
<?php  require_once(ABSPATH . 'functions/front-controller.php');?>

<?php include(ABSPATH . 'templates/head.php');?>
<?php include(ABSPATH . 'templates/header.php');?>
<?php include(ABSPATH . 'templates/navbar.php');?>
<?php include(ABSPATH . 'templates/nav_explotacion.php');?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 align-right">
			<hr style="margin-top: 1%;">
			<a href="" data-toggle="modal" data-target="#ventanaFinca" class="btn-mas"><span>Nueva Finca</span></a>	
			<?php include(ABSPATH . 'templates/explotaciones/registroFinca.php');?>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h2 class="subtitulo_paginas text-center">Fincas de la explotación</h2>	
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 caja-finca">
			<h3>Nombre Finca</h3>
			<div class="caja-parcela">
				<h4>Nombre parcela</h4>
			</div>	
			<div class="caja-parcela">
				<h4>Nombre parcela</h4>
			</div>	
		</div>
		<div class="col-xs-12 caja-finca">
			<h3>Nombre Finca</h3>
			<div class="caja-parcela">
				<h4>Nombre parcela</h4>
			</div>	
			<div class="caja-parcela">
				<h4>Nombre parcela</h4>
			</div>	
		</div>
	</div>
</div>


<?php include(ABSPATH . 'templates/footer.php'); ?>