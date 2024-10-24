<?php
// Iniciar sesión
session_start();

// Verificar si se ha definido el lado del cuadrado en la sesión
if (isset($_SESSION['lado'])) {
    $lado = $_SESSION['lado'];

    // Incluir las clases
    require '../Clases/FiguraGeometrica.php';
    require '../Clases/Cuadrado.php';

    // Crear una instancia del cuadrado
    $cuadrado = new Cuadrado("Cuadrado", $lado);

    // Cálculo del área y el perímetro
    $area = $cuadrado->calcularArea();
    $perimetro = $cuadrado->calcularPerimetre();
} else {
    $lado = null;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Cuadrado</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Enlace al archivo de estilos personalizado -->
    <link rel="stylesheet" href="../Estilos/styles.css"> 
</head>
<body>
    <div class="container mt-5">
        <h1>Resultados del Cuadrado</h1>

            <div class="alert alert-success" role="alert">
                <?php echo ($cuadrado); ?>
            </div>
        <a href="OCuadrado.php" class="btn btn-primary mt-3">Volver al formulario</a>
        <button type="button" class="btn btn-danger mt-3" onclick="window.location.href='index.php'">
            Volver al inicio
        </button>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
