<?php
include("conexion_db.php");

if (isset($_POST['registra'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['contrasenia']) >= 1) {
        $usuario = trim($_POST['nombre']);
        $contrasenia = trim($_POST['contrasenia']);
        $fechareg = date("d/m/y");

        $stmt = $conex->prepare("INSERT INTO `datos_usuarios` (usuario, contra, fecha_reg) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $usuario, $contrasenia, $fechareg);

        if ($stmt->execute()) {
            header("Location:Index.php");
            exit();
        } else {
            ?>
            <h3 class="bad">Ha ocurrido un error</h3>
            <?php
        }

        $stmt->close();
    } else {
        ?>
        <h3 class="bad">Complete los campos</h3>
        <?php
    }
}

$conex->close();
?>
