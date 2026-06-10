<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Panel de Materias carga Notas</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial;
            background:#f0f2f5;
            padding:20px;
        }

        .contenedor{

            width:95%;
            margin:auto;
            background:white;
            padding:25px;
            border-radius:12px;
            box-shadow:0px 0px 15px rgba(0,0,0,0.15);

        }

        h1{

            text-align:center;
            margin-bottom:30px;
            color:#333;

        }

        .barra-superior{

            display:flex;
            justify-content:space-between;
            margin-bottom:20px;
            gap:20px;

        }

        select{

            padding:10px;
            border-radius:6px;
            border:1px solid #ccc;
            width:250px;

        }

        table{

            width:100%;
            border-collapse:collapse;

        }

        table th{

            background:#0077cc;
            color:white;
            padding:12px;

        }

        table td{

            border:1px solid #ddd;
            padding:10px;
            text-align:center;

        }

        input[type="number"]{

            width:70px;
            padding:6px;
            text-align:center;

        }

        .btn-guardar{

            margin-top:25px;
            padding:12px 25px;
            border:none;
            background:#28a745;
            color:white;
            font-size:16px;
            border-radius:8px;
            cursor:pointer;

        }

        .btn-guardar:hover{

            background:#218838;

        }

        .seccion{

            background:#e9ecef;
            font-weight:bold;

        }

    </style>

</head>

<body>

    <div class="contenedor">

        <h1>Panel de Carga de Notas</h1>

        <div class="barra-superior">

            <select>

                <option>Seleccionar Materia</option>
                <option>Matemática</option>
                <option>Lengua</option>
                <option>Historia</option>
                <option>Geografía</option>
                <option>Educación Física</option>
                <option>Biología</option>

            </select>

            <select>

                <option>Seleccionar Cuatrimestre</option>
                <option>Primer Cutrimestre</option>
                <option>Segundo Cuatrimestre</option>
                

            </select>

        </div>

        <table>

            <tr>

                <th>N°</th>
                <th>Alumno</th>
                <th>Sección</th>
                <th>Nota</th>

            </tr>

            <tr class="seccion">
                <td colspan="4">1° A</td>
            </tr>

            <tr>
                <td>1</td>
                <td>Juan Pérez</td>
                <td>1° A</td>
                <td>
                    <input type="number" min="1" max="10">
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>María Gómez</td>
                <td>1° A</td>
                <td>
                    <input type="number" min="1" max="10">
                </td>
            </tr>

            <tr class="seccion">
                <td colspan="4">2° B</td>
            </tr>

            <tr>
                <td>3</td>
                <td>Carlos López</td>
                <td>2° B</td>
                <td>
                    <input type="number" min="1" max="10">
                </td>
            </tr>

            <tr>
                <td>4</td>
                <td>Lucía Fernández</td>
                <td>2° B</td>
                <td>
                    <input type="number" min="1" max="10">
                </td>
            </tr>

            <tr class="seccion">
                <td colspan="4">3° C</td>
            </tr>

            <tr>
                <td>5</td>
                <td>Martín Díaz</td>
                <td>3° C</td>
                <td>
                    <input type="number" min="1" max="10">
                </td>
            </tr>

        </table>

        <button class="btn-guardar">

            Guardar Notas

        </button>

    </div>

</body>
</html>