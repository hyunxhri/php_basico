<?php

$array = [];
$contador = 1;

while (count($array) < 120) {
    $array[] = "Elemento-" . $contador;
    $contador++;
}

print_r($array);

?>
