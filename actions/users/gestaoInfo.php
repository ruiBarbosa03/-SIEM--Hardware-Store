<?php  
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/users.php');
	
	$id = $_SESSION['userID'];
	$morada         = strip_tags($_POST['morada']);
	$phone          = strip_tags($_POST['telefone']);
	$email          = strip_tags($_POST['email']);
	$newPass        = strip_tags($_POST['novaPass']);
	$Pass_antiga    = strip_tags($_POST['Pass_antiga']);
	$password_md5	= md5($Pass_antiga);
	$newPassCod     = md5($newPass);
	
	$result = checkPassword($id, $password_md5);
	if(count($result) > 0){
		if ($morada){
			$result = changeAddress($id, $morada);
			if ($result){
				$_SESSION['success_messages'][] = 'Morada alterada com sucesso';
			}
			else{
				$_SESSION['error_messages'][] = "Erro a introduzir morada na base de dados.";
			}
		}	
		
		if ($phone){
			$result = changeTelephone($id, $phone);
			if ($result){
				$_SESSION['success_messages'][] = 'Telefone alterada com sucesso';
			}
			else{
				$_SESSION['error_messages'][] = "Erro a introduzir número de telefone na base de dados.";
			}		
		}
		
		if ($email){
			$result = changeEmail($id, $email);
			if ($result){
				$_SESSION['success_messages'][] = 'Email alterada com sucesso';
			}
			else{
				$_SESSION['error_messages'][] = "Erro a introduzir email na base de dados.";
			}		
		}
		
		if ($newPass){
			$result = changePassword($id, $newPassCod);
			if ($result){
				$_SESSION['success_messages'][] = 'Password alterada com sucesso';
			}
			else{
				$_SESSION['error_messages'][] = "Erro a introduzir password.";
			}		
		}
		
		header("Location:  {$BASE_URL}/pages/client/zonaCliente.php");
		exit;
	}else{
		$_SESSION['error_messages'][] = "Password errada";
		header("Location:  {$BASE_URL}/pages/client/gestaoInfoCliente.php");
		exit;
	}
?> 