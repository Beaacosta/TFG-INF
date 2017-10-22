<?php //Registro ?>
<?php if ($msg == "ERR_EXPLOTACION_VOID"):?> 
	<div class="alert alert-danger alert-dismissable" style="margin-top: 3%;">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 	<strong>Error:</strong> Complete todos los campos, por favor.
	</div>
<?php endif;?>
<?php if ($msg == "ERR_EXPLOTACION_EXISTS"):?> 
	<div class="alert alert-danger alert-dismissable" style="margin-top: 3%;">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 	<strong>Error:</strong> La explotación introducida ya existe.
	</div>
<?php endif;?>
<?php if ($msg == "ERR_EXPLOTACION_FALSE"):?> 
	<div class="alert alert-danger alert-dismissable" style="margin-top: 3%;">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 	<strong>Error:</strong> La explotación no ha sido creada, inténtelo de nuevo.
	</div>
<?php endif;?>
<?php if ($msg == "OK_EXPLOTACION_REG"):?> 
	<div class="alert alert-success alert-dismissable" style="margin-top: 6%;">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 	<strong>Éxito:</strong> La explotación ha sido creada correctamente.
	</div>
<?php endif;?>
<?php //Eliminar y baja ?>
<?php if ($msg == "OK_EXPLOTACION_DELETE"):?> 
	<div class="alert alert-success alert-dismissable" style="margin-top: 6%;">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 	<strong>Éxito:</strong> La explotación ha sido eliminada correctamente.
	</div>
<?php endif;?>
<?php if ($msg == "ERR_EXPLOTACION_DELETE"):?> 
	<div class="alert alert-danger alert-dismissable" style="margin-top: 6%;">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 	<strong>Error:</strong> La explotación no ha sido eliminada, inténtelo de nuevo.
	</div>
<?php endif;?>
<?php if ($msg == "OK_EXPLOTACION_BAJA"):?> 
	<div class="alert alert-success alert-dismissable" style="margin-top: 6%;">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 	<strong>Éxito:</strong> La explotación ha sido dada de baja correctamente.
	</div>
<?php endif;?>
<?php if ($msg == "ERR_EXPLOTACION_BAJA"):?> 
	<div class="alert alert-danger alert-dismissable" style="margin-top: 6%;">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 	<strong>Error:</strong> La explotación no ha sido dada de baja, inténtelo de nuevo.
	</div>
<?php endif;?>
<?php //Editar ?>
<?php if ($msg == "OK_EXPLOTACION_EDIT"):?> 
	<div class="alert alert-success alert-dismissable" style="margin-top: 6%;">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 	<strong>Éxito:</strong> La explotación ha sido modificada correctamente.
	</div>
<?php endif;?>
<?php if ($msg == "ERR_EXPLOTACION_EDIT"):?> 
	<div class="alert alert-danger alert-dismissable" style="margin-top: 6%;">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 	<strong>Error:</strong> La explotación no ha sido modificada, inténtelo de nuevo.
	</div>
<?php endif;?>

