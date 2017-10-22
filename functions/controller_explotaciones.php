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
	$sql = "INSERT INTO explotaciones(codigo_explotacion,nombre,municipio,tipo,fecha_alta) VALUES('$codigo_explotacion','$nombre','$municipio','$tipo','$fecha_alta')";
	$result = mysqli_query($link,$sql);
	$id = mysqli_insert_id($link);
	if( !$id ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_EXPLOTACION_FALSE' );
		exit;
	}
	if( session_status() != PHP_SESSION_ACTIVE ){
	session_start();
	}
	$user_id = $_SESSION['user_id'];
	$sql2 = "INSERT INTO usuarios_explotaciones(usuario,explotacion) VALUES('$user_id','$id')";
	$result = mysqli_query($link,$sql2);
	header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_EXPLOTACION_REG');
}

function do_eliminar_explotacion(){
	global $link;
	$id_exp = filter_input(INPUT_GET, 'eid');
	$id_exp = (int) $id_exp;
	if(!$id_exp){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_EXPLOTACION_VOID');
		exit;
	}
	if( session_status() != PHP_SESSION_ACTIVE ){
			session_start();
		}
	$user_id = $_SESSION['user_id'];
	//Eliminamos usuario-explotacion
	$sql2 = "DELETE FROM usuarios_explotaciones WHERE usuario = $user_id AND explotacion = $id_exp";
	$return2 = mysqli_query($link,$sql2);
	//Eliminamos animales de la explotacion
	$sql3 = "DELETE FROM animales WHERE explotacion = $id_exp";
	$return3 = mysqli_query($link,$sql3);
	//Eliminamos explotacion
	$sql = "DELETE FROM explotaciones WHERE id = '$id_exp'";
	$return = mysqli_query($link,$sql);
	if( mysqli_affected_rows($link) > 0 ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_EXPLOTACION_DELETE');
	}else{
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_EXPLOTACION_DELETE');
	}
}

function do_dar_baja_explotacion(){
	$fecha_baja = date('Y-m-d H:i:s');
	global $link;
	$id = filter_input(INPUT_GET, 'eid');
	$id = (int) $id;
	if(!$id){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_EXPLOTACION_VOID');
		exit;
	}
	$sql = "UPDATE explotaciones set fecha_baja = '$fecha_baja' where id = $id";
	$return = mysqli_query($link,$sql);
	if( mysqli_affected_rows($link) > 0 ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_EXPLOTACION_BAJA');
	}else{
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_EXPLOTACION_BAJA');
	}
}

function do_obtener_explotaciones_alta_all(){
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

function do_obtener_explotaciones_baja_all(){
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

function do_obtener_explotaciones_usuario($id_user){
	global $link;
	$sql = "SELECT explotacion FROM usuarios_explotaciones WHERE usuario='$id_user'";
	$result = mysqli_query($link,$sql);
	$num_rows = mysqli_num_rows($result);
	if( $num_rows < 1 ){
		return false;
	}
	return $result;	
}


function do_obtener_explotaciones_alta($id_user){
	global $link;
	$sql = "SELECT * FROM explotaciones INNER JOIN usuarios_explotaciones 
	ON explotaciones.id=usuarios_explotaciones.explotacion 
	WHERE usuario='$id_user' AND fecha_baja IS NULL
	ORDER BY fecha_alta";
	$result = mysqli_query($link,$sql);
	$num_rows = mysqli_num_rows($result);
	if( $num_rows < 1 ){
		return false;
	}
	return $result;	
}

function do_obtener_explotaciones_baja($id_user){
	global $link;
	$sql = "SELECT * FROM explotaciones INNER JOIN usuarios_explotaciones 
	ON explotaciones.id=usuarios_explotaciones.explotacion 
	WHERE usuario='$id_user' AND fecha_baja IS NOT NULL
	ORDER BY fecha_alta";
	$result = mysqli_query($link,$sql);
	$num_rows = mysqli_num_rows($result);
	if( $num_rows < 1 ){
		return false;
	}
	return $result;	
}

function do_editar_explotacion(){
	global $link;
	$id = filter_input(INPUT_GET, 'eid');
	$id = (int) $id;
	$codigo_explotacion = filter_input(INPUT_POST, 'codigo_explotacion');
	$nombre = filter_input(INPUT_POST, 'nombre');
	$municipio = filter_input(INPUT_POST, 'municipio');
	$tipo = filter_input(INPUT_POST, 'tipo');
	if($codigo_explotacion != ""){
		$sql = "UPDATE explotaciones SET codigo_explotacion='$codigo_explotacion', municipio='$municipio', tipo='$tipo' WHERE id='$id'";
		$return = mysqli_query($link,$sql);
		if( mysqli_affected_rows($link) <= 0 ){
			header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_EXPLOTACION_EDIT');
			exit;
		}
	}
	if($nombre != ""){
		$sql = "UPDATE explotaciones SET nombre='$nombre', municipio='$municipio', tipo='$tipo' WHERE id='$id'";
		$return = mysqli_query($link,$sql);
		if( mysqli_affected_rows($link) <= 0 ){
			header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_EXPLOTACION_EDIT');
			exit;
		}
	}
	if($codigo_explotacion == "" && $nombre == ""){
		$sql = "UPDATE explotaciones SET municipio='$municipio', tipo='$tipo' WHERE id='$id'";
		$return = mysqli_query($link,$sql);
		if( mysqli_affected_rows($link) <= 0 ){
			header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_EXPLOTACION_EDIT');
			exit;
		}
	}
	header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_EXPLOTACION_EDIT' );
	exit;
}

 ?>