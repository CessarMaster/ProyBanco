<?php header('Access-Control-Allow-Origin: *'); ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>repl.it</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js">
    </script>

    <!-- PDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="https://kit.fontawesome.com/980a12c0b1.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<style>
    body{
        padding: 0;
        margin: 0;
        background: linear-gradient(to right, rgb(73, 90, 194), rgb(25, 154, 198));
    }
    .contenedor{
        text-align: center;
        padding-top: 10%;
        left: 50%;
    }
    .txtResult{
        font: 180% sans-serif;
        color: black; 
    }
    .btnsalir{
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
    .btnimprimir{
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
    .labFecha{
        font: 120% sans-serif;
    }
</style>



<body>      

    <form action="calculadora.php" method="get">
        <div class="contenedor">
            <label class="txtresult">RESULTADO</label><br>
            <br>
            <div id="imprimir" class="imprimir">
                <label id="idFecha" class="labFecha"></label><br><br>
            </div>

            <label for=""></label>
            <br>
            
            <button type="button" name="data-delete" id="btSalir" class="btnsalir">SALIR</button>
            <button type="button" class="btnimprimir" id="btnSave" onclick='convertPDF()'>IMPRIMIR</button>

        </div>
    </form>
<body>


        
        <script type="text/javascript">
            var d = new Date();
            var nameMonth;


            if(d.getMonth() == 0){
                nameMonth = "Enero";
            }else if(d.getMonth() == 1){
                nameMonth = "Febrero";
            }else if(d.getMonth() == 2){
                nameMonth = "Marzo";
            }else if(d.getMonth() == 3){
                nameMonth = "Abril";
            }else if(d.getMonth() == 4){
                nameMonth = "Mayo";
            }else if(d.getMonth() == 5){
                nameMonth = "Junio";
            } else if(d.getMonth() == 6){
                nameMonth = "Julio";
            } else if(d.getMonth() == 7){
                nameMonth = "Agosto";
            }else if(d.getMonth() == 8){
                nameMonth = "Septiembre";
            }else if(d.getMonth() == 9){
                nameMonth = "Octubre";
            } else if(d.getMonth() == 10){
                nameMonth = "Noviembre";
            } else if(d.getMonth() == 11){
                nameMonth = "Diciembre";
            }
            
            document.getElementById('idFecha').innerHTML += 'Fecha: '+d.getDate() + ' /  '+ nameMonth + '  / '+d.getFullYear() + ': Hora:'+d.getHours() + ': '+d.getMinutes() + ' : '+d.getSeconds();

        </script>

       




    <script>
        function convertPDF(){
            html2canvas(document.querySelector("#imprimir"),{
                allowTaint: true,
                useCORS: true,
                scale: 2,
                quality: 5
            }).then(canvas => {
                var img = canvas.toDataURL("image/PNG");
                var doc = new jsPDF();
                doc.text(70,15,"Resultado")
                doc.text(10,25,"Reporte de accion")
                doc.addImage(img,'PNG',10,30,300,16);
                doc.save("ticket.pdf");
            });
        }    

    </script>