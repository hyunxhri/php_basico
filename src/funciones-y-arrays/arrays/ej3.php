<?php

$array = array("string", 123, 3.14, true, false);

foreach ($array as $valor) {
    $tipo = gettype($valor);
    
    echo "El valor '$valor' es de tipo '$tipo'\n";
}

?>
