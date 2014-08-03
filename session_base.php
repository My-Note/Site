<?php
	if (!isset($_SESSION)) {
		session_start();
	}

	$page_active = basename($_SERVER['PHP_SELF']);
	
	if (isset($_COOKIE["id_user"])){
		$_SESSION["id_user"] = $_COOKIE["id_user"];
		$_SESSION["user"] = $_COOKIE["user"];
		$_SESSION["nome_user"] = $_COOKIE["nome_user"];
		$id_user = $_SESSION["id_user"];
		$username = $_SESSION["user"];
		$nome_user = $_SESSION["nome_user"];
	}else{
		
		if (isset($_SESSION["id_user"])){
			$id_user = $_SESSION["id_user"];
			$username = $_SESSION["user"];
			$nome_user = $_SESSION["nome_user"];
		} else {
			if ($page_active == "index.php") {
			//	header("location: /home.php");
			} else {
			//	header("location: /index.php");
			}
		}
	}
?>