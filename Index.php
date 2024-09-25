<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MilRecetas</title>
    <link rel="stylesheet" href="estilos_inicio.css">

</head>
<body>
    <header>
        <nav>
            <ul class="sidebar">
                <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg></a></li>
                <li><a href="#">Mis recetas</a></li>
                <li><a href="#">Mi inventario</a></li>
                <li><a href="#">Mi semana</a></li>
                <li><a href="registro.php">Registrate</a></li>
                <li><a href="f_login.php">Iniciar sesión</a></li>
            </ul>
            <ul>
                <li class="marca"><a href="#">MilRecetas</a></li>
                <li class="hideOnMobile"><a href="#">Mis recetas</a></li>
                <li class="hideOnMobile"><a href="mi_inventario.php">Mi inventario</a></li>
                <li class="hideOnMobile"><a href="#">Mi semana</a></li>
                <li class="hideOnMobile"><a href="registro.php">Registrarse</a></li>
                <li class="hideOnMobile"><a href="f_login.php">Iniciar sesión</a></li>
                <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"/></svg></a></li>
            </ul>
            </nav>
    </header>
    <div class="banner">
        <h2>Crea y subí tus recetas</h2>
    </div>
    <script>
        function showSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'flex'
        }
        function hideSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'none'
        }
        
        
    </script>

</body>
</html>