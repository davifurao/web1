create database web1_avaliacao;


use web1_avaliacao;

CREATE TABLE usuario (
    USUARIO_id INT PRIMARY KEY  AUTO_INCREMENT,
    USUARIO_nome varchar(60) NOT NULL,
    USUARIO_senha varchar(50) NOT NULL, 
);

CREATE TABLE contatos (
    CONTATOS_id  INT PRIMARY KEY  NOT NULL AUTO_INCREMENT,
    CONTATOS_nome_contato VARCHAR(60) NOT NULL,
    CONTATOS_telefone VARCHAR (15) NOT NULL,
    CONTATOS_email VARCHAR(40),
    CONTATOS_endereco VARCHAR(60)
    CHAVE_estrangeira
);

