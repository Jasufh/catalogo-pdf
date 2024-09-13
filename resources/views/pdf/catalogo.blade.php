<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Simple</title>
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;

        }

        .header {
            margin-top: 20px;
            width: 100%;
        }

        .marca {
            width: 80px;
        }

        .modeloMain {
            width: 100%;
            text-align: center;
        }

        .modeloMain img {
            width: 300px;
        }

        .modeloSec {
            width: 100%; 
            border-collapse: collapse; /* Elimina el espacio entre las celdas de la tabla */
            text-align: center; /* Centra el contenido en las celdas */
        }

        .modeloSec td {
            padding: 40px; 
        }

        .modeloSec img {
            width: 90px; 
            height: auto;
        }

        .modelo {
            position: absolute; /* Usa posicionamiento absoluto */
            top: 170px; /* Distancia desde el borde superior del contenedor */
            left: 550px; /* Distancia desde el borde izquierdo del contenedor */
            width: 200px; /* Ancho del div */
            height: auto; /* Altura automática basada en el contenido */
            text-align: center;
            font-size: 25px;
        }
    </style>

</head>

<body>
    <div class="paginaCatalogo">
        <table class="header">
            <th><img class="marca" src="{{ public_path('img/xboxblack.webp') }}" alt=""></th>
            <th>Alguna Frase</th>
        </table>
        <div class="modelo">
            <p>MODELO</p>
            <p>SWLK-350</p>
        </div>

        <div class="modeloMain">
            <img src="{{ public_path('img/xboxblack.webp') }}" alt="">
        </div>

        <table class="modeloSec">
            <tr>
                <td><img src="{{ public_path('img/xboxblack.webp') }}" alt=""></td>
                <td><img src="{{ public_path('img/xboxblack.webp') }}" alt=""></td>
                <td><img src="{{ public_path('img/xboxblack.webp') }}" alt=""></td>
            </tr>
            <tr>
                <td><img src="{{ public_path('img/xboxblack.webp') }}" alt=""></td>
                <td><img src="{{ public_path('img/xboxblack.webp') }}" alt=""></td>
                <td><img src="{{ public_path('img/xboxblack.webp') }}" alt=""></td>
            </tr>
        </table>
    </div>
    

    

    
</body>

</html>
