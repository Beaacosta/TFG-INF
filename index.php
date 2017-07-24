<?php require_once('config.php');?>
<?php require_once( ABSPATH . 'functions/library.php');?>
<?php  require_once( ABSPATH . 'functions/front-controller.php');?>

<?php include(ABSPATH . 'templates/header.php');?>

<div id="portadaPpal" class="container-fluid">
	<div class="row" id="portada">
		<div class=col-xs-12>
			<h1 id="titulo">Rivera de Villoria</h1>
		</div>
	</div>

	<div class="row" id="inicioSesion">
		<form>
	 		<div class="form-group">
	   			<label for="email">Email</label>
	    		<input type="text" class="form-control" id="email" placeholder="example@gmail.com">
	  		</div>
	  		<div class="form-group">
	    		<label for="password">Contraseña</label>
	    		<input type="password" class="form-control" id="password" placeholder="Contraseña">
	  		</div>
	  		<button type="button" class="btnPpal btn btn-lg btn-block">Iniciar Sesión</button>
	  		<br>
	  		<a href="#"><p class="text-center">Si aún no estás registrado pulse aquí.</p></a>
		</form>
	</div>
</div>
<div id="caracteristicas" class="container-fluid">
	<h2 class="text-center"><strong>¿POR QUÉ REGISTRARME?</strong></h2>	
	<hr>
	<div class="row caract">
		<div class="col-xs-12 col-md-6">
			<h3 class="align-left">TITULO CARACTERÍSTICA</h3>
			<p class="align-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="col-xs-12 col-md-6">
			<img src="images/caracteristicas/caract1.png" class="image">
		</div>
	</div>
	<div class="row caract">
		<div class="col-xs-12 col-md-6">
			<img src="images/caracteristicas/caract1.png" class="image">
		</div>
		<div class="col-xs-12 col-md-6">
			<h3 class="align-left">TITULO CARACTERÍSTICA</h3>
			<p class="align-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
</div>
<div id="anuncios" class="container-fluid">
	<div class="row anuncio">
		<div class="col-xs-12 col-md-9">
			<img src="images/estrellas.png" style="width:180px;" class="image left">
			<br>
			<br>
			<h3 class="align-left">TITULO ANUNCIO</h3>
			<p class="align-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
		</div>
		<div class="col-xs-12 col-md-3 text-center" style="display:block; margin-top:15px;">
			<img src="images/registro.png" style="width:100px;"> 
			<p style="color:#227A4B">Quiero registrarme</p>
		</div>
	</div>
</div>

<?php include(ABSPATH . 'templates/footer.php') ?>