CREATE USER 'admin'@'localhost' IDENTIFIED BY '123'; 
GRANT ALL PRIVILEGES ON ds302.* TO 'admin'@'localhost';

CREATE TABLE paciente ( 
    cod_usuario int NOT NULL AUTO_INCREMENT, 
    nome varchar(30) NOT NULL, 
    cpf varchar(20) NOT NULL, 
    data_nasc varchar(10) NOT NULL, 
    telefone varchar(15) NOT NULL,
    email varchar(30) NOT NULL, 
    senha varchar(30) NOT NULL, 
    primary key(cod_usuario) 
);