create database bd_final;
use bd_final;

create table usuario(
	id_usuario int not null auto_increment,
    nome varchar(30),
    sobrenome varchar(30),
    login varchar(30) unique,
    senha varchar(32),
    foto varchar(100),
    primary key (id_usuario)
);

create table tarefa(
	id_tarefa int not null auto_increment,
    fk_usuario int not null,
    titulo varchar(45),
    tipo varchar(30),
	status_tarefa varchar(30),
    descricao text,
    data_cadastro date,
    primary key (id_tarefa),
    foreign key (fk_usuario) references usuario(id_usuario)
);
select * from tarefa;