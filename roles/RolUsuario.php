<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:RolAdministrador.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Rol de usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
  </head>
<body >

   <h2>Bienvenido al sistema tu rol es ser un : <strong> <?php echo $_SESSION['user'];?> </strong></h2>
   <button><a href="desconectar.php">Cerrrar sesion</a></button>

  </body>
</html>