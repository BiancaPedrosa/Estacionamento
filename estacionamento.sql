DROP DATABASE IF EXISTS estacionamento;

CREATE DATABASE estacionamento;

USE estacionamento;

CREATE TABLE tabela_admin (
  ID int (10) NOT NULL AUTO_INCREMENT, 
  NomeUsuario varchar(120) DEFAULT NULL,
  Telefone bigint(10) DEFAULT NULL,
  Email varchar(200) DEFAULT NULL,
  Senha varchar(120) DEFAULT NULL,
  DataRegistroAdmin timestamp NULL DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY (ID)
);



INSERT INTO tabela_admin (ID,  NomeUsuario, Telefone, Email, Senha, DataRegistroAdmin) VALUES
(1, 'admin', 123456789, 'admin@gmail.com', md5('123'), '2021-10-22 16:50:00');





CREATE TABLE tabela_veiculo (
  ID int(10) NOT NULL AUTO_INCREMENT,
  NumeroEstacionamento varchar(120) DEFAULT NULL,
  Modelo varchar(120) DEFAULT NULL,
  Cor varchar(120) DEFAULT NULL,
  Marca varchar(120) DEFAULT NULL,
  Placa varchar(120) DEFAULT NULL,
  NomeProprietario varchar(120) DEFAULT NULL,
  TelefoneProprietario bigint(10) DEFAULT NULL,
  Entrada timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  Saida timestamp NULL DEFAULT NULL,
  TarifaEstacionamento integer default 10,
  Convenio mediumtext  NULL,
  Status varchar(10) DEFAULT 'Veiculo Dentro',
  PRIMARY KEY (ID)
);

CREATE TABLE tabela_loja (
  ID_loja int(10) NOT NULL AUTO_INCREMENT,
  Nomeloja varchar(120) DEFAULT NULL,
  CEP varchar(120) DEFAULT NULL,
  TelefoneLoja varchar(120) DEFAULT NULL,
  Email varchar(120) DEFAULT NULL,
  PRIMARY KEY (ID_loja )
);

INSERT INTO tabela_loja (ID_loja, Nomeloja, CEP, Email, TelefoneLoja) VALUES
(1, 'Americanas', '12345-678', 'americanas@gmail.com','123456789');