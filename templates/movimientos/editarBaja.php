	<!--  Formulario para Registrarse en la aplicación -->
	<div class="modal fade align-left" id="editarBaja">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>?accion=editar_baja">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">&times;</button>
					<h4 class="modal-title">Editar una baja</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="id_baja">Id</label> <input type="text" name="id_baja" class="form-control" id="id_baja" disabled>
					</div>
					<div class="form-group">
						<label for="animal">Animal</label>
					    <select class="form-control" name="animal" id="animal">
					      <option value="4">4</option>
					      <option value="5">5</option>
					      <option value="6">6</option>
					    </select>
					</div>
					<div class="form-group">
						<label for="causa">Causa</label>
					    <select class="form-control" name="causa" id="causa">
					      <option value="1">Venta</option>
					      <option value="2">Muerte</option>
					      <option value="3">Otra</option>
					    </select>
					</div>
					<div class="form-group">
						<label for="destino">Destino del animal</label> <input type="text" name="destino" class="form-control" id="destino" placeholder="12345678ABC">
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