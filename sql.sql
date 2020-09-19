-- comandos SQL para a base de dados no phpmyadmin

CREATE DATABASE db_shopmee;

use db_shopmee;

CREATE TABLE tb_user_email(
  id_user INT NOT NULL AUTO_INCREMENT,
  user_name VARCHAR(200) NOT NULL,
  user_email VARCHAR(200) NOT NULL,
  data_add DATETIME NULL,
  PRIMARY KEY (id_user),
  UNIQUE INDEX email_UNIQUE (user_email ASC));

