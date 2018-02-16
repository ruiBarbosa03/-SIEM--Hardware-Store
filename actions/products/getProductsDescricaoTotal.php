<?php 

	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/products.php');
	
	$descricao = $_GET['descricao'];
	$marca     = $_GET['marca'];
	$tipo      = $_GET['tipo'];
	
	$result = getProductsCount($descricao, $marca, $tipo);
	
	echo json_encode($result['count']);
	
	
	

?>