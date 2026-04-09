<!-- archivo: index.php -->
<?php
// Redirección según el botón pulsado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['iniciar'])) {
        header("Location: iniciar_sesion.php");
        exit();
    }
    if (isset($_POST['registrarse'])) {
        header("Location: registrarse.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página web</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

    <!-- Formulario para los botones de inicio y registro -->
    <form method="POST" style="margin: 10px;">
        <button type="submit" name="iniciar">Iniciar sesión</button>
        <button type="submit" name="registrarse">Registrarse</button>
    </form>

    <!-- Barra de navegación -->
    <nav class="barra-navegacion fondo-oscuro texto-blanco">
        <div class="contenedor">

            <a class="marca-sitio" href="#">Inicio</a>

            <div class="contenido-navegacion">
                <!-- Formulario de búsqueda -->
                <form class="formulario-busqueda derecha" action="datos.php" method="post">
                    <input 
                        class="campo-busqueda"
                        type="search"
                        name="busqueda"
                        placeholder="Buscar..."
                        required
                    >
                    <button class="boton-buscar" type="submit">
                        Buscar
                    </button>
                </form>
            </div>

        </div>
    </nav>

</body>
</html>