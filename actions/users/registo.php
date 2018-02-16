<?PHP
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/users.php');
	
	$nome         = strip_tags($_GET["nome"]);
	$morada       = strip_tags($_GET["morada"]);
	$email        = strip_tags($_GET["email"]);
	$telefone     = strip_tags($_GET["telefone"]);
	$username     = strip_tags($_GET["username"]);
	$password     = strip_tags($_GET["pass"]);
	$password_md5 = md5($password);

	$result = addUser($nome, $morada, $email, $telefone, $username, $password_md5);
	if($result == 0){
		$_SESSION['success_messages'][] = 'Registo efetuado com sucesso';
		header("Location: {$BASE_URL}pages/validacao/login.php");
		exit;
	}
	else if ($result == 1){
		$_SESSION['error_messages'][] = 'Erro a aceder à base de dados. Tente mais tarde';
	}
	else if ($result == 2){
		$_SESSION['error_messages'][] = 'Username indisponível';
	}
	
	header("Location: {$BASE_URL}pages/validacao/registo.php");
		
?>