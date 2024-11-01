<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo_inventario.css">
</head>

<body>
    <?php
    session_start();


    if (!isset($_SESSION['id'])) {
        echo "Inicia sesion";
    } else {
        echo "Bienvenido, usuario con ID: " . $_SESSION['id'];
    }
    ?>
    <header>
        <nav>
            <ul class="sidebar">
                <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26">
                            <path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z" />
                        </svg></a></li>
                <li><a href="#">Mis recetas</a></li>
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
                <li class="hideOnMobile"><a href="#">Mis recetas</a></li>
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
    <div class="f_inventario">
        <form action="guardar_inv.php" method="POST">
            <h1>Guarda tu inventario</h1>
            <h2>Nombre del ingrediente</h2><input type="text" name="ingrediente" placeholder="Ingrese el nombre..." required="required">
            <h2>Cantidad</h2><input type="text" name="cantidad" placeholder="Ingrese una cantidad..." required="required">
            <input type="submit" name="cargar">
        </form>
    </div>
    <?php
    include("guardar_inv.php");
    ?>
</body>

</html>