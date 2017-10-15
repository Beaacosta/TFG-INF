<?php require_once('config.php');?>
<?php require_once(ABSPATH . 'functions/library.php');?>
<?php  require_once(ABSPATH . 'functions/front-controller.php');?>

<?php include(ABSPATH . 'templates/head.php');?>

<?php 
$msg = filter_input(INPUT_GET, 'e');
 ?>

<div id="portadaPpal" class="container-fluid">
	<?php include(ABSPATH . 'templates/errores/err_inicio.php');?>
	<div class="row" id="portada">
		<div class=col-xs-12>
			<h1 id="titulo">Cattle manager</h1>
		</div>
	</div>

	<div class="row" id="inicioSesion">
		<form method="POST" action="/TFG-INF/index.php?accion=iniciar_sesion">
	 		<div class="form-group">
	   			<label for="email">Email</label>
	    		<input type="text" name="email" class="form-control" id="email" placeholder="example@gmail.com">
	  		</div>
	  		<div class="form-group">
	    		<label for="password">Contraseña</label>
	    		<input type="password" name="password" class="form-control" id="password" placeholder="Contraseña">
	  		</div>
	  		<button type="submit" class="btnPpal btn btn-lg btn-block">Iniciar Sesión</button>
	  		<br>
		</form>
		<a href="#" data-toggle="modal" data-target="#ventanaRegistro"><p class="text-center">Si aún no estás registrado pulse aquí.</p></a>
		<?php include(ABSPATH . 'templates/usuarios/registroUsuario.php');?>
	</div>
</div>
<div id="caracteristicas" class="container-fluid">
	<h2 class="text-center"><strong>¿POR QUÉ REGISTRARME?</strong></h2>	
	<hr>
	<div class="row caract">
		<div class="col-xs-12 col-md-6">
			<h3 class="align-left">SOFTWARE GRATUITO</h3>
			<p class="align-left">La aplicación Cattle Maneger es una aplicación totalmente gratuita.
			Puedes disfrutar de todas y cada una de sus funcionalidades sin ningún tipo
			de coste. Puedes gestionar tus explotaciones, tus fincas y parcelas, tus animales y
			otras múltiples funcionalidades de manera totalmente gratuita.
			Para comenzar a disfrutar de ella lo único que tienes que hacer es registrarte 
			seleccionando el botón de registro que hay al inicio o al final de esta página.
			</p>
		</div>
		<div class="col-xs-12 col-md-6">
			<img src="images/caracteristicas/hucha_cerdito.png" class="image">
		</div>
	</div>
	<div class="row caract">
		<div class="col-xs-12 col-md-6">
			<img src="images/caracteristicas/multidispositivo.png" class="image">
		</div>
		<div class="col-xs-12 col-md-6">
			<h3 class="align-left">COMPATIBLE CON MÓVILES, TABLETS Y ORDENADORES</h3>
			<p class="align-left">La aplicación Cattle Maneger es una aplicación multiplataforma.
			Podrás proceder a su uso y disfrute desde un ordenador, desde una tablet
			o desde un teléfono móvil. Cuenta con un diseño responsive el cual permite que
			la página se adapte al tamaño de la pantalla de tu dispositivo.
			Para comenzar a disfrutar de ella lo único que tienes que hacer es registrarte 
			seleccionando el botón de registro que hay al inicio o al final de esta página.
			</p>
		</div>
	</div>
	<div class="row caract">
		<div class="col-xs-12 col-md-6">
			<h3 class="align-left">EFICAZ CON MÚLTIPLES FUNCIONALIDADES</h3>
			<p class="align-left">Con la aplicación Cattle Maneger podrás gestionar tus explotaciones, 
			tus fincas y parcelas y tus animales. Además cuenta con un control de los nacimientos, gestaciones y movimientos
			de tus animales, así como un reporting visual (mediante gráficas).
			Para comenzar a disfrutar de ella lo único que tienes que hacer es registrarte 
			seleccionando el botón de registro que hay al inicio o al final de esta página.
			</p>
		</div>
		<div class="col-xs-12 col-md-6">
			<img src="images/caracteristicas/eficaz.png" class="image">
		</div>
	</div>
	<div class="row caract">
		<div class="col-xs-12 col-md-6">
			<img src="images/caracteristicas/facil.png" class="image">
		</div>
		<div class="col-xs-12 col-md-6">
			<h3 class="align-left">FÁCIL DE USAR</h3>
			<p class="align-left">La aplicación Cattle Maneger es una aplicación diseñada para que
			su manejo sea lo más sencillo posible. Queremos que todos los ganaderos puedan utilizarla
			sin que les conlleve ningún tipo de esfuerzo. Es por ello que el diseño de la interfaz gráfica 
			es muy intuitivo.
			Para comenzar a disfrutar de ella lo único que tienes que hacer es registrarte 
			seleccionando el botón de registro que hay al inicio o al final de esta página.</p>
		</div>
	</div>
	<div class="row caract">
		<div class="col-xs-12 col-md-6">
			<h3 class="align-left">PRESENCIA EN REDES SOCIALES</h3>
			<p class="align-left">Cattle Manager tiene presencia en las redes sociales. Tenemos una página
			en facebook, una página en youtube, una cuenta en twitter y en gmail. De esta manera podrás estar
			siempre al día de las últimas novedades y actualizaciones. Además, en youtube existen vídeos explicativos
			de como explotar al máximo la aplicación.
			Para comenzar a disfrutar de ella lo único que tienes que hacer es registrarte 
			seleccionando el botón de registro que hay al inicio o al final de esta página.</p>
		</div>
		<div class="col-xs-12 col-md-6">
			<img src="images/caracteristicas/redes_sociales.png" class="image">
		</div>
	</div>
	<div class="row caract">
		<div class="col-xs-12 col-md-6">
			<img src="images/caracteristicas/comunicacion.png" class="image">
		</div>
		<div class="col-xs-12 col-md-6">
			<h3 class="align-left">COMUNICACIÓN ENTRE USUARIOS</h3>
			<p class="align-left">Desde la aplicación Cattle Manager podrás comunicarte con el resto de ganaderos
			de España. Cuenta con un servicio de mensajería en el que podrás comunicarte con quien
			estés interesado, llevar un registro de tus mensajes y compartir tus experiencias con otros ganaderos.
			Para comenzar a disfrutar de ella lo único que tienes que hacer es registrarte 
			seleccionando el botón de registro que hay al inicio o al final de esta página.</p>
		</div>
	</div>
</div>
<div id="anuncios" class="container-fluid">
	<div class="row anuncio">
		<div class="col-xs-12 col-md-9">
			<img src="images/estrellas.png" style="width:180px;" class="image left">
			<br>
			<br>
			<h3 class="align-left">CATTLE MANAGER</h3>
			<p class="align-left">¿Quieres empezar a formar parte de esta comunidad de ganaderos? Adelante, son todo ventajas. </p>
		</div>
		<div class="col-xs-12 col-md-3 text-center" style="display:block; margin-top:15px;">
			<a href="" data-toggle="modal" data-target="#ventanaRegistro">
				<img src="images/registro.png" style="width:100px;"> 
				<p style="color:#227A4B">Quiero registrarme</p>
			</a>
		<?php include(ABSPATH . 'templates/registroUsuario.php');?>
		</div>
	</div>
</div>
<?php include(ABSPATH . 'templates/footer.php') ?>