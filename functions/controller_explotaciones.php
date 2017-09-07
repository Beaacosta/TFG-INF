<?php 

function do_anyadir_explotacion(){
	global $link;
	$codigo_explotacion = filter_input(INPUT_POST, 'codigo_explotacion');
	$nombre = filter_input(INPUT_POST, 'nombre');
	$provincia = filter_input(INPUT_POST, 'provincia');
	$municipio = filter_input(INPUT_POST, 'municipio');
	$tipo = filter_input(INPUT_POST, 'tipo');
	$fecha_alta = date_default_timezone_get();
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
	$sql = "INSERT INTO explotaciones(codigo_explotacion,nombre,municipio,tipo,fecha_alta) VALUES('$codigo_explotacion','$nombre','$municipio','$tipo', '$fecha_alta')";
	$result = mysqli_query($link,$sql);
	$id = mysqli_insert_id($link);
	if( !$id ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_EXPLOTACION_FALSE' );
		exit;
	}
	header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_EXPLOTACION_REG');
}

 ?>