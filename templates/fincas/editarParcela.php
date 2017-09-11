	<!--  Formulario para Registrarse en la aplicación -->
	<div class="modal fade align-left" id="editarParcela">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>?accion=editar_parcela">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">&times;</button>
					<h4 class="modal-title">Editar una Parcela</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="id_parcela">Id</label> <input type="text" name="id_parcela" class="form-control" id="id_parcela" disabled>
					</div>
					<div class="form-group">
						<label for="finca">Finca</label>
					    <select class="form-control" name="finca" id="finca">
					      <option value="4">4</option>
					      <option value="5">5</option>
					      <option value="6">6</option>
					    </select>
					</div>
					<div class="form-group">
						<label for="poligono">Polígono</label> <input type="text" name="poligono" class="form-control" id="poligono" placeholder="">
					</div>
					<div class="form-group">
						<label for="parcela">Parcela</label> <input type="text" name="parcela" class="form-control" id="parcela" placeholder="parcela">
					</div>
					<div class="form-group">
						<label for="superficie">Superficie</label> <input type="text" name="superficie" class="form-control" id="superficie" placeholder="superficie">
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