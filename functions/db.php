<?php
function connect_db(){

	$link = mysqli_connect(DBHOST,DBUSER,DBPASSWORD,DBNAME,DBPORT);

	if( mysqli_connect_errno($link) > 0 ){
		die( 'Oooppppssssss, los gnomos del servidor están de fiesta. Vuelve a intentarlo más tarde'); 
	}
	// Establecemos el juego de caracteres de la conexión
	mysqli_query($link,'SET NAMES utf8');
	return $link;
}

function close_db(){
	global $link;
	if( mysqli_ping($link) ){
		mysqli_close($link);
	}
}
?>