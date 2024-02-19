<?php

$diccionario = array(
    "perro" => "dog",
    "gato" => "cat",
    "casa" => "house",
    "árbol" => "tree",
    "libro" => "book",
    "coche" => "car",
    "pelota" => "ball",
    "ordenador" => "computer",
    "amarillo" => "yellow",
    "azul" => "blue"
);

$palabras_azar = array_rand($diccionario, 5);
$respuestas_correctas = 0;
$respuestas_erroneas = 0;

echo "Por favor, traduce las siguientes palabras al inglés:\n";

foreach ($palabras_azar as $palabra) {
    echo ($palabra) . ": ";
    $respuesta_usuario = strtolower(trim(fgets(STDIN)));
    if ($respuesta_usuario === $diccionario[$palabra]) {
        echo "¡Correcto!\n";
        $respuestas_correctas++;
    } else {
        echo "Incorrecto. La respuesta correcta es '{$diccionario[$palabra]}'\n";
        $respuestas_erroneas++;
    }
}

echo "\nRespuestas válidas: $respuestas_correctas\n";
echo "Respuestas erróneas: $respuestas_erroneas\n";

?>
