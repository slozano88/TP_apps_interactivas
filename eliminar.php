<?php
include("conexion_db.php");
session_start();

if (isset($_GET['id_ingrediente'])) {

    $id = intval($_GET['id_ingrediente']);

    $query = "DELETE FROM ingredientes WHERE id_ingrediente = ?";
    $stmt = $conex->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: mi_inventario.php");
        exit; 
    } else {
        echo "Error al eliminar el ingrediente.";
    }

    $stmt->close();
} else {
    echo "ID no proporcionado.";
}

$conex->close();
?>