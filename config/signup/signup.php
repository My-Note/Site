<?php 
	require_once('../config.php');
	require_once('../user_function.php');
	/************************************************************************
	*                                                                      	*
	*          		function to get the username in db   		        	*
	*                                                                      	*
	*************************************************************************/

	$first_name 		= $_POST["first_name"]; 		//Miguel
	$last_name 			= $_POST["last_name"]; 			//Cerejo
		$full_name 	= $first_name." ".$last_name;

	$display_name 		= $_POST["display_name"]; 		//SrPatinhasa
	$email 				= $_POST["email"]; 				//invite@hotmail.com

	$password 			= $_POST["password"]; 			//Car1catura
	$password_confirm 	= $_POST["password_confirm"]; 	//Car1catura
	if ($password !== $password_confirm) {
		print_r("Error Password");
	} else {
		$pass = $password;
	}

	$sex				= $_POST["sex_registration"]; 	//M <> O <> F

	$token 				= $_POST["token"]; 				//9JC2vfQczHUJQliGkS6HePb6Qr5TcWKaAsrzyYULWpeBMmPPql
	$id_user 			= $_POST["id_user"]; 			//1 == Site <> N == users

	$id_invite 	= search_by_token($token);

	if ($id_user === "1" ) {
		$invited = 1;	
	} else {
		$invited = 0;
	}

	$query_login= "INSERT INTO `users`(`username`, `name`, `first`, `last`, `password`, `email`, `sexo`, `invite_id`, `invited`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
	
	$stmt_login = $mydb->prepare($query_login); 
	$stmt_login->bind_param("sssssssss", $display_name, $full_name, $first_name, $last_name, $pass, $email, $sex, $id_invite, $invited);	
	$stmt_login->execute();
	$stmt_login->bind_result($display_name, $full_name, $first_name, $last_name, $pass, $email, $sex);

	if ($stmt_login->fetch()){
		$stmt_login->close();
		if (($verificado === "Ativo") and (password_verify($pass, $hashPassword))){


			$response = 'success';

			$token = getToken(125);

			$query_update= "UPDATE user SET token = ? WHERE id_user = ?"; 
			$stmt_update = $mydb->prepare($query_update);
			$stmt_update->bind_param('si', $token, $id_user);
			$stmt_update->execute(); 
			$stmt_update->close();

			if ($save == "on") {
				$expire=time()+60*60*24*30; //expira dentro de um mes
				setcookie("id_user", $id_user, $expire, $site);
				setcookie("user", $username, $expire, $site);
				setcookie("email", $email, $expire, $site);
				setcookie("nome_user", $nome_user, $expire, $site);
				setcookie("token", $token, $expire, $site);
			}

			$_SESSION["id_user"] 	= $id_user;
			$_SESSION["user"] 		= $username;
			$_SESSION["email"] 		= $email;
			$_SESSION["nome_user"] 	= $nome_user;

		} else if ($verificado === "pendente") {
			$response = 'erro';
		} else {
			$response = 'erro';
		}
	}
?>