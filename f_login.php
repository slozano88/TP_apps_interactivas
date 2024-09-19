<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="estilo_registro.css">
</head>

<body>

	<div class="f_inicio">
		<form id="login_form" action="login.php" method="POST">
			<h1>Inicio de sesión</h1>
			<h2>Usuario</h2><input type="text" id="user" name="user" required="required" placeholder="Ingrese Usuario" autocomplete="new-text">
			<br>
			<h2>Contraseña</h2><input type="password" id="pass" name="pass" required="required" placeholder="Ingrese Contraseña" autocomplete="new-password">
			<br>
			<input type="submit" class="boton" value="Iniciar Sesion">
			<br>
			<div class="redireccion_registro"><a href="registro.php" class="boton">¿No tenes cuenta? Registrate</a></div>
			<div class="redireccion_inicio" onclick="window.location.href='Index.php'" style="cursor: pointer;"><a href="Index.php" class="boton">Salir</a></div>
		</form>
	</div>

	<script>
        document.getElementById('login_form').addEventListener('submit', function(event) {
            event.preventDefault();
            var user = document.getElementById('user').value;
            var pass = document.getElementById('pass').value;

            localStorage.setItem('usuario', user);
			sessionStorage.setItem('usuario', user);

            window.location.assign('Index.php');
        });
    </script>

</body>

</html>