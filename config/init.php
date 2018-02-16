<?php
	session_set_cookie_params(3600, '/~ee12195/SIEMTrabalho3/');
	session_start();
	
	if (!isset($_SESSION['autenticado'])){
		$_SESSION['autenticado'] = 0; //0 - Não tem o Login feito, 1 - Tem login feito como cliente, 2 - Tem login feito como admin
	}
	if (!isset($_SESSION['userID'])){
		$_SESSION['userID'] = 0; //Guarda o id do cliente loggado, 0 caso não tenha feito login
	}
	if(!isset($_SESSION['nomeUser'])){
		$_SESSION['nomeUser'] = null;
	}
	
	
	$BASE_DIR = dirname(__DIR__).'/';
	$BASE_URL = 'https://gnomo.fe.up.pt/~ee12195/SIEMTrabalho3/';
	
	$conn = new PDO('pgsql:host=db.fe.up.pt;dbname=siem1643', 'siem1643', 'YMpTjkOB');
	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare('SET SCHEMA \'lojadocanto\'');
	$stmt->execute();
	
	include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');
	$smarty = new Smarty;
	
	$smarty->assign('BASE_URL', $BASE_URL);
	$smarty->assign('BASE_DIR', $BASE_DIR);
	
	$smarty->template_dir = $BASE_DIR . 'templates/';
	$smarty->compile_dir = $BASE_DIR . 'templates_c/';
	
	if(!isset($_SESSION['error_messages']))   $_SESSION['error_messages'][] = "";
	if(!isset($_SESSION['form_values']))      $_SESSION['form_values'] = "";
	if(!isset($_SESSION['success_messages'])) $_SESSION['success_messages'][]= "";
	if(!isset($_SESSION['cart']))             $_SESSION['cart'] = array();
	if(!isset($_SESSION['warning_messages']))   $_SESSION['warning_messages'][] = "";
	
	$smarty->assign('ERROR_MESSAGES',   $_SESSION['error_messages']);
	$smarty->assign('FORM_VALUES',      $_SESSION['form_values']);
	$smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
	$smarty->assign('NOMEUSER',         $_SESSION['nomeUser']);
	$smarty->assign('USERID',           $_SESSION['userID']);
	$smarty->assign('AUTENTICADO',      $_SESSION['autenticado']);
	$smarty->assign('CART',             $_SESSION['cart']);
	$smarty->assign('WARNING_MESSAGES', $_SESSION['warning_messages']);
	
	unset($_SESSION['error_messages']);
	unset($_SESSION['form_values']);
	unset($_SESSION['success_messages']);
	unset($_SESSION['warning_messages']);
?>