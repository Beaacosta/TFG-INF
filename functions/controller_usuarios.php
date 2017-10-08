<?php
function do_iniciar_sesion(){
	global $link;
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$password = filter_input(INPUT_POST, 'password');
	if(  !$email || !$password  ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_USER_VOID');
		exit;
	}
	$sql = "SELECT * FROM usuarios WHERE email = '$email'";
	$result = mysqli_query($link,$sql);
	if( mysqli_num_rows($result) < 1 ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_USER_NOT_EXISTS');
		exit;
	}
	$user = mysqli_fetch_assoc($result);
	if( $password != $user['password'] ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_USER_NOT_EXISTS');
		exit;
	}
	unset( $user['password'] );
	unset( $password );
	if( session_status() != PHP_SESSION_ACTIVE ){
		session_start();
	}
	$_SESSION['user'] = $user;
	$_SESSION['msg'] = 'no_msg';
	//CAMBIAR A PAGINA SIGUIENTE
	header('Location:/TFG-INF/portada.php?e=OK_USER_LOGGED');
	exit;
}

function do_registrarse(){
	global $link;
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$nombre = filter_input(INPUT_POST, 'nombre');
	$apellido1 = filter_input(INPUT_POST, 'apellido1');
	$apellido2 = filter_input(INPUT_POST, 'apellido2');
	$password = filter_input(INPUT_POST, 'password');
	$verifPassword = filter_input(INPUT_POST, 'verifPassword');
	if( !$email || !$nombre || !$apellido1 || !$password || !$verifPassword ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_USER_VOID' );
		exit;
	}
	if( $password != $verifPassword ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_USER_PASS' );
		exit;
	}
	$sql = "SELECT * FROM usuarios WHERE email = '$email'";
	$result = mysqli_query($link,$sql);
	if(  mysqli_num_rows($result) > 0 ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_USER_EXISTS' );
		exit;
	}
	//$password = password_hash($password,PASSWORD_DEFAULT);
	$sql = "INSERT INTO usuarios(email,nombre,apellido1,apellido2,password) VALUES('$email','$nombre','$apellido1','$apellido2','$password')";
	$result = mysqli_query($link,$sql);
	$id = mysqli_insert_id($link);
	if( !$id ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_USER_FALSE' );
		exit;
	}
	if( session_status() != PHP_SESSION_ACTIVE ){
		session_start();
	}
	//MIRAR SI QUERREMOS GUARDAR MAS COSAS
	$_SESSION['user'] = array(
		'id' 		=> $id,
		'username' 	=> $username,
		'role'		=> 1
	);
	$_SESSION['msg'] = 'no_msg';
	header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_USER_REG');
	exit;
}

function do_logout(){
	if( session_status() != PHP_SESSION_ACTIVE ){
		session_start();
	}
	$_SESSION = array();
	session_destroy();
	header('Location:' . $_SERVER['PHP_SELF'] );
	exit;
}

function do_eliminar_usuario(){
	global $link;
	$id = filter_input(INPUT_GET, 'uid');
	$id = (int) $id;
	if(!$id){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_USER_VOID');
		exit;
	}
	$sql = "DELETE FROM users WHERE id = $id";
	$return = mysqli_query($link,$sql);
	if( mysqli_affected_rows($link) > 0 ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_USER_DELETE');
	}else{
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_USER_DELETE');
	}
	exit;
}

 ?>