<?php
	
	$email = "";
	$pass = "";	
	$loged = false;
	
	$email = !empty($_POST['email']) ? $_POST['email'] : '';
	$pass = !empty($_POST['password']) ? $_POST['password'] : '';
	
	if(md5($pass) == "e10adc3949ba59abbe56e057f20f883e" && $email == "lorin.pobel@gmail.com"){
		$loged = true;
	}
	
	$available = true;
	$available = !empty($_REQUEST["q"]) ? $_REQUEST["q"] : "";
	
?>
