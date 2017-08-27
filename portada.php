<?php require_once('config.php');?>
<?php require_once(ABSPATH . 'functions/library.php');?>
<?php  require_once(ABSPATH . 'functions/front-controller.php');?>

<?php include(ABSPATH . 'templates/head.php');?>
<?php include(ABSPATH . 'templates/header.php');?>
<?php include(ABSPATH . 'templates/navbar.php');?>

<div id="ppal" class="container-fluid">

	<div clas="row">
		<div class="col-xs-12" id="caja_tiempo">

		</div>
		<div class="col-xs-12 col-md-4">
			<form method="GET" action="/TFG-INF/animales.php">
			<button id="caja_animales" type="submit">
			</form>
				<h3 class="titulo_caja_ppal">Animales</h3>
				<p class="texto_caja_ppal">24 animales</p>
				<img src="images/portada/animales.png" height="100px" width="100px">
			</button>
		</div>
		<div class="col-xs-12 col-md-4">
			<form method="GET" action="/TFG-INF/explotaciones.php">
			<button id="caja_explotaciones">
			</form>
				<h3 class="titulo_caja_ppal">Explotaciones</h3>
				<p class="texto_caja_ppal">3 explotaciones</p>
				<img src="images/portada/explotaciones.png" height="100px" width="100px">
			</button>
		</div>
		<div class="col-xs-12 col-md-4">
			<form method="GET" action="/TFG-INF/reproduccion.php">
			<button id="caja_embarazos">
			</form>
				<h3 class="titulo_caja_ppal">Hembras preñadas</h3>
				<p class="texto_caja_ppal">8 hembras preñadas</p>
				<img src="images/portada/embarazos.png" height="100px" width="100px">
			</button>
		</div>
		<div class="col-xs-12 col-md-6">
			<form method="GET" action="/TFG-INF/movimientos.php">
			<button id="caja_movimientos">
			</form>
				<h3 class="titulo_caja_ppal">Movimientos</h3>
				<p class="texto_caja_ppal">4 salidas y 6 entradas en el último año</p>
				<img src="images/portada/movimientos.png" height="100px" width="100px">
			</button>
		</div>
		<div class="col-xs-12 col-md-6">
			<form method="GET" action="/TFG-INF/estadisticas.php">
			<button id="caja_estadisticas">
			</form>
				<h3 class="titulo_caja_ppal">Estadísticas</h3>
				<p class="texto_caja_ppal">Consulta todas las estadísticas</p>
				<img src="images/portada/estadisticas.png" height="100px" width="100px">
			</button>
		</div>
	</div>
</div>


<?php include(ABSPATH . 'templates/footer.php'); ?>