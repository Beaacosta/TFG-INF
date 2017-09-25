	<!--  Formulario para Registrarse en la aplicación -->
	<div class="modal fade align-left" id="ventanaEmbarazo">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>?accion=anyadir_embarazo">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">&times;</button>
					<h4 class="modal-title">Dar de alta un embarazo</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="animal">Animal</label>
					    <select class="form-control" name="animal" id="animal">
					      <option value="1">1</option>
					      <option value="2">2</option>
					    </select>
					</div>
					<div class="form-group">
						<label for="fecha_est">Fecha Estimada</label> <input type="text" name="fecha_est" class="form-control" id="fecha_est" placeholder="22/02/1994">
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