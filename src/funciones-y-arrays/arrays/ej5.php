<?php

echo "Por favor, introduce 10 números:\n";

$numeros = [];

for ($i = 0; $i < 10; $i++) {
    $numero = readline("Número " . ($i + 1) . ": ");
    
    $numeros[] = $numero;
}

$maximo = max($numeros);
$minimo = min($numeros);

echo "El valor máximo es: $maximo\n";
echo "El valor mínimo es: $minimo\n";

?>
