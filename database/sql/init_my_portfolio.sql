-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema my_portfolio
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema my_portfolio
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `my_portfolio` DEFAULT CHARACTER SET utf8 ;
USE `my_portfolio` ;

-- -----------------------------------------------------
-- Table `my_portfolio`.`account`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `my_portfolio`.`account` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `mail_address` VARCHAR(255) NOT NULL,
  `password` VARCHAR(32) NOT NULL,
  `status` VARCHAR(10) NULL,
  `failed_count` INT NULL,
  `locked_time` TIMESTAMP NULL,
  `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `my_portfolio`.`content`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `my_portfolio`.`content` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `account_id` INT NOT NULL,
  `content_text` VARCHAR(255) NULL,
  PRIMARY KEY (`id`, `account_id`),
  INDEX `fk_content_account_idx` (`account_id` ASC) VISIBLE,
  CONSTRAINT `fk_content_account`
    FOREIGN KEY (`account_id`)
    REFERENCES `my_portfolio`.`account` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `my_portfolio`.`work`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `my_portfolio`.`work` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `account_id` INT NOT NULL,
  `linik` VARCHAR(255) NOT NULL,
  `img_path` VARCHAR(80) NULL,
  PRIMARY KEY (`id`, `account_id`),
  INDEX `fk_work_account1_idx` (`account_id` ASC) VISIBLE,
  CONSTRAINT `fk_work_account1`
    FOREIGN KEY (`account_id`)
    REFERENCES `my_portfolio`.`account` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `my_portfolio`.`tag`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `my_portfolio`.`tag` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `account_id` INT NOT NULL,
  `work_id` INT NOT NULL,
  `tag_name` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`id`, `account_id`, `work_id`),
  INDEX `fk_tag_work1_idx` (`work_id` ASC, `account_id` ASC) VISIBLE,
  CONSTRAINT `fk_tag_work1`
    FOREIGN KEY (`work_id` , `account_id`)
    REFERENCES `my_portfolio`.`work` (`id` , `account_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
