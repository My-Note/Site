<?php
	if (!isset($_SESSION)) {
		session_start();
	}
	require_once("config.php");
	require_once("log_functions.php");
	require_once("passwordLib.php");

	
	if (isset($_REQUEST["register"])) {
		if($_REQUEST["register"] == "user"){
			print json_encode(get_user_name($_REQUEST['user']));
		} else
		if($_REQUEST["register"] == "email"){
			print json_encode(get_user_email($_REQUEST['email']));
		} else
		if($_REQUEST["register"] == "registar"){
			$error = "";

			$nome   = $_REQUEST["registar_nome"];
			$user   = $_REQUEST["registar_user"];
			$email  = $_REQUEST["registar_email"];
			$pass   = $_REQUEST["registar_password"];
			$pass_2 = $_REQUEST["registar_pass"];
			$country= $_REQUEST["registar_country"];

			if (isset($_REQUEST["registar_agree"])) {
				$agree  = $_REQUEST["registar_agree"];
			} else {
				$agree = "";
			}
			
			if ($pass === $pass_2 ) {
				$pass_user = $pass;
				$pass_user = password_hash($pass_user, PASSWORD_DEFAULT);
			} else {
				$error.= "<li>Password diferentes!!</li>";
			}
			if ($agree != "on") {
				$error.="<li>Tem de aceitar os termos e condições de comprar!!</li>";
			}
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		  		$error.="<li>Email inválido!!</li>";
			} else {
				$ver_email = get_user_email($email);
			}
			if ($ver_email == "error") {
				$error.="<li>Email já existente!!</li>";
			}
			$ver_user = get_user_name($user);
			if ($ver_user == "error") {
				$error.="<li>Nome de utilizador já existente!!</li>";
			}
			if ($error === "" and $ver_user === "success" and $ver_email === "success") {
				print json_encode(register_user($nome, $user, $email, $pass_user, $country));
			} else {
				print json_encode($error);
			}
		} else
		if($_REQUEST["register"] == "login"){
			$user   = $_REQUEST["entrar_user"];
			$pass   = $_REQUEST["entrar_password"];

			if (isset($_REQUEST["entrar_save"])) {
				$save  = $_REQUEST["entrar_save"];
			} else {
				$save = "";
			}

			if (($user == "") and ($pass == "")) {
				$response = "erro";
			} else {
				$response = login_user($user, $pass, $save);
			}
			print json_encode($response);
		}
	} else 
	if (isset($_REQUEST["update"])) {

		if($_REQUEST["update"] == "cliente"){

			$nc   = $_REQUEST["registar_nc"];
			$phone   = $_REQUEST["registar_phone"];
			$street  = $_REQUEST["registar_street"];
			$data_nasc   = $_REQUEST["registar_data_nasc"];

			if (register_cliente($nc, $phone, $street, $data_nasc) == "success") header("location:../account/");
		}
	}
?>