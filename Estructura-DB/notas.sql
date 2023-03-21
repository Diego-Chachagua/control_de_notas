DROP TABLE IF EXISTS tbl_estudiantes;
DROP TABLE IF EXISTS tbl_profesor;
DROP TABLE IF EXISTS tbl_secciones;
DROP TABLE IF EXISTS tbl_profe_seccion;
DROP TABLE IF EXISTS tbl_grado;
DROP TABLE IF EXISTS tbl_padres;
DROP TABLE IF EXISTS tbl_materias;
DROP TABLE IF EXISTS tbl_promedio;
DROP TABLE IF EXISTS tbl_periodo;
DROP TABLE IF EXISTS tbl_profe_materia;
DROP TABLE IF EXISTS tbl_boletas;
DROP TABLE IF EXISTS tbl_estu_mate;
DROP TABLE IF EXISTS tbl_notas;
DROP TABLE IF EXISTS tbl_pro_notas;
DROP TABLE IF EXISTS tbl_usuario;
DROP TABLE IF EXISTS tbl_profe_grado;
DROP TABLE IF EXISTS tbl_boleta_info;

CREATE TABLE tbl_estudiantes(
nie VARCHAR(10) PRIMARY KEY,
cod_seccion SMALLINT,
cod_grado SMALLINT,
dui CHARACTER(9) NOT NULL,
nombre_estudiante VARCHAR(30) NOT NULL,
apellido_estudiante VARCHAR(30) NOT NULL,
genero CHARACTER(1) NOT NULL
);

CREATE TABLE tbl_profesor(
cod_profe SMALLSERIAL PRIMARY KEY,
nombre_profesor VARCHAR(30) NOT NULL,
apellido_profesor VARCHAR(30) NOT NULL,
genero CHARACTER(1) NOT NULL
);

CREATE TABLE tbl_secciones(
cod_seccion SMALLSERIAL PRIMARY KEY,
seccion CHARACTER(1) NOT NULL
);

CREATE TABLE tbl_grado(
cod_grado SMALLSERIAL PRIMARY KEY,
grado CHAR(1) NOT NULL
);

CREATE TABLE tbl_padres(
dui CHARACTER(9) PRIMARY KEY,
nombre_padre VARCHAR(30) NOT NULL,
apellido_padre VARCHAR(30) NOT NULL
);


CREATE TABLE tbl_materias(
cod_materia SMALLSERIAL PRIMARY KEY,
nombre_materia VARCHAR(90) NOT NULL
);

CREATE TABLE tbl_promedio(
cod_promedio SMALLSERIAL PRIMARY KEY,
nie VARCHAR(10) NOT NULL,
cod_materia SMALLINT NOT NULL,
cod_boleta SMALLINT NOT NULL,
cod_periodo SMALLINT,
promedio_p1 VARCHAR(5),
promedio_p2 VARCHAR(5),
promedio_p3 VARCHAR(5),
promedio_p4 VARCHAR(5),
promedio_f VARCHAR(5),
promedio_r VARCHAR(5),
promedio_t VARCHAR(5)
);

CREATE TABLE tbl_periodo(
cod_periodo SMALLSERIAL PRIMARY KEY,
periodo CHAR(1) NOT NULL
);

CREATE TABLE tbl_boletas(
cod_boleta SMALLSERIAL PRIMARY KEY,
anio CHAR(4) NOT NULL
);

CREATE TABLE tbl_profe_seccion(
cod_p_s SMALLSERIAL PRIMARY KEY,
cod_profe SMALLINT NOT NULL,
cod_seccion SMALLINT
);

CREATE TABLE tbl_profe_materia(
cod_profe_teria SMALLSERIAL PRIMARY KEY,
cod_profe SMALLINT NOT NULL,
cod_materia SMALLINT NOT NULL
);

CREATE TABLE tbl_notas(
cod_nota SMALLSERIAL PRIMARY KEY,
nie VARCHAR(10) NOT NULL,
cod_boleta SMALLINT NOT NULL,
cod_periodo SMALLINT NOT NULL,
cod_materia SMALLINT NOT NULL,
act1 VARCHAR(5),
act2 VARCHAR(5),
po VARCHAR(5),
re1 VARCHAR(5),
re2 VARCHAR(5),
avanzo VARCHAR(5)
);

CREATE TABLE tbl_pro_nota(
cod_pro_n SMALLSERIAL PRIMARY KEY,
cod_promedio SMALLINT NOT NULL,
cod_nota SMALLINT NOT NULL
);

CREATE TABLE tbl_estu_mate(
cod_e_m SMALLSERIAL PRIMARY KEY,
nie VARCHAR(10) NOT NULL,
cod_materia SMALLINT NOT NULL
);

CREATE TABLE tbl_usuario(
cod_usuario SMALLSERIAL PRIMARY KEY,
dui CHAR(9) NOT NULL,
cod_profe SMALLINT NOT NULL,
usuario_profe VARCHAR(30),
contrasena_profe VARCHAR(15),
usuario_padres VARCHAR(30),
contrasena_padres VARCHAR(15),
usuario_admin VARCHAR(30),
contrasena_admin VARCHAR(15)
);

CREATE TABLE tbl_profe_grado(
    cod_p_grado SMALLSERIAL PRIMARY KEY,
    cod_profe SMALLINT NOT NULL,
    cod_grado SMALLINT NOT NULL
);

CREATE TABLE tbl_boleta_info(
cod_boleta_s_g SMALLSERIAL PRIMARY KEY,
cod_grado SMALLINT NOT NULL,
cod_seccion SMALLINT NOT NULL,
cod_boleta SMALLINT NOT NULL
);


ALTER TABLE tbl_estudiantes ADD CONSTRAINT fk_codestudiante FOREIGN KEY(dui) REFERENCES tbl_padres(dui);

ALTER TABLE tbl_estudiantes ADD CONSTRAINT fk_codseccion FOREIGN KEY(cod_seccion) REFERENCES tbl_secciones(cod_seccion);

ALTER TABLE tbl_estudiantes ADD CONSTRAINT fk_codanio FOREIGN KEY(cod_grado) REFERENCES tbl_grado(cod_grado);

ALTER TABLE tbl_profe_seccion ADD CONSTRAINT fk_codseccion FOREIGN KEY(cod_seccion) REFERENCES tbl_secciones(cod_seccion);

ALTER TABLE tbl_profe_seccion ADD CONSTRAINT fk_codprofesor FOREIGN KEY(cod_profe) REFERENCES tbl_profesor(cod_profe);

ALTER TABLE tbl_profe_materia ADD CONSTRAINT fk_cod_materia FOREIGN KEY(cod_materia) REFERENCES tbl_materias(cod_materia);

ALTER TABLE tbl_profe_materia ADD CONSTRAINT fk_codigo_profe FOREIGN KEY(cod_profe) REFERENCES tbl_profesor(cod_profe);

ALTER TABLE tbl_promedio ADD CONSTRAINT fk_estudiante FOREIGN KEY(nie) REFERENCES tbl_estudiantes(nie);

ALTER TABLE tbl_promedio ADD CONSTRAINT fk_cod_boleta FOREIGN KEY(cod_boleta) REFERENCES tbl_boletas(cod_boleta);

ALTER TABLE tbl_promedio ADD CONSTRAINT fk_cod_periodo FOREIGN KEY(cod_periodo) REFERENCES tbl_periodo(cod_periodo);

ALTER TABLE tbl_promedio ADD CONSTRAINT fk_codigo_mate FOREIGN KEY(cod_materia) REFERENCES tbl_materias(cod_materia);

ALTER TABLE tbl_notas ADD CONSTRAINT fk_cod_nota FOREIGN KEY(nie) REFERENCES tbl_estudiantes(nie);

ALTER TABLE tbl_notas ADD CONSTRAINT fk_codnota FOREIGN KEY(cod_boleta) REFERENCES tbl_boletas(cod_boleta);

ALTER TABLE tbl_notas ADD CONSTRAINT fk_codnotas FOREIGN KEY(cod_periodo) REFERENCES tbl_periodo(cod_periodo);

ALTER TABLE tbl_notas ADD CONSTRAINT fk_cod_n_materias FOREIGN KEY(cod_materia) REFERENCES tbl_materias(cod_materia);

ALTER TABLE tbl_pro_nota ADD CONSTRAINT fk_cod_pro_n FOREIGN KEY(cod_nota) REFERENCES tbl_notas(cod_nota);

ALTER TABLE tbl_pro_nota ADD CONSTRAINT fk_codpro_n FOREIGN KEY(cod_promedio) REFERENCES tbl_promedio(cod_promedio);

ALTER TABLE tbl_estu_mate ADD CONSTRAINT fk_cod_e_t FOREIGN KEY(nie) REFERENCES tbl_estudiantes(nie);

ALTER TABLE tbl_estu_mate ADD CONSTRAINT fk_cod_m_a FOREIGN KEY(cod_materia) REFERENCES tbl_materias(cod_materia);

ALTER TABLE tbl_boletas ADD CONSTRAINT fk_cod_boleta FOREIGN KEY(cod_seccion) REFERENCES tbl_secciones(cod_seccion);

ALTER TABLE tbl_boletas ADD CONSTRAINT fk_boletas FOREIGN KEY(cod_grado) REFERENCES tbl_grado(cod_grado);

ALTER TABLE tbl_usuario ADD CONSTRAINT fk_dui_padre FOREIGN KEY(dui) REFERENCES tbl_padres(dui);

ALTER TABLE tbl_usuario ADD CONSTRAINT fk_cod_profe FOREIGN KEY(cod_profe) REFERENCES tbl_profesor(cod_profe);

ALTER TABLE tbl_profe_grado ADD CONSTRAINT fk_cod_p_g FOREIGN KEY(cod_grado) REFERENCES tbl_grado(cod_grado);

ALTER TABLE tbl_profe_grado ADD CONSTRAINT fk_cod_p_p FOREIGN KEY(cod_profe) REFERENCES tbl_profesor(cod_profe);

ALTER TABLE tbl_boleta_info ADD CONSTRAINT fk_boleta_s FOREIGN KEY(cod_seccion) REFERENCES tbl_secciones(cod_seccion);

ALTER TABLE tbl_boleta_info ADD CONSTRAINT fk_boleta_g FOREIGN KEY(cod_grado) REFERENCES tbl_grado(cod_grado);

ALTER TABLE tbl_boleta_info ADD CONSTRAINT fk_boleta_b FOREIGN KEY(cod_boleta) REFERENCES tbl_boletas(cod_boleta);