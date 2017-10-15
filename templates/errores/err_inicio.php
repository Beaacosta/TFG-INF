<?php if ($msg == "ERR_USER_VOID"):?> 
	<div class="alert alert-danger alert-dismissable" style="margin-right:2%; margin-left:2%; margin-top: 1%;">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 	<strong>Error:</strong> Complete todos los campos, por favor.
	</div>
<?php endif;?>
<?php if ($msg == "ERR_USER_NOT_EXISTS"):?> 
	<div class="alert alert-danger alert-dismissable" style="margin-right:2%; margin-left:2%; margin-top: 1%;">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 	<strong>Error:</strong> Email o contraseña incorrectos.
	</div>
<?php endif;?>
<?php if ($msg == "ERR_USER_PASS"):?> 
	<div class="alert alert-danger alert-dismissable" style="margin-right:2%; margin-left:2%; margin-top: 1%;">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 	<strong>Error:</strong> Ambas contraseñas deben coincidir.
	</div>
<?php endif;?>
<?php if ($msg == "ERR_USER_EXISTS"):?> 
	<div class="alert alert-danger alert-dismissable" style="margin-right:2%; margin-left:2%; margin-top: 1%;">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 	<strong>Error:</strong> El usuario introducido ya está registrado.
	</div>
<?php endif;?>