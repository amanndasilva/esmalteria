create database esmalte;
use esmalte;


create table categoria(
id_categoria int not null auto_increment,
categoria varchar (40),
primary key (id_categoria)
);

insert into categoria (categoria)
values
("Acrílico"),
("Gel"),
("Hipoalergênico");

create table fornecedor(
id_fornecedor int not null auto_increment,
nomeFornecedor varchar (70),
cnpj varchar (20),
primary key (id_fornecedor)
);

insert into fornecedor (nomeFornecedor, cnpj)
values
('Esmalte Glamour LTDA', '12.345.678/0001-99'),
('Brilho Total Cosméticos', '98.765.432/0001-01'),
('Colori Nails S.A.', '23.456.789/0001-23');

create table produto(
id_produto int not null auto_increment,
id_categoria int,
id_fornecedor int,
produto varchar(50),
quantidade varchar (100),
preco decimal (3, 2),
dataCadastro date,
foreign key (id_categoria) references categoria (id_categoria),
foreign key (id_fornecedor) references fornecedor (id_fornecedor),
primary key (id_produto)
);

insert into produto (id_categoria, id_fornecedor, produto, quantidade, preco, dataCadastro)
values
('1', 1, 'Bailarina', 10, 8.50, '2024-05-10'),
('2', 2, 'Royal', 5, 6.69, '2024-06-12'),
('3', 3, 'Perolado', 40, 5.50, '2024-02-06'),
(null, null, 'Aconchego', 8, 3.3, '2024-01-16');

create table cliente(
id_cliente int not null auto_increment,
nomeCliente varchar (40),
emailCliente varchar (60),
telefoneCliente varchar (25),
endereco varchar (50),
primary key (id_cliente)
);

insert into cliente (nomeCliente, emailCliente, telefoneCliente, endereco) values
('Ana Silva', 'ana.silva@email.com', '11 98765-4321', 'Rua A, 123'),
('João Oliveira', 'joao.oliveira@email.com', '11 99876-5432', 'Avenida B, 456'),
('Maria Souza', 'maria.souza@email.com', '21 99988-7766', 'Praça C, 789'),
('Carlos Pereira', 'carlos.pereira@email.com', '31 91122-3344', 'Rua D, 101');

show tables;
select * from produto;

select 
    c.categoria,
    p.produto,
    p.quantidade,
    p.preco,
    p.dataCadastro,
    f.nomeFornecedor
from produto p 
join categoria c on p.id_categoria = c.id_categoria
join fornecedor f on p.id_fornecedor = f.id_fornecedor;
