<?php
	function checkLogin($username, $password_md5) {
		global $conn;
		
		$stmt = $conn->prepare("SELECT *
								FROM utilizador
								WHERE username = ? AND password = ?");
		
		$stmt->execute(array($username, $password_md5));
		return $stmt->fetch();
		
	}

	function checkUsername($username){
		global $conn;
		/*TODO - ver se a query está correta*/
		$stmt = $conn->prepare("SELECT * 
								FROM utilizador 
								WHERE username = ? ;" ); 
		$stmt->execute(array($username));
		return $stmt->fetch();
	}

	function addUser($nome, $morada, $email, $telefone, $username, $password){
		
		
		// ver na base de dados se Username existe
		$result = checkUsername($username); 
		
		if(count($result) < 2){ //Não existe ninguém com este username
			global $conn;
			$stmt = $conn->prepare("INSERT INTO utilizador 
									VALUES (DEFAULT, ? , ? , ? , ? , ? , ? ,false);");
			if (!$stmt->execute(array($nome, $morada, $telefone, $username, $password, $email))) {
			  return 1; // Erro a executar a query
			  exit;
			}
			return 0; //Correu tudo bem	
			return $query;
		}
		else
			return 2; //Username já utilizado*/
	}
	
	function searchAllClients($page, $page_size){
		
		global $conn;
		$stmt = $conn->prepare("SELECT * 
								FROM utilizador
								WHERE admin = 'f'
								ORDER BY utilizador.nome
								LIMIT $page_size 
								OFFSET ".$page * $page_size.";");
				  
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
	function searchClient($nome, $user, $email, $telefone, $morada,$page, $page_size){
		global $conn;
		if($nome!= '' OR $user != '' OR $email != '' OR $telefone != '' OR $morada != '')
		{			
			$params = array();
			$query = "SELECT * FROM utilizador WHERE 1=1";
			if($nome != ''){
				$query .= " AND nome ilike ?";
				$params[] = '%'.$nome.'%';
			};
			if ($user != ''){
				$query .= " AND username ilike ?";
				$params[] = '%'.$user.'%';
			}
			if ($email != ''){
				$query .= "AND email ilike ?";
				$params[] = '%'.$email.'%';
			}
			if ($telefone != ''){
				$query .= " AND CAST(telefone AS text) ilike ?"; 
				$params[] = '%'.$telefone.'%';
			}
			if ($morada != ''){
				$query .= " AND morada ilike ?";
				$params[] = '%'.$morada.'%';
			}
			
			$query .= " ORDER BY utilizador.nome LIMIT $page_size OFFSET ".$page * $page_size.";";
			$stmt = $conn->prepare($query);
			$stmt->execute($params);
			$result = $stmt->fetchAll();
		}
		else
			$result = searchAllClients($page, $page_size);
		//Retorna o resultado da query
		return $result;
	}
	
	function searchClientByID($id){
		global $conn;
		$stmt = $conn->prepare("SELECT * 
								FROM utilizador
								where id = ?;");
		$stmt->execute(array($id));
		return $stmt->fetch();
	}
	
	function changeAddress($id, $newAddress){
		global $conn;
		
		$stmt = $conn->prepare("UPDATE utilizador 
								SET morada = ? 
								WHERE id = ?;");
				  
		return $stmt->execute(array($newAddress, $id));
	}

	function changeTelephone($id, $newPhone){
		global $conn;
		$stmt = $conn->prepare("UPDATE utilizador 
								SET telefone = ?
								WHERE id = ?;");
		return $stmt->execute(array($newPhone, $id));
	}

	function changeEmail($id, $newEmail){
		global $conn;
		
		$stmt = $conn->prepare("UPDATE utilizador 
								SET email = ?
								WHERE id = ?;");
				  
		return $stmt->execute(array($newEmail, $id));
	}

	function changePassword($id, $newPassword){
		global $conn;
		
		$stmt = $conn->prepare("UPDATE utilizador 
								SET password   = ?
								WHERE id = ?;");
		
		return $stmt->execute(array($newPassword, $id));
	}
	
	function getUsersCount($nome, $user, $email, $telefone, $morada){
		global $conn;
		
		$params = array();
		$query = "SELECT COUNT(*) AS count FROM utilizador WHERE 1=1";
		if($nome != ''){
			$query .= " AND nome ilike ?";
			$params[] = '%'.$nome.'%';
		};
		if ($user != ''){
			$query .= " AND username ilike ?";
			$params[] = '%'.$user.'%';
		}
		if ($email != ''){
			$query .= "AND email ilike ?";
			$params[] = '%'.$email.'%';
		}
		if ($telefone != ''){
			$query .= " AND CAST(telefone AS text) ilike ?"; 
			$params[] = '%'.$telefone.'%';
		}
		if ($morada != ''){
			$query .= " AND morada ilike ?";
			$params[] = '%'.$morada.'%';
		}
		
		$stmt = $conn->prepare($query);
		$stmt->execute($params);
		return $stmt->fetch();
	}
	
	function countUsers(){
		global $conn;
		$stmt   = $conn->prepare("SELECT COUNT(*) as count from utilizador;");
		$stmt->execute();
		$result = $stmt->fetch();
		return $result['count'];
	}
	
	function checkPassword($id_cliente, $password){
		global $conn;
		$stmt = $conn->prepare("SELECT *
								FROM utilizador
								WHERE id = ? AND password = ?");
		
		$stmt->execute(array($id_cliente, $password));
		return $stmt->fetchAll();
	}
	
	function getImagePath($id_cliente,$BASE_DIR, $BASE_URL ) {
		$results = glob("{$BASE_DIR}images_clientes/{$id_cliente}.*");
		if(count($results)>0){
			$path_ext = pathinfo($results[0], PATHINFO_EXTENSION);
			$img_src = $BASE_URL."images_clientes/".$id_cliente.".".$path_ext;		
		}
		else
			$img_src = $BASE_URL."images_clientes/notfound.png";
		
		return $img_src;
	}
?>