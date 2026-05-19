CREATE TABLE notas (
    id_nota INT AUTO_INCREMENT PRIMARY KEY,
    id_alumno INT NOT NULL,
    id_materia INT NOT NULL,
    nota DECIMAL(4,2) NOT NULL,
    tipo_evaluacion VARCHAR(30),
    fecha DATE NOT NULL,
    observaciones VARCHAR(255),

    CONSTRAINT fk_nota_alumno
        FOREIGN KEY (id_alumno) REFERENCES alumnos(id_alumno),

    CONSTRAINT fk_nota_materia
        FOREIGN KEY (id_materia) REFERENCES materias(id_materia)
);
