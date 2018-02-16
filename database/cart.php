<?PHP
	function getAllEncomendasAdmin($page,$page_size){
		global $conn;
		$stmt = $conn->prepare("SELECT encomenda.id AS id_encomenda, utilizador.id, utilizador.nome, data, estado 
								FROM encomenda 
								JOIN utilizador ON encomenda.id_cliente = utilizador.id
								WHERE estado NOT ILIKE '%entregue%' AND encomenda.finalizada = TRUE
								ORDER BY estado DESC, data
								LIMIT $page_size 
								OFFSET ?;");
		
		$stmt->execute(array(($page * $page_size)));
		return $stmt->fetchAll();
	}
	function getEncomendasByID($id_encomenda){
		global $conn;
		$stmt = $conn->prepare("SELECT id_encomenda, encomenda.data, peca.id, peca.descricao, peca.marca, peca.tipo, quantidade , pertencea.preco, estado
								FROM encomenda
								JOIN pertencea ON encomenda.id = pertencea.id_encomenda
								JOIN peca ON peca.id = pertencea.id_peca 
								WHERE encomenda.id = ? AND peca.id = id_peca 
								ORDER BY peca.id;");
		
		$stmt->execute(array($id_encomenda));
		return $stmt->fetchAll();
	} 
	function updateEncomendaInfo1($id_encomenda){
		global $conn;
		$stmt = $conn->prepare("UPDATE encomenda 
								SET estado = 'A caminho' 
								WHERE id = ? ;");
		return $stmt->execute(array($id_encomenda));
	}
	function updateEncomendaInfo2($id_encomenda){
		global $conn;
		$stmt = $conn->prepare("UPDATE encomenda 
								SET estado = 'Entregue' 
								WHERE id = ? ;");
		return $stmt->execute(array($id_encomenda));
	}
	
	function getEncomendas($id_cliente, $page,$page_size){
		global $conn;
		
		$stmt = $conn->prepare("SELECT id_encomenda, data, SUM(pertencea.preco), estado from encomenda 
								JOIN pertencea ON pertencea.id_encomenda = encomenda.id 
								JOIN peca ON pertencea.id_peca = peca.id
								WHERE (estado ILIKE '%processar%' OR estado ILIKE '%caminho%') AND encomenda.id_cliente = ? AND finalizada = 'true'
								GROUP BY id_encomenda, data, estado
								ORDER BY id_encomenda
								LIMIT $page_size 
								OFFSET ?;");
		$stmt->execute(array($id_cliente, ($page * $page_size)));
		return $stmt->fetchAll();
	}
	function getAllEncomendas($id_cliente, $page,$page_size){
		global $conn;
		
		$stmt = $conn->prepare("SELECT id_encomenda, data, SUM(pertencea.preco), estado from encomenda 
								JOIN pertencea ON pertencea.id_encomenda = encomenda.id 
								JOIN peca ON pertencea.id_peca = peca.id
								WHERE encomenda.id_cliente = ? AND finalizada = 'true'
								GROUP BY id_encomenda, data, estado
								ORDER BY id_encomenda
								LIMIT $page_size 
								OFFSET ?;");
		$stmt->execute(array($id_cliente, ($page * $page_size)));
		return $stmt->fetchAll();
	}
	
	function getNovaEncomendaID($id_cliente){
		global $conn;
		
		$stmt = $conn->prepare("SELECT * 
								FROM encomenda 
								WHERE finalizada = false AND id_cliente = ? ;");
		$stmt->execute(array($id_cliente));
		return $stmt->fetch();		
	}
	
	function searchNovaEncomenda($id_cliente){
		global $conn;
		$stmt = $conn->prepare("SELECT id_encomenda, peca.id as id_peca, peca.descricao, peca.marca, peca.tipo, quantidade, pertencea.preco
								FROM encomenda
								JOIN pertencea ON encomenda.id = pertencea.id_encomenda
								JOIN peca ON peca.id = pertencea.id_peca  
								WHERE encomenda.id = id_encomenda AND peca.id = id_peca AND finalizada = false AND id_cliente = ? ");
		 
		$stmt->execute(array($id_cliente));
		return $stmt->fetchAll();	
	}
	
	function getProdutoNaEncomenda($id_produto, $id_encomenda){
		global $conn;
		$stmt = $conn->prepare("SELECT id_encomenda, peca.id, peca.descricao, peca.marca, peca.tipo, quantidade 
								FROM encomenda, pertencea, peca 
								WHERE encomenda.id = id_encomenda AND encomenda.id = ? AND peca.id = id_peca AND peca.id = ? AND finalizada = false;");
		$stmt->execute(array($id_encomenda,$id_produto));
		return $stmt->fetch();
	}
	
	function removeProdutoNaEncomenda($id_produto, $id_encomenda){
		global $conn;		
		$stmt = $conn->prepare("DELETE FROM pertencea WHERE id_encomenda = ? AND id_peca = ? ;");
		return $stmt->execute(array($id_encomenda, $id_produto));
	}
	
	function eliminarEncomenda($id_encomenda, $id_cliente){
		global $conn;
		
		$stmt = $conn->prepare("DELETE FROM encomenda WHERE id = ? AND id_cliente = ? ;");
		return $stmt->execute(array($id_encomenda, $id_cliente));
	}
	
	function getNovaEncomendaIDAndTotal($id_cliente){
		global $conn;
		
		$stmt = $conn->prepare("SELECT id_encomenda, COUNT(id_peca) AS total FROM encomenda
								JOIN pertencea ON encomenda.id = id_encomenda
								JOIN peca ON peca.id = id_peca
								WHERE id_cliente = ? AND finalizada = false
								GROUP BY id_encomenda");
		$stmt->execute(array($id_cliente));
		return $stmt->fetch();		
	}
	
	function finalizarEncomenda($id_cliente, $id_encomenda){
		global $conn;
		$stmt = $conn->prepare("UPDATE encomenda SET finalizada = true WHERE id = ? AND id_cliente = ? ;");
		return $stmt->execute(array($id_encomenda, $id_cliente));
	}
	
	function addNovaEncomenda($id_cliente){
		global $conn;
		$stmt = $conn->prepare("INSERT INTO encomenda VALUES(DEFAULT, ? ,?,'Por Processar', false);");
		return $stmt->execute(array($id_cliente, date("Y-m-d")));
	}
	
	function addProdutoAEncomenda($id_produto, $id_encomenda, $quantidade, $preco_final){
		global $conn;
		$stmt = $conn->prepare("INSERT INTO pertencea VALUES (?, ?, ?, ?);");
		return $stmt->execute(array($id_produto, $id_encomenda, $quantidade, $preco_final));
	}
	
	function getEncomendasCount(){
		global $conn;
		$stmt = $conn->prepare("SELECT COUNT(*) as count 
								FROM encomenda 
								WHERE estado NOT ILIKE '%entregue%' AND encomenda.finalizada = TRUE");
		$stmt->execute();
		return $stmt->fetch();
	}
	
	function getClientEncomendasCountNotComplete($id_cliente){
		global $conn;
		$stmt = $conn->prepare("SELECT COUNT(*) as count 
								FROM encomenda 
								WHERE estado NOT ILIKE '%entregue%' AND encomenda.finalizada = TRUE AND id_cliente = ?");
		$stmt->execute(array($id_cliente));
		return $stmt->fetch();
	}
	
	function getClientAllEncomendasCount($id_cliente){
		global $conn;
		$stmt = $conn->prepare("SELECT COUNT(*) as count 
								FROM encomenda 
								WHERE encomenda.finalizada = TRUE AND id_cliente = ?");
		$stmt->execute(array($id_cliente));
		return $stmt->fetch();
	}
	
?>