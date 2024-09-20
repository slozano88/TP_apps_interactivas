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
    <header>
        <nav>
            <ul class="sidebar">
                <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26">
                            <path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z" />
                        </svg></a></li>
                <li><a href="#">Mis recetas</a></li>
                <li><a href="mi_inventario.php">Mi inventario</a></li>
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
                <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26">
                            <path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z" />
                        </svg></a></li>
            </ul>
        </nav>
    </header>
    <div class="container" style="background-color: #591e0893; padding: 20px; margin-left: 50px; border-radius: 10px;">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="formGroupExampleInput" class="form-label">Nombre de Ingrediente</label>
            <input type="text" class="form-control" id="ingrediente" placeholder="Ingrese el nombre.." style="::placeholder { background-color: #F29F05; }">
        </div>
        <div class="col-md-6 mb-3">
            <label for="formGroupExampleInput2" class="form-label">Cantidad de Ingredientes</label>
            <input type="text" class="form-control" id="cantidad" placeholder="Ingrese la cantidad...">
        </div>
    </div>
</div>
</body>

</html>