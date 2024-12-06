<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenido, <?php echo $_SESSION['username']; ?></h1>
        <a href="logout.php">Cerrar sesión</a>

        <form action="product.php" method="GET">
            <label for="product_code">Código del Producto:</label>
            <input type="text" id="product_code" name="product_code" required>
            <button type="submit">Buscar</button>
        </form>
    </div>
</body>
</html>
