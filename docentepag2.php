<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style/estilodocente.css">
<title>Gestión Docente</title>
</head>
<body>
<img class="fondo" src="multimedia/Fondo.png" alt="">

<header>
    <div class="escudopag">
        <img src="multimedia/Escudo.png" alt="Escudo">
        <h1>Gestión Docente</h1>
    </div>

    <!-- ================= BOTON del perfil docente ================= -->

    <div class="boton-perfil">
        <a href="perfil.php">
            <button class="boton-user">
                user_dni
            </button>
        </a>
        <a href="index.php">
            <button class="boton-cerrar">
                Cerrar Sesión
            </button>
        </a>
    </div>
</header>

        <!-- TITULO CURSO -->

        <h2>

            Curso A - Matemática I

        </h2>

        <!-- DATOS CURSO -->

        <div class="course-data">

            <span>División A</span>

            <span>Aula 101</span>

            <span>Turno Mañana</span>

            <span>Nivel Secundario</span>

        </div>

    </div>

    <!-- ==================================================
                        GRID
    ================================================== -->

    <div class="grid">

        <!-- ==================================================
                        LISTA ALUMNOS
        ================================================== -->

        <div class="card">

            <h3>Lista de Alumnos</h3>

            <!-- ALUMNO -->

            <div class="student">

                <span>Juan Pérez</span>

                <i class="fa-solid fa-chevron-right"></i>

            </div>

            <!-- ALUMNO -->

            <div class="student">

                <span>Ana Gómez</span>

                <i class="fa-solid fa-chevron-right"></i>

            </div>

            <!-- ALUMNO -->

            <div class="student">

                <span>Luis Martínez</span>

                <i class="fa-solid fa-chevron-right"></i>

            </div>

            <!-- ALUMNO -->

            <div class="student">

                <span>Sofía Díaz</span>

                <i class="fa-solid fa-chevron-right"></i>

            </div>

        </div>

        <!-- ==================================================
                        CARGA DE NOTAS
        ================================================== -->

        <div class="card">

            <!-- ==================================================
                            INFO ALUMNO
            ================================================== -->

            <div class="info-box">

                <h3>Alumno</h3>

                <p style="margin-top:15px;">

                    <b>Juan Pérez</b>

                </p>

                <p style="margin-top:10px;">

                    Curso: Matemática I

                </p>

                <p style="margin-top:5px;">

                    Docente: María López

                </p>

            </div>

            <!-- ==================================================
                            TITULO
            ================================================== -->

            <h3>Cargar Notas</h3>

            <p style="margin-top:10px; color:#6B7280;">

                Si el alumno desaprueba (menos de 4),
                debe completar recuperatorio.

            </p>

            <!-- ==================================================
                            TABLA NOTAS
            ================================================== -->

            <table>

                <!-- HEADER -->

                <tr>

                    <th>Evaluación</th>

                    <th>Nota</th>

                    <th>Recuperatorio</th>

                    <th>Observaciones</th>

                </tr>

                <!-- FILA -->

                <tr>

                    <td>1° Trimestre</td>

                    <td>
                        <input type="number">
                    </td>

                    <td>
                        <input type="number">
                    </td>

                    <td>
                        <input type="text">
                    </td>

                </tr>

                <!-- FILA -->

                <tr>

                    <td>2° Trimestre</td>

                    <td>
                        <input type="number">
                    </td>

                    <td>
                        <input type="number">
                    </td>

                    <td>
                        <input type="text">
                    </td>

                </tr>

                <!-- FILA -->

                <tr>

                    <td>3° Trimestre</td>

                    <td>
                        <input type="number">
                    </td>

                    <td>
                        <input type="number">
                    </td>

                    <td>
                        <input type="text">
                    </td>

                </tr>

                <!-- FILA FINAL -->

                <tr>

                    <td>Nota Final</td>

                    <td>
                        <input type="number">
                    </td>

                    <td>-</td>

                    <td>-</td>

                </tr>

            </table>

            <!-- ==================================================
                            BOTONES
            ================================================== -->

            <div class="form-actions">

                <button class="btn secondary">

                    Cancelar

                </button>

                <button class="btn primary">

                    Guardar Notas

                </button>

                 <a href="docente.php"><input type="button" value="← Volver a secciones"></a> 
                
            </div>

            <!-- ==================================================
                            VOLVER
            ================================================== -->

        
        </div>
    </div>

</section>

<!-- ==================================================
                    FOOTER
================================================== -->

<footer>

    © 2025 Gestión Docente

</footer>

</body>
</html>