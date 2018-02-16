<?php  
	include_once ('../../config/init.php');
	include_once ($BASE_DIR . 'database/products.php');
	
	$id        = strip_tags($_GET['idProduto']);
	$descricao = strip_tags($_POST['descricao']);
	$tipo      = strip_tags($_POST['tipo']);
	$marca     = strip_tags($_POST['marca']);
	$stock     = strip_tags($_POST['stock']);
	$preco     = strip_tags($_POST['preco']);
	$promo     = strip_tags($_POST['promo']);
	
	if ($descricao){
		$result = alterarDescricao($id, $descricao);
		if ($result){
			$_SESSION['success_messages'][] = "Campo alterado com sucesso";
			//header("Location: {$BASE_URL}pages/public/produtos.php?search=0");
		}
		else{
			$_SESSION['error_messages'][] = "Erro a aceder à base de dados";
			header("Location: {$BASE_URL}pages/admin/alterarProduto.php?id=".$id);
			exit;
		}
	}	
	
	if ($tipo){
		$result = alterarTipo($id, $tipo);
		if ($result){
			$_SESSION['success_messages'][] = "Campo alterado com sucesso";
			//header("Location: {$BASE_URL}pages/public/produtos.php?search=0");
		}
		else{
			$_SESSION['error_messages'][] = "Erro a aceder à base de dados";
			header("Location: {$BASE_URL}pages/admin/alterarProduto.php?id=".$id);
			exit;
		}
	}	
	
	if ($marca){
		$result = alterarMarca($id, $marca);
		if ($result){
			$_SESSION['success_messages'][] = "Campo alterado com sucesso";
			//header("Location: {$BASE_URL}pages/public/produtos.php?search=0");
		}
		else{
			$_SESSION['error_messages'][] = "Erro a aceder à base de dados";
			header("Location: {$BASE_URL}pages/admin/alterarProduto.php?id=".$id);
			exit;
		}
	}	
	
	if ($stock){
		$result = alterarStock($id, $stock);
		if ($result){
			$_SESSION['success_messages'][] = "Campo alterado com sucesso";
			//header("Location: {$BASE_URL}pages/public/produtos.php?search=0");
		}
		else{
			$_SESSION['error_messages'][] = "Erro a aceder à base de dados";
			header("Location: {$BASE_URL}pages/admin/alterarProduto.php?id=".$id);
			exit;
		}
	}	
	
	if ($preco){
		$result = alterarPreco($id, $preco);
		if ($result){
			$_SESSION['success_messages'][] = "Campo alterado com sucesso";
			//header("Location: {$BASE_URL}pages/public/produtos.php?search=0");
		}
		else{
			$_SESSION['error_messages'][] = "Erro a aceder à base de dados";
			header("Location: {$BASE_URL}pages/admin/alterarProduto.php?id=".$id);
			exit;
		}
	}	
	
	if ($promo){
		$result = alterarPromo($id, $promo);
		if ($result){
			$_SESSION['success_messages'][] = "Campo alterado com sucesso";
			//header("Location: {$BASE_URL}pages/public/produtos.php?search=0");
		}
		else{
			$_SESSION['error_messages'][] = "Erro a aceder à base de dados";
			header("Location: {$BASE_URL}pages/admin/alterarProduto.php?id=".$id);
			exit;
		}
	}
	header("Location: {$BASE_URL}pages/public/produtos.php?search=0");
	exit;

?> 