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
    .labelnip{
        font: 200% sans-serif;
        color: black; 
    }
    .inputNip{
        width: 300px;
        height: 40px;
    }

    .btnIngresar{
        border: 1px solid #2e518b; /*anchura, estilo y color borde*/
        padding: 10px; /*espacio alrededor texto*/
        background-color: rgb(5, 50, 109); /*color botón*/
        color: white; /*color texto*/
        text-decoration: none; /*decoración texto*/
        text-transform: uppercase; /*capitalización texto*/
        font-family: 'Helvetica', sans-serif; /*tipografía texto*/
        border-radius: 50px; /*bordes redondos*/
    }

    
</style>

<body>      
    <div class="contenedor">
        <div>
            <img src="img/user.png" alt="user" width="100" height="100">
        </div><br>

        <form action="iniciarSesion.php" method="GET">
            <div class="inputs">
                <!-- <label for="" class="labelnip">Ingresa tu NIP</label> -->
                <br><br>
                <input name="username" type="text" id="" class="inputNip" placeholder="Numero de cuenta"><br><br>
                <input name="nip" type="password" id="txtNip" class="inputNip" placeholder="****"/>
                <br><br>
                <button type="submit" name="data-delete" class="btnIngresar">Ingresar</button>
            </div>
        </form>
    </div>
</body> 