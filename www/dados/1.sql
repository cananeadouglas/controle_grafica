USE mixcopia;

CREATE TABLE funcionario (
    idusuario int(11) not null AUTO_INCREMENT,
    nome varchar (40),
    usuario varchar (20),
    PRIMARY KEY (idusuario)
);

SET character_set_client = utf8;
SET character_set_connection = utf8;
SET character_set_results = utf8;
SET collation_connection = utf8_general_ci;

INSERT INTO funcionario (idusuario, nome, usuario) VALUES
(001, 'Douglas Cananéa', 'douglas');

CREATE TABLE pedidos (
  idpedido int(11) NOT NULL AUTO_INCREMENT,
  idusuario int(11) NOT NULL,
  valorpedido double NOT NULL,
  nomecliente varchar(60) NOT NULL,
  datapedido timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  descricao varchar(150) NOT NULL,
  pagamento varchar(10),
  liberadoproducao varchar(10),
  nomearquivo varchar(160) NOT NULL,
  concluido varchar(10),
  PRIMARY KEY (idpedido)
);

SET character_set_client = utf8;
SET character_set_connection = utf8;
SET character_set_results = utf8;
SET collation_connection = utf8_general_ci;

CREATE TABLE produtos (
  idproduto int(11) NOT NULL AUTO_INCREMENT,
  nomeproduto varchar(50) NOT NULL,
  quantidade int(11) NOT NULL,
  PRIMARY KEY (idproduto)
);

SET character_set_client = utf8;
SET character_set_connection = utf8;
SET character_set_results = utf8;
SET collation_connection = utf8_general_ci;

INSERT INTO produtos (nomeproduto, quantidade) VALUES
('baby look branca G', 1),
('baby look branca M', 1),
('baby look branca P', 1),
('básica branca G', 1),
('básica branca GG', 1),
('básica branca G', 1),
('básica branca P', 1),
('básica branca M', 1),
('baby look branca GG', 1),
('caneca mágica', 1),
('caneca acrílica', 1),
('caneca alça AZUL', 1),
('caneca alça LARANJA', 1),
('caneca alça CORAÇÃO', 1),
('ALMOFADA quadrada', 1),
('ALMOFADA redonda', 1);

/* comments */