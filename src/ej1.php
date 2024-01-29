<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej_básicos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
        $nombre = "Sara";
        $apellidos = "Bulpe";
        $direccion = "C/ Hello World!";
        $edad = 25;
        $telefono = "123456789";
        $email = "sara@example.com";
    ?>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Direccion</th>
            <th>Edad</th>
            <th>Teléfono</th>
            <th>Email</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $apellidos; ?></td>
                <td><?php echo $direccion; ?></td>
                <td><?php echo $edad; ?></td>
                <td><?php echo $telefono; ?></td>
                <td><?php echo $email; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>