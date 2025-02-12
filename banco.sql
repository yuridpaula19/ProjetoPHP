-- create database ManuMaster;
-- use ManuMaster; 
create table pecas (
    id int auto_increment primary key,
    nome varchar(100) not null,
    modelo_carro varchar(100) not null,
    preco decimal(10,2) not null,
    estoque int not null
);

create table fornecedores (
    id int auto_increment primary key,
    nome varchar(100) not null,
    telefone varchar(15),
    email varchar(100)
);

create table vendas (
    id int auto_increment primary key,
    data_venda timestamp default current_timestamp,
    total decimal(10,2) not null
);

create table itens_venda (
    id int auto_increment primary key,
    venda_id int not null,
    peca_id int not null,
    quantidade int not null,
    subtotal decimal(10,2) not null,
    foreign key (venda_id) references vendas(id) on delete cascade,
    foreign key (peca_id) references pecas(id) on delete cascade
);

select * from pecas;

select * from fornecedores;



