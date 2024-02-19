<?php

$diccionario = array(
    "casa" => "house",
    "perro" => "dog",
    "gato" => "cat",
    "mesa" => "table",
    "ordenador" => "computer",
    "libro" => "book",
    "coche" => "car",
    "manzana" => "apple",
    "jardín" => "garden",
    "sol" => "sun"
);

$palabras_sp = array_keys($diccionario);

$palabra = readline("Introduce una palabra en español: ");

if (in_array($palabra, $palabras_sp)) {
    echo "La traducción al inglés de '$palabra' es: " . $diccionario[$palabra] . "\n";
} else {
    echo "Lo siento, no se encontró una traducción para '$palabra'.\n";
}

?>
