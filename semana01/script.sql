#crear la base de datos
create database db_info;

#crea la tabla
CREATE TABLE usuario(

id int auto_increment PRIMARY KEY,
nombres   varchar(100),
apellidos varchar(100),
celular   varchar(50),
correo    varchar(300)

)ENGINE=INNODB;

#INSERT 
INSERT INTO usuario(nombres,apellidos,celular,correo) VALUES
('LUIS AGUSTO','CLAUDIO PONCE','+51997935085','luis.claudio@perute.com.pe'),
('JUAN','PEREZ','+5199999999','juan.perez@peru.com');


#SELECT
SELECT * FROM usuario;
SELECT id,nombres,apellidos,celular,correo FROM usuario;

