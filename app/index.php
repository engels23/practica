<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['username'])) {
    // Si hay una sesión iniciada, redirigir al dashboard
    header("Location: dashboard.php");
    exit();
} else {
    // Si no hay sesión iniciada, redirigir al formulario de login
    header("Location: login.php");
    exit();
}
?>
