CREATE DATABASE tecweb DEFAULT CHARACTER SET utf8 ;

CREATE TABLE tecweb.membros (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  ocupacao VARCHAR(45) NOT NULL,
  email VARCHAR(45) NOT NULL,
  telefone VARCHAR(16) NOT NULL,
  descricao TEXT(500) NOT NULL,
  PRIMARY KEY (id));

CREATE TABLE tecweb.mensagens (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  email VARCHAR(45) NOT NULL,
  destinatario INT NOT NULL,
  PRIMARY KEY (id),
  INDEX fk_mensagens_membros_idx (destinatario ASC),
  CONSTRAINT fk_mensagens_membros
    FOREIGN KEY (destinatario)
    REFERENCES tecweb.membros (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE USER 'tecuser'@'localhost' IDENTIFIED BY 'tecweb123';
GRANT ALL PRIVILEGES ON tecweb.* TO 'tecuser'@'localhost';
FLUSH PRIVILEGES;
