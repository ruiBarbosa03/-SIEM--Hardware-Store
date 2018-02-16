<?php
	include_once ('../../config/init.php');
	include_once ($BASE_DIR . 'database/products.php');

	$id = strip_tags($_GET['id']);
	
	$product = searchProductByID($id);
	
	if(count($product) < 2)
	{
		$_SESSION['error_messages'][] = 'Produto inexistente';
		header("Location: {$BASE_URL}pages/public/produtos?search=0");
		exit;
	}
	$results = glob("{$BASE_DIR}images_produtos/{$id}.*");
	if(count($results)>0){
		$path_ext = pathinfo($results[0], PATHINFO_EXTENSION);
		$img_src = $BASE_URL."images_produtos/".$product['id'].".".$path_ext;		
	}
	else
		$img_src = $BASE_URL."images_produtos/notfound.jpg";
	
	$smarty->assign('img_src', $img_src);
	$smarty->assign('product', $product);
	
	$smarty->display('admin/alterarProduto.tpl');
?>