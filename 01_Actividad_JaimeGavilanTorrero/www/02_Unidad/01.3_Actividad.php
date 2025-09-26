<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $nombre = 'Jaime';
    $primerApellido = 'Gavilan';
    $segundoApellido = 'Torrero';
    $email = 'correoinventado@gmail.com';
    ?>
<style>
    table {
        border-collapse: collapse;
        width: 50%;
        margin: 20px auto;
    }

    th, td {
        border: 2px solid #333;
        padding: 10px;
        text-align: left;
    }

    thead {
        background-color: #f0f0f0;
    }

    tbody tr:nth-child(even) {
        background-color: #fafafa;
    }
</style>

    <table>

        <tbody>
            <tr>
                <td>Nombre</td>
                <td><?=$nombre?> </td>
            </tr>
            <tr>
                <td>Primer apellido</td>
                <td><?= $primerApellido?></td>
            </tr>
            <tr>
                <td>Segundo apellido</td>
                <td> <?= $segundoApellido?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?= $email?></td>
            </tr>

        </tbody>
        <tfoot>

        </tfoot>
    </table>

</body>

</html>