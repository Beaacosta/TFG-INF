<?php
$link = connect_db();
$accion = filter_input(INPUT_GET, 'accion', FILTER_SANITIZE_SPECIAL_CHARS);

switch ($accion) {
	//Usuarios
	case 'iniciar_sesion': do_iniciar_sesion(); break;
	case 'registrarse': do_registrarse(); break;
	case 'cerrar_sesion': do_cerrar_sesion(); break;
	case 'eliminar_usuario': do_eliminar_usuario(); break;
	//Explotaciones
	case 'anyadir_explotacion': do_anyadir_explotacion(); break;
	case 'editar_explotacion': do_editar_explotacion(); break;
	case 'eliminar_explotacion': do_eliminar_explotacion(); break;
	//Parcelas
	case 'anyadir_parcela': do_anyadir_parcela(); break;
	case 'editar_parcela': do_editar_parcela(); break;
	case 'eliminar_parcela': do_eliminar_parcela(); break;
	//Fincas
	case 'anyadir_finca': do_anyadir_finca(); break;
	case 'editar_finca': do_editar_finca(); break;
	case 'eliminar_finca': do_eliminar_finca(); break;
	//Movimientos_Altas
	case 'anyadir_alta': do_anyadir_alta(); break;
	case 'editar_alta': do_editar_alta(); break;
	case 'eliminar_alta': do_eliminar_alta(); break;
	//Movimientos_Bajas
	case 'anyadir_baja': do_anyadir_baja(); break;
	case 'editar_baja': do_editar_baja(); break;
	case 'eliminar_baja': do_eliminar_baja(); break;
}
?>