-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema seupet_vet
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema seupet_vet
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `seupet_vet` DEFAULT CHARACTER SET utf8 ;
USE `seupet_vet` ;

-- -----------------------------------------------------
-- Table `seupet_vet`.`cargos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seupet_vet`.`cargos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cargo` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `seupet_vet`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seupet_vet`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `cpf` CHAR(11) NOT NULL,
  `endereco` VARCHAR(45) NOT NULL,
  `arq_foto` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(20) NOT NULL,
  `cargos_id` INT NOT NULL,
  PRIMARY KEY (`id`, `cargos_id`),
  INDEX `fk_users_cargos1_idx` (`cargos_id` ASC),
  CONSTRAINT `fk_users_cargos1`
    FOREIGN KEY (`cargos_id`)
    REFERENCES `seupet_vet`.`cargos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `seupet_vet`.`procedimentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seupet_vet`.`procedimentos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(45) NOT NULL,
  `previsao` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `seupet_vet`.`animais`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seupet_vet`.`animais` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(15) NOT NULL,
  `raca` VARCHAR(45) NOT NULL,
  `tipo` CHAR(1) NOT NULL,
  `users_id` INT NOT NULL,
  `procedimentos_id` INT NOT NULL,
  PRIMARY KEY (`id`, `users_id`),
  INDEX `fk_animais_users_idx` (`users_id` ASC),
  INDEX `fk_animais_procedimentos1_idx` (`procedimentos_id` ASC),
  CONSTRAINT `fk_animais_users`
    FOREIGN KEY (`users_id`)
    REFERENCES `seupet_vet`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_animais_procedimentos1`
    FOREIGN KEY (`procedimentos_id`)
    REFERENCES `seupet_vet`.`procedimentos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `seupet_vet` ;

-- -----------------------------------------------------
-- Placeholder table for view `seupet_vet`.`exibiranimais`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seupet_vet`.`exibirAnimais` (`id` INT);

-- -----------------------------------------------------
-- Placeholder table for view `seupet_vet`.`exibirUsuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seupet_vet`.`exibirUsuarios` (`nome` INT, `cpf` INT, `endereco` INT, `cargo` INT);

-- -----------------------------------------------------
-- View `seupet_vet`.`exibiranimais`
-- -----------------------------------------------------
CREATE VIEW `seupet_vet`.`exibirAnimais` AS;
USE `seupet_vet`;
SELECT
    `a`.`id` AS `id`,
    `a`.`nome` AS `nome`,
    `a`.`raca` AS `raca`,
    `a`.`tipo` AS `sexo`,
    `u`.`nome` AS `nome_dono`,
    `p`.`tipo` AS `tipo_procedimento`
FROM
    (
        (
            `seupet_vet`.`animais` `a`
        JOIN `seupet_vet`.`users` `u`
        ON
            ((`a`.`users_id` = `u`.`id`))
        )
    JOIN `seupet_vet`.`procedimentos` `p`
    ON
        ((`a`.`procedimentos_id` = `p`.`id`))
    );

-- -----------------------------------------------------
-- View `seupet_vet`.`exibirUsuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `seupet_vet`.`exibirUsuarios`;
USE `seupet_vet`;
CREATE  OR REPLACE VIEW `exibirUsuarios` AS
select 
	u.nome,
    u.cpf,
    u.endereco,
    c.cargo
FROM users u INNER JOIN cargos c ON c.id = u.cargos_id;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
