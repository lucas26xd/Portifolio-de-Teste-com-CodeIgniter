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
  msg text NOT NULL,
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


INSERT INTO `membros` VALUES
(1,'Ângela Magalhães','Estudante','angelam@alu.ufc.br','(88) 9 9920-3298','Possui curso técnico em Redes de Computadores realizado no período de 2011-2014 na Escola Estadual de Educação Profissional Francisca Maura Martins - Hidrolândia-Ce. Cursando o 6º (sexto) semestre de Engenharia da Computação pela Universidade Federal do Ceará (UFC) - campus Sobral. Possui interesse em Machine Learning, e em cursar Matemática futuramente. Mais informações em: <a href=\"http://lattes.cnpq.br/7366228102006177\" title=\"CV Lattes\" target=\"_blank\">lattes.cnpq.br/7366228102006177</a>.'),
(2,'Hugo Sousa','Estudante','hugosousa111@gmail.com','(88) 9 9706-4780','Graduando em Engenharia da Computação pela Universidade Federal do Ceará - Campus Sobral. Em 2014 concluiu o ensino médio integrado, onde se formou como técnico de Redes de Computadores. Desde 2017 faz parte do Programa de Educação Tutorial (PET), onde vem desenvolvendo atividades de monitoria, pesquisa e extensão. Atualmente tem interesse nas áreas de Machine Learning e segurança em IoT. Mais informações em: <a href=\"http://lattes.cnpq.br/8276520395379590\" title=\"CV Lattes\" target=\"_blank\">lattes.cnpq.br/8276520395379590</a>.'),
(3,'Kamila Farias','Estudante','fariaas.kamila@gmail.com','(88) 9 9999-5678','Técnica em Redes de Computadores, onde adquiriu uma formação profissional na Escola Profissional Francisca Maura Martins no ano de 2013; Graduanda em Engenharia da Computação pela Universidade Federal do Ceará - Campus Sobral. Onde segue interesse na vertente de Computação e/ou Telecomunicações. Atualmente, bolsista pelo Departamento de Tecnologia da Informação (DTI). Mais informações em: <a href=\"http://lattes.cnpq.br/5134569000634512\" title=\"CV Lattes\" target=\"_blank\">lattes.cnpq.br/5134569000634512</a>.'),
(4,'Lucas Santos','Estudante','lucas26xd@alu.ufc.br','(88) 9 9664-6430','Graduando em Engenharia da Computação pela Universidade Federal do Ceará - Campus Sobral. Em 2014 concluiu o ensino médio integrado, onde se formou como técnico de Redes de Computadores. Desde 2017 faz parte do Programa de Educação Tutorial (PET), onde vem desenvolvendo atividades de monitoria, pesquisa e extensão. Atualmente tem interesse nas áreas de IoT e baixo custo de memória, de processamento e de energia, além de se interessar por Machine Learning. Mais informações em: <a href=\"http://lattes.cnpq.br/1388280861535824\" title=\"CV Lattes\" target=\"_blank\">lattes.cnpq.br/1388280861535824</a>.'),
(5,'Tadeu Jerônimo','Estudante','tadeus.jeronimo@gmail.com','(88) 9 9999-9999','Graduando do 3º período em Engenharia de Computação pela UFC - Campus Sobral. Tem experiência na área de Computação, com ênfase em desenvolvimento de sistemas. Interesse no desenvolvimento de aplicações multiplataforma. Mais informações em: <a href=\"http://lattes.cnpq.br/2644575253856954\" title=\"CV Lattes\" target=\"_blank\">lattes.cnpq.br/2644575253856954</a>.');

INSERT INTO tecweb.mensagens (nome, email, destinatario, msg) VALUES ('Visitante', 'visitante@mail.com', 5, 'Mensagem teste...');
