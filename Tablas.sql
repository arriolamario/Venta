-- MySQL Script generated by MySQL Workbench
-- Sat Apr 21 02:57:23 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema dbventas
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema dbventas
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dbventas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci ;
USE `dbventas` ;

-- -----------------------------------------------------
-- Table `dbventas`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbventas`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `clave` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbventas`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbventas`.`clientes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `mail` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbventas`.`ordenesTrabajos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbventas`.`ordenesTrabajos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATE NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `saldo` DECIMAL(5,2) NOT NULL,
  `entrega` DECIMAL(5,2) NOT NULL,
  `idCliente` INT NOT NULL,
  `idUsuario` INT NOT NULL,
  `idOrdenRelacionada` INT NULL,
  `idOrdenActualizada` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `FK_OrdenTrabajo_Cliente_idx` (`idCliente` ASC),
  INDEX `KF_OrdenTrabajo_Usuario_idx` (`idUsuario` ASC),
  CONSTRAINT `FK_OrdenTrabajo_Cliente`
    FOREIGN KEY (`idCliente`)
    REFERENCES `dbventas`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `KF_OrdenTrabajo_Usuario`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `dbventas`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbventas`.`detallesTrabajos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbventas`.`detallesTrabajos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idOrdenTrabajo` INT NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  `cantidad` INT NOT NULL,
  `precio` DECIMAL(5,2) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_DetalleTrabajo_OrdenTrabajo_idx` (`idOrdenTrabajo` ASC),
  CONSTRAINT `FK_DetalleTrabajo_OrdenTrabajo`
    FOREIGN KEY (`idOrdenTrabajo`)
    REFERENCES `dbventas`.`ordenesTrabajos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;