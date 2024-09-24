<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root"; // Por defecto en XAMPP (usuario)
$password = ""; // Por defecto en XAMPP
$dbname = "user";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

// Preparar la consulta SQL
$sql = "INSERT INTO usuarios (nombre, apellido, telefono, correo) VALUES ('$nombre', '$apellido', '$telefono', '$correo')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "<div class='message'>Nuevo registro creado exitosamente.</div>";
    echo "<a href='formulario.php'><input type='button' value='Regresar'></a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
