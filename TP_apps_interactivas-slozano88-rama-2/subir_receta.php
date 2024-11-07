<?php
include('conexion_db.php');
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_POST['cargar'])) {
    $target_dir = "img_recetas/";
    $file_name = basename($_FILES["imagen"]["name"]);
    $target_file = $target_dir . $file_name;
    $nombre_receta = $_POST['nombre_receta'];
    $descripcion_receta = $_POST['descripcion'];
    $id_usuario = $_SESSION['id'];

    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {

        $sql = "INSERT INTO recetas (id_usuario, nombre, descripcion, nombre_img) VALUES ('$id_usuario','$nombre_receta', '$descripcion_receta', '$file_name')";

        if (mysqli_query($conex, $sql)) {
            // Éxito al ejecutar la consulta, muestra SweetAlert y redirige
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: '¡Éxito!',
                    text: 'Receta guardada con éxito',
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    window.location.href = 'mis_recetas.php';
                });
            </script>";
        } else {
            // Error al ejecutar la consulta, muestra SweetAlert de error
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Hubo un problema al guardar la receta: " . mysqli_error($conex) . "',
                });
            </script>";
        }
    } else {
        echo "Hubo un error al subir la imagen.";
    }
}
