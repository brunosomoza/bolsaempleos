<?php
// ============================================================================
// 1. DETECCIÓN DE SECRETOS (Secret Scanning)
// ============================================================================

// Simulación de un token de acceso personal de GitHub (formato clásico)
$github_token = "ghp_NuM3r1c4ndA1ph4NuM3r1cS3cr3tKey012345";

// Simulación de una clave secreta de AWS
$aws_secret = "wJalrXUtnFEMI/K7MDENG/bPxRfiCYEXAMPLEKEY";


// ============================================================================
// 2. VULNERABILIDADES DE CÓDIGO (Code Scanning / SAST)
// ============================================================================

// Inyección SQL (Falta de sanitización en parámetros de entrada)
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = " . $id; 


// Scripting entre sitios / XSS (Impresión directa de datos del usuario)
$username = $_POST['username'];
echo "Welcome back, " . $username;


// Inclusión de Archivos Locales / LFI (Ruta dinámica controlada por usuario)
$page = $_GET['page'];
include("pages/" . $page);


// Almacenamiento criptográfico inseguro (Uso de MD5 para contraseñas)
$password = "super_secret_123";
$hashed_password = md5($password);

?>
