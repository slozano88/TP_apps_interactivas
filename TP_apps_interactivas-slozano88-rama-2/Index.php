<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MilRecetas</title>
    <link rel="stylesheet" href="estilos_inicio.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


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
                <li class="marca"><a href="#">MilRecetas</a></li>
                <!-- <li class="hideOnMobile"><a href="mis_recetas.php">Mis recetas</a></li> -->
                <?php
                if (!isset($_SESSION['id'])) {
                    echo '<li class="hideOnMobile"><a href="#" onclick="mostrarAlerta(event)">Mis recetas</a></li>';
                } else {
                    echo '<li><a href="mis_recetas.php">Mis recetas</a></li>';
                }

                ?>
                <!-- <li class="hideOnMobile"><a href="mi_inventario.php">Mi inventario</a></li> -->
                <?php
                if (!isset($_SESSION['id'])) {
                    echo '<li class="hideOnMobile"><a href="#" onclick="mostrarAlerta(event)">Mi inventario</a></li>';
                } else {
                    echo '<li><a href="mi_inventario.php">Mi inventario</a></li>';
                }

                ?>
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
    <div class="banner">
        <div class="banner-izq">
            <h2>Crea y subí tus recetas</h2>
        </div>
        <div class="banner-der">
            <h2>aaaaaa</h2>
        </div>
    </div>
    <script>
        function showSidebar() {
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'flex'
        }

        function hideSidebar() {
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'none'
        }
    </script>
    <script>
        function mostrarAlerta(event) {
            event.preventDefault();
            Swal.fire({
                icon: 'error',
                title: 'Error de credenciales...',
                text: 'Por favor inicie sesión para acceder a esta sección',
                confirmButtonText: 'Iniciar sesión'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'f_login.php';
                }
            });
        }
    </script>

</body>

</html>