function imc(peso, altura) {
    // Calcula el índice de masa corporal (IMC)
    var imcValor = peso / (altura ** 2);
    
    // Determina la categoría según el IMC
    if (imcValor < 18.5) {
        return "Bajo de peso";
    } else if (18.5 <= imcValor && imcValor <= 24.9) {
        return "Normal";
    } else if (25 <= imcValor && imcValor <= 29.9) {
        return "Sobrepeso";
    } else {
        return "Obeso";
    }
}

// Ejemplo de uso
var peso = 70;  // en kilogramos
var altura = 1.75;  // en metros
var resultado = imc(peso, altura);
console.log("Tu IMC es:", resultado); 