<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificar Número</title>
</head>
<body>

<form method="post" action="">
    <label for="numero">Introduce un número de hasta 4 cifras:</label>
    <input type="number" name="numero" id="numero" min="0" max="9999" required>
    <button type="submit">Verificar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $numeroStr = (string)$numero;

    // Validar que el número tenga hasta 4 cifras
    if (strlen($numeroStr) <= 4 && is_numeric($numeroStr)) {
        $primeraCifra = $numeroStr[0];
        $ultimaCifra = substr($numeroStr, -1);
        $parImparUltimaCifra = ($ultimaCifra % 2 == 0) ? "par" : "impar";
        echo "<p>Primera cifra: $primeraCifra</p>";
        echo "<p>Última cifra: $ultimaCifra</p>";
        echo "<p>La última cifra es $parImparUltimaCifra.</p>";
    } else {
        echo "<p>Por favor, introduce un número válido de hasta 4 cifras.</p>";
    }
}
?>
</body>
</html>