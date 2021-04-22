<?php 

	include_once("controlador-producto.php");
	$ctrProd = new ControladorProducto();

	$accion = $_POST['txtSolicitud'];
	$ctrProd->Procesar($accion);

?>