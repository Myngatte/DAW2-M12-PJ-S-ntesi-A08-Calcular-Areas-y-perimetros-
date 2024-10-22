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

