CREATE USER 'admin'@'localhost' IDENTIFIED BY '123'; 
GRANT ALL PRIVILEGES ON bdsql.* TO 'admin'@'localhost';

CREATE TABLE paciente ( 
    cod_usuario int NOT NULL AUTO_INCREMENT, 
    nome varchar(30) NOT NULL, 
    cpf varchar(20) NOT NULL, 
    data_nasc varchar(10) NOT NULL, 
    telefone varchar(15) NOT NULL,
    email varchar(30) NOT NULL, 
    senha varchar(30) NOT NULL, 
    primary key(cod_paciente) 
);

CREATE TABLE funcionario ( 
    cod_usuario int NOT NULL AUTO_INCREMENT, 
    nome varchar(30) NOT NULL, 
    crm varchar(20) NOT NULL, 
    especialidade varchar(20) NOT NULL, 
    data_nasc varchar(10) NOT NULL, 
    telefone varchar(15) NOT NULL,
    email varchar(30) NOT NULL, 
    senha varchar(30) NOT NULL, 
    primary key(cod_funcionario) 
);
