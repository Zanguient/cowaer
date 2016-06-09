--
-- Database: `cowaerdb`
--

-- CREATE USER 'cowaer'@'localhost' IDENTIFIED BY 'cowaer';

-- GRANT ALL PRIVILEGES ON cowaerdb.* TO 'cowaer'@'localhost' WITH GRANT OPTION;

-- Tabela: Cliente(Criador)

CREATE TABLE IF NOT EXISTS clientes(
	cod	 SERIAL primary key,
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
	data_cadastro date
);

-- Tabela: Fazenda

CREATE TABLE IF NOT EXISTS fazendas(
	cod	 SERIAL primary key,
	cod_criador INT,
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
	cod	 SERIAL primary key,
	cod_criador INT,
	nome VARCHAR(40) not null,
	nivel INT not null, -- Administrador:1, Empregado:2
	login VARCHAR(15) not null,
	senha VARCHAR(70) not null,
	email VARCHAR(50),
	cargo VARCHAR(20),
	foto_url VARCHAR(100) default null
);

INSERT INTO funcionarios(cod_criador,nome, nivel, login, senha, email, cargo, foto_url)
VALUES (null,'Administrador',1,'admin','c264f1b3e807eecf8fc081f70a7606df1030bde0','teste@gmail.com','Gerente',null);-- senha 'cw321'

-- Tabela: Agregação Funcionario X Fazenda

CREATE TABLE IF NOT EXISTS rel_funcionario_fazenda(
	cod_funcionario	 INT,
	cod_fazenda	 INT,
	PRIMARY KEY(cod_funcionario,cod_fazenda),
	FOREIGN KEY(cod_funcionario) REFERENCES  funcionarios(cod),
	FOREIGN KEY(cod_fazenda) REFERENCES  fazendas(cod)
	
);


-- Tabela: Retiro

CREATE TABLE IF NOT EXISTS retiros(
	cod	 SERIAL primary key,
	cod_fazenda INT not null,
	cod_funcionario INT,-- Capataz responsavel
	nome VARCHAR(20),
	FOREIGN KEY(cod_fazenda) REFERENCES fazendas(cod),
	FOREIGN KEY(cod_funcionario) REFERENCES funcionarios(cod)
);

-- Tabela: Pastagem

CREATE TABLE IF NOT EXISTS pastagens(
	cod	 SERIAL primary key,
	tipo VARCHAR(20)
);

-- Tabela: Piquete

CREATE TABLE IF NOT EXISTS piquetes(
	cod	 SERIAL primary key,
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
	cod	 SERIAL primary key,
	cod_piquete INT not null,
	nome VARCHAR(20),
	-- qtd_animais INT default 0,
	-- unid_animal INT,
	FOREIGN KEY(cod_piquete) REFERENCES piquetes(cod)
);


-- Tabela: Tipo de Categoria animal

CREATE TABLE IF NOT EXISTS tipo_categoria_animal(
	cod	 SERIAL primary key,
	nome VARCHAR(20)
);

-- Tabela: Categoria Animal

CREATE TABLE IF NOT EXISTS categoria_animal(
	cod	 SERIAL primary key,
	cod_tipo INT not null,
	nome VARCHAR(20),
	FOREIGN KEY(cod_tipo) REFERENCES tipo_categoria_animal(cod)
);

-- Tabela: Raça

CREATE TABLE IF NOT EXISTS racas(
	cod	 SERIAL primary key,
	nome VARCHAR(20)
);

-- Tabela: Laboratorio

CREATE TABLE IF NOT EXISTS laboratorios(
	cod	 SERIAL primary key,
	nome VARCHAR(20),
	endereco VARCHAR(70),
	bairro VARCHAR(20),
	cep VARCHAR(12),
	telefone VARCHAR(20),
	cidade VARCHAR(40)
);

-- Tabela: Pelagem

CREATE TABLE IF NOT EXISTS pelagens(
	cod	 SERIAL primary key,
	tipo VARCHAR(20)
);

-- Tabela: Animal

CREATE TABLE IF NOT EXISTS animais(
	cod	 SERIAL primary key,
	cod_lote INT not null,
	cod_cat_atual INT not null,
	cod_cat_inicial INT not null,
	cod_pelagem INT,
	cod_laboratorio INT,
	cod_raca INT,
	cod_receptora INT,
	rgn VARCHAR(20),
	rgn_definitivo VARCHAR(20),
	nome VARCHAR(30),
	peso_nascimento INT,
	peso_atual INT,
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

-- Tabela: Pelagem

CREATE TABLE IF NOT EXISTS historico_animal(
	cod_animal INT,
	cod_categoria INT,
	cod_lote INT,
	peso FLOAT,
	data DATE,
	FOREIGN KEY(cod_animal) REFERENCES animais(cod),
	FOREIGN KEY(cod_categoria) REFERENCES categoria_animal(cod),
	FOREIGN KEY(cod_lote) REFERENCES lotes(cod)
);

-- Procedure para a trigger de historico animal
create or replace function historico_animal()
returns trigger as
$$
begin
        
        IF (TG_OP = 'UPDATE') THEN
        	IF (OLD.cod_cat_atual <> NEW.cod_cat_atual) THEN
            	INSERT INTO historico_animal values( OLD.cod,OLD.cod_cat_atual,null,null,now());
            ELSIF (OLD.cod_lote <> NEW.cod_lote) THEN
            	INSERT INTO historico_animal values( OLD.cod,null,OLD.cod_lote,null,now());
            ELSIF (OLD.peso_atual <> NEW.peso_atual) THEN
            	INSERT INTO historico_animal values( OLD.cod,null,null,OLD.peso_atual,now());
            END IF;

            RETURN NEW;
        END IF;
        RETURN NULL; -- result is ignored since this is an AFTER trigger

end;
$$ language plpgsql;



-- Trigger para historico animal
CREATE TRIGGER historico_animal
BEFORE UPDATE ON animais
    FOR EACH ROW EXECUTE PROCEDURE historico_animal();




-- Views para o Banco


CREATE VIEW animais_join AS 
select 
fazendas.cod as cod_fazenda, fazendas.cod_criador,fazendas.nome as fazenda,
 retiros.cod as cod_retiro, retiros.nome as retiro,
 piquetes.cod as cod_piquete, piquetes.nome as piquete,
 lotes.cod as cod_lote, lotes.nome as lote,
 animais.cod as cod_animal,animais.nome as animal,animais.cod_cat_inicial,cat1.nome as categoria_inicial,
 animais.cod_cat_atual, cat2.nome as categoria_atual, pelagens.tipo as pelagem,
 racas.nome as raca,animais.cod_receptora,animais.rgn,animais.rgn_definitivo,animais.cod_laboratorio,
 animais.peso_nascimento,animais.peso_atual,animais.data_nascimento,animais.cdn_origem,animais.cdc_origem,
 animais.observacoes
from fazendas inner join retiros
on retiros.cod_fazenda = fazendas.cod inner join piquetes
on piquetes.cod_retiro = retiros.cod inner join lotes
on lotes.cod_piquete = piquetes.cod inner join animais
on animais.cod_lote = lotes.cod inner join categoria_animal as cat1
on animais.cod_cat_inicial = cat1.cod inner join categoria_animal as cat2
on animais.cod_cat_atual = cat2.cod inner join pelagens
on animais.cod_pelagem = pelagens.cod inner join racas
on animais.cod_raca = racas.cod
order by animais.nome asc;


