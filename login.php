<?php
	$usr= addslashes($_POST["usr"]);
	$psw= addslashes($_POST["pwd"]);
	if($usr=="admin" and $psw=="admin"){
		$_SESSION["user"]="admin";
		header('Location: first.php');
	}
	else{
		header('Location: errorlog.php');
	}
?>