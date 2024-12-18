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
} elseif (isset($_GET['id_receta'])) {
    $id = intval($_GET['id_receta']);

    // Primero, obtener el nombre de la imagen asociada a la receta
    $query = "SELECT nombre_img FROM recetas WHERE id_receta = ?";
    $stmt = $conex->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($nombre_img);
    $stmt->fetch();
    $stmt->close();

    // Si la receta tiene una imagen, eliminarla del servidor
    if ($nombre_img) {
        $image_path = "img_recetas/" . $nombre_img;
        if (file_exists($image_path)) {
            unlink($image_path); // Elimina la imagen del servidor
        }
    }

    // Luego, eliminar la receta de la base de datos
    $query = "DELETE FROM recetas WHERE id_receta = ?";
    $stmt = $conex->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: mis_recetas.php");
        exit;
    } else {
        echo "Error al eliminar la receta.";
    }

    $stmt->close();
} else {
    echo "ID no proporcionado.";
}

$conex->close();
