<?php
function esNumeroEntero($cadena) {
    return is_numeric($cadena);
}

echo "Introduce el primer número: ";
$entrada1 = trim(fgets(STDIN));
if (!esNumeroEntero($entrada1)) {
    echo "Error: La entrada no es un número entero válido.\n";
    exit();
}
$numero1 = intval($entrada1);

echo "Introduce el segundo número: ";
$entrada2 = trim(fgets(STDIN));
if (!esNumeroEntero($entrada2)) {
    echo "Error: La entrada no es un número entero válido.\n";
    exit();
}
$numero2 = intval($entrada2);

if ($numero1 >= $numero2) {
    echo "Error: El primer número debe ser menor que el segundo.\n";
} else {
    echo "Números impares entre $numero1 y $numero2:\n";
    for ($i = $numero1; $i <= $numero2; $i++) {
        if ($i % 2 !== 0) {
            echo $i . "\n";
        }
    }
}
?>
