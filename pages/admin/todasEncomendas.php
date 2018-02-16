<?php
	include_once ('../../config/init.php');
	include_once ($BASE_DIR . 'database/cart.php');
	
	$page      = isset($_GET['page'])?$_GET['page']:0;
	$page_size = 15;
	$encomendas = getAllEncomendasAdmin($page, $page_size);
	$total = getEncomendasCount();
	$nr_paginas = floor($total['count'] / $page_size);
	
	if($total['count'] % $page_size != 0)
		$nr_paginas = $nr_paginas + 1;
	
	$smarty->assign('encomendas', $encomendas);
	$smarty->assign('page',$page);
	$smarty->assign('page_size',$page_size);
	$smarty->assign('total',$total['count']);
	$smarty->assign('nr_paginas', $nr_paginas);
	
	$smarty->display('admin/todasEncomendas.tpl');
?>