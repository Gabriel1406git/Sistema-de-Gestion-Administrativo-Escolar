create table profesores (id int auto_increment primary key, 
usuarios_id int not null, 
apellido varchar (40) not null,
nombre varchar (50) not null,
dni varchar(20) not null unique,
telefono varchar(25),
email varchar(100),
especialidad varchar(100) not null,
fecha_creacion timestamp default current_timestamp,
foreign key (usuarios_id)
references usuarios(id));