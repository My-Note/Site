<?php 
	if (!isset($_SESSION)) {
		session_start();
	}
	require_once("../config.php");
	require_once("../functions.php");
	require_once("../user_function.php");

	$token = getToken(50);

	$email	= $_POST["email"];
	$name	= $_POST["name"];

	$msg = "";
	$type = "";
	//link to finish the registration
	$link_up = "http://my-note.esy.es/invite.php?type=confirm&id=1&username=$name&mail=$email&token=$token";
	//link to cancel the registration
	$link_down = "http://my-note.esy.es/invite.php?type=cancel&id=1&username=$name&mail=$email&token=$token";

	//funtions to get if already exist
	$confirm_email = search_for_email($email);
	$confirm_username = search_for_username($name);

	if ($confirm_username == "error") {
		$type = "alert-danger";
		$msg .= "Error on Username, already exist. <a href='#'' class='alert-link'>Get lost Username!</a>";
	} else {
		$type = "alert-success";
	}
	if ($confirm_email == "error") {
		$type = "alert-danger";
		$msg .= "Error on Email, already exist. <a href='#'' class='alert-link'>Get lost Email!</a>";
	} else {
		$type = "alert-success";
	}

	if ($msg == "") {
		$type = "alert-success";
		$msg = "The invitation will show up when you least expect.";
		$confirm_invite = signup_invite($token, $link_up, $link_down, $email, $name);
	} else {
		$type = "alert-danger";
	}


	$dados = array(
					'type'=> $type,
					'msg' => $msg
				);
	print json_encode($dados);
?>