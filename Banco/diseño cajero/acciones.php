<?php header('Access-Control-Allow-Origin: *'); ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>repl.it</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js">
    </script>
</head>

<?php

$result = null;

if (isset($_GET['usuario'])) {
    $result = $_GET['usuario'];
    $objeto = json_decode($result, true);
}


?>

<style>
    body {
        padding: 0;
        margin: 0;
        background: linear-gradient(to right, rgb(101, 194, 255), rgb(30, 95, 178));
    }

    .contenedor {
        text-align: center;
        padding-top: 14%;
        left: 50%;
    }

    .labelnip {
        font: 200% sans-serif;
        color: black;
    }

    .inputNip {
        width: 300px;
        height: 40px;
    }

    .btnDepositar {
        border: 1px solid #2e518b;
        /*anchura, estilo y color borde*/
        padding: 10px;
        /*espacio alrededor texto*/
        background-color: rgb(5, 50, 109);
        /*color botón*/
        color: white;
        /*color texto*/
        text-decoration: none;
        /*decoración texto*/
        text-transform: uppercase;
        /*capitalización texto*/
        font-family: 'Helvetica', sans-serif;
        /*tipografía texto*/
        border-radius: 30px;
        /*bordes redondos*/
        width: 200px;
        height: 60px;
        font: 120% sans-serif;
    }

    .btnRetirar {
        border: 1px solid #2e518b;
        /*anchura, estilo y color borde*/
        padding: 10px;
        /*espacio alrededor texto*/
        background-color: rgb(5, 50, 109);
        /*color botón*/
        color: white;
        /*color texto*/
        text-decoration: none;
        /*decoración texto*/
        text-transform: uppercase;
        /*capitalización texto*/
        font-family: 'Helvetica', sans-serif;
        /*tipografía texto*/
        border-radius: 30px;
        /*bordes redondos*/
        width: 200px;
        height: 60px;
        font: 120% sans-serif;
    }
</style>


<body>
    <div class="contenedor">

        <form>
            <div class="inputs">
                <label for="" class="labelnip">Selecciona la opcion que deseas realizar</label><br>
                <br><br>

                <?php

                if ($objeto != null) {
                    $numero_cuenta = 0;

                    foreach ($objeto as $index => $usuario) {
                        $numero_cuenta = $usuario["numero_cuenta"];
                    }
                }

                ?>
                
                <a href="depositar.php?numero_cuenta=<?php echo $numero_cuenta ?>">
                    <button type="button" name="data-delete" class="btnDepositar">DEPOSITAR</button><br><br><br>
                </a>
                <a href="retirar.php">
                    <button type="button" name="data-delete" class="btnRetirar">RETIRAR</button>
                </a>
            </div>
        </form>
    </div>
</body>