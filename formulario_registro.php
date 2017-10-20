<!DOCTYPE html>
<html>
<head>
	<title>FORMULARIO_REGISTRO</title>
	<h1>FORMULARIO REGISTRO</h1>
</head>
<body>
	<form action="registrar_usuario.php">
		<div>
			<label for= "dnil">DNI</label>
			<input type="text" name="dni"/><br>

			<label for= "nombrel">Nombre</label>
			<input type="text" name="nombre"/><br>

			<label for= "apellidol">Apellido</label>
			<input type="text" name="apellido"/><br>

			<label for= "telefonol">telefono</label>
			<input type="text" name="telefono"/><br>

			<label for= "fechal">Fecha Nacimiento</label>
			<input type="date" name="fecha"/><br>

			<label for= "emaill">Email</label>
			<input type="text" name="email"/><br>

			<label for= "contral">Contrasena</label>
			<input type="password" name="contra"/><br>
			<input type="submit" name="submit" value="registrar"/>
		</div>
	</form>
</body>
</html>