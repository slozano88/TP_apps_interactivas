<?php

include("conexion_db.php");

	$usuario=$_POST['user'];
	$clave=$_POST['pass'];

	$user=mysqli_query($conex,"SELECT usuario,contra FROM datos_usuarios WHERE usuario = '$usuario' AND contra='$clave'");

	if($row=mysqli_fetch_assoc($user)){
		$var_pass = $row["contra"];
		$var_usuario = $row["usuario"];
	}

	if(@$var_pass==$clave AND @$var_usuario==$usuario){
		session_start();
		$_SESSION['usuario']=$usuario;
		echo"<script type='text/javascript'>location.href='Index.php'</script>";
	}else{
		echo"<script type ='text/javascript'>
				alert('usuario o contraseña incorrecto');
				location.href='f_login.php';
			</script>";
	}
	mysqli_free_result($user);
	mysqli_close($conex);


?>
