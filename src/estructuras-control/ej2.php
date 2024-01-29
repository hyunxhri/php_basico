<?php
$horasTrabajadas = 45; 
$tarifaOrdinaria = 12; 
$tarifaExtra = 16; 
$horasOrdinarias = 40; 

if ($horasTrabajadas <= $horasOrdinarias) {
    $salario = $horasTrabajadas * $tarifaOrdinaria;
} else {
    $horasExtras = $horasTrabajadas - $horasOrdinarias;
    $salario = $horasOrdinarias * $tarifaOrdinaria + $horasExtras * $tarifaExtra;
}

echo "El salario semanal del trabajador es: " . $salario . " euros.\n";
?>
