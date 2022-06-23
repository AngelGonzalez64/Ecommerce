<?php

$url = "localhost";
$user = "root";
$password = "";
$db_name = "academ";

		$mysqli = new MySQLi($url, $user,$password,$db_name);
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli);
		}
			
?>