<?php require_once('config.php');?>
<?php require_once(ABSPATH . 'functions/library.php');?>
<?php  require_once(ABSPATH . 'functions/front-controller.php');?>

<?php include(ABSPATH . 'templates/head.php');?>
<?php include(ABSPATH . 'templates/header.php');?>
<?php include(ABSPATH . 'templates/navbar.php');?>

<div id="animales" class="container">
	<div clas="row">
		<div class="col-md-12 text-center">
            <h2 class="titulo_paginas">Mis Animales</h2>
            <hr style="margin-top: 0%;">
          </div>
	</div>
	<div class="row">
		<div class="col-xs-12 align-right">
				<a href="" data-toggle="modal" data-target="#ventanaExplotacion" class="btn-mas"><span>Nuevo animal</span></a>	
				<?php include(ABSPATH . 'templates/explotaciones/registroAnimal.php');?>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 titulo_tabla">
			<h3>Terneros</h3>	
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<table class="table">
				<thead>
					<tr>
						<th class="id">ID</th>
						<th class="crotal">Crotal</th>
						<th class="nombre">Nombre</th>
						<th class="raza">Raza</th>
						<th class="sexo">Sexo</th>
						<th class="fecha_nac">Fecha de nacimiento</th>
						<th class="madre">Madre</th>
						<th class="padre">Padre</th>
						<th class="explotacion">Explotación</th>
					</tr>
				</thead>
				<tbody>
						<tr>
							<td class="id-col">id</td>
							<td class="crotal">crotal</td>
							<td class="nombre">nombre</td>
							<td class="raza">raza</td>
							<td class="sexo">sexo</td>
							<td class="fecha_nac">fecha_nac</td>
							<td class="madre">madre</td>
							<td class="padre">padre</td>
							<td class="explotacion">explotacion</td>
							<td class="edit-col"><a href="" data-toggle="modal" data-target="#editarAnimal" class="glyphicon glyphicon-pencil"></a><?php include(ABSPATH . 'templates/animales/editarAnimal.php');?></td>
							<td class="remove-col"><a href="" data-toggle="modal" data-target="#eliminarAnimal"  class="glyphicon glyphicon-remove"></a><?php include(ABSPATH . 'templates/animales/eliminarAnimal.php');?></td>	
						</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 titulo_tabla">
			<h3>Novillos</h3>	
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<table class="table">
				<thead>
					<tr>
						<th class="id">ID</th>
						<th class="crotal">Crotal</th>
						<th class="nombre">Nombre</th>
						<th class="raza">Raza</th>
						<th class="sexo">Sexo</th>
						<th class="fecha_nac">Fecha de nacimiento</th>
						<th class="madre">Madre</th>
						<th class="padre">Padre</th>
						<th class="explotacion">Explotación</th>
					</tr>
				</thead>
				<tbody>
						<tr>
							<td class="id-col">id</td>
							<td class="crotal">crotal</td>
							<td class="nombre">nombre</td>
							<td class="raza">raza</td>
							<td class="sexo">sexo</td>
							<td class="fecha_nac">fecha_nac</td>
							<td class="madre">madre</td>
							<td class="padre">padre</td>
							<td class="explotacion">explotacion</td>
							<td class="edit-col"><a href="" data-toggle="modal" data-target="#editarAnimal" class="glyphicon glyphicon-pencil"></a><?php include(ABSPATH . 'templates/animales/editarAnimal.php');?></td>
							<td class="remove-col"><a href="" data-toggle="modal" data-target="#eliminarAnimal"  class="glyphicon glyphicon-remove"></a><?php include(ABSPATH . 'templates/animales/eliminarAnimal.php');?></td>	
						</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 titulo_tabla">
			<h3>Vacas</h3>	
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<table class="table">
				<thead>
					<tr>
						<th class="id">ID</th>
						<th class="crotal">Crotal</th>
						<th class="nombre">Nombre</th>
						<th class="raza">Raza</th>
						<th class="sexo">Sexo</th>
						<th class="fecha_nac">Fecha de nacimiento</th>
						<th class="madre">Madre</th>
						<th class="padre">Padre</th>
						<th class="explotacion">Explotación</th>
					</tr>
				</thead>
				<tbody>
						<tr>
							<td class="id-col">id</td>
							<td class="crotal">crotal</td>
							<td class="nombre">nombre</td>
							<td class="raza">raza</td>
							<td class="sexo">sexo</td>
							<td class="fecha_nac">fecha_nac</td>
							<td class="madre">madre</td>
							<td class="padre">padre</td>
							<td class="explotacion">explotacion</td>
							<td class="edit-col"><a href="" data-toggle="modal" data-target="#editarAnimal" class="glyphicon glyphicon-pencil"></a><?php include(ABSPATH . 'templates/animales/editarAnimal.php');?></td>
							<td class="remove-col"><a href="" data-toggle="modal" data-target="#eliminarAnimal"  class="glyphicon glyphicon-remove"></a><?php include(ABSPATH . 'templates/animales/eliminarAnimal.php');?></td>	
						</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 titulo_tabla">
			<h3>Toros</h3>	
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<table class="table">
				<thead>
					<tr>
						<th class="id">ID</th>
						<th class="crotal">Crotal</th>
						<th class="nombre">Nombre</th>
						<th class="raza">Raza</th>
						<th class="sexo">Sexo</th>
						<th class="fecha_nac">Fecha de nacimiento</th>
						<th class="madre">Madre</th>
						<th class="padre">Padre</th>
						<th class="explotacion">Explotación</th>
					</tr>
				</thead>
				<tbody>
						<tr>
							<td class="id-col">id</td>
							<td class="crotal">crotal</td>
							<td class="nombre">nombre</td>
							<td class="raza">raza</td>
							<td class="sexo">sexo</td>
							<td class="fecha_nac">fecha_nac</td>
							<td class="madre">madre</td>
							<td class="padre">padre</td>
							<td class="explotacion">explotacion</td>
							<td class="edit-col"><a href="" data-toggle="modal" data-target="#editarAnimal" class="glyphicon glyphicon-pencil"></a><?php include(ABSPATH . 'templates/animales/editarAnimal.php');?></td>
							<td class="remove-col"><a href="" data-toggle="modal" data-target="#eliminarAnimal"  class="glyphicon glyphicon-remove"></a><?php include(ABSPATH . 'templates/animales/eliminarAnimal.php');?></td>	
						</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>


<?php include(ABSPATH . 'templates/footer.php'); ?>