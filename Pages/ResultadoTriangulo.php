<?php
// Iniciar sesión
session_start();

// Verificar si se han definido los lados del Triángulo en la sesión
if (isset($_SESSION['tlado1']) && isset($_SESSION['tlado2']) && isset($_SESSION['tlado3'])) {
    $tlado1 = $_SESSION['tlado1'];
    $tlado2 = $_SESSION['tlado2'];
    $tlado3 = $_SESSION['tlado3'];

    // Incluir la clase Triangulo
    require '../Clases/FiguraGeometrica.php';
    require '../Clases/Triangulo.php';

    // Crear una instancia del Triángulo
    $triangulo = new Triangulo("Triángulo", $tlado1, $tlado2, $tlado3);

    // Cálculo del área y el perímetro
    $area = $triangulo->calcularArea();
    $perimetro = $triangulo->calcularPerimetre();
} else {
    $tlado1 = null;
    $tlado2 = null;
    $tlado3 = null;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Triángulo</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Enlace al archivo de estilos personalizado -->
    <link rel="stylesheet" href="../Estilos/styles.css"> 
</head>
<body>
    <div class="container mt-5">
        <h1>Resultados del Triángulo</h1>
        
        <div class="alert alert-success" role="alert">
                <?php echo ($triangulo); ?>
            </div>
        <a href="OTriangulo.php" class="btn btn-primary mt-3">Volver al formulario</a>
        <button type="button" class="btn btn-danger mt-3" onclick="window.location.href='index.php'">
            Volver al inicio
        </button>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
