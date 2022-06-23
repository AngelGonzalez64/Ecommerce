<?php

		$mysqli = new MySQLi("localhost","root","","academ");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli);
		}
			
?>