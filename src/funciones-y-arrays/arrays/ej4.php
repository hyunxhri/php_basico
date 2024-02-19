<?php

$juegos = array(
    'Accion' => array('GTA 5', 'Call Of Duty', 'PUGB'),
    'Aventura' => array('Assassin Creed', 'Tomb Raider', 'Last of Us'),
    'Deporte' => array('FIFA', 'PES', 'Moto G')
);

$titulos = array_keys($juegos);

echo "<html><head><title>Tabla de Juegos</title></head><body>";
echo "<h1>Tabla de Juegos</h1>";

echo "<table border='1'>";
echo "<tr>";
foreach ($titulos as $titulo) {
    echo "<th>$titulo</th>";
}
echo "</tr>";

foreach ($juegos[array_keys($juegos)[0]] as $indice => $valor) {
    echo "<tr>";
    foreach ($juegos as $categoria) {
        echo "<td>".$categoria[$indice]."</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "</body></html>";

?>
