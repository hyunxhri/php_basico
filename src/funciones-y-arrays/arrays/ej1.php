<?php

function mostrarArray($array) {
    foreach ($array as $elemento) {
        echo $elemento . " ";
    }
    echo "<br>";
}

function quitarUltimoElemento($array) {
    $nuevoArray = [];
    $longitud = count($array);
    for ($i = 0; $i < $longitud - 1; $i++) {
        $nuevoArray[] = $array[$i];
    }
    return $nuevoArray;
}

$miArray = [];
for ($i = 0; $i < 8; $i++) {
    $miArray[] = rand(0, 10);
}

echo "Array original: ";
mostrarArray($miArray);

echo "Array sin el último elemento (personalizado): ";
mostrarArray(quitarUltimoElemento($miArray));

echo "Array sin el último elemento (función predefinida): ";
mostrarArray(array_slice($miArray, 0, -1));

echo "Longitud del array: " . count($miArray) . "<br>";

echo "Array volteado: ";
mostrarArray(array_reverse($miArray));

if (isset($_GET['elemento'])) {
    $elementoBuscado = $_GET['elemento'];
    $indice = array_search($elementoBuscado, $miArray);
    if ($indice !== false) {
        echo "El elemento '$elementoBuscado' se encuentra en el índice $indice del array.";
    } else {
        echo "El elemento '$elementoBuscado' no se encuentra en el array.";
    }
}

?>
