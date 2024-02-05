<?php
$suma = 0;
$contador = 0;

while (true) {
    echo "Introduce un número positivo (o un número negativo para terminar): ";
    $numero = readline();

    if ($numero < 0) {
        break;
    }

    $suma += $numero;
    $contador++;
}

if ($contador > 0) {
    $media = $suma / $contador;
    echo "La media de los números positivos es: $media\n";
} else {
    echo "No se ingresaron números positivos.\n";
}
?>
