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
	<?php foreach($user as $us): ?>
		<div class="row" id="editar_contrasenya">
			<?php include(ABSPATH . 'templates/nav_perfil.php');?>
			<div class="col-xs-9" id="editar_perfil_dcha">
				<h4>Mi Perfil: Cambia tu contraseña</h4>
				<hr>
				<form action="/TFG-INF/perfil_contrasenya.php?accion=editar_contrasenya&upid=<?=$us['id']?>" method="post">
					<div class="input-group input_espaciado">
						<span class="input-group-addon" id="basic-addon1">Antigua Contraseña</span>
						<input type="text" class="form-control" name="cont_ant" id="Nombre"  aria-describedly="basic-addon1">
					</div>
					<div class="input-group input_espaciado">
						<span class="input-group-addon" id="basic-addon1">Nueva Contraseña</span>
						<input type="text" class="form-control" name="cont_nueva" id="Apellidos"  aria-describedly="basic-addon1">
					</div>
					<div class="input-group input_espaciado">
						<span class="input-group-addon" id="basic-addon1">Verificación Nueva Contraseña</span>
						<input type="text" class="form-control" name="verif_cont" id="Email" aria-describedly="basic-addon1">
					</div>
					<button type="hidden" class="btnPpal btn btn-lg btn-block" name="accion" style="float: right;">Guardar cambios</button>	
				</form>
			</div>
		</div>
	<?php endforeach; ?>
	</div>

<?php include(ABSPATH . 'templates/footer.php'); ?>