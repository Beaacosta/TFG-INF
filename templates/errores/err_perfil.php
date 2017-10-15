<?php if ($msg == "ERR_USER_EDIT"):?> 
	<div class="alert alert-danger alert-dismissable" style="margin-top: 1%;">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 	<strong>Error:</strong> Sus datos no han sido modificados, inténtelo de nuevo.
	</div>
<?php endif;?>
<?php if ($msg == "OK_USER_EDIT"):?> 
	<div class="alert alert-success alert-dismissable" style="margin-top: 1%;">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 	<strong>Éxito:</strong> Sus datos han sido modificados correctamente.
	</div>
<?php endif;?>
<?php if ($msg == "ERR_USER_VOID"):?> 
	<div class="alert alert-danger alert-dismissable" style="margin-top: 1%;">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 	<strong>Error:</strong> Rellene todos los campos, por favor.
	</div>
<?php endif;?>
<?php if ($msg == "ERR_USER_PASSDIST"):?> 
	<div class="alert alert-danger alert-dismissable" style="margin-top: 1%;">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 	<strong>Error:</strong> No coinciden la contraseña nueva y su verificación.
	</div>
<?php endif;?>
<?php if ($msg == "ERR_USER_PASSANT"):?> 
	<div class="alert alert-danger alert-dismissable" style="margin-top: 1%;">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 	<strong>Error:</strong> La contraseña introducida no es correcta.
	</div>
<?php endif;?>