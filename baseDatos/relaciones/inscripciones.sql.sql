CREATE TABLE inscripciones (
    id_inscripcion INT AUTO_INCREMENT PRIMARY KEY,
    id_alumno INT NOT NULL,
    id_curso INT NOT NULL,
    año_lectivo YEAR NOT NULL,
    fecha_inscripcion DATE NOT NULL,
    estado VARCHAR(20) DEFAULT 'activo',

    CONSTRAINT fk_inscripcion_alumno
        FOREIGN KEY (id_alumno) REFERENCES alumnos(id_alumno),

    CONSTRAINT fk_inscripcion_curso
        FOREIGN KEY (id_curso) REFERENCES cursos(id_curso)
);