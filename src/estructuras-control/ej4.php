<?php
function ordenarNumeros($num1, $num2, $num3) {
    $numeros = array($num1, $num2, $num3);
    sort($numeros);
    return $numeros;
}

$num1 = readline("Introduce el primer número: ");
$num2 = readline("Introduce el segundo número: ");
$num3 = readline("Introduce el tercer número: ");
$numerosOrdenados = ordenarNumeros($num1, $num2, $num3);

//PHP_EOL asegura salto de línea al final sin importar qué SO es.
echo "Números ordenados: " . implode(", ", $numerosOrdenados) . PHP_EOL;
?>
