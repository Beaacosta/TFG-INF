<?php require_once('config.php');?>
<?php require_once(ABSPATH . 'functions/library.php');?>
<?php  require_once(ABSPATH . 'functions/front-controller.php');?>

<?php include(ABSPATH . 'templates/head.php');?>
<?php include(ABSPATH . 'templates/header.php');?>
<?php include(ABSPATH . 'templates/navbar.php');?>

<?php 
	$data_mov_alta = do_obtener_movimientos_alta();
	$data_mov_baja = do_obtener_movimientos_baja();
 ?>

<div id="movimientos" class="container">
	<div clas="row">
		<div class="col-md-12 text-center">
            <h2 class="titulo_paginas">Mis Movimientos</h2>
            <hr style="margin-top: 0%;">
          </div>
	</div>
	<div class="row">
		<div class="col-xs-12 align-right">
			<a href="" data-toggle="modal" data-target="#ventanaAlta" class="btn-mas"><span>Nueva alta</span></a>	
			<?php include(ABSPATH . 'templates/movimientos/registroAlta.php');?>
			<a href="" data-toggle="modal" data-target="#ventanaBaja" class="btn-mas"><span>Nueva Baja</span></a>	
			<?php include(ABSPATH . 'templates/movimientos/registroBaja.php');?>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 titulo_tabla">
			<h3>Registro de altas</h3>	
		</div>
	</div>
	<div class="row">
	<div class="col-xs-12">
		<table class="table">
			<thead>
				<tr>
					<th class="id-col">ID</th>
					<th class="animal-col">Animal</th>
					<th class="causa-col">Causa</th>
					<th class="origen-col">Origen</th>
					<th class="fecha_alta-col">Fecha de alta</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($data_mov_alta as $altas): 
				?>
					<tr>
						<td class="id-col"><?= $altas['id']?></td>
						<td class="animal-col"><?= $altas['animal']?></td>
						<td class="causa-col"><?= $altas['causa']?></td>
						<td class="origen-col"><?= $altas['origen']?></td>
						<td class="fecha_alta-col"><?= $altas['fecha_alta']?></td>
						<td class="edit-col"><a href="" data-toggle="modal" data-target="#editarAlta" class="glyphicon glyphicon-pencil"></a><?php include(ABSPATH . 'templates/movimientos/editarAlta.php');?></td>
						<td class="remove-col"><a href="" data-toggle="modal" data-target="#eliminarAlta"  class="glyphicon glyphicon-remove"></a><?php include(ABSPATH . 'templates/movimientos/eliminarAlta.php');?></td>	
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	</div>
	<div class="row">
		<div class="col-xs-12 titulo_tabla">
			<h3>Registro de bajas</h3>	
		</div>
	</div>
	<div class="row">
	<div class="col-xs-12">
		<table class="table">
			<thead>
				<tr>
					<th class="id-col">ID</th>
					<th class="animal-col">Animal</th>
					<th class="causa-col">Causa</th>
					<th class="destino-col">Destino</th>
					<th class="fecha_baja-col">Fecha de baja</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($data_mov_baja as $bajas): 
				?>
					<tr>
						<td class="id-col"><?= $bajas['id']?></td>
						<td class="animal-col"><?= $bajas['animal']?></td>
						<td class="causa-col"><?= $bajas['causa']?></td>
						<td class="destino-col"><?= $bajas['destino']?></td>
						<td class="fecha_baja-col"><?= $bajas['fecha_baja']?></td>
						<td class="edit-col"><a href="" data-toggle="modal" data-target="#editarBaja" class="glyphicon glyphicon-pencil"></a><?php include(ABSPATH . 'templates/movimientos/editarBaja.php');?></td>
						<td class="remove-col"><a href="" data-toggle="modal" data-target="#eliminarBaja"  class="glyphicon glyphicon-remove"></a><?php include(ABSPATH . 'templates/movimientos/eliminarBaja.php');?></td>	
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	</div>
		<div class="row">
		<div class="col-xs-12">
			<p class="alert alert-warning">No se han encontrado resultados</p>
		</div>
	</div>
</div>


<?php include(ABSPATH . 'templates/footer.php'); ?>