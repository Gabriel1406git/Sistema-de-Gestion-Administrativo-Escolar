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

    <!-- ================= boton del perfil docente ================= -->

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
<section id="screen1" class="screen active">

    <!-- ================= subtitulo ================= -->

    <div class="title">
        <h2>Secciones y Cursos</h2>
        <p>
            Gestiona las secciones y cursos asignados.
        </p>
    </div>

    <!-- ================= GRID ================= -->

    <div class="grid">

        <!-- =========================================
                    SECCIONES
        ========================================= -->

        <div class="card">

            <h3>Secciones (Años)</h3>

            <!-- 1° -->

            <div class="year year1">

                <div>
                    <h3>1° Año</h3>
                    <p>32 alumnos - 2 cursos</p>
                </div>

                <i class="fa-solid fa-chevron-right"></i>

            </div>

            <!-- 2° -->

            <div class="year year2">

                <div>
                    <h3>2° Año</h3>
                    <p>28 alumnos - 2 cursos</p>
                </div>

                <i class="fa-solid fa-chevron-right"></i>

            </div>

            <!-- 3° -->

            <div class="year year3">

                <div>
                    <h3>3° Año</h3>
                    <p>30 alumnos - 2 cursos</p>
                </div>

                <i class="fa-solid fa-chevron-right"></i>

            </div>

            <!-- 4° -->

            <div class="year year4">

                <div>
                    <h3>4° Año</h3>
                    <p>27 alumnos - 2 cursos</p>
                </div>

                <i class="fa-solid fa-chevron-right"></i>

            </div>

        </div>

        <!-- =========================================
                    CURSOS
        ========================================= -->

        <div class="card">

            <h3>Cursos de 1° Año</h3>

            <table>

                <tr>
                    <th>Curso</th>
                    <th>Materia</th>
                    <th>División</th>
                    <th>Horario</th>
                    <th>Acción</th>
                </tr>

                <tr>

                    <td>A</td>
                    <td>Matemática I</td>
                    <td>A</td>
                    <td>Lun - Mié - Vie</td>

                    <td>
                        <a href="docentepag2.php"><input type="button" value="Ingresar"></a>
                    </td>

                </tr>

                <tr>

                    <td>B</td>
                    <td>Matemática I</td>
                    <td>B</td>
                    <td>Mar - Jue</td>

                    <td>
                     <a href="docentepag2.php"><input type="button" value="Ingresar"></a>
                    

                </tr>

            </table>

        </div>

    </div>

</section>

<!-- ==================================================
                PANTALLA 2
================================================== -->

<section id="screen2" class="screen">

    <!-- ================= subtitulo ================= -->

    <div class="title">

        <button class="back"
        onclick="goBack()">

            ← Volver a secciones

        </button>

        <h2 style="margin-top:20px;">
            Curso A - Matemática I
        </h2>

        <div class="course-data">

            <span>División A</span>
            <span>Aula 101</span>
            <span>Turno Mañana</span>
            <span>Nivel Secundario</span>

        </div>

    </div>

    <!-- ================= GRID ================= -->

    <div class="grid">

        <!-- =========================================
                    LISTA ALUMNOS
        ========================================= -->

        <div class="card">

            <h3>Lista de Alumnos</h3>

            <div class="student">
                <span>Juan Pérez</span>
                <i class="fa-solid fa-chevron-right"></i>
            </div>

            <div class="student">
                <span>Ana Gómez</span>
                <i class="fa-solid fa-chevron-right"></i>
            </div>

            <div class="student">
                <span>Luis Martínez</span>
                <i class="fa-solid fa-chevron-right"></i>
            </div>

            <div class="student">
                <span>Sofía Díaz</span>
                <i class="fa-solid fa-chevron-right"></i>
            </div>

        </div>

        <!-- =========================================
                    CARGAR NOTAS
        ========================================= -->

        <div class="card">

            <!-- INFO -->

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

            <!-- TITULO -->

            <h3>Cargar Notas</h3>

            <p style="margin-top:10px; color:#6B7280;">

                Si el alumno desaprueba (menos de 4),
                debe completar recuperatorio.

            </p>

            <!-- TABLA -->

            <table>

                <tr>
                    <th>Evaluación</th>
                    <th>Nota</th>
                    <th>Recuperatorio</th>
                    <th>Observaciones</th>
                </tr>

                <tr>
                    <td>1° Trimestre</td>
                    <td><input type="number"></td>
                    <td><input type="number"></td>
                    <td><input type="text"></td>
                </tr>

                <tr>
                    <td>2° Trimestre</td>
                    <td><input type="number"></td>
                    <td><input type="number"></td>
                    <td><input type="text"></td>
                </tr>

                <tr>
                    <td>3° Trimestre</td>
                    <td><input type="number"></td>
                    <td><input type="number"></td>
                    <td><input type="text"></td>
                </tr>

                <tr>
                    <td>Nota Final</td>
                    <td><input type="number"></td>
                    <td>-</td>
                    <td>-</td>
                </tr>

            </table>

            <!-- BOTONES -->

            <div class="form-actions">

                <button class="btn secondary">
                    Cancelar
                </button>

                <button class="btn primary">
                    Guardar Notas
                </button>

            </div>

        </div>

    </div>

</section>

<footer>
    © 2025 Gestión Docente
</footer>

</body>
</html>