<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form action="procesar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required><br>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required><br>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>
