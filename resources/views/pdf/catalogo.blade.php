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
            display: flex;
            justify-content: center;
            align-items: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 200px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>

</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Ciudad</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Juan Pérez</td>
                <td>28</td>
                <td>Madrid</td>
            </tr>
            <tr>
                <td>Laura Gómez</td>
                <td>34</td>
                <td>Barcelona</td>
            </tr>
            <tr>
                <td>Pedro Fernández</td>
                <td>22</td>
                <td>Valencia</td>
            </tr>
        </tbody>
    </table>
</body>

</html>
