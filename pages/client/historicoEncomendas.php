<?php
	include_once ('../../config/init.php');
	include_once ($BASE_DIR . 'database/users.php');
	include_once ($BASE_DIR . 'database/cart.php');
	$page      = isset($_GET['page'])?$_GET['page']:0;
	$page_size = 15;
	
	$total = getClientAllEncomendasCount($_SESSION['userID']);
	$user = searchClientByID($_SESSION['userID']);
	$encomendas = getAllEncomendas($_SESSION['userID'],$page,$page_size);
	$nr_paginas = round($total['count']/$page_size);
	
	$smarty->assign('encomendas', $encomendas);
	$smarty->assign('user', $user);
	$smarty->assign('page',$page);
	$smarty->assign('page_size',$page_size);
	$smarty->assign('total',$total['count']);
	$smarty->assign('nr_paginas',$nr_paginas);
	
	$smarty->display('client/historicoEncomendas.tpl');
?>