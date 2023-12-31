-- MySQL Script generated by MySQL Workbench
-- 03/10/23 16:14:02
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Profesores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Profesores` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Profesores` (
  `Cedula` INT NOT NULL COMMENT '',
  `Nombre` VARCHAR(60) NOT NULL COMMENT '',
  `Direccion` VARCHAR(45) NULL COMMENT '',
  `Telefono` INT UNSIGNED NULL COMMENT '',
  PRIMARY KEY (`Cedula`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Modulos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Modulos` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Modulos` (
  `Codigo` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nombre` VARCHAR(45) NOT NULL COMMENT '',
  `Profesores_Cedula` INT NOT NULL COMMENT '',
  PRIMARY KEY (`Codigo`)  COMMENT '',
  UNIQUE INDEX `Codigo_UNIQUE` (`Codigo` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Alumnos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Alumnos` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Alumnos` (
  `Documento` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Matricula` INT NOT NULL COMMENT '',
  `Nombre` VARCHAR(45) NOT NULL COMMENT '',
  `Apellidos` VARCHAR(45) NOT NULL COMMENT '',
  `Fec_Nac` DATE NOT NULL COMMENT '',
  PRIMARY KEY (`Documento`)  COMMENT '',
  UNIQUE INDEX `Documento_UNIQUE` (`Documento` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Inscripciones`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Inscripciones` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Inscripciones` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Alumnos_Documento` INT NOT NULL COMMENT '',
  `Modulos_Codigo` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
