create table codigo_recuperacion (
    id int primary key auto_increment,
    user_email varchar(255),
    user_FK int,
    codigo varchar(255) not null,
    fecha_creacion datetime not null,
    fecha_expiracion datetime not null,
    foreign key (user_FK) references users(user_id)
);