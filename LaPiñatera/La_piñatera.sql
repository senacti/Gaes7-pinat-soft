create database la_piñatera;

use la_piñatera;

create table clientes (
    Id int(10) not null,
    Nombres char(50) not null,
    Apellidos char(50) not null,
    Correo_electronico varchar(50) not null,
    Telefono int(10) not null,
    Contraseña varchar(50) not null );