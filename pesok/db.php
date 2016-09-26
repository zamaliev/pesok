<?php
	$mysqli = new mysqli('localhost', 'moko', 'moko', 'mojka'); 

	if (mysqli_connect_errno()) { 
	   printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error()); 
	   exit; 
	}
	$mysqli->set_charset("utf8") 
?>