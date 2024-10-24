<?php
// Iniciar sesión
session_start();

// Incluir las clases 
require '../Clases/FiguraGeometrica.php';
require '../Clases/Rectangulo.php';

// Inicializar variables
$lado1 = "";
$lado2 = "";

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['lado1']) && isset($_POST['lado2']) && is_numeric($_POST['lado1']) && is_numeric($_POST['lado2']) && $_POST['lado1'] > 0 && $_POST['lado2'] > 0) {
        $lado1 = $_POST['lado1'];
        $lado2 = $_POST['lado2'];

        // Guardar los lados en la sesión
        $_SESSION['lado1'] = $lado1;
        $_SESSION['lado2'] = $lado2;

        // Redirigir a ResultadoRectangulo.php con los lados como parámetros
        header("Location: ResultadoRectangulo.php");
        exit();
    }
} else {
    // Recuperar los valores de los lados de la sesión si están establecidos
    if (isset($_SESSION['lado1'])) {
        $lado1 = $_SESSION['lado1'];
    }
    if (isset($_SESSION['lado2'])) {
        $lado2 = $_SESSION['lado2'];
    } 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Rectángulo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Estilos/styles.css">
    <script src="../JS/Validar.js" defer></script> 
</head>
<body>
    <div class="container mt-5">
        <h1>Cálculo de Área y Perímetro de un Rectángulo</h1>
        
        <form method="post" action="Orectangulo.php" id="formRectangulo">
            <div class="form-group">
                <label for="lado1">Ingrese el primer lado:</label>
                <input type="text" class="form-control" id="lado1" name="lado1" value="<?php echo htmlspecialchars($lado1); ?>" onblur="return validarRectangulo()">
                <div id="error-lado1" class="text-danger mt-2"></div>
            </div>
            <div class="form-group">
                <label for="lado2">Ingrese el segundo lado:</label>
                <input type="text" class="form-control" id="lado2" name="lado2" value="<?php echo htmlspecialchars($lado2); ?>" onblur="return validarRectangulo2()">
                <div id="error-lado2" class="text-danger mt-2"></div>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
            <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">Volver</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
