<!DOCTYPE html>
<html>
<head>

		
	<title>Roles de el sistema de login</title>
</head>
<body >



	<div><h2>Inicio de sesión</h2>
	
		<div class="Ingreso">

	<table border="0"  valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table border="0">

		<tr><td><label ><b>Correo: </b></label></td>
			<td> <input class="form-group has-success"  type="text" name="mail"></td></tr>
		<tr><td><label ><b>Contraseña: </b></label></td>
			<td><input type="password" name="pass"></td></tr>
		<tr><td></td>
			<td><input  type="submit" value="Aceptar"></td>
			</tr></tr></table>
		</form>
<br>

<!-- formulario registro -->

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
			require("post.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center>

	
</body>
</html>