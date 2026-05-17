create table codigo_recuperacion(
    id int auto_increment primary key,
    usuario_id int not null,
    codigo varchar(100) not null,
    fecha_expiracion datetime not null,
    usado tinyint default 0,
    fecha_creacion timestamp default current_timestamp,
    foreing key (usuario_id)
    references usuarios(id)
);