<?php require_once('config.php');?>
<?php require_once(ABSPATH . 'functions/library.php');?>
<?php  require_once(ABSPATH . 'functions/front-controller.php');?>

<?php include(ABSPATH . 'templates/head.php');?>
<?php include(ABSPATH . 'templates/header.php');?>
<?php include(ABSPATH . 'templates/navbar.php');?>

<div id="reproduccion" class="container">
	<div clas="row">
		<div class="col-md-12 text-center">
            <h2 class="titulo_paginas">Mis vacas preñadas</h2>
            <hr style="margin-top: 0%;">
         </div>
	</div>
	<div class="row">
		<div class="col-xs-12 align-right">
			<a href="" data-toggle="modal" data-target="#ventanaEmbarazo" class="btn-mas"><span>Nuevo embarazo</span></a>	
			<?php include(ABSPATH . 'templates/reproduccion/registroEmbarazo.php');?>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 titulo_tabla">
			<h3>Texto informativo</h3>	
		</div>
	</div>
	<div class="row">
	<div class="col-xs-12">
		<table class="table">
			<thead>
				<tr>
					<th class="id-col">ID</th>
					<th class="animal-col">Animal</th>
					<th class="fecha_est-col">Fecha estimada</th>
				</tr>
			</thead>
			<tbody>
					<tr>
						<td class="id-col">id</td>
						<td class="animal-col">animal</td>
						<td class="fecha_est-col">fecha estimada</td>
						<td class="edit-col"><a href="" data-toggle="modal" data-target="#editarEmbarazo" class="glyphicon glyphicon-pencil"></a><?php include(ABSPATH . 'templates/reproduccion/editarEmbarazo.php');?></td>
						<td class="remove-col"><a href="" data-toggle="modal" data-target="#eliminarEmbarazo"  class="glyphicon glyphicon-remove"></a><?php include(ABSPATH . 'templates/reproduccion/eliminarEmbarazo.php');?></td>	
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

	<div clas="row">
		<div class="col-md-12 text-center">
            <h2 class="titulo_paginas">Mis nacimientos</h2>
            <hr style="margin-top: 0%;">
         </div>
	</div>
	<div class="row">
		<div class="col-xs-12 align-right">
			<a href="" data-toggle="modal" data-target="#ventanaNacimiento" class="btn-mas"><span>Nuevo nacimiento</span></a>	
			<?php include(ABSPATH . 'templates/reproduccion/registroNacimiento.php');?>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 titulo_tabla">
			<h3>Texto informativo</h3>	
		</div>
	</div>
	<div class="row">
	<div class="col-xs-12">
		<table class="table">
			<thead>
				<tr>
					<th class="id-col">ID</th>
					<th class="madre-col">Madre</th>
					<th class="tipo-col">Tipo</th>
					<th class="comentarios-col">Comentarios</th>
					<th class="fecha_real-col">Fecha real</th>
				</tr>
			</thead>
			<tbody>
					<tr>
						<td class="id-col">id</td>
						<td class="madre-col">madre</td>
						<td class="tipo-col">tipo</td>
						<td class="comentarios-col">comentarios</td>
						<td class="fecha_real-col">fecha real</td>
						<td class="edit-col"><a href="" data-toggle="modal" data-target="#editarNacimiento" class="glyphicon glyphicon-pencil"></a><?php include(ABSPATH . 'templates/reproduccion/editarNacimiento.php');?></td>
						<td class="remove-col"><a href="" data-toggle="modal" data-target="#eliminarNacimiento"  class="glyphicon glyphicon-remove"></a><?php include(ABSPATH . 'templates/reproduccion/eliminarNacimiento.php');?></td>	
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