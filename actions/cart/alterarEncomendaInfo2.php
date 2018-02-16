<?php  
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/cart.php');
	
	$id_encomenda = strip_tags($_GET["id_encomenda"]);
	try{
		updateEncomendaInfo2($id_encomenda);
	}
	catch (PDOException $e){
		$_SESSION['error_messages'][] = "Erro a alterar informação da encomenda";
		header("Location: {$BASE_URL}pages/client/infoEncomenda?id_encomenda=$id_encomenda");
		exit;
	}
	$_SESSION['success_messages'][] = "Sucesso a alterar informação da encomenda";
	header("Location: {$BASE_URL}pages/admin/todasEncomendas.php");
?> 