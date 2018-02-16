<?PHP

	include_once ('../../config/init.php');
	include_once ($BASE_DIR . 'database/cart.php');
	include_once ($BASE_DIR . 'database/products.php');	

	$quantidade = strip_tags($_POST["qt"]);
	$id_produto = strip_tags($_POST["id_Produto"]);

	$_SESSION['cart'][$id_produto] = $quantidade;

	$_SESSION['success_messages'][] = 'Produto adicionado ao carrinho com sucesso.';
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>