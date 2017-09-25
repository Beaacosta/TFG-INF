	<!--  Formulario para Registrarse en la aplicación -->
	<div class="modal fade align-left" id="editarNacimiento">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>?accion=editar_nacimiento">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">&times;</button>
					<h4 class="modal-title">Editar un nacimiento</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="id_alta">Id</label> <input type="text" name="id_nacimiento" class="form-control" id="id_nacimiento" disabled>
					</div>
					<div class="form-group">
						<label for="madre">Madre</label>
					    <select class="form-control" name="madre" id="madre">
					      <option value="1">1</option>
					      <option value="2">2</option>
					    </select>
					</div>
					<div class="form-group">
						<label for="sexo">Sexo</label>
					    <select class="form-control" name="sexo" id="sexo">
					      <option value="1">Hembra</option>
					      <option value="2">Macho</option>
					    </select>
					</div>
					<div class="form-group">
						<label for="tipo">Tipo</label>
					    <select class="form-control" name="tipo" id="tipo">
					      <option value="1">Parto limpio</option>
					      <option value="2">Parto con dificultades</option>
					      <option value="3">Aborto</option>
					    </select>
					</div>
					<div class="form-group">
						<label for="comentarios">Comentarios</label> <input type="text" name="comentarios" class="form-control" id="comentarios" placeholder="blablabla">
					</div>
					<div class="form-group">
						<label for="fecha_real">Fecha Real</label> <input type="text" name="fecha_real" class="form-control" id="fecha_real" placeholder="22/02/1994">
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