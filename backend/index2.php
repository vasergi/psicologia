<!doctype html>
<html>
<head>
	<title>Página de inicio</title>
	<meta charset="utf-8">
	<style>
		body {
			background-color: pink;
			font-family: Arial, sans-serif;
		}

		.container {
			max-width: 960px;
			margin: 0 auto;
			padding: 20px;
		}

		.logo {
			display: block;
			margin: 0 auto;
			width: 150px;
			height: auto;
		}

		h1 {
			text-align: center;
			color: #333;
			margin-bottom: 30px;
		}

		.login-container {
			background-color: #f1f1f1;
			border: 1px solid #ccc;
			border-radius: 8px;
			padding: 20px;
			text-align: center;
		}

		.login-form input {
			width: 100%;
			margin-bottom: 10px;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		.login-form input[type="submit"] {
			background-color: #333;
			color: #fff;
			cursor: pointer;
		}

		.navigation {
			text-align: center;
			margin-top: 40px;
		}

		.navigation a {
			text-decoration: none;
			color: #333;
			padding: 10px 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		.navigation a:hover {
			background-color: #333;
			color: #fff;
		}
	</style>
</head>
<body>
	<div class="container">
		<img src="../imagenes/psico.png" alt="Logo" class="logo">
		<h1>PSICOLOGÍA</h1>
		<div class="login-container">
			<h2>INICIAR SESIÓN</h2>
			<form class="login-form" action="" method="POST">
				<input type="text" name="usuario" placeholder="Usuario"><br>
				<input type="password" name="clave" placeholder="Contraseña"><br>
				<input type="submit" name="Enviar" value="Ingresar">
			</form>
			<a href="../backend/formulario.html">REGISTRARSE</a>
		</div>
		<div class="navigation">
			<a href="formulario.html">INICIO</a>
			<a href="mostrarpacientes.php">ACERCA DE NOSOTROS</a>
			<a href="formularioacudientes.html">RECOMENDACIONES</a>
			<a href="mostraracudientes.php">CONTACTANOS</a>
		</div>
	</div>
</body>
</html>
