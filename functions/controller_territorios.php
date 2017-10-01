<?php 

function do_get_municipio_by_id($id){
	// En front controller nos conectamos automáticamente. Solo tenemos que usar la variable global
	global $link;

	// Recogida y saneamiento de una id
	$id = (int) $id;


	// Creamos la sentencia y ejecutamos
	$sql = "SELECT municipio FROM municipios
			WHERE id = $id";
	$result = mysqli_query($link,$sql);

	$num_rows = mysqli_num_rows($result);

	// Si la tabla que me ha devuelto no tiene filas, devuelve falso
	if( $num_rows < 1 ){
		return false;
	}
	return mysqli_fetch_assoc($result);
}
 ?>

