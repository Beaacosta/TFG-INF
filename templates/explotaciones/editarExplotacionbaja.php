<?php 
$data_provincias = do_obtener_provincias();
$id_provincia = do_get_provincia_by_municipio($exp_baja['municipio']);
?>

	<div class="modal fade align-left" id="editarExplotacionbaja<?= $exp_baja['explotacion'] ?>">
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">&times;</button>
					<h4 class="modal-title">Editar mi Explotación</h4>
				</div>
				<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>?accion=editar_explotacion&eid=<?= $exp_baja['explotacion'] ?>">
				<div class="modal-body">
					<div class="form-group">
						<label for="codigo_explotacion">Código de explotación</label> <input type="text" name="codigo_explotacion" class="form-control" id="codigo_explotacion" placeholder="<?= $exp_baja['codigo_explotacion'] ?>">
					</div>
					<div class="form-group">
						<label for="Nombre">Nombre</label> <input type="text" name="nombre" class="form-control" id="nombre" placeholder="<?= $exp_baja['nombre'] ?>"">
					</div>
					<div class="form-group">
						<label for="provincia">Provincia</label>
					    <select class="form-control" name="provincia" id="provincia">
					    	<?php foreach($data_provincias as $prov):?>
					    		<?php if($prov['id'] == $id_provincia['provincia']): ?>
					    		<option value="<?= $prov['id']?>" selected="selected"><?= $prov['provincia']?></option>
					    		<?php else: ?>
					      		<option value="<?= $prov['id']?>"><?= $prov['provincia']?></option>
					      	<?php endif; ?>
					      	<?php endforeach; ?>
					    </select>
					</div>
					<div class="form-group">
						<label for="municipio">Municipio</label>
					    <select class="form-control" name="municipio" id="municipio">
					      <option value="1">1</option>
					      <option value="2">2</option>
					      <option value="3">3</option>
					    </select>
					</div>
					<fieldset class="form-group">
				        <label for="tipo">Tipo</label>
				        <div class="col-xs-12">
				          <div class="form-check">
				            <label class="form-check-label">
				            <?php if($exp_baja['tipo']=="permanente"): ?>
				            <input class="form-check-input" type="radio" name="tipo" id="tipo" value="permanente" checked="checked">
				        	<?php else: ?>
				        	<input class="form-check-input" type="radio" name="tipo" id="tipo" value="permanente">
				        	<?php endif; ?>
				              Permanente
				            </label>
				          </div>
				          <div class="form-check">
				            <label class="form-check-label">
				            <?php if($exp_baja['tipo']=="temporal"): ?>
				            <input class="form-check-input" type="radio" name="tipo" id="tipo" value="temporal" checked="checked">
				            <?php else: ?>
				            <input class="form-check-input" type="radio" name="tipo" id="tipo" value="temporal">
				            <?php endif; ?>
				              Temporal
				            </label>
				          </div>
				        </div>
				    </fieldset>
				</div>
				<div class="modal-footer">
					<button type="hidden" class="btn btn-default"
						data-dismiss="modal" aria-hidden="true">Cerrar</button>
					<button type="submit" class="btn btn-default">Guardar cambios</button>
				</div>
			</form>
		</div>
	</div>
</div>