<?php
	$bd_maquina 	= "localhost";
	$bd_utilizador 	= "root";
	$bd_senha 		= "1234";
	$bd_base 		= "my_note";

	$mydb = @new mysqli($bd_maquina, $bd_utilizador, $bd_senha, $bd_base); 
	$mydb -> set_charset("utf8");
?>