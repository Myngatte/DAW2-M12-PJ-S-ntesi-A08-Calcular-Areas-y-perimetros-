<?php
session_start();

// Incluir las clases 
require '../Clases/FiguraGeometrica.php';
require '../Clases/Cuadrado.php';

// Inicializar variables
$lado = "";

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['lado']) && is_numeric($_POST['lado']) && $_POST['lado'] > 0) {
        $lado = $_POST['lado'];
        
        // Guardar el lado en la sesión
        $_SESSION['lado'] = $lado;
        
        header("Location: ResultadoCuadrado.php");
        exit();
    }
} else {
    // Recuperar el valor del lado de la sesión 
    if (isset($_SESSION['lado'])) {
        $lado = $_SESSION['lado'];
    } 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Cuadrado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../Estilos/styles.css"> 
    <script src="../JS/Validar.js"></script> 
</head>
<body>
    <div class="container mt-5">
        <h1>Cálculo de Área y Perímetro de un Cuadrado</h1>
        
        <form method="post" action="Ocuadrado.php" id="formCuadrado" > 
            <div class="form-group">
                <label for="lado">Ingrese el lado del cuadrado:</label>
                <input type="text" class="form-control" id="lado" name="lado" value="<?php echo htmlspecialchars($lado); ?>" onblur="return validarCuadrado()">
                <div id="error-Cuadrado" class="text-danger mt-2"></div>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
            <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">
            Volver
            </button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
