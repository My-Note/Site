<?php 
	include_once('config.php');

	//funcao para preencher os dados da pagina feed
	###############################################
	#partilhar
	function log_login($user, ){
		global $mydb;

		$site = "/CAWCET-07/";
		$response = 'erro';

		$query_login= "SELECT id_user, name_user, email_user, username_user, pass_user, verify_user FROM user WHERE username_user = ?";
		
		$stmt_login = $mydb->prepare($query_login); 
		$stmt_login->bind_param("s", $user);	
		$stmt_login->execute();
		$stmt_login->bind_result($id_user, $nome_user, $email, $username, $hashPassword, $verificado);
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
		return $response;
	}

	//funcao para preencher os dados da pagina feed
	###############################################
	#partilhar
	function log_registar($value=''){
		# code...
	}

	//funcao para preencher os dados da pagina feed
	###############################################
	#partilhar
	function log_facebook($value=''){
		# code...
	}

	//funcao para preencher os dados da pagina feed
	###############################################
	#partilhar
	function log_twitter($value=''){
		# code...
	}

	//funcao para preencher os dados da pagina feed
	###############################################
	#partilhar
	function log_google($value=''){
		# code...
	}

	//funcao para preencher os dados da pagina feed
	###############################################
	#partilhar
	function log_instagram($value=''){
		# code...
	}

?>