<?php
	include_once ('../../config/init.php');
	include_once ($BASE_DIR . 'database/products.php');
	
	
	if(isset($_GET['descricao']))
		$descricao = strip_tags($_GET['descricao']);
	else
		$descricao = "";
	
	if(isset($_GET['marca']))
		$marca = strip_tags($_GET['marca']);
	else
		$marca = "";
	
	if(isset($_GET['tipo']))
		$tipo = strip_tags($_GET['tipo']);
	else
		$tipo = "";
	
	$page = isset($_GET['page'])?$_GET['page']:0;
	$page_size = 5;
	
	$products  = searchProduct($descricao, $marca, $tipo, $page, $page_size);
	$types = getAllType();
	$brands = getAllBrands();
	$total = getProductsCount($descricao, $marca, $tipo);
	

	$nr_paginas = floor($total['count'] / $page_size);
	if($total['count'] % $page_size != 0)
		$nr_paginas = $nr_paginas + 1;
	
	$smarty->assign('products', $products);
	$smarty->assign('types', $types);
	$smarty->assign('brands',$brands);
	
	$smarty->assign('page',$page);
	$smarty->assign('descricao',$descricao);
	$smarty->assign('marca',$marca);
	$smarty->assign('tipo',$tipo);
	
	$smarty->assign('page_size',$page_size);
	$smarty->assign('total',$total['count']);
	$smarty->assign('nr_paginas',$nr_paginas);
	
	$smarty->display('public/produtos.tpl');
?>