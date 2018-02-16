<?php
	function searchAllProducts($page, $page_size) {
		global $conn;
		
		$stmt = $conn->prepare("SELECT * 
								FROM peca 
								WHERE display = 'true'
								ORDER BY peca.descricao
								LIMIT $page_size 
								OFFSET ".$page * $page_size.";");
		
		$stmt->execute();
		return $stmt->fetchAll();
		
	}
	
	function searchProduct($descricao, $marca, $tipo, $page, $page_size){	
		global $conn;
		if($descricao != '' OR $marca != '' OR $tipo != '' )
		{		
			$params = array();
			$query = "SELECT * FROM peca WHERE 1=1";
			if ($descricao != ''){
				$query .= " AND descricao ilike ?";
				$params[] = '%'.$descricao.'%';
			}
			if ($marca != ''){
				$query .= " AND marca ilike ?";
				$params[] = '%'.$marca.'%';
			}
			if ($tipo != ''){
				$query .= " AND tipo ilike ?";
				$params[] = '%'.$tipo.'%';
			}
			
			$query .= " AND display = 'true' ORDER BY peca.descricao  LIMIT $page_size OFFSET ".$page * $page_size.";";
			$stmt = $conn->prepare($query);
			$stmt->execute($params);
			$result = $stmt->fetchAll();
		}
		else
			$result = searchAllProducts($page, $page_size);
		
		return $result;
		
	}
	function searchProductByID($codigo){
		global $conn;
		$stmt = $conn->prepare("SELECT * 
								FROM peca 
								WHERE id = ? ;");
		
		$stmt->execute(array($codigo));
		return $stmt->fetch();
	}
	
	function adicionarProduto($descricao, $marca, $tipo, $stock, $preco){
		global $conn;
		$stmt = $conn->prepare("INSERT INTO peca (descricao, marca, tipo, stock, preco)
								VALUES (? ,?, ?, ?, ?);");
				  
		return $stmt->execute(array($descricao,$marca,$tipo,$stock, $preco));
	}
	
	function alterarDescricao($id_Produto, $nova_Descricao){
		global $conn;
		$stmt = $conn->prepare("UPDATE peca 
								SET descricao = ?
								WHERE id = ? ;");
				  
		return $stmt->execute(array($nova_Descricao, $id_Produto));
	}

	function alterarMarca($id_Produto, $nova_Marca){
		global $conn;
		$stmt = $conn->prepare("UPDATE peca 
								SET marca = ?
								WHERE id = ? ;");
				  
		return $stmt->execute(array($nova_Marca, $id_Produto));
	}

	function alterarTipo($id_Produto, $novo_Tipo){
		global $conn;
		$stmt = $conn->prepare("UPDATE peca 
								SET tipo = ?
								WHERE id = ?;");
				  
		return $stmt->execute(array($novo_Tipo, $id_Produto));
	}

	function alterarStock($id_Produto, $novo_Stock){
		global $conn;
		$stmt = $conn->prepare("UPDATE peca 
								SET stock  = ?
								WHERE id = ? ;");
				  
		return $stmt->execute(array($novo_Stock, $id_Produto));
	}

	function alterarPreco($id_Produto, $novo_Preco){
		global $conn;	
		$stmt = $conn->prepare("UPDATE peca 
								SET preco   = ?
								WHERE id = ?;");
				  
		return $stmt->execute(array($novo_Preco, $id_Produto));
	}
	
	function alterarPromo($id_Produto, $promo){
		global $conn;	
		$stmt = $conn->prepare("UPDATE peca 
								SET promo   = ?
								WHERE id = ?;");
				  
		return $stmt->execute(array($promo, $id_Produto));
	}
	
	function eliminarProduto($id_produto){
		global $conn;
		$stmt = $conn->prepare("UPDATE peca 
								SET display = 'false'
								WHERE id = ?;");
				  
		return $stmt->execute(array($id_produto));	
	}
	
	function updateProdutoStock($id_produto, $stock){
		global $conn;
		$stmt = $conn->prepare("UPDATE peca SET stock = ? WHERE id = ? ;");
		return $stmt->execute(array($stock,$id_produto));
	}
	
	function getLastIdProduto(){
		global $conn;
		$last_id = $conn->lastInsertId();
		return $last_id;
	}
	
	function getAllType(){
		global $conn;
		$stmt = $conn->prepare("SELECT tipo FROM peca GROUP BY tipo ORDER BY tipo;");
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
	function getAllBrands(){
		global $conn;
		$stmt = $conn->prepare("SELECT marca FROM peca GROUP BY marca ORDER BY marca;");
		$stmt->execute();
		return $stmt->fetchAll();
	}
	function getProductsCount($descricao, $marca, $tipo){
		global $conn;
		$query = "SELECT COUNT(*) AS count FROM peca WHERE 1=1 ";
		$params = array();
		if ($descricao != ''){
			$query .= " AND descricao ilike ?";
			$params[] = '%'.$descricao.'%';
		}
		if ($marca != ''){
			$query .= " AND marca ilike ?";
			$params[] = '%'.$marca.'%';
		}
		if ($tipo != ''){
			$query .= " AND tipo ilike ?";
			$params[] = '%'.$tipo.'%';
		}
		
		$stmt = $conn->prepare($query);
		$stmt->execute($params);
		return $stmt->fetch();
	}
	function getProductsFromCart($cart) {
		$products = array();

		foreach ($cart as $id => $quantidade) {
		  $product = searchProductByID($id);
		  $product['quantidade'] = $quantidade;
		  $products[] = $product;
		}

		return $products;    
	}
	function getImagePath($id_produto,$BASE_DIR, $BASE_URL ) {
		$results = glob("{$BASE_DIR}images_produtos/{$id_produto}.*");
		if(count($results)>0){
			$path_ext = pathinfo($results[0], PATHINFO_EXTENSION);
			$img_src = $BASE_URL."images_produtos/".$id_produto.".".$path_ext;		
		}
		else
			$img_src = $BASE_URL."images_produtos/notfound.jpg";
		
		return $img_src;
	}
	function getProductsWithPromo(){
		global $conn;
		$stmt = $conn->prepare("SELECT id, descricao, promo FROM peca WHERE promo > 0 AND display = 'TRUE';");
		$stmt->execute();
		return $stmt->fetchAll();
	}
?>