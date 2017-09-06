<?php require_once('config.php');?>
<?php require_once(ABSPATH . 'functions/library.php');?>
<?php  require_once(ABSPATH . 'functions/front-controller.php');?>

<?php include(ABSPATH . 'templates/head.php');?>
<?php include(ABSPATH . 'templates/header.php');?>
<?php include(ABSPATH . 'templates/navbar.php');?>

<div id="explotaciones" class="container">
	<div clas="row">
		<div class="col-md-12 text-center">
            <h2 class="titulo_paginas">Mis Explotaciones</h2>
            <hr style="margin-top: 0%;">
          </div>
	</div>
	<div class="row">
		<div class="col-xs-12 align-right">
				<a href="" data-toggle="modal" data-target="#ventanaExplotacion" class="btn-mas"><span>Nueva Explotación</span></a>	
				<?php include(ABSPATH . 'templates/registroExplotacion.php');?>
		</div>
	</div>
</div>


<?php include(ABSPATH . 'templates/footer.php'); ?>