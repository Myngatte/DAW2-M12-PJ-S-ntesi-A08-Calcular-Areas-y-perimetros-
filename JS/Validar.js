// ------------------------------------- Circulo
function validarCirculo() {
    const radioInput = document.getElementById("radio");
    const radioValue = radioInput.value;
    const errorCirculo = document.getElementById("error-Circulo");

    // Inicializar variable de error
    errorCirculo.textContent = '';

    // isnan y debe ser positivo
    if (isNaN(radioValue) || radioValue <= 0) {
        errorCirculo.textContent = "Por favor, ingrese un valor de radio válido (número positivo).";
        return false;
    }
    return true; // OK
}


// -------------------------------------------Cuadrado
function validarCuadrado() {
    const ladoInput = document.getElementById("lado");
    const ladoValue = ladoInput.value;
    const errorCuadrado = document.getElementById("error-Cuadrado");

    errorCuadrado.textContent = '';

    if (isNaN(ladoValue) || ladoValue <= 0) {
        errorCuadrado.textContent = "Por favor, ingrese un valor de lado válido (número positivo).";
        return false; 
    }
    return true; 
}
// -------------------------------------------Rectangulo
function validarRectangulo() {
    const lado1Input = document.getElementById("lado1");
    const lado1Value = lado1Input.value;
    const errorlado1 = document.getElementById("error-lado1");

    errorlado1.textContent = '';

    if (isNaN(lado1Value) || lado1Value <= 0) {
        errorlado1.textContent = "Por favor, ingrese un valor de lado válido (número positivo).";
        return false; 
    }
    return true; 
}


function validarRectangulo2() {
    const lado2Input = document.getElementById("lado2");
    const lado2Value = lado2Input.value;
    const errorlado2 = document.getElementById("error-lado2");

    errorlado2.textContent = '';

    if
    (isNaN(lado2Value) || lado2Value <= 0) {
        errorlado2.textContent = "Por favor, ingrese un valor de lado válido (número positivo).";
        return false; 
    }
    return true; 
}
// -------------------------------------------Triangulo
