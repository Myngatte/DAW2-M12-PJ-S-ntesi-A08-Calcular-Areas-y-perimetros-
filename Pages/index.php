<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Estilos/styles.css">
</head>
<body>
    <h1>Areas y perimetros</h1>
    <div class="cuadrado">
    <form action="./Ocuadrado.php" method="POST">
        <button type="submit" name="figura" value="cuadrado" id="cuadrado">
        <img src="../Img/cuadrado.png" alt="Cuadrado">
        </button>
    </form>
    </div>
    <div class="triangulo">
    <form action="./Otriangulo.php" method="POST">
        <button type="submit" name="figura" value="triangulo" id="triangulo">
        <img src="../Img/triangle.jpg" alt="Triangulo">
        </button>
    </form>
    </div>
    <div class="circulo">
    <form action="./Ocirculo.php" method="POST">
        <button type="submit" name="figura" value="circulo" id="circulo">
        <img src="../Img/circulo.png" alt="Circulo">
        </button>
    </form>
    </div>
    <div class="rectangulo">
    <form action="./Orectangulo.php" method="POST">
        <button type="submit" name="figura" value="rectangulo" id="rectangulo">
        <img src="../Img/rectagnulo.png" alt="Rectangulo">
        </button>
    </form>
    </div>
</body>
</html>