<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location: RolUsuario.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Rol de usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

  </head>
<body >


		<h2>Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </h2>
			  <button><a href="desconectar.php"> Cerrar Cesión </a></button>	


        <form method="post" action="" >
  <fieldset>
    <h3>Registro</h3>
    <div class="form-group">
      <h4>Ingresa tu nombre</h4>
      <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
    </div>
    <div class="form-group">
      <h3>Ingresa tu email</h3>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
    </div>
    <div class="form-group">
      <h3>Ingresa tu Password</h3>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <h3>Repite tu contraseña</h3>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>
      
    </div>
   
    <input  type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form>
</div>

<?php
		if(isset($_POST['submit'])){
			require("postadmin.php");
		}
	?>
        	 
		


	</style>
  </body>
</html>