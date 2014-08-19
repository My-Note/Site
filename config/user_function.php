<?php 
	include_once('config.php');

	//funcao para preencher os dados da pagina feed
	###############################################
	#partilhar
	function log_login($user ){
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


	/************************************************************************
	*                                                                      	*
	*          		function to get the username in db   		        	*
	*                                                                      	*
	*************************************************************************/

	function search_for_username($user){
		global $mydb;

		$query_user= "SELECT `email` FROM `users` WHERE `username` = ?"; 
		$stmt_user = $mydb->prepare($query_user); 
		$stmt_user->bind_param("s", $user); 
		$stmt_user->execute();
		$stmt_user->bind_result($id);
		if ($stmt_user->fetch()){
			$response = 'error';
		} else {
			$response = 'success';
		}
		$stmt_user->close(); 

		return $response;
	}

	/************************************************************************
	*                                                                      	*
	*          		function to get the username in db   		        	*
	*                                                                      	*
	*************************************************************************/
	#email = email@email.com

	function search_for_email($email){
		global $mydb;

		$query_user= "SELECT `username` FROM `users` WHERE `email` = ?"; 
		$stmt_user = $mydb->prepare($query_user); 
		$stmt_user->bind_param("s", $email); 
		$stmt_user->execute();
		$stmt_user->bind_result($id);
		if ($stmt_user->fetch()){
			$response = 'error';
		} else {
			$response = 'success';
		}
		$stmt_user->close(); 

		return $response;

	}

	/************************************************************************
	*                                                                      	*
	*          		function to get the username in db   		        	*
	*                                                                      	*
	*************************************************************************/
	#email = email@email.com

	function signup_invite($token, $link_up, $link_down, $email, $name){
		global $mydb;

		$id_user = 1; //uses 1 by default to set 1 like own site
		$invited = 0; //uses 0 so the person shows that had no invite

		$query_invite = "INSERT INTO `invite` (`id_user`, `email`, `username`, `invited`, `invite_token`, `invite_link`) 	VALUES ( ?, ?, ?, ?, ?, ?)"; 
		$stmt_invite = $mydb->prepare($query_invite); 
		$stmt_invite->bind_param("ississ", $id_user, $email, $name, $invited, $token, $link_up); 
		$stmt_invite->execute();
		$stmt_invite->close();

		$query_email= "SELECT username FROM invite WHERE email=?"; 
		$stmt_email = $mydb->prepare($query_email); 
		$stmt_email->bind_param("s", $email); 
		$stmt_email->execute();
		$stmt_email->bind_result($id); 
		if ($stmt_email->fetch()){
			if(send_email_invite($link_up, $link_down, $email, $name)){
				$response = 'success';
			} else {
				$response = 'error';
			}
		} else {
			$response = 'error';
		}
		$stmt_email->close(); 

		return $response;
	}

	/************************************************************************
	*                                                                      	*
	*             	function to get the username of token db   		     	*
	*                                                                      	*
	*************************************************************************/

	function search_for_email_of_invite($id){
		global $mydb;
		$id = intval($id);

		$query_user= "SELECT username, name, avatar FROM users WHERE id_user = ?"; 
		$stmt_user = $mydb->prepare($query_user); 
		$stmt_user->bind_param("i", $id); 

		$stmt_user->execute();
		$stmt_user->bind_result($username, $name, $avatar);
		while ($stmt_user->fetch()) {
			$response = 'success';
			$name = $name; 
			$username = $username;
			$avatar = $avatar;
		}
		if ($response == ""){
			$response = 'Error';
		}
		$stmt_user->close(); 

		$dados = array(
						'tipo'		=> $response,
						'name' 		=> $name,
						'username'  => $username,
						'avatar'  	=> $avatar
					);
		return $dados;

	}

	/************************************************************************
	*                                                                      	*
	*          		function to get the info by token   		        	*
	*                                                                      	*
	*************************************************************************/

	function search_by_token($token){
		global $mydb;

		$query_user= "SELECT `id_invite` FROM `invite` WHERE `invite_token` = ?"; 
		$stmt_user = $mydb->prepare($query_user); 
		$stmt_user->bind_param("s", $token); 
		$stmt_user->execute();
		$stmt_user->bind_result($id);
		if ($stmt_user->fetch()){
			$id_invite = $id;
		} else {
			$id_invite = '';
		}
		$stmt_user->close(); 

		return $id_invite;

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


	/************************************************************************
	*                                                                      	*
	*          		function to get the username in db   		        	*
	*                                                                      	*
	*************************************************************************/

	function send_email_invite($link_up, $link_down, $email, $name){

		$to  = $email;
		// subject
		$subject = "Invite from My-Note!!";
		// message
		$message = "
				<html>
					<head>
						<title>Welcome to My-Note</title>
					</head>
					<body>
						<p>You finally get your invite!!</p>
						<table>
							<tr>
								<th>Username</th>
								<th>$name</th>
							</tr>
							<tr>
								<td>Email</td>
								<td>$email</td>
							</tr>
							<tr>
								<td>Complete your Sign Up</td>
								<td><a href='$link_up'>Complete</a></td>
							</tr>
							<tr>
								<td>Cancel this invite</td>
								<td><a href='$link_down'>Cancel</a></td>
							</tr>
						</table>
					</body>
				</html>
				";

		// To send HTML mail, the Content-type header must be set
		$headers  = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

		// Additional headers
		$headers .= "To: $name <$email>" . "\r\n";
		$headers .= "From: My-Note <invite@my-note.esy.es>" . "\r\n";
		$headers .= "Cc: invite@my-note.esy.es" . "\r\n";
		$headers .= "Bcc: invite@my-note.esy.es" . "\r\n";

		// Mail it
		mail($to, $subject, $message, $headers);

	}
?>