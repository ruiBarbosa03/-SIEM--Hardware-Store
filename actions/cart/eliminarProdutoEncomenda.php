<?PHP
	include_once ('../../config/init.php');
	include_once ($BASE_DIR . 'database/cart.php');
	include_once ($BASE_DIR . 'database/products.php');	
	
	$id_produto = strip_tags($_GET['id_produto']);
	
	unset($_SESSION['cart'][$id_produto]);
	
	$_SESSION['success_messages'][] = 'Produto eliminado com sucesso';
	header("Location: {$BASE_URL}pages/client/novaEncomenda.php");
?>