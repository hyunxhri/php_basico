<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Tabla de Multiplicar del 1 al 10</h2>
    
    <table>
        <tr>
            <th>Tabla 1</th>
            <th>Tabla 2</th>
            <th>Tabla 3</th>
            <th>Tabla 4</th>
            <th>Tabla 5</th>
            <th>Tabla 6</th>
            <th>Tabla 7</th>
            <th>Tabla 8</th>
            <th>Tabla 9</th>
            <th>Tabla 10</th>
        </tr>
        
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++) {
                echo "<td>" . $i . "x" . $j . " = " . $i * $j . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
