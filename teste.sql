CREATE database testeDB;

CREATE TABLE produto (
  id int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  nome varchar(50) NOT NULL,
  quantidade INT,
  valor double,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;