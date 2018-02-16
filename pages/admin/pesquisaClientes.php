<?php
	include_once ('../../config/init.php');
	include_once ($BASE_DIR . 'database/users.php');
	
	if(isset($_GET['username']))
		$user = strip_tags($_GET['username']);
	else
		$user = "";
	
	if(isset($_GET['email']))
		$email = strip_tags($_GET['email']);
	else
		$email = "";
	
	if(isset($_GET['phone']))
		$telefone = strip_tags($_GET['phone']);
	else
		$telefone = "";
	
	if(isset($_GET['morada']))
		$morada = strip_tags($_GET['morada']);
	else
		$morada = "";
	
	if(isset($_GET['name']))
		$nome = strip_tags($_GET['name']);
	else
		$nome = "";
	
	$page      = isset($_GET['page'])?$_GET['page']:0;
	$page_size = 15;
	
	$users = searchClient($nome, $user, $email, $telefone, $morada,$page, $page_size);
	$total = getUsersCount($nome, $user, $email, $telefone, $morada);
	$nr_paginas = floor($total['count'] / $page_size);
	if($total['count'] % $page_size != 0)
		$nr_paginas = $nr_paginas + 1;
	
	$smarty->assign('users', $users);
	
	$smarty->assign('page',$page);
	$smarty->assign('user',$user);
	$smarty->assign('email',$email);
	$smarty->assign('telefone',$telefone);
	$smarty->assign('morada',$morada);
	$smarty->assign('nome',$nome);
	
	$smarty->assign('page_size',$page_size);
	$smarty->assign('total',$total['count']);
	$smarty->assign('nr_paginas', $nr_paginas);
	
	
	$smarty->display('admin/pesquisaClientes.tpl');
?>