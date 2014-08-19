<?php 
	require_once('../user_function.php');
	$type = $_POST['post_type'];
	$data = $_POST['data'];

	if ($type === "name") {
		$result = search_for_username($data);
		echo $result;
	} else if ($type === "email") {
		$result = search_for_email($data);
		echo $result;
	}
?>