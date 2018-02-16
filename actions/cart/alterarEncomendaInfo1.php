<?php  
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/cart.php');
	include_once($BASE_DIR .'database/products.php');
	
	$id_encomenda = strip_tags($_GET["id_encomenda"]);
	try{
		
		
		$produtos_encomendados = getEncomendasByID($id_encomenda);
		foreach ($produtos_encomendados as $produto_encomendado){
			$id_produto = $produto_encomendado['id'];
			$produto = searchProductByID($id_produto);
			$stock = $produto['stock'];
			$quantidade = $produto_encomendado['quantidade'];
			if($stock < $quantidade){
				$_SESSION['error_messages'][] = "O produto <a href=\"{$BASE_URL}pages/public/infoProduto.php?id={$produto['id']}\">".$produto['descricao']."</a> não tem stock suficiente. Encomenda Abortada";
				header("location: {$BASE_URL}pages/client/infoEncomenda.php?id_encomenda=$id_encomenda");
				exit;
			}
		}
		foreach ($produtos_encomendados as $produto_encomendado){
			$id_produto = $produto_encomendado['id'];
			$produto = searchProductByID($id_produto);
			$stock = $produto['stock'];
			$quantidade = $produto_encomendado['quantidade'];
			updateProdutoStock($id_produto, $stock - $quantidade);	
		}
		updateEncomendaInfo1($id_encomenda);
	}
	catch (PDOException $e){
		$_SESSION['error_messages'][] = "Erro a alterar informação da encomenda";
		header("location: {$BASE_URL}pages/client/infoEncomenda.php?id_encomenda=$id_encomenda");
		exit;
	}
	$_SESSION['success_messages'][] = "Sucesso a alterar informação da encomenda";
	header("location: {$BASE_URL}pages/admin/todasEncomendas.php");
?> 