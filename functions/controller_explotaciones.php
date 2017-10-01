<?php 

function do_anyadir_explotacion(){
	global $link;
	$codigo_explotacion = filter_input(INPUT_POST, 'codigo_explotacion');
	$nombre = filter_input(INPUT_POST, 'nombre');
	$provincia = filter_input(INPUT_POST, 'provincia');
	$municipio = filter_input(INPUT_POST, 'municipio');
	$tipo = filter_input(INPUT_POST, 'tipo');
	$fecha_alta = date('Y-m-d H:i:s');
	if( !$codigo_explotacion || !$nombre || !$provincia || !$municipio || !$tipo ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_EXPLOTACION_VOID');
		exit;
	}
	$sql = "SELECT * FROM explotaciones WHERE codigo_explotacion = '$codigo_explotacion'";
	$result = mysqli_query($link,$sql);
	if(  mysqli_num_rows($result) > 0 ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_EXPLOTACION_EXISTS' );
		exit;
	}
	//$password = password_hash($password,PASSWORD_DEFAULT);
	$sql = "INSERT INTO explotaciones(codigo_explotacion,nombre,municipio,tipo,fecha_alta) VALUES('$codigo_explotacion','$nombre','$municipio','$tipo','$fecha_alta')";
	$result = mysqli_query($link,$sql);
	$id = mysqli_insert_id($link);
	if( !$id ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_EXPLOTACION_FALSE' );
		exit;
	}
	header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_EXPLOTACION_REG');
}

function do_eliminar_explotacion(){
	global $link;
	$id = filter_input(INPUT_GET, 'eid');
	$id = (int) $id;
	if(!$id){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_EXPLOTACION_VOID');
		exit;
	}
	$sql = "DELETE FROM explotaciones WHERE id = $id";
	$return = mysqli_query($link,$sql);
	if( mysqli_affected_rows($link) > 0 ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_EXPLOTACION_DELETE');
	}else{
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_EXPLOTACION_DELETE');
	}
	exit;
}

function do_obtener_explotaciones_alta(){
	global $link;
	$sql = "SELECT * FROM explotaciones WHERE fecha_baja IS NULL
			ORDER BY fecha_alta";
	$result = mysqli_query($link,$sql);
	$num_rows = mysqli_num_rows($result);
	if( $num_rows < 1 ){
		return false;
	}
	return $result;	
}

function do_obtener_explotaciones_baja(){
	global $link;
	$sql = "SELECT * FROM explotaciones WHERE fecha_baja IS NOT NULL
			ORDER BY fecha_alta";
	$result = mysqli_query($link,$sql);
	$num_rows = mysqli_num_rows($result);
	if( $num_rows < 1 ){
		return false;
	}
	return $result;	
}

 ?>