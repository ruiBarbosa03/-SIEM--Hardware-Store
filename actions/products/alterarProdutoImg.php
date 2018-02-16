<?PHP
	include_once ('../../config/init.php');
	
	$id = strip_tags($_GET['idProduto']);
	
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
			header("location: {$BASE_URL}pages/admin/alterarProduto.php?id=".$id);
			exit;
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
		header("location: {$BASE_URL}pages/admin/alterarProduto.php?id=".$id);
		exit;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		$_SESSION['error_messages'][] = "Só são permitidos ficheiros do tipo PNG, JPEG, GIF e JPG";
		$uploadOk = 0;
		header("location: {$BASE_URL}pages/admin/alterarProduto.php?id=".$id);
		exit;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		$_SESSION['error_messages'][] = "Não foi possível adicionar o ficheiro1";
	// if everything is ok, try to upload file
	} else {
		$target_file = $target_dir.$id.".".$imageFileType;
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			$_SESSION['success_messages'][] = "Imagem introduzida com sucesso";
		} else {
			$_SESSION['error_messages'][] = "Não foi possível adicionar o ficheiro";
			header("location: {$BASE_URL}pages/admin/alterarProduto.php?id=".$id);
			exit;
		}
	}
	header("location: {$BASE_URL}pages/public/infoProduto.php?id=".$id);
	exit;
	
?>