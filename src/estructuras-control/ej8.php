<?php
function fibonacci($n) {
    $fibo_array = [0, 1];

    for ($i = 2; $i < $n; $i++) {
        $fibo_array[$i] = $fibo_array[$i - 1] + $fibo_array[$i - 2];
    }

    echo "Los primeros $n términos de la serie de Fibonacci son: ";
    for ($i = 0; $i < $n; $i++) {
        echo $fibo_array[$i] . "\n";
    }
}

echo "Introduce un número entero: ";
$numero = intval(readline());

if (is_numeric($numero) && $numero > 0) {
    fibonacci($numero);
} else {
    echo "Por favor, introduce un número entero positivo.";
}
?>
