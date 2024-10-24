<?php
// Iniciar sesión
session_start();

// Incluir las clases 
require '../Clases/FiguraGeometrica.php';
require '../Clases/Triangulo.php';

// Inicializar variables
$tlado1 = "";
$tlado2 = "";
$tlado3 = "";

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['tlado1']) && isset($_POST['tlado2']) && isset($_POST['tlado3']) && is_numeric($_POST['tlado1']) && is_numeric($_POST['tlado2']) && is_numeric($_POST['tlado3']) && $_POST['tlado1'] > 0 && $_POST['tlado2'] > 0 && $_POST['tlado3'] > 0)  {
        $tlado1 = $_POST['tlado1'];
        $tlado2 = $_POST['tlado2'];
        $tlado3 = $_POST['tlado3'];

        // Guardar los lados en la sesión
        $_SESSION['tlado1'] = $tlado1;
        $_SESSION['tlado2'] = $tlado2;
        $_SESSION['tlado3'] = $tlado3;  
        header("Location: ResultadoTriangulo.php");
        exit();
    }
} else {
    // Recuperar los valores de los lados de la sesión 
    if (isset($_SESSION['tlado1'])) {
        $tlado1 = $_SESSION['tlado1'];
    }
    if (isset($_SESSION['tlado2'])) {
        $tlado2 = $_SESSION['tlado2'];
    } 
    if (isset($_SESSION['tlado3'])) {
        $tlado3 = $_SESSION['tlado3']; 
    } 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Triángulo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Estilos/styles.css">
    <script src="../JS/Validar.js" defer></script> 
</head>
<body>
    <div class="container mt-5">
        <h1>Cálculo de Área y Perímetro de un Triángulo</h1>
        
        <form method="post" action="Otriangulo.php" id="formTriangulo">
            <div class="form-group">
                <label for="tlado1">Ingrese el primer lado:</label>
                <input type="text" class="form-control" id="tlado1" name="tlado1" value="<?php echo htmlspecialchars($tlado1); ?>" onblur="return validarTriangulo()">
                <div id="error-tlado1" class="text-danger mt-2"></div>
            </div>
            <div class="form-group">
                <label for="tlado2">Ingrese el segundo lado:</label>
                <input type="text" class="form-control" id="tlado2" name="tlado2" value="<?php echo htmlspecialchars($tlado2); ?>" onblur="return validarTriangulo2()">
                <div id="error-tlado2" class="text-danger mt-2"></div>
            </div>
            <div class="form-group">
                <label for="tlado3">Ingrese el tercer lado:</label> <!-- Corregido para reflejar el tercer lado -->
                <input type="text" class="form-control" id="tlado3" name="tlado3" value="<?php echo htmlspecialchars($tlado3); ?>" onblur="return validarTriangulo3()">
                <div id="error-tlado3" class="text-danger mt-2"></div>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
            <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">Volver</button>
        </form>
    </div>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
