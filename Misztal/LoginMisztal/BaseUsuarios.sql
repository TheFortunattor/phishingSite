drop database if exists BaseUsuarios;
create database BaseUsuarios;
use BaseUsuarios;
Create table usuarios(
id_usuario int auto_increment,
nombre_us varchar(20),
contraseña varchar(128),
constraint PK_usuarios primary key (id_usuario)
);
insert into usuarios values
("","41350123",'$2y$10$19u0NV6pg8wkpoLIJ78FLuKgIBj3PRv/wZVkb7wWQppaPrqJPOrvi'),
("","42877810",'$2y$10$19u0NV6pg8wkpoLIJ78FLuKgIBj3PRv/wZVkb7wWQppaPrqJPOrvi'),
("","43241615",'$2y$10$19u0NV6pg8wkpoLIJ78FLuKgIBj3PRv/wZVkb7wWQppaPrqJPOrvi');

create user login@localhost identified by '1234';
grant select on usuarios to login@localhost;
grant update on usuarios to login@localhost;
