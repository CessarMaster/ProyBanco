<?php header('Access-Control-Allow-Origin: *'); ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>repl.it</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js">
    </script>
</head>

<style>                 
    body{
        padding: 0;
        margin: 0;
        background: linear-gradient(to right, rgb(101, 194, 255), rgb(30, 95, 178));
    }
    .contenedor{
        text-align: center;
        padding-top: 14%;
        left: 50%;
    }
    .labeltext{
        font: 200% sans-serif;
        color: black; 
    }
    .inputNip{
        width: 300px;
        height: 40px;
    }

    .btnRetirar{
        border: 1px solid #2e518b; /*anchura, estilo y color borde*/
        padding: 10px; /*espacio alrededor texto*/
        background-color: rgb(5, 50, 109); /*color botón*/
        color: white; /*color texto*/
        text-decoration: none; /*decoración texto*/
        text-transform: uppercase; /*capitalización texto*/
        font-family: 'Helvetica', sans-serif; /*tipografía texto*/
        border-radius: 20px; /*bordes redondos*/
        width: 150px;
        height: 50px;
        font: 120% sans-serif;
    }
    .btnCancelar{
        border: 1px solid #2e518b; /*anchura, estilo y color borde*/
        padding: 10px; /*espacio alrededor texto*/
        background-color: rgb(133, 32, 32); /*color botón*/
        color: white; /*color texto*/
        text-decoration: none; /*decoración texto*/
        text-transform: uppercase; /*capitalización texto*/
        font-family: 'Helvetica', sans-serif; /*tipografía texto*/
        border-radius: 20px; /*bordes redondos*/
        width: 150px;
        height: 50px;
        font: 120% sans-serif;
    }
    .inputcantidad{
        width: 300px;
        height: 50px;
        border-radius: 5px; /*bordes redondos*/
        border: none;
    }
</style>




<body>      
<div class="contenedor">
        <form action="formulario.php" method="get">
            <div class="inputs">
                <label class="labeltext">Selecciona la cantidad a Retirar: </label><br><br>
                <br>
                <input type="number" id="cantidad" placeholder="$.........." min="50" step="100" value="50" class="inputcantidad"/><br>
                <br>
                <button type="button" name="Retirar" class="btnRetirar">Retirar</button><br><br>
                <button type="button" name="cancelar" class="btnCancelar">Cancelar</button><br><br>
            </div>
        </form>
    </div>
<body>  