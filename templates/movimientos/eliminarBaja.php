	<!--  Formulario para Registrarse en la aplicación -->
	<div class="modal fade align-left" id="eliminarBaja">
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
				    <p>¿Estás seguro de que deseas eliminar el movimiento?</p>
				</div>
				<div class="modal-footer">
					<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>?accion=eliminar_baja&bid=<?= $bajas['id'] ?>">
						<button type="hidden" class="btn btn-default"
						data-dismiss="modal" aria-hidden="true">Cancelar</button>
						<button type="submit" name="accion" value="registro"
						class="btn btn-default">Eliminar</button>
					</form>
				</div>
		</div>
	</div>
</div>