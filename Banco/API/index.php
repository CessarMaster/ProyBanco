<!DOCTYPE html>
<html lang="en">

<?php
$result = null;
if (isset($_GET['resultado'])) {
    $JSON = $_GET["resultado"];
    $result = json_decode($JSON, true);
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .table {
            border: 2px solid;
            margin: auto;

        }

        .enviar {
            background-color: orange;
            width: 100px;
            height: 20px;
            margin: auto;
            margin-top: 20px;
        }

        .filas {
            text-align: center;
        }
    </style>

</head>

<body>
    <form action="listar.php" method="GET">
        <table class="table" border="">
            <thead>
                <th>Numero de cuenta</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Username</th>
                <th>NIP</th>
                <th>Rol</th>
                <th>Estado</th>
            </thead>
            <tbody>
                <?php
                if ($result != null) {
                    foreach ($result as $index => $objeto) {
                ?>
                <tr class="filas">
                    <td><?php echo $objeto["numero_cuenta"] ?></td>
                    <td><?php echo $objeto["nombre"] ?></td>
                    <td><?php echo $objeto["apellido_paterno"] ?></td>
                    <td><?php echo $objeto["apellido_materno"] ?></td>
                    <td><?php echo $objeto["username"] ?></td>
                    <td><?php echo $objeto["nip"] ?></td>
                    <td><?php echo $objeto["rol"] ?></td>
                    <td><?php echo $objeto["estado"] ?></td>
                </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
        <center>
            <button class="enviar" type="submit">Listar</button>
        </center>
    </form>
</body>

</html>