<?php
	include_once ('../../config/init.php');
	include_once ($BASE_DIR . 'database/cart.php');
	
	$id_encomenda = strip_tags($_GET["id_encomenda"]);
	
	$encomendas = getEncomendasByID($id_encomenda);
	if(count($encomendas) < 1){
		$_SESSION['error_messages'][] ='Encomenda inexistente';
		if($_SESSION['autenticado'] == 2)
		{
			header("Location: {$BASE_URL}pages/admin/todasEncomendas.php");
			exit;
		}
		else{
			header("Location: {$BASE_URL}pages/client/zonaCliente.php");
			exit;
		}
		
	}
	$smarty->assign('encomendas', $encomendas);
	$smarty->assign('id_encomenda', $id_encomenda);
	$smarty->display('client/infoEncomenda.tpl');
?>