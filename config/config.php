<?php
	$bd_maquina 	= "localhost";
	$bd_utilizador 	= "root";
	$bd_senha 		= "";
	$bd_base 		= "my_note";

	// $bd_maquina 	= "mysql.hostinger.pt";
	// $bd_utilizador 	= "u593327773_admin";
	// $bd_senha 		= "xSNgInk=SGe!6rY";
	// $bd_base 		= "u593327773_note";

	$mydb = @new mysqli($bd_maquina, $bd_utilizador, $bd_senha, $bd_base); 
//	$mydb -> set_charset("utf8");
?>