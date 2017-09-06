	  		<!--  Formulario para Registrarse en la aplicación -->
			<div class="modal fade align-left" id="ventanaExplotacion">
				<div class="modal-dialog">
					<div class="modal-content">
						<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>?accion=anyadir_explotacion">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"
									aria-hidden="true">&times;</button>
								<h4 class="modal-title">Añadir una Nueva Explotación</h4>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label for="codigo_explotacion">Código de explotación</label> <input type="text" name="codigo_explotacion" class="form-control" id="codigo_explotacion" placeholder="12345678ABC">
								</div>
								<div class="form-group">
									<label for="Nombre">Nombre</label> <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
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
								<fieldset class="form-group">
							        <label for="tipo">Tipo</label>
							        <div class="col-xs-12">
							          <div class="form-check">
							            <label class="form-check-label">
							              <input class="form-check-input" type="radio" name="tipo" id="tipo" value="permanente" checked>
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