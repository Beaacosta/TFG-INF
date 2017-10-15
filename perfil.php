<?php require_once('config.php');?>
<?php require_once(ABSPATH . 'functions/library.php');?>
<?php  require_once(ABSPATH . 'functions/front-controller.php');?>

<?php include(ABSPATH . 'templates/head.php');?>
<?php include(ABSPATH . 'templates/header.php');?>

<?php 
if( session_status() != PHP_SESSION_ACTIVE ){
	session_start();
}
$email = $_SESSION['user'];
$user = do_obtener_usuario_email($email);
$msg = filter_input(INPUT_GET, 'e');
?>
<div class="container">
	<?php include(ABSPATH . 'templates/errores/err_perfil.php');?>
	<?php foreach($user as $us): 
		if( $us['apellido2'] == ""){
			$us['apellido2'] = "";
		}
	?>
		<div class="row" id="editar_perfil">
			<?php include(ABSPATH . 'templates/nav_perfil.php');?>
			<div class="col-xs-9" id="editar_perfil_dcha">
				<h4>Mi Perfil: Cambia tus datos personales</h4>
				<hr>
				<form action="/TFG-INF/perfil.php?accion=editar_usuario&uid=<?=$us['id']?>" method="post">
					<div class="input-group input_espaciado">
						<span class="input-group-addon" id="basic-addon1">Nombre</span>
						<input type="text" class="form-control" placeholder="<?=$us['nombre']?>" id="Nombre" name="nombre" aria-describedly="basic-addon1">
					</div>
					<div class="input-group input_espaciado">
						<span class="input-group-addon" id="basic-addon1">Primer Apellido</span>
						<input type="text" class="form-control" placeholder="<?=$us['apellido1'] ?>" id="Apellidos" name="apellido1" aria-describedly="basic-addon1">
					</div>
					<div class="input-group input_espaciado">
						<span class="input-group-addon" id="basic-addon1">Segundo Apellido</span>
						<input type="text" class="form-control" placeholder="<?=$us['apellido2'] ?>" id="Apellido2" name="apellido2" aria-describedly="basic-addon1">
					</div>
					<div class="input-group input_espaciado">
						<span class="input-group-addon" id="basic-addon1">Email</span>
						<input type="text" class="form-control" placeholder="<?=$email ?>" id="Ciudad" name="email" aria-describedly="basic-addon1">
					</div>
					<button type="hidden" class="btnPpal btn btn-lg btn-block" name="accion" style="float: right;">Guardar cambios</button>	
				</form>
				<a href="#" style="float: right; margin-top: 3%; color: grey;" data-toggle="modal" data-target="#eliminarUsuario">Dar de baja de la aplicación</a>
				<?php include(ABSPATH . 'templates/usuarios/eliminarUsuario.php');?>
			</div>
		</div>
	<?php endforeach; ?>
</div>
<?php include(ABSPATH . 'templates/footer.php'); ?>