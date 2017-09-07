	<!--  Formulario para Registrarse en la aplicación -->
	<div class="modal fade align-left" id="eliminarUsuario">
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
				    <p>¿Estás seguro de que deseas darte de baja de la aplicación?</p>
				</div>
				<div class="modal-footer">
					<form method="POST" action="/TFG-INF/perfil.php?accion=eliminar_usuario&uid=1">
						<button type="hidden" class="btn btn-default"
						data-dismiss="modal" aria-hidden="true">Cancelar</button>
						<button type="submit"
						class="btn btn-default">Dar de baja</button>
					</form>
				</div>
		</div>
	</div>
</div>