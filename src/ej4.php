<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $radio = 12;
        //define es para hacer una constante
        define('PI', 3.14159);
        $area = PI * ($radio ** 2);
        $longitud = 2 * PI * $radio;
        echo "Área del círculo con radio $radio: $area<br>";
        echo "Longitud de la circunferencia con radio $radio: $longitud\n";
    ?>
</body>
</html>