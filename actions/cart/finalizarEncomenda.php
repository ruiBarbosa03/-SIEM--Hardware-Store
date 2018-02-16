<?PHP
	include_once ('../../config/init.php');
	include_once ($BASE_DIR . 'database/cart.php');
	include_once ($BASE_DIR . 'database/products.php');
	
	if($_SESSION['autenticado'] == 0)
	{
		header("Location: {$BASE_URL}pages/validacao/login.php");
		exit;
	}
	
	if(count($_SESSION['cart']) > 0){
		//Cria um nova encomenda
		addNovaEncomenda($_SESSION['userID']);
		$stock_limitado = 0;
		//Buscar idEncomenda
		$encomenda = getNovaEncomendaID($_SESSION['userID']);
		$id_encomenda= $encomenda['id'];
		foreach ($_SESSION['cart'] as $id_produto => $quantidade) {
		  $product = searchProductByID($id_produto);
		  $preco = number_format((float)$product['preco']*(100 - $product['promo'])/100, 2, '.', '');
		  if($product['stock'] < $quantidade){
				$stock_limitado = 1;
		  }
		  addProdutoAEncomenda($id_produto, $id_encomenda, $quantidade, $preco * $quantidade);
		}
		
		finalizarEncomenda($_SESSION['userID'], $id_encomenda);
		unset($_SESSION['cart']);
		if($stock_limitado == 0)
			$_SESSION['success_messages'][] = 'Pedido Finalizado';
		else{
			$_SESSION['warning_messages'][] = '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>Um dos produtos tem stock limitado,deste modo pode demorar mais que o esperado. Agradeçemos a vossa paciência';
		}
		header("Location: {$BASE_URL}pages/client/zonaCliente.php");
		exit;
	}
	else{
		$_SESSION['error_messages'][] = 'Tem que ter pelo menos 1 produto no carrinho para poder finalizar a compra';
		header("Location: {$BASE_URL}pages/client/novaEncomenda.php");
		exit;
	}
	
?>