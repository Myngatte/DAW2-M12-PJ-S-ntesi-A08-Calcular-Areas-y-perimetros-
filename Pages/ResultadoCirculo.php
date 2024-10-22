<?php
// Iniciar sesión
session_start();

// Incluir las clases 
require '../Clases/FiguraGeometrica.php';
require '../Clases/Circulo.php';

// Inicializar variables
$radio = "";
$area = "";
$perimetro = "";
$mensajeError = "";

// Verificar si se ha pasado el radio desde la sesión
if (isset($_SESSION['radio']) && is_numeric($_SESSION['radio']) && $_SESSION['radio'] > 0) {
    $radio = $_SESSION['radio'];
    
    // Crear un objeto de la clase Circulo
    $circulo = new Circulo("Círculo", $radio);
    
    // Calcular área y perímetro
    $area = $circulo->calcularArea();
    $perimetro = $circulo->calcularPerimetre();
} else {
    $mensajeError = "Error: Parámetro de radio no válido.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Círculo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Estilos/styles.css"> 
</head>
<body>
    <div class="container mt-5">
        <h1>Resultados del Círculo</h1>
        
        <?php if ($mensajeError): ?>
            <div class="alert alert-danger"><?php echo $mensajeError; ?></div>
        <?php else: ?>
            <h2>Resultados:</h2>
            <p>Radio: <?php echo htmlspecialchars($radio); ?></p>
            <p>Área: <?php echo $area; ?></p>
            <p>Perímetro: <?php echo $perimetro; ?></p>
        <?php endif; ?>
        
        <form action="Ocirculo.php" method="get">
            <button type="submit" class="btn btn-secondary mt-3">Volver</button>
        </form>
    </div>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
