<?php require_once('config.php');?>
<?php require_once(ABSPATH . 'functions/library.php');?>
<?php  require_once(ABSPATH . 'functions/front-controller.php');?>

<?php include(ABSPATH . 'templates/head.php');?>
<?php include(ABSPATH . 'templates/header.php');?>
<?php include(ABSPATH . 'templates/navbar.php');?>

<?php 
	$data_exp_alta = do_obtener_explotaciones_alta();
	$data_exp_baja = do_obtener_explotaciones_baja();
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
	<div class="row">
		<div class="col-xs-12 titulo_tabla">
			<h3>Explotaciones dadas de alta</h3>	
		</div>
	</div>
<div class="row">
	<?php if($data_exp_alta): ?>
	<div class="col-xs-12">
		<table class="table">
			<thead>
				<tr>
					<th class="id-col">ID</th>
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
				<?php foreach($data_exp_alta as $explotacion): 
					$municipio = do_get_municipio_by_id($explotacion['municipio']);
					$municipio=$municipio['municipio'];
					$id_provincia = do_get_provincia_by_municipio($explotacion['municipio']);
					$nombre_provincia = do_get_provincia_by_id($id_provincia['provincia']);
					$nombre_provincia=$nombre_provincia['provincia'];
				?>
					<tr>
						<td class="id-col"><?= $explotacion['id']?></td>
						<td class="codigo_explotacion-col"><?= $explotacion['codigo_explotacion']?></td>
						<td class="nombre-col"><?= $explotacion['nombre']?></td>
						<td class="provincia-col"><?= $nombre_provincia?></td>
						<td class="municipio-col"><?= $municipio?></td>
						<td class="tipo-col"><?= $explotacion['tipo']?></td>
						<td class="fecha_alta-col"><?= $explotacion['fecha_alta']?></td>
						<td class="fecha_baja-col"> - </td>
						<td class="edit-col"><a href="" data-toggle="modal" data-target="#editarExplotacion" class="glyphicon glyphicon-pencil"></a><?php include(ABSPATH . 'templates/explotaciones/editarExplotacion.php');?></td>
							<td class="remove-col"><a href="" data-toggle="modal" data-target="#eliminarExplotacion"  class="glyphicon glyphicon-remove"></a><?php include(ABSPATH . 'templates/explotaciones/eliminarExplotacion.php');?></td>	
					</tr>
				<?php endforeach; 
				?>
			</tbody>
		</table>
	</div>
	<?php else: ?>
	<div class="col-xs-12">
		<p class="alert alert-warning">No se han encontrado resultados</p>
	</div>
	<?php endif; ?>
</div>
	<div class="row">
		<div class="col-xs-12 titulo_tabla">
			<h3>Explotaciones dadas de baja</h3>	
		</div>
	</div>
	<div class="row">
		<?php if($data_exp_baja): 
		?>
		<div class="col-xs-12">
			<table class="table">
				<thead>
					<tr>
						<th class="id-col">ID</th>
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
					<?php foreach($data_exp_baja as $explotacion): 
					$municipio = do_get_municipio_by_id($explotacion['municipio']);
					$municipio=$municipio['municipio'];
					$id_provincia = do_get_provincia_by_municipio($explotacion['municipio']);
					$nombre_provincia = do_get_provincia_by_id($id_provincia['provincia']);
					$nombre_provincia=$nombre_provincia['provincia'];
				?>
						<tr>
							<td class="id-col">id</td>
							<td class="codigo_explotacion-col"><?= $explotacion['codigo_explotacion']?></td>
							<td class="nombre-col"><?= $explotacion['nombre']?></td>
							<th class="provincia-col"><?=$nombre_provincia?></th>
							<td class="municipio-col"><?=$municipio?></td>
							<td class="tipo-col"><?= $explotacion['tipo']?></td>
							<td class="fecha_alta-col"><?= $explotacion['fecha_alta']?></td>
							<td class="fecha_baja-col"><?= $explotacion['fecha_baja']?></td>
							<td class="edit-col"><a href="" data-toggle="modal" data-target="#editarExplotacion" class="glyphicon glyphicon-pencil"></a><?php include(ABSPATH . 'templates/explotaciones/editarExplotacion.php');?></td>
							<td class="remove-col"><a href="" data-toggle="modal" data-target="#eliminarExplotacion"  class="glyphicon glyphicon-remove"></a><?php include(ABSPATH . 'templates/explotaciones/eliminarExplotacion.php');?></td>	
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<?php else: ?>
			<div class="col-xs-12">
			<p class="alert alert-warning">No se han encontrado resultados</p>
		</div>
		<?php endif; ?>
	</div>
</div>


<?php include(ABSPATH . 'templates/footer.php'); ?>