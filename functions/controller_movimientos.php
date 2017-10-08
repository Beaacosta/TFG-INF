<?php 
function do_anyadir_alta(){
	//Falta buscar animal y poner a null la causa si procede
	global $link;
	$animal = filter_input(INPUT_POST, 'animal');
	$causa = filter_input(INPUT_POST, 'causa');
	$origen = filter_input(INPUT_POST, 'origen');
	$fecha_alta = date('Y-m-d H:i:s');
	if( !$animal || !$causa || !$fecha_alta){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_MOVIMIENTOALTA_VOID');
		exit;
	}
	$sql = "SELECT * FROM movimientos_alta WHERE animal = '$animal'";
	$result = mysqli_query($link,$sql);
	if(  mysqli_num_rows($result) > 0 ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_MOVIMIENTOALTA_EXISTS' );
		exit;
	}
	$sql = "INSERT INTO movimientos_alta(animal,causa,origen,fecha_alta) VALUES('$animal','$causa','$origen','$fecha_alta')";
	$result = mysqli_query($link,$sql);
	$id = mysqli_insert_id($link);
	if( !$id ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_MOVIMIENTOALTA_FALSE' );
		exit;
	}
	header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_MOVIMIENTOALTA_REG');
}
function do_anyadir_baja(){
	//Falta buscar animal y poner a null la destino si procede
	global $link;
	$animal = filter_input(INPUT_POST, 'animal');
	$causa = filter_input(INPUT_POST, 'causa');
	$destino = filter_input(INPUT_POST, 'destino');
	$fecha_baja = date_default_timezone_get();
	if( !$animal || !$causa || !$fecha_baja){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_MOVIMIENTOBAJA_VOID');
		exit;
	}
	$sql = "SELECT * FROM movimientos_baja WHERE animal = '$animal'";
	$result = mysqli_query($link,$sql);
	if(  mysqli_num_rows($result) > 0 ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_MOVIMIENTOBAJA_EXISTS' );
		exit;
	}
	$sql = "INSERT INTO movimientos_baja(animal,causa,destino,fecha_baja) VALUES('$animal','$causa','$destino','$fecha_baja')";
	$result = mysqli_query($link,$sql);
	$id = mysqli_insert_id($link);
	if( !$id ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_MOVIMIENTOBAJA_FALSE' );
		exit;
	}
	header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_MOVIMIENTOBAJA_REG');
}

function do_eliminar_alta(){
	global $link;
	$id = filter_input(INPUT_GET, 'aid');
	$id = (int) $id;
	if(!$id){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_MOVIMIENTOALTA_VOID');
		exit;
	}
	$sql = "DELETE FROM movimientos_alta WHERE id = $id";
	$return = mysqli_query($link,$sql);
	if( mysqli_affected_rows($link) > 0 ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_MOVIMIENTOALTA_DELETE');
	}else{
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_MOVIMIENTOALTA_DELETE');
	}
}

function do_eliminar_baja(){
	global $link;
	$id = filter_input(INPUT_GET, 'bid');
	$id = (int) $id;
	if(!$id){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_MOVIMIENTOBAJA_VOID');
		exit;
	}
	$sql = "DELETE FROM movimientos_baja WHERE id = $id";
	$return = mysqli_query($link,$sql);
	if( mysqli_affected_rows($link) > 0 ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_MOVIMIENTOBAJA_DELETE');
	}else{
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_MOVIMIENTOBAJA_DELETE');
	}
}

function do_obtener_movimientos_alta(){
	global $link;
	$sql = "SELECT * FROM movimientos_alta ORDER BY fecha_alta";
	$result = mysqli_query($link,$sql);
	$num_rows = mysqli_num_rows($result);
	if( $num_rows < 1 ){
		return false;
	}
	return $result;	
}

function do_obtener_movimientos_baja(){
	global $link;
	$sql = "SELECT * FROM movimientos_baja ORDER BY fecha_baja";
	$result = mysqli_query($link,$sql);
	$num_rows = mysqli_num_rows($result);
	if( $num_rows < 1 ){
		return false;
	}
	return $result;	
}


 ?>