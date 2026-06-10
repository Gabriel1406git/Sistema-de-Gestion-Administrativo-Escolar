create database sistema;
use sistema;

-- drop database if exists sistema;


create table roles (
  rol_ID int(1) primary key,
  descripcion varchar(100)
);

create table codigo_recperacion(
cod_ID int primary key auto_increment,
cod_codigo int,
cod_expira datetime,
cod_uso int
);

insert into roles values(0,"Administrador"),(1,"Docente");

create table users(
user_ID int auto_increment primary key,
user_nom varchar(50),
user_ape varchar(50),
user_email varchar(100),
user_DNI int,
user_contraseña varchar (256),
rol_FK int,
foreign key (rol_FK) references roles(rol_ID)
);

create table cursos (
  curso_ID int auto_increment primary key,
  curso_nombre varchar(50) ,
  curso_turno varchar(50) 
);
/*
create table estados(
est_ID int primary key,
descripcion varchar(100)
);
insert into estados values(0,"Activo"),(1,"Egresado"),(2,"Suspendido");
*/
create table alumnos (
  alu_ID int(11) auto_increment primary key,
  alu_DNI int,
  alu_nom varchar(50),
  alu_ape varchar(50),
  alu_fec_nac date,
  alu_email varchar(100),
  alu_telefono varchar(20),
  direccion varchar(50),
  -- est_FK int,
  alu_fec_ingr date,
  alu_fec_egre date,
  curso_FK int,
  -- foreign key (est_FK) references estados(est_ID),
  foreign key (curso_FK) references cursos(curso_ID)
);

create table materias (
  mat_ID int auto_increment primary key,
  mat_nombre varchar(50),
  curso_FK int,
  foreign key (curso_FK) references cursos(curso_ID)
);

create table notas (
  nota_ID int AUTO_INCREMENT primary key,
  alu_FK int,
  mat_FK int,
  nota_valor decimal(10,2),
  nota_fec date,
  user_FK int,
  foreign key (alu_FK) references alumnos(alu_ID),
  foreign key (mat_FK) references materias(mat_ID),
  foreign key (user_FK) references users(user_ID)
);




select * from users;


create table docente_materia (
    dm_ID int auto_increment primary key,
    user_FK int,
    mat_FK int,

    foreign key (user_FK) references users(user_ID),
    foreign key (mat_FK) references materias(mat_ID)
);


create table codigo_recuperacion (
    cod_rec_ID int auto_increment primary key,
    user_email varchar(100),
    user_FK int,
    cod_FK int,
    expiracion datetime,
    foreign key (user_FK) references users(user_ID),
    foreign key (cod_FK) references codigo_recperacion(cod_ID)
);

