<?php
    echo "Introduce la hora (formato 24 horas): ";
    $hora = readline();
    if (is_numeric($hora)) {
        if ($hora >= 6 && $hora <= 12) {
            echo "Buenos días\n";
        } elseif ($hora >= 13 && $hora <= 20) {
            echo "Buenas tardes\n";
        } else {
            echo "Buenas noches\n";
        }
    } else {
        echo "Por favor, introduce un valor numérico para la hora.\n";
    }
?>