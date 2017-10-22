<?php require_once('config.php');?>
<?php require_once(ABSPATH . 'functions/library.php');?>
<?php  require_once(ABSPATH . 'functions/front-controller.php');?>

<?php include(ABSPATH . 'templates/head.php');?>
<?php include(ABSPATH . 'templates/header.php');?>
<?php include(ABSPATH . 'templates/navbar.php');?>

<?php 
	$msg = filter_input(INPUT_GET, 'e');
	if( session_status() != PHP_SESSION_ACTIVE ){
	session_start();
	}
	$email = $_SESSION['user'];
	$user = do_obtener_usuario_id($email);
	foreach ($user as $us) {
		$id_user = (int) $us['id'];
		$data_exp_alta = do_obtener_explotaciones_alta($id_user);
		$data_exp_baja = do_obtener_explotaciones_baja($id_user);
?>
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
					<?php include(ABSPATH . 'templates/explotaciones/registroExplotacion.php');?>
			</div>
		</div>
		<?php if($data_exp_alta || $data_exp_baja): ?>
		<div class="row">
			<div class="col-xs-12 titulo_tabla">
				<h3>Explotaciones dadas de alta</h3>	
			</div>
		</div>
		<div class="row">						
			<div class="col-xs-12">
					<table class="table">
						<thead>
							<tr>
								<th class="codigo_explotacion-col">Codigo Explotación</th>
								<th class="nombre-col">Nombre</th>
								<th class="provincia-col">Provincia</th>
								<th class="municipio-col">Municipio</th>
								<th class="tipo-col">Tipo</th>
								<th class="fecha_alta-col">Fecha de alta</th>
								<th class="fecha_baja-col">Fecha de baja</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($data_exp_alta as $exp_alta) {
						$municipio = do_get_municipio_by_id($exp_alta['municipio']);
						$municipio=$municipio['municipio'];
						$id_provincia = do_get_provincia_by_municipio($exp_alta['municipio']);
						$nombre_provincia = do_get_provincia_by_id($id_provincia['provincia']);
						$nombre_provincia=$nombre_provincia['provincia'];
						?>
								<tr>
									<td class="codigo_explotacion-col"><?= $exp_alta['codigo_explotacion']?></td>
									<td class="nombre-col"><?= $exp_alta['nombre']?></td>
									<td class="provincia-col"><?= $nombre_provincia?></td>
									<td class="municipio-col"><?= $municipio?></td>
									<td class="tipo-col"><?= $exp_alta['tipo']?></td>
									<td class="fecha_alta-col"><?= $exp_alta['fecha_alta']?></td>
									<td class="fecha_baja-col"> - </td>
									<td class="edit-col"><a href="" data-toggle="modal" data-target="#editarExplotacion<?= $exp_alta['explotacion'] ?>"class="glyphicon glyphicon-pencil"></a><?php include(ABSPATH . 'templates/explotaciones/editarExplotacion.php');?></td>
									<td class="remove-col"><a href="" id="modal_bajaExplotacion" data-toggle="modal" data-target="#bajaExplotacion<?= $exp_alta['explotacion'] ?>"  class="glyphicon glyphicon-remove"></a><?php include(ABSPATH . 'templates/explotaciones/bajaExplotacion.php');?></td>	
								</tr>
						<?php  }?>
						</tbody>
					</table>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 titulo_tabla">
				<h3>Explotaciones dadas de baja</h3>	
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<table class="table">
					<thead>
						<tr>
							<th class="codigo_explotacion-col">Codigo Explotación</th>
							<th class="nombre-col">Nombre</th>
							<th class="provincia-col">Provincia</th>
							<th class="municipio-col">Municipio</th>
							<th class="tipo-col">Tipo</th>
							<th class="fecha_alta-col">Fecha de alta</th>
							<th class="fecha_baja-col">Fecha de baja</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($data_exp_baja as $exp_baja) {
					$municipio = do_get_municipio_by_id($exp_baja['municipio']);
					$municipio=$municipio['municipio'];
					$id_provincia = do_get_provincia_by_municipio($exp_baja['municipio']);
					$nombre_provincia = do_get_provincia_by_id($id_provincia['provincia']);
					$nombre_provincia=$nombre_provincia['provincia'];
					?>
						<tr>
							<td class="codigo_explotacion-col"><?= $exp_baja['codigo_explotacion']?></td>
							<td class="nombre-col"><?= $exp_baja['nombre']?></td>
							<th class="provincia-col"><?=$nombre_provincia?></th>
							<td class="municipio-col"><?=$municipio?></td>
							<td class="tipo-col"><?= $exp_baja['tipo']?></td>
							<td class="fecha_alta-col"><?= $exp_baja['fecha_alta']?></td>
							<td class="fecha_baja-col"><?= $exp_baja['fecha_baja']?></td>
							<td class="edit-col"><a href="" data-toggle="modal" data-target="#editarExplotacion<?= $exp_baja['explotacion']?>" class="glyphicon glyphicon-pencil"></a><?php include(ABSPATH . 'templates/explotaciones/editarExplotacion.php');?></td>
							<td class="remove-col"><a href="" data-toggle="modal" data-target="#eliminarExplotacion<?= $exp_baja['explotacion']?>"  class="glyphicon glyphicon-remove"></a><?php include(ABSPATH . 'templates/explotaciones/eliminarExplotacion.php');?></td>	
						</tr>
					<?php  }?>
					</tbody>
				</table>
			</div>	
		</div>
	<?php else: ?>
	<br>
	<div class="row">
		<div class="col-xs-12">
			<p class="alert alert-warning">No se han encontrado resultados</p>
		</div>
	</div>	
	<?php endif; ?>
	</div>
<?php  }?>	
		
<?php include(ABSPATH . 'templates/footer.php'); ?>