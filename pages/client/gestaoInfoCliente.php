<?php
	include_once ('../../config/init.php');
	include_once ($BASE_DIR . 'database/users.php');
	include_once ($BASE_DIR . 'database/cart.php');
	
	$user = searchClientByID($_SESSION['userID']);
	
	$smarty->assign('user', $user);
	$smarty->display('client/gestaoInfoCliente.tpl');
?>