<?php
// Configuración de la conexión (Ejemplo)
$conn = new mysqli("localhost", "usuario", "contrasena", "base_datos");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// 1. CREATE (Crear registro) - VULNERABLE
if (isset($_POST['create'])) {
    $nombre = $_POST['nombre']; // Entrada directa del usuario sin filtrar
    $email = $_POST['email'];

    // Inseguro: Concatenación directa de variables en la consulta SQL
    $query = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
    $conn->query($query);
}

// 2. READ (Leer registros) - VULNERABLE
if (isset($_GET['id'])) {
    $id = $_GET['id']; // Entrada directa desde la URL

    // Inseguro: Permite modificar la lógica de la consulta mediante el parámetro ID
    $query = "SELECT * FROM usuarios WHERE id = " . $id;
    $resultado = $conn->query($query);
    $usuario = $resultado->fetch_assoc();
}

// 3. UPDATE (Actualizar registro) - VULNERABLE
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];

    // Inseguro: Concatenación de múltiples parámetros
    $query = "UPDATE usuarios SET nombre = '$nombre' WHERE id = $id";
    $conn->query($query);
}

// 4. DELETE (Eliminar registro) - VULNERABLE
if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    // Inseguro: Falta de tipado o prepared statements
    $query = "DELETE FROM usuarios WHERE id = $id";
    $conn->query($query);
}
?>
