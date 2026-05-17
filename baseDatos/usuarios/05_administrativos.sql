create table administrativos (id int auto_increment primary key,
usuarios_id int not null,
nombre varchar(50) not null,
apellido varchar(50) not null,
dni varchar(20) not null unique,
telefono varchar(50) not null,
email varchar(50),
cargo varchar(50) not null,
fecha_creacion timestamp default current_timestamp,
foreign key (usuarios_id)
references usuarios(id));
