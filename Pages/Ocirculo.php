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
        
        // Redirigir a resultados.php con el radio como parámetro
        header("Location: ResultadoCirculo.php");
        exit();
    }
} else {
    // Recuperar el valor del radio de la sesión si está establecido
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
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Enlace al archivo de estilos personalizado -->
    <link rel="stylesheet" href="../Estilos/styles.css"> 
    
    <!-- Enlace a la validación de JavaScript -->
    <script src="../JS/Validar.js" defer></script> 
</head>
<body>
    <div class="container mt-5">
        <h1>Cálculo de Área y Perímetro de un Círculo</h1>
        
        <form method="post" action="" id="formCirculo"> <!-- Agregar id al formulario -->
            <div class="form-group">
                <label for="radio">Ingrese el radio:</label>
                <input type="text" class="form-control" id="radio" name="radio" value="<?php echo htmlspecialchars($radio); ?>" onblur="return validarCirculo()">
                <div id="error-message" class="text-danger mt-2"></div> <!-- Mensaje de error -->
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
