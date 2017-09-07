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
				<?php include(ABSPATH . 'templates/explotaciones/registroExplotacion.php');?>
		</div>
	</div>
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
					<th class="id-col">ID</th>
					<th class="codigo_explotacion-col">Codigo Explotación</th>
					<th class="nombre-col">Nombre</th>
					<th class="municipio-col">Municipio</th>
					<th class="tipo-col">Tipo</th>
					<th class="fecha_alta-col">Fecha de alta</th>
					<th class="fecha_baja-col">Fecha de baja</th>
				</tr>
			</thead>
			<tbody>
					<tr>
						<td class="id-col">id</td>
						<td class="codigo_explotacion-col">cod_explotacion</td>
						<td class="nombre-col">nombre</td>
						<td class="municipio-col">municipio</td>
						<td class="tipo-col">tipo</td>
						<td class="fecha_alta-col">fecha_alta</td>
						<td class="fecha_baja-col">fecha_baja</td>
						<td class="edit-col"><a href="" data-toggle="modal" data-target="#editarExplotacion" class="glyphicon glyphicon-pencil"></a><?php include(ABSPATH . 'templates/explotaciones/editarExplotacion.php');?></td>
							<td class="remove-col"><a href="" data-toggle="modal" data-target="#eliminarExplotacion"  class="glyphicon glyphicon-remove"></a><?php include(ABSPATH . 'templates/explotaciones/eliminarExplotacion.php');?></td>	
					</tr>
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
						<th class="id-col">ID</th>
						<th class="codigo_explotacion-col">Codigo Explotación</th>
						<th class="nombre-col">Nombre</th>
						<th class="municipio-col">Municipio</th>
						<th class="tipo-col">Tipo</th>
						<th class="fecha_alta-col">Fecha de alta</th>
						<th class="fecha_baja-col">Fecha de baja</th>
					</tr>
				</thead>
				<tbody>
						<tr>
							<td class="id-col">id</td>
							<td class="codigo_explotacion-col">cod_explotacion</td>
							<td class="nombre-col">nombre</td>
							<td class="municipio-col">municipio</td>
							<td class="tipo-col">tipo</td>
							<td class="fecha_alta-col">fecha_alta</td>
							<td class="fecha_baja-col">fecha_baja</td>
							<td class="edit-col"><a href="" data-toggle="modal" data-target="#editarExplotacion" class="glyphicon glyphicon-pencil"></a><?php include(ABSPATH . 'templates/explotaciones/editarExplotacion.php');?></td>
							<td class="remove-col"><a href="" data-toggle="modal" data-target="#eliminarExplotacion"  class="glyphicon glyphicon-remove"></a><?php include(ABSPATH . 'templates/explotaciones/eliminarExplotacion.php');?></td>	
						</tr>
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