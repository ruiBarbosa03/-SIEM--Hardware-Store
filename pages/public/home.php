<?php
	include_once ('../../config/init.php');
	include_once ($BASE_DIR . 'database/products.php');
	$produtcs_promo = getProductsWithPromo();
	if(count($produtcs_promo)> 0){
		$smarty->assign("produtcs_promo",$produtcs_promo);
		$smarty->display('public/home.tpl');
	}
	else{
		header("location: {$BASE_URL}pages/public/produtos.php");
		exit;
	}
?>