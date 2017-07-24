	  		<!--  Formulario para Registrarse en la aplicación -->
			<div class="modal fade" id="ventanaRegistro">
				<div class="modal-dialog">
					<div class="modal-content">
						<form action="inicio" method="post">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"
									aria-hidden="true">&times;</button>
								<h4 class="modal-title">Registro de usuarios</h4>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label for="email">Email</label> <input type="text" name="email" class="form-control" id="email" placeholder="nombre@gmail.com">
								</div>
								<div class="form-group">
									<label for="Nombre">Nombre</label> <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
								</div>
								<div class="form-group">
									<label for="apellido1">Primer apellido</label> <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="Primer apellido">
								</div>
								<div class="form-group">
									<label for="apellido2">Segundo apellido</label> <input type="apellido2" class="form-control" id="apellido2" name="apellido2" placeholder="Segundo apellido">
								</div>
								<div class="form-group">
									<label for="Contrasenya">Contraseña</label> <input type="password" class="form-control" id="Contrasenya" name="Contrasenya" placeholder="Contraseña">
								</div>
								<div class="form-group">
									<label for="verifContrasenya">Verificacion Contraseña</label> <input type="password" class="form-control" id="verifContrasenya" name="verifContrasenya" placeholder="Repita la contraseña">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default"
									data-dismiss="modal" aria-hidden="true">Cerrar</button>
								<button type="hidden" name="accion" value="registro"
									class="btn btn-default">Guardar cambios</button>
							</div>
						</form>
					</div>
				</div>
			</div>