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
    $response = array('success' => true, 'usuario' => $var_usuario);
} else {
    $response = array('success' => false, 'error' => 'usuario o contraseña incorrecto');
}

echo json_encode($response);

mysqli_free_result($user);
mysqli_close($conex);
?>