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
	$_SESSION['user'] = $email;
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
	$_SESSION['user'] = $email;
	header('Location:/TFG-INF/portada.php?e=OK_USER_REG');
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
	$sql = "DELETE FROM usuarios WHERE id = '$id'";
	$return = mysqli_query($link,$sql);
	if( mysqli_affected_rows($link) > 0 ){
		if( session_status() != PHP_SESSION_ACTIVE ){
			session_start();
		}
		$_SESSION = array();
		session_destroy();
		header('Location:/TFG-INF/index.php?e=OK_USER_DELETE');
	}else{
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_USER_DELETE');
	}
	exit;
}

function do_obtener_usuario_email($email){
	global $link;

	// Creamos la sentencia y ejecutamos
	$sql = "SELECT id, email, nombre, apellido1, apellido2 FROM usuarios
			WHERE email = '$email'";
	$result = mysqli_query($link,$sql);

	$num_rows = mysqli_num_rows($result);

	// Si la tabla que me ha devuelto no tiene filas, devuelve falso
	if( $num_rows < 1 ){
		return false;
	}
	return $result;
}

function do_editar_usuario(){
	global $link;
	$id = filter_input(INPUT_GET, 'uid');
	$id = (int) $id;
	$nombre = filter_input(INPUT_POST, 'nombre');
	$apellido1 = filter_input(INPUT_POST, 'apellido1');
	$apellido2 = filter_input(INPUT_POST, 'apellido2');
	$email = filter_input(INPUT_POST, 'email');

	if($nombre != ""){
		$sql = "UPDATE usuarios SET nombre='$nombre' WHERE id=$id";
		$return = mysqli_query($link,$sql);
		if( mysqli_affected_rows($link) <= 0 ){
			header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_USER_EDIT');
			exit;
		}
	}
	if($apellido1 != ""){
		$sql = "UPDATE usuarios SET apellido1='$apellido1' WHERE id='$id'";
		$return = mysqli_query($link,$sql);
		if( mysqli_affected_rows($link) <= 0 ){
			header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_USER_EDIT');
			exit;
		}
	}
	if($apellido2 != ""){
		$sql = "UPDATE usuarios SET apellido2='$apellido2' WHERE id='$id'";
		$return = mysqli_query($link,$sql);
		if( mysqli_affected_rows($link) <= 0 ){
			header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_USER_EDIT');
			exit;
		}
	}
	if($email != ""){
		$sql = "UPDATE usuarios SET email='$email' WHERE id='$id'";
		$return = mysqli_query($link,$sql);
		if( mysqli_affected_rows($link) > 0 ){
			if( session_status() != PHP_SESSION_ACTIVE ){
				session_start();
			}
			$_SESSION['user'] = $email;
		}else{
			header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_USER_EDIT');
			exit;
		}
	}
	header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_USER_EDIT' );
	exit;
	
}	

function do_editar_contrasenya(){
	global $link;
	$id = filter_input(INPUT_GET, 'upid');
	$id = (int) $id;
	$cont_ant = filter_input(INPUT_POST, 'cont_ant');
	$cont_nueva = filter_input(INPUT_POST, 'cont_nueva');
	$verif_cont = filter_input(INPUT_POST, 'verif_cont');

	if($cont_ant != "" & $cont_nueva != "" & $verif_cont != ""){
		if($cont_nueva == $verif_cont){
			$sql = "SELECT password FROM usuarios WHERE id='$id'";
			$result = mysqli_query($link,$sql);
			if( mysqli_affected_rows($link) <= 0 ){
				header('Location:/TFG-INF/perfil_contrasenya.php?e=ERR_USER_EDIT');
				exit;
			}else{
				foreach ($result as $pass) {
					if($pass['password'] == $cont_ant){
						$sql2 = "UPDATE usuarios SET password='$cont_nueva' WHERE id='$id'";
						$return2 = mysqli_query($link,$sql2);
						if( mysqli_affected_rows($link) > 0 ){
							header('Location:/TFG-INF/perfil_contrasenya.php?e=OK_USER_EDIT');
							exit;
						}else{
							header('Location:/TFG-INF/perfil_contrasenya.php?e=ERR_USER_EDIT');
							exit;
						}
					}else{
						header('Location:/TFG-INF/perfil_contrasenya.php?e=ERR_USER_PASSANT');
						exit;
					}
				}
				
			}
		}else{
			header('Location:/TFG-INF/perfil_contrasenya.php?e=ERR_USER_PASSDIST');
		exit;
		}
	}else{
		header('Location:/TFG-INF/perfil_contrasenya.php?e=ERR_USER_VOID');
		exit;
	}
}	
?>
