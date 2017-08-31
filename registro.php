<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<title>Registro</title>
</head>
<body>
	<header>
	<?php include'../inc/header.php'; ?>
	</header>
		
	<form class="contacto" method="POST" style="background: whiteblue;" style="text-align: center;">

		<h3 style="text-align: center;">Registro</h3>
	<div class= "form-group">
		<label for="nick">NICK: </label>	
		<input type="text" name="nick" class= "form-control" id="nick" placeholder="nick" title="solo letras"  onblur="mayus(this.value , this.id)" required="true">
	</div>

	 <!-- <div class="validacion"></div> -->


	<div class="form-group">
		<label for="pass1">Contraseña :</label>
		<input type="password" name="pass1"  id="pass1" placeholder="Contraseña">		
	</div>
	
	 <div class="form-group">
		<label for="pass2"> Repite Contraseña :</label>
		<input type="password" name="pass2"  id="pass2" required="true" placeholder="Repite Contraseña">
	</div>
	 <div class="form-group">
		<label for="nombre"> Nombre: </label>
		<input type="name" name="name"  id="nombre" required="true" placeholder="Nombre">
	</div>

	<select name="nivel" id="" required="true">
		<option value="" disabled selected>Elige el nivel de usuario:  </option>
		<option value="Admin">Administrador</option>
		<option value="Usuario">Usuario</option>
	</select>
	

	<div class="form-group">
		<label for="email">Email :</label>
		<input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
	</div>

	 <div class="validacionemail"></div>
  

  <input type="submit" name="submit" value="Registro"> 
	<a href="#"><button type="button" class="btn btn-secondary" id="btn ingresar">Ingresar</button></a> 
	<a href="login.php"><button type="button" class="btn btn-secondary" id="btn-ingresar">Ya tienes cuenta?</button></a>
	<a href="index.php"><button type="button" class="btn btn-secondary" id="btn-ingrasar">Volver</button></a>
  
	<?php 
    if (isset($_POST['submit'])) {
    	require ('ins_usuario.php');
    }
	 ?>
			 </form>

	<?php  include '../inc/script.php'; ?>
	<script src="../js/validar.js"></script>
				
	
</body>
</html>