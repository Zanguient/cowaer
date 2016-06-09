--
-- Database: `cowaerdb`
--

-- CREATE USER 'cowaer'@'localhost' IDENTIFIED BY 'cowaer';

-- GRANT ALL PRIVILEGES ON cowaerdb.* TO 'cowaer'@'localhost' WITH GRANT OPTION;

-- Tabela: Cliente(Criador)

CREATE TABLE IF NOT EXISTS clientes(
	cod	 INT primary key auto_increment,
	nome VARCHAR(40) not null,
	cpf  VARCHAR(15) not null,
	rg  VARCHAR(20) not null,
	endereco VARCHAR(70),
	bairro VARCHAR(20),
	cep VARCHAR(12),
	fixo VARCHAR(20),
	idade INT,
	celular VARCHAR(20),
	cidade VARCHAR(40),
	nro_conta VARCHAR(20),
	nro_agencia VARCHAR(20),
	email VARCHAR(50),
	data_cadastro date,
	UNIQUE(cpf)
);

-- Tabela: Fazenda

CREATE TABLE IF NOT EXISTS fazendas(
	cod	 INT primary key auto_increment,
	cod_criador INT not null,
	nome VARCHAR(30) not null,
	endereco VARCHAR(70),
	bairro VARCHAR(20),
	cep VARCHAR(12),
	cidade VARCHAR(50),
	telefone1 VARCHAR(20) null,
	telefone2 VARCHAR(20) null,
	inscricao_estadual VARCHAR(20), -- Inscrição Estadual
	area FLOAT,
	FOREIGN KEY(cod_criador) REFERENCES clientes(cod)
);

-- Tabela: Funcionário

CREATE TABLE IF NOT EXISTS funcionarios(
	cod	 INT primary key auto_increment,
	cod_fazenda INT,
	nome VARCHAR(40) not null,
	nivel INT not null, -- Administrador:1, Empregado:2
	login VARCHAR(15) not null,
	senha VARCHAR(70) not null,
	email VARCHAR(50),
	cargo VARCHAR(20),
	foto_url VARCHAR(100) NULL,
	FOREIGN KEY(cod_fazenda) REFERENCES fazendas(cod)
);
INSERT INTO `funcionarios`(`cod`, `cod_fazenda`, `nome`, `nivel`, `login`, `senha`, `email`, `cargo`, `foto_url`)
VALUES (null,null, 'Administrador',1,'admin','c264f1b3e807eecf8fc081f70a7606df1030bde0','teste@gmail.com','Gerente',null);-- senha 'cw321'



-- Tabela: Retiro

CREATE TABLE IF NOT EXISTS retiros(
	cod	 INT primary key auto_increment,
	cod_fazenda INT not null,
	cod_funcionario INT,-- Capataz responsavel
	nome VARCHAR(20),
	FOREIGN KEY(cod_fazenda) REFERENCES fazendas(cod),
	FOREIGN KEY(cod_funcionario) REFERENCES funcionarios(cod)
);

-- Tabela: Pastagem

CREATE TABLE IF NOT EXISTS pastagens(
	cod	 INT primary key auto_increment,
	tipo VARCHAR(20)
);

-- Tabela: Piquete

CREATE TABLE IF NOT EXISTS piquetes(
	cod	 INT primary key auto_increment,
	cod_retiro INT not null,
	cod_pastagem INT,
	nome VARCHAR(20),
	area FLOAT,
	FOREIGN KEY(cod_retiro) REFERENCES retiros(cod),
	FOREIGN KEY(cod_pastagem) REFERENCES pastagens(cod)
);


-- foi removido a qtd_animal e unidade animal 
-- pois podem ser calculados pelo sistema

-- Tabela: Lote

CREATE TABLE IF NOT EXISTS lotes(
	cod	 INT primary key auto_increment,
	cod_piquete INT not null,
	nome VARCHAR(20),
	-- qtd_animais INT default 0,
	-- unid_animal INT,
	FOREIGN KEY(cod_piquete) REFERENCES piquetes(cod)
);


-- Tabela: Tipo de Categoria animal

CREATE TABLE IF NOT EXISTS tipo_categoria_animal(
	cod	 INT primary key auto_increment,
	nome VARCHAR(20)
);

-- Tabela: Categoria Animal

CREATE TABLE IF NOT EXISTS categoria_animal(
	cod	 INT primary key auto_increment,
	cod_tipo INT not null,
	nome VARCHAR(20),
	FOREIGN KEY(cod_tipo) REFERENCES tipo_categoria_animal(cod)
);

-- Tabela: Raça

CREATE TABLE IF NOT EXISTS racas(
	cod	 INT primary key auto_increment,
	nome VARCHAR(20)
);

-- Tabela: Laboratorio

CREATE TABLE IF NOT EXISTS laboratorios(
	cod	 INT primary key auto_increment,
	nome VARCHAR(20),
	endereco VARCHAR(70),
	bairro VARCHAR(20),
	cep VARCHAR(12),
	telefone VARCHAR(20),
	cidade VARCHAR(40)
);

-- Tabela: Pelagem

CREATE TABLE IF NOT EXISTS pelagens(
	cod	 INT primary key auto_increment,
	tipo VARCHAR(20)
);

-- Tabela: Animal

CREATE TABLE IF NOT EXISTS animais(
	cod	 INT primary key auto_increment,
	cod_lote INT not null,
	cod_cat_atual INT not null,
	cod_cat_inicial INT not null,
	cod_pelagem INT,
	cod_laboratorio INT,
	cod_raca INT,
	cod_receptora INT,
	proprietario INT,-- codigo do cliente proprietario do animal?
	rgn VARCHAR(15),
	rgn_definitivo VARCHAR(20),
	nome VARCHAR(30),
	peso_nascimento INT,
	data_nascimento date,
	cdc_origem VARCHAR(20),
	cdn_origem VARCHAR(20),
	exame_path VARCHAR(70),
	observacoes TEXT,
	FOREIGN KEY(cod_lote) REFERENCES lotes(cod),
	FOREIGN KEY(cod_cat_atual) REFERENCES categoria_animal(cod),
	FOREIGN KEY(cod_cat_inicial) REFERENCES categoria_animal(cod),
	FOREIGN KEY(cod_pelagem) REFERENCES pelagens(cod),
	FOREIGN KEY(cod_laboratorio) REFERENCES laboratorios(cod),
	FOREIGN KEY(cod_raca) REFERENCES racas(cod),
	FOREIGN KEY(cod_receptora) REFERENCES animais(cod),
	FOREIGN KEY(proprietario) REFERENCES clientes(cod)
);
