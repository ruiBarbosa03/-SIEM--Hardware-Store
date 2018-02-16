<?php

	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/users.php');
	
	$username = $_GET['username'];
	$user_returned = checkUsername($username);
	
	//print_r(count($user_returned));
	
	if(count($user_returned) > 1)
		echo json_encode(0);
	else
		echo json_encode(1);
	
?>