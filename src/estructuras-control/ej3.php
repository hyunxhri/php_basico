<?php
echo "Introduce la primera nota: ";
$nota = floatval(readline());

if (is_numeric($nota)) {
    echo "Introduce la segunda nota: ";
    $nota2 = floatval(readline());

    if (is_numeric($nota2)) {
        echo "Introduce la tercera nota: ";
        $nota3 = floatval(readline());

        if (is_numeric($nota3)) {
            $media = ($nota + $nota2 + $nota3) / 3;

            if ($media < 5) {
                echo "Insuficiente." . PHP_EOL;
            } elseif ($media >= 5 && $media < 6) {
                echo "Suficiente." . PHP_EOL;
            } elseif ($media >= 6 && $media < 9) {
                echo "Notable." . PHP_EOL;
            } elseif ($media >= 9) {
                echo "Sobresaliente." . PHP_EOL;
            }

        } else {
            echo "La tercera nota no es válida." . PHP_EOL; 
        }
    } else {
        echo "La segunda nota no es válida." . PHP_EOL;
    }
} else {
    echo "La primera nota no es válida." . PHP_EOL;
}
?>
