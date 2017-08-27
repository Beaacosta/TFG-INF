<?php require_once('config.php');?>
<?php require_once(ABSPATH . 'functions/library.php');?>
<?php  require_once(ABSPATH . 'functions/front-controller.php');?>

<?php include(ABSPATH . 'templates/head.php');?>
<?php include(ABSPATH . 'templates/header.php');?>

<div class="container">
		<div class="row" id="editar_perfil">
			<?php include(ABSPATH . 'templates/nav_perfil.php');?>
			<div class="col-xs-9" id="editar_perfil_dcha">
				<h4>Mi Perfil: Cambia tu contraseña</h4>
				<hr>
				<form action="editar_usuario" method="post">
					<div class="input-group input_espaciado">
						<span class="input-group-addon" id="basic-addon1">Antigua Contraseña</span>
						<input type="text" class="form-control" value="${usuario_sesion.nombre}" name="Nombre" id="Nombre" placeholder="Nombre" aria-describedly="basic-addon1">
					</div>
					<div class="input-group input_espaciado">
						<span class="input-group-addon" id="basic-addon1">Nueva Contraseña</span>
						<input type="text" class="form-control" value="${usuario_sesion.apellidos}" name="Apellidos" id="Apellidos" placeholder="Apellidos" aria-describedly="basic-addon1">
					</div>
					<div class="input-group input_espaciado">
						<span class="input-group-addon" id="basic-addon1">Verificación Nueva Contraseña</span>
						<input type="text" class="form-control" value="${usuario_sesion.mail}" name="Email" id="Email" placeholder="Email" aria-describedly="basic-addon1">
					</div>
					<button type="hidden" class="btnPpal btn btn-lg btn-block" name="accion" style="float: right;">Guardar cambios</button>	
				</form>
			</div>
		</div>
	</div>

<?php include(ABSPATH . 'templates/footer.php'); ?>