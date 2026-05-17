create table usuarios (id int auto_increment primary key,
nombre_usuarios varchar (50) not null unique, 
password_usuarios varchar (100) not null, 
email varchar (100), 
rol_id int not null, 
token_recuperacion varchar (100) null, 
estado tinyint default 1, 
fecha_creacion timestamp default current_timestamp, foreign key (rol_id) references roles(id));

insert ignore into roles (nombre_rol) values ('SuperAdministrador'),('Administrativo'),('Profesor');
