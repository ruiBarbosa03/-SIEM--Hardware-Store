<?php  
	include_once ('../../config/init.php');
	include_once ($BASE_DIR . 'database/products.php');
	
	$id = strip_tags($_GET['id']);
	
	
	try {
	   eliminarProduto($id);
	} catch (PDOException $e) {
	  $_SESSION['error_messages'][] = "Não foi possível eliminar este produto";	
	  header("Location: {$BASE_URL}pages/public/produtos.php?search=0");
	  exit;
	}

	$_SESSION['success_messages'][] = "Produto eliminado com sucesso";
	header("Location: {$BASE_URL}pages/public/produtos.php?search=0");
?> 