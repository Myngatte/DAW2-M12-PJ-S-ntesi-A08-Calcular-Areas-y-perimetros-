<?php
// Iniciar sesión
session_start();

// Verificar si se han definido los lados del rectángulo en la sesión
if (isset($_SESSION['lado1']) && isset($_SESSION['lado2'])) {
    $lado1 = $_SESSION['lado1'];
    $lado2 = $_SESSION['lado2'];

    // Incluir la clase Rectángulo
    require '../Clases/FiguraGeometrica.php';
    require '../Clases/Rectangulo.php';

    // Crear una instancia del rectángulo
    $rectangulo = new Rectangulo("Rectángulo", $lado1, $lado2);

    // Cálculo del área y el perímetro
    $area = $rectangulo->calcularArea();
    $perimetro = $rectangulo->calcularPerimetre();
} else {
    $lado1 = null;
    $lado2 = null;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Rectángulo</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Enlace al archivo de estilos personalizado -->
    <link rel="stylesheet" href="../Estilos/styles.css"> 
</head>
<body>
    <div class="container mt-5">
        <h1>Resultados del Rectángulo</h1>
        
        <div class="alert alert-success" role="alert">
                <?php echo ($rectangulo); ?>
            </div>
        <a href="Orectangulo.php" class="btn btn-primary mt-3">Volver al formulario</a>
        <button type="button" class="btn btn-danger mt-3" onclick="window.location.href='index.php'">
            Volver al inicio
        </button>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
