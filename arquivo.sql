/* Criação da base de dados TECWEB. */
CREATE DATABASE tecweb DEFAULT CHARACTER SET utf8;

/* Criação da tabela MEMBROS,
   para manter as informações dos integrantes da equipe. */
CREATE TABLE tecweb.membros (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  user VARCHAR(30) NOT NULL,
  ocupacao VARCHAR(60) NOT NULL,
  email VARCHAR(45) NOT NULL,
  telefone VARCHAR(16) NOT NULL,
  lattes VARCHAR(40) NOT NULL,
  descricao TEXT(500) NOT NULL,
  PRIMARY KEY (id)
);

/* Criação da tabela MENSAGENS,
   para armazenadar as mensagens enviadas aos membros da equipe. */
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
    ON UPDATE NO ACTION
);

/* Criação do usuário TECUSER,
   com todos os previlégios para a base de dados TECWEB. */
CREATE USER 'tecuser'@'localhost' IDENTIFIED BY 'tecweb123';
GRANT ALL PRIVILEGES ON tecweb.* TO 'tecuser'@'localhost';
FLUSH PRIVILEGES;

/* Inserção de informações referentes a cada membro da equipe. */
INSERT INTO `membros` VALUES
(1,'Ângela Magalhães','angela_magalhaes','Estudante de EngComp / Bolsista DTI / Tec Redes Comp','angelam@alu.ufc.br','(88) 9 9920-3298','lattes.cnpq.br/7366228102006177','Possui curso técnico em Redes de Computadores realizado no período de 2011-2014 na Escola Estadual de Educação Profissional Francisca Maura Martins - Hidrolândia-Ce. Cursando o 6º (sexto) semestre de Engenharia da Computação pela Universidade Federal do Ceará (UFC) - campus Sobral. Possui interesse em <i>Machine Learning</i>, e em cursar Matemática futuramente. Atualmente, bolsista pelo Departamento de Tecnologia da Informação (DTI).'),
(2,'Hugo Sousa','hugo_sousa','Estudante de EngComp / Bolsista PET / Tec Redes Comp','hugosousa111@gmail.com','(88) 9 9706-4780','lattes.cnpq.br/8276520395379590','Graduando em Engenharia da Computação pela Universidade Federal do Ceará - Campus Sobral. Em 2014 concluiu o ensino médio integrado, onde se formou como técnico de Redes de Computadores. Desde 2017 faz parte do Programa de Educação Tutorial (PET), onde vem desenvolvendo atividades de monitoria, pesquisa e extensão. Atualmente tem interesse nas áreas de <i>Machine Learning</i> e segurança em IoT.'),
(3,'Kamila Farias','kamila_farias','Estudante de EngComp / Bolsista DTI / Tec Redes Comp','fariaas.kamila@gmail.com','(88) 9 9999-5678','lattes.cnpq.br/5134569000634512','Técnica em Redes de Computadores, onde adquiriu uma formação profissional na Escola Profissional Francisca Maura Martins no ano de 2013; Graduanda em Engenharia da Computação pela Universidade Federal do Ceará - Campus Sobral. Onde segue interesse na vertente de Computação e/ou Telecomunicações. Atualmente, bolsista pelo Departamento de Tecnologia da Informação (DTI).'),
(4,'Lucas Santos','lucas_santos','Estudante de EngComp / Bolsista PET / Tec Redes Comp','lucas26xd@alu.ufc.br','(88) 9 9664-6430','lattes.cnpq.br/1388280861535824','Graduando em Engenharia da Computação pela Universidade Federal do Ceará - Campus Sobral. Em 2014 concluiu o ensino médio integrado, onde se formou como técnico de Redes de Computadores. Desde 2017 faz parte do Programa de Educação Tutorial (PET), onde vem desenvolvendo atividades de monitoria, pesquisa e extensão. Atualmente tem interesse nas áreas de IoT e baixo custo de memória, de processamento e de energia, além de se interessar por <i>Machine Learning</i>.'),
(5,'Tadeu Jerônimo','tadeu_jeronimo','Estudante de EngComp / Membro TAE / BCompSc','tadeus.jeronimo@gmail.com','(88) 9 9207-7512','lattes.cnpq.br/2644575253856954','Graduando em Engenharia de Computação (3º período) pela Universidade Federal do Ceará (UFC) - Campus Sobral. Onde é membro do grupo Tecnologias Assistivas e Educacionais (TAE), atuando na vertente de <i>Data Mining</i>. Possui graduação em Ciências da Computação (Bacharelado) pela Universidade Estadual Vale do Acaraú - UVA (2016). Tem experiência na área de Computação, com ênfase em desenvolvimento de sistemas e programação de banco de dados. Interesse em temas como: <i>Cross-platform App Development</i>, <i>Computer Vision</i> e <i>Deep Learning</i>.');
