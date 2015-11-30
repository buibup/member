CREATE DATABASE db_member;

CREATE TABLE tb_member (
  id INT NOT NULL AUTO_INCREMENT,
  username VARCHAR(100) NOT NULL,
  password VARCHAR(20) NOT NULL,
  email VARCHAR(45) NULL,
  reg_date VARCHAR(45) NULL,
  reg_time VARCHAR(45) NULL,
  PRIMARY KEY (id, username))
