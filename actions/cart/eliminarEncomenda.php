<?PHP
	
	include_once ('../../config/init.php');
	include_once ($BASE_DIR . 'database/cart.php');
	include_once ($BASE_DIR . 'database/products.php');	
	
	unset($_SESSION['cart']);
	
	$_SESSION['success_messages'][] = 'Encomenda eliminada com sucesso';
	if($_SESSION['autenticado'] == 1){
		header("Location: {$BASE_URL}pages/client/zonaCliente.php");
		exit;
	}
	else{
		header("Location: {$BASE_URL}pages/public/produtos.php");
		exit;
	}
?>