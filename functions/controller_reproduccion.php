<?php 
function do_anyadir_embarazo(){
	//fecha est a date
	global $link;
	$animal = filter_input(INPUT_POST, 'animal');
	$fecha_est = filter_input(INPUT_POST, 'fecha_est');
	if( !$animal || !$fecha_est){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_EMBARAZO_VOID');
		exit;
	}
	$sql = "SELECT * FROM embarazos WHERE animal = '$animal'";
	$result = mysqli_query($link,$sql);
	if(  mysqli_num_rows($result) > 0 ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_EMBARAZO_EXISTS' );
		exit;
	}
	$sql = "INSERT INTO embarazos(animal,fecha_est) VALUES('$animal','$fecha_est')";
	$result = mysqli_query($link,$sql);
	$id = mysqli_insert_id($link);
	if( !$id ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_EMBARAZO_FALSE' );
		exit;
	}
	header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_EMBARAZO_REG');
}

function do_anyadir_nacimiento(){
	//fecha est a date
	global $link;
	$madre = filter_input(INPUT_POST, 'madre');
	$sexo = filter_input(INPUT_POST, 'sexo');
	$tipo = filter_input(INPUT_POST, 'tipo');
	$comentarios = filter_input(INPUT_POST, 'comentarios');
	$fecha_real = filter_input(INPUT_POST, 'fecha_real');
	if( !$madre || !$sexo || !$tipo || !$fecha_real){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_NACIMIENTO_VOID');
		exit;
	}
	// ???
	$sql = "SELECT * FROM nacimientos WHERE fecha_real = '$fecha_real'";
	$result = mysqli_query($link,$sql);
	if(  mysqli_num_rows($result) > 0 ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_NACIMIENTO_EXISTS' );
		exit;
	}
	$sql = "INSERT INTO nacimientos(madre,sexo, tipo, comentarios, fecha_real) VALUES('$madre','$sexo', '$tipo', '$comentarios', '$fecha_real')";
	$result = mysqli_query($link,$sql);
	$id = mysqli_insert_id($link);
	if( !$id ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_NACIMIENTO_FALSE' );
		exit;
	}
	header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_NACIMIENTO_REG');
}

function do_eliminar_embarazo(){
	global $link;
	$id = filter_input(INPUT_GET, 'eid');
	$id = (int) $id;
	if(!$id){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_EMBARAZO_VOID');
		exit;
	}
	$sql = "DELETE FROM embarazos WHERE id = $id";
	$return = mysqli_query($link,$sql);
	if( mysqli_affected_rows($link) > 0 ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_EMBARAZO_DELETE');
	}else{
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_EMBARAZO_DELETE');
	}
	exit;
}

function do_eliminar_nacimiento(){
	global $link;
	$id = filter_input(INPUT_GET, 'nid');
	$id = (int) $id;
	if(!$id){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_NACIMIENTO_VOID');
		exit;
	}
	$sql = "DELETE FROM nacimientos WHERE id = $id";
	$return = mysqli_query($link,$sql);
	if( mysqli_affected_rows($link) > 0 ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_NACIMIENTO_DELETE');
	}else{
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_NACIMIENTO_DELETE');
	}
	exit;
}
 ?>