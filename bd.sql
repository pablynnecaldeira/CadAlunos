CREATE DATABASE dbpoo;
USE dbpoo;

CREATE TABLE `dbpoo`.`login` (
  `idlogin` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(150) NOT NULL,
  `senha` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`idlogin`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE usuario (
  id_usuario INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(150) NOT NULL,
  cpf VARCHAR(11) NOT NULL,
  rg VARCHAR(11) NOT NULL,
  endereco VARCHAR(150) NOT NULL,
  email VARCHAR(100) NOT NULL,
  ativo TINYINT(1) NOT NULL DEFAULT 1,
  idLogin INT,
  PRIMARY KEY (id_usuario),
  FOREIGN KEY (idLogin) REFERENCES login(idLogin)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




/*

ALTER TABLE `dbpoo`.`usuario` 
ADD COLUMN `idLogin` INT(11) NOT NULL AFTER `ativo`,
ADD INDEX `idLogin_idx` (`idLogin` ASC) VISIBLE;
;
ALTER TABLE `dbpoo`.`usuario` 
ADD CONSTRAINT `idLogin`
  FOREIGN KEY (`idLogin`)
  REFERENCES `dbpoo`.`login` (`idlogin`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;*/