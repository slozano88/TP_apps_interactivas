<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MilRecetas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos_inicio.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <script type="text/javascript" src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>


</head>

<body>
    <?php
    session_start();
    include("conexion_db.php");


    if (!isset($_SESSION['id'])) {
        echo "Inicia sesion";
    } else {
        echo "Bienvenido, usuario con ID: " . $_SESSION['id'];
    }
    $id_usuario = $_SESSION['id'];
    ?>

    <header>
        <nav>
            <ul class="sidebar">
                <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26">
                            <path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z" />
                        </svg></a></li>
                <li><a href="mis_recetas.php">Mis recetas</a></li>
                <li><a href="#">Mi inventario</a></li>
                <li><a href="#">Mi semana</a></li>
                <li><a href="registro.php">Registrate</a></li>
                <?php
                if (isset($_SESSION['id'])) {
                    echo '<li><a href="logout.php">Cerrar Sesión</a></li>';
                } else {
                    echo '<li><a href="f_login.php">Iniciar sesión</a></li>';
                }
                ?>
            </ul>
            <ul>
                <li class="marca"><a href="Index.php">MilRecetas</a></li>
                <li class="hideOnMobile"><a href="mis_recetas.php">Mis recetas</a></li>
                <li class="hideOnMobile"><a href="mi_inventario.php">Mi inventario</a></li>
                <li class="hideOnMobile"><a href="#">Mi semana</a></li>
                <li class="hideOnMobile"><a href="registro.php">Registrarse</a></li>
                <?php
                if (isset($_SESSION['id'])) {
                    echo '<li class="hideOnMobile"><a href="logout.php">Cerrar Sesión</a></li>';
                } else {
                    echo '<li><a href="f_login.php">Iniciar sesión</a></li>';
                }

                ?>
                <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26">
                            <path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z" />
                        </svg></a></li>
            </ul>
        </nav>
    </header>


    <div class="container mt-5">
        <div class="f_inventario">
            <form action="subir_receta.php" method="POST" enctype="multipart/form-data" class="p-4 border rounded shadow-sm bg-light">
                <h1 class="text-center mb-4">Subí tu Receta</h1>
                <div class="mb-3">
                    <label for="nombre_receta" class="form-label">Nombre de la Receta</label>
                    <input type="text" class="form-control" name="nombre_receta" id="nombre_receta" placeholder="Ingrese el nombre de la receta..." required="required">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción de la Receta</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" rows="4" placeholder="Escribe una descripción de la receta..." required="required"></textarea>
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen de la Receta</label>
                    <input type="file" class="form-control" name="imagen" id="imagen" accept="image/*" required="required">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" name="cargar" class="btn btn-primary btn-lg">Subir Receta</button>
                </div>
            </form>
        </div>
    </div>
    <table id="tabla-recetas" class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Receta</th>
                <th>Descripcion</th>
                <th>Imagen</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM recetas INNER JOIN datos_usuarios on recetas.id_usuario = datos_usuarios.id WHERE recetas.id_usuario = '$id_usuario'";
            $resultado = mysqli_query($conex, $query);


            while ($row = mysqli_fetch_array($resultado)) { ?>
                <tr>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['descripcion']; ?></td>
                    <td><img height="100px" width="100px" src="img_recetas/<?php echo $row['nombre_img'];?>"></td>
                    <td><a class="btn btn-warning" href="modificar.php?id=<?php echo $row['id_receta']; ?>">Modificar</a></td>
                    <td><a class="btn btn-danger" href="eliminar.php?id_receta=<?php echo $row['id_receta']; ?>">Eliminar</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>






</body>

</html>