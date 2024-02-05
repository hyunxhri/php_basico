<?php
session_start();

$combinacionCorrecta = "1234"; 
if (!isset($_SESSION['intentosRestantes'])) {
    $_SESSION['intentosRestantes'] = 4;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $combinacionIngresada = $_POST["combinacion"];

    if ($combinacionIngresada == $combinacionCorrecta) {
        echo "La caja fuerte se ha abierto satisfactoriamente.";
        $_SESSION['intentosRestantes'] = 4;
    } else {
        $_SESSION['intentosRestantes']--;

        if ($_SESSION['intentosRestantes'] > 0) {
            echo "Lo siento, esa no es la combinación. Te quedan " . $_SESSION['intentosRestantes'] . " intentos.";
        } else {
            echo "Has agotado tus intentos. La caja fuerte permanece cerrada.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Acceso a Caja Fuerte</title>
</head>
<body>
    <?php
    if ($_SESSION['intentosRestantes'] > 0) {
    ?>
    <h2>Introduce la combinación de 4 dígitos:</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="text" name="combinacion" maxlength="4" pattern="\d{4}" required>
        <input type="submit" value="Abrir Caja Fuerte">
    </form>
    <?php
    }
    ?>
</body>
</html>
