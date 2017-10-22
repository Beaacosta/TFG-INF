<?php 
$data_provincias = do_obtener_provincias();
 ?>

	<div class="modal fade align-left" id="editarExplotacion">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>?accion=editar_explotacion?eid=<?= $exp_alta['id'] ?>">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">&times;</button>
					<h4 class="modal-title">Editar mi Explotación</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="codigo_explotacion">Código de explotación</label> <input type="text" name="codigo_explotacion" class="form-control" id="codigo_explotacion" placeholder="<?= $exp_alta['codigo_explotacion'] ?>">
					</div>
					<div class="form-group">
						<label for="Nombre">Nombre</label> <input type="text" name="nombre" class="form-control" id="nombre" placeholder="<?= $exp_alta['nombre'] ?>"">
					</div>
					<div class="form-group">
						<label for="provincia">Provincia</label>
					    <select class="form-control" name="provincia" id="provincia">
					    	<option value="N"> - </option>
					    	<?php foreach($data_provincias as $prov):?>
					      <option value="<?= $prov['id']?>"><?= $prov['provincia']?></option>
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
				              <input class="form-check-input" type="radio" name="tipo" id="tipo" value="permanente">
				              Permanente
				            </label>
				          </div>
				          <div class="form-check">
				            <label class="form-check-label">
				              <input class="form-check-input" type="radio" name="tipo" id="tipo" value="temporal">
				              Temporal
				            </label>
				          </div>
				        </div>
				    </fieldset>
				</div>
				<div class="modal-footer">
					<button type="hidden" class="btn btn-default"
						data-dismiss="modal" aria-hidden="true">Cerrar</button>
					<button type="submit" name="accion" value="registro"
						class="btn btn-default">Guardar cambios</button>
				</div>
			</form>
		</div>
	</div>
</div>