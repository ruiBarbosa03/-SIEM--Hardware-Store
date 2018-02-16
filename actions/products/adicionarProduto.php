<?php  
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/products.php');
	
	$descricao = strip_tags($_POST['descricao']);
	$tipo      = strip_tags($_POST['tipo']);
	$marca     = strip_tags($_POST['marca']);
	$stock     = strip_tags($_POST['stock']);
	$preco     = strip_tags($_POST['preco']);
	if (!$descricao or !$tipo or !$marca or !$stock or !$preco){
		$_SESSION['error_messages'][] = "Campos em falta";
		header("location: {$BASE_URL}pages/admin/adicionarProduto.php");
		exit;
	}
	else 
		$return = adicionarProduto($descricao, $marca, $tipo, $stock, $preco);
	if ($return){
		$last_id = getLastIdProduto();
		
		$target_dir = "../../images_produtos/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				$uploadOk = 1;
			} else {
				$_SESSION['error_messages'][] = "Só são permitidos ficheiros do tipo PNG, JPEG, GIF e JPG";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if (file_exists($target_file)) {
			$_SESSION['error_messages'][] = "Ficheiro já existe";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			$_SESSION['error_messages'][] ="Imagem muito grande";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			$_SESSION['error_messages'][] = "Só são permitidos ficheiros do tipo PNG, JPEG, GIF e JPG";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			$_SESSION['error_messages'][] = "Não foi possível adicionar o ficheiro1";
		// if everything is ok, try to upload file
		} else {
			$target_file = $target_dir.$last_id.".".$imageFileType;
			echo $_FILES["fileToUpload"]["tmp_name"];
			echo $target_file;
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				$_SESSION['success messages'][] = "Imagem introduzida com sucesso";
			} else {
				$_SESSION['error_messages'][] = "Não foi possível adicionar o ficheiro2";
			}
		}
		$_SESSION['success messages'][] = "Produto bem introduzido";
		header("location: {$BASE_URL}pages/public/produtos.php");
		exit;
	}
	else{
		$_SESSION['error_messages'][] = "Erro a introduzir produto na base de dados.";
		header("location: {$BASE_URL}pages/admin/adicionarProduto.php");
		exit;
	}
?> 