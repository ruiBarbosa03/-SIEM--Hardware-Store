<?php
	include_once ('../../config/init.php');
	include_once ($BASE_DIR . 'database/users.php');
	
	$id_cliente = strip_tags($_GET['id_cliente']);
	
	$user = searchClientByID($id_cliente);
	if(count($user) < 2)
	{
		$_SESSION['error_messages'][] = 'Cliente inexistente';
		header("Location: {$BASE_URL}pages/admin/pesquisaClientes.php?search=0");
		exit;
	}
	$smarty->assign('user', $user);
	$smarty->display('admin/infoClientes.tpl');
?>