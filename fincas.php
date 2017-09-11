<?php require_once('config.php');?>
<?php require_once(ABSPATH . 'functions/library.php');?>
<?php  require_once(ABSPATH . 'functions/front-controller.php');?>

<?php include(ABSPATH . 'templates/head.php');?>
<?php include(ABSPATH . 'templates/header.php');?>
<?php include(ABSPATH . 'templates/navbar.php');?>

<div id="fincas" class="container">
	<div clas="row">
		<div class="col-md-12 text-center">
            <h2 class="titulo_paginas">Mis Fincas</h2>
            <hr style="margin-top: 0%;">
          </div>
	</div>
	<div class="row">
		<div class="col-xs-12 align-right">
			<a href="" data-toggle="modal" data-target="#ventanaFinca" class="btn-mas"><span>Nueva Finca</span></a>	
			<?php include(ABSPATH . 'templates/fincas/registroFinca.php');?>
			<a href="" data-toggle="modal" data-target="#ventanaParcela" class="btn-mas"><span>Nueva Parcela</span></a>	
			<?php include(ABSPATH . 'templates/fincas/registroParcela.php');?>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 titulo_tabla">
			<h3>Nombre de la finca <a href="" style="color: #227A4B; margin-left: 20px;" data-toggle="modal" data-target="#editarFinca" class="glyphicon glyphicon-pencil"></a>			
			<a href="" style="color: #227A4B; margin-left: 4px;" data-toggle="modal" data-target="#eliminarFinca"  class="glyphicon glyphicon-remove"></a>
			</h3>
			<?php include(ABSPATH . 'templates/fincas/editarFinca.php');?> 
			<?php include(ABSPATH . 'templates/fincas/eliminarFinca.php');?>
			<p>Dirección, municipio, provincia</p>	
		</div>
	</div>
<div class="row">
	<div class="col-xs-12">
		<table class="table">
			<thead>
				<tr>
					<th class="id-col">ID</th>
					<th class="poligono-col">Polígono </th>
					<th class="parcela-col">Parcela</th>
					<th class="superficie-col">Superficie</th>
				</tr>
			</thead>
			<tbody>
					<tr>
						<td class="id-col">id</td>
						<td class="poligono-col">polígono</td>
						<td class="parcela-col">parcela</td>
						<td class="superficie-col">superficie</td>
						<td class="edit-col"><a href="" data-toggle="modal" data-target="#editarParcela" class="glyphicon glyphicon-pencil"></a><?php include(ABSPATH . 'templates/fincas/editarParcela.php');?></td>
							<td class="remove-col"><a href="" data-toggle="modal" data-target="#eliminarParcela"  class="glyphicon glyphicon-remove"></a><?php include(ABSPATH . 'templates/fincas/eliminarParcela.php');?></td>	
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
</div>


<?php include(ABSPATH . 'templates/footer.php'); ?>