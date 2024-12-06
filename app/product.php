<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'config.php';

$product = null;
if (isset($_GET['product_code'])) {
    $product_code = $_GET['product_code'];
    $sql = "SELECT * FROM products WHERE product_code='$product_code'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        $message = "No se encontró el producto.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Detalles del Producto</h1>
        <?php if (isset($message)): ?>
            <p class="message"><?php echo $message; ?></p>
        <?php endif; ?>

        <?php if ($product): ?>
            <div class="product-details">
                <p><strong>Nombre del Producto:</strong> <?php echo $product['product_name']; ?></p>
                <p><strong>Descripción:</strong> <?php echo $product['description']; ?></p>
                <p><strong>Cantidad en Existencia:</strong> <?php echo $product['quantity']; ?></p>
            </div>
        <?php endif; ?>

        <a href="dashboard.php">Volver</a>
    </div>
</body>
</html>
