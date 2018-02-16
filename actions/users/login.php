<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/users.php');

	if (!$_POST['username'] || !$_POST['password']) {
		$_SESSION['error_messages'][] = 'Campos em Falta';
		$_SESSION['form_values'] = $_POST;
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);
	$password_md5 = md5($password);
	
	$result = checkLogin($username,$password_md5);
	$num_registos = count($result);
	
	//Se o nº de registos não for 0 então o par login/password introduzid pelo utilizador não é válido
		if ($num_registos > 1){
			
			if($result['admin'] == 1){
				$_SESSION['autenticado'] = 2; //O user é Admin
			}
			else{
				$_SESSION['autenticado'] = 1; //O user é só cliente
			}	
			$_SESSION['userID'] = $result['id']; //Guarda o id do utilizador
			$_SESSION['nomeUser'] = $result['nome'];			
			$_SESSION['success_messages'][] = 'Login Verificado';
			header("Location: ".$BASE_URL."pages/public/home.php");
			exit;
					
		}
		else{
			
			$_SESSION['error_messages'][] = 'Username ou Password incorretos'; //Erro
			header("Location: ".$BASE_URL."pages/validacao/login.php");
			exit;
		}	
	
	header("Location: ".$BASE_URL."pages/public/home.php");

?>