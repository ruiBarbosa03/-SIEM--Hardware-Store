<?php 

	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/products.php');
	
	$descricao = $_GET['descricao'];
	$marca     = $_GET['marca'];
	$tipo      = $_GET['tipo'];
	
	$result = searchProduct($descricao, $marca , $tipo , 0, 5);
	
	echo json_encode($result);
	
	
	

?>