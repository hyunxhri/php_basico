<?php

function esCapicua($numero) {
    $numeroInvertido = (int) strrev($numero);
    return $numero == $numeroInvertido;
}

function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

function siguientePrimo($numero) {
    $siguiente = $numero + 1;
    while (true) {
        if (esPrimo($siguiente)) {
            return $siguiente;
        }
        $siguiente++;
    }
}

function potencia($base, $exponente) {
    return pow($base, $exponente);
}

function digitos($numero) {
    return strlen((string)$numero);
}

function voltea($numero) {
    return (int)strrev($numero);
}

function digitoN($numero, $posicion) {
    $numeroComoString = (string)$numero;
    return (int)$numeroComoString[$posicion];
}

function posicionDeDigito($numero, $digito) {
    $posicion = strpos((string)$numero, (string)$digito);
    if ($posicion === false) {
        return -1;
    } else {
        return $posicion;
    }
}

function quitaPorDetras($numero, $n) {
    return (int)substr((string)$numero, 0, -$n);
}

function quitaPorDelante($numero, $n) {
    return (int)substr((string)$numero, $n);
}

function pegaPorDetras($numero, $digito) {
    return (int)($numero . $digito);
}

function pegaPorDelante($numero, $digito) {
    return (int)($digito . $numero);
}

function trozoDeNumero($numero, $inicio, $fin) {
    return (int)substr((string)$numero, $inicio, $fin - $inicio + 1);
}

function juntaNumeros($numero1, $numero2) {
    return (int)($numero1 . $numero2);
}

/*Utilizando la biblioteca de funciones resuelve
✓ Ejercicio 1: Muestra los números primos que hay entre 1 y 1000.
✓ Ejercicio 2: Muestra los números capicúa que hay entre 1 y 99999.
✓ Ejercicio 3: Escribe un programa que pase de binario a decimal.
✓ Ejercicio 4: Escribe un programa que pase de decimal a binario.*/

for ($i = 1; $i <= 1000; $i++) {
    if (esPrimo($i)) {
        echo $i . " ";
    }
}


for ($i = 1; $i <= 99999; $i++) {
    if (esCapicua($i)) {
        echo $i . " ";
    }
}

function binarioADecimal($binario) {
    return bindec($binario);
}

$binario = "101010";
echo "El número binario " . $binario . " en decimal es: " . binarioADecimal($binario);

function decimalABinario($decimal) {
    return decbin($decimal);
}

$decimal = 42;
echo "El número decimal " . $decimal . " en binario es: " . decimalABinario($decimal);

?>
