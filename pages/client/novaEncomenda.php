<?php
	include_once ('../../config/init.php');
	include_once ($BASE_DIR . 'database/products.php');
	
	$produtos = getProductsFromCart($_SESSION['cart']);
	
	$smarty->assign('produtos',$produtos);
	$smarty->display('client/novaEncomenda.tpl');
?>