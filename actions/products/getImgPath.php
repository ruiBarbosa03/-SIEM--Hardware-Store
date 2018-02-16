<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/products.php');
	
	$id_produto = $_GET['id_produto'];
	
	echo json_encode(getImagePath($id_produto,$BASE_DIR, $BASE_URL ));

?>