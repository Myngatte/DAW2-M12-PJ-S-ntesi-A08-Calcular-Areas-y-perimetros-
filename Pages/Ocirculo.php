<?php
// Iniciar sesión
session_start();

// Incluir las clases 
require '../Clases/FiguraGeometrica.php';
require '../Clases/Circulo.php';

// Inicializar variables
$radio = ""; // Inicializar radio para preservar el valor en el formulario

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['radio']) && is_numeric($_POST['radio']) && $_POST['radio'] > 0) {
        $radio = $_POST['radio'];
        
        // Guardar el radio en la sesión
        $_SESSION['radio'] = $radio;
        header("Location: ResultadoCirculo.php");
        exit();
    }
} else {
    // Recuperar el valor del radio de la sesión 
    if (isset($_SESSION['radio'])) {
        $radio = $_SESSION['radio'];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Círculo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../Estilos/styles.css"> 
    <script src="../JS/Validar.js"></script> 
</head>
<body>
    <div class="container mt-5">
        <h1>Cálculo de Área y Perímetro de un Círculo</h1>
        
        <form method="post" action="Ocirculo.php" id="formCirculo"> 
            <div class="form-group">
                <label for="radio">Ingrese el radio:</label>
                <input type="text" class="form-control" id="radio" name="radio" value="<?php echo htmlspecialchars($radio); ?>" onblur="return validarCirculo()">
                <div id="error-Circulo" class="text-danger mt-2"></div> 
            </div>
            <button type="submit" class="btn btn-primary" >Calcular</button>
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
