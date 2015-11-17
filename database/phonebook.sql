SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP DATABASE IF EXISTS `phone_book`;

-- -----------------------------------------------------
-- Schema phone_book
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema phone_book
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `phone_book` DEFAULT CHARACTER SET utf8 ;
USE `phone_book` ;

-- -----------------------------------------------------
-- Table `phone_book`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `phone_book`.`user` (
  `id` INT UNSIGNED NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `surname` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `phone_book`.`number`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `phone_book`.`number` (
  `id` INT UNSIGNED NOT NULL,
  `number` VARCHAR(12) NULL,
  `fk_user_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  FOREIGN KEY (fk_user_id)
	REFERENCES user(id)
)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

