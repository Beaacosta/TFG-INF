	<!--  Formulario para Registrarse en la aplicación -->
	<div class="modal fade align-left" id="editarFinca">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>?accion=editar_finca">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">&times;</button>
					<h4 class="modal-title">Editar una Finca</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="id_finca">Id</label> <input type="text" name="id_finca" class="form-control" id="id_finca" disabled>
					</div>
					<div class="form-group">
						<label for="nombre">Nombre</label> <input type="text" name="nombre" class="form-control" id="nombre" placeholder="">
					</div>
					<div class="form-group">
						<label for="direccon">Dirección</label> <input type="text" name="direccion" class="form-control" id="direccion">
					</div>
					<div class="form-group">
						<label for="provincia">Provincia</label>
					    <select class="form-control" name="provincia" id="provincia">
					      <option value="4">4</option>
					      <option value="5">5</option>
					      <option value="6">6</option>
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
					<div class="form-group">
						<label for="agregado">Agregado</label> <input type="text" name="agregado" class="form-control" id="agregado">
					</div>
					<div class="form-group">
						<label for="zona">Zona</label> <input type="text" name="zona" class="form-control" id="zona">
					</div>
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