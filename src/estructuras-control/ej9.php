<?php
function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }

    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i === 0) {
            // Si es divisible, no es primo
            return false;
        }
    }
    return true;
}

echo "Introduce un número: ";
$numero = trim(fgets(STDIN));

if (esPrimo($numero)) {
    echo "$numero es un número primo.\n";
} else {
    echo "$numero no es un número primo.\n";
}
?>
