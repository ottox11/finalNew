-- ----------------------------------------------------------------------------
-- MySQL Workbench Migration
-- Migrated Schemata: mundo_mascota
-- Source Schemata: mundo_mascotas
-- Created: Tue Aug  6 19:12:14 2019
-- Workbench Version: 6.3.6
-- ----------------------------------------------------------------------------

SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------------------------------------------------------
-- Schema mundo_mascota
-- ----------------------------------------------------------------------------
DROP SCHEMA IF EXISTS `mundo_mascota` ;
CREATE SCHEMA IF NOT EXISTS `mundo_mascota` ;

-- ----------------------------------------------------------------------------
-- Table mundo_mascota.brands
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `mundo_mascota`.`brands` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `brand_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

-- ----------------------------------------------------------------------------
-- Table mundo_mascota.orders
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `mundo_mascota`.`orders` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` VARCHAR(45) NOT NULL,
  `product_id` VARCHAR(45) NOT NULL,
  `quantity` INT(11) NOT NULL,
  `unit_price` DECIMAL(10,0) NOT NULL,
  `order_date` DATETIME NOT NULL,
  PRIMARY KEY (`id`, `user_id`, `product_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

-- ----------------------------------------------------------------------------
-- Table mundo_mascota.products
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `mundo_mascota`.`products` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `product_name` VARCHAR(100) NOT NULL,
  `price_unit` DECIMAL(10,0) NOT NULL,
  `brand` VARCHAR(45) NOT NULL,
  `image` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4;

-- ----------------------------------------------------------------------------
-- Table mundo_mascota.roles
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `mundo_mascota`.`roles` (
  `id` INT(11) NOT NULL,
  `role_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

-- ----------------------------------------------------------------------------
-- Table mundo_mascota.service_type
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `mundo_mascota`.`service_type` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `type_services_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  UNIQUE INDEX `type_services_name_UNIQUE` (`type_services_name` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

-- ----------------------------------------------------------------------------
-- Table mundo_mascota.services
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `mundo_mascota`.`services` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `service_name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `address` VARCHAR(100) NOT NULL,
  `contact_phone` VARCHAR(45) NOT NULL,
  `type_services_id` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

-- ----------------------------------------------------------------------------
-- Table mundo_mascota.stock
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `mundo_mascota`.`stock` (
  `product_id` INT(11) NOT NULL,
  `in_stock` INT(11) NOT NULL,
  `last_update_time` DATETIME NOT NULL,
  PRIMARY KEY (`product_id`),
  UNIQUE INDEX `product_id_UNIQUE` (`product_id` ASC),
  UNIQUE INDEX `in_stock_UNIQUE` (`in_stock` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

-- ----------------------------------------------------------------------------
-- Table mundo_mascota.users
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `mundo_mascota`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `lastname` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `passwd` VARCHAR(100) NOT NULL,
  `address` VARCHAR(100) NOT NULL,
  `image` VARCHAR(150) NULL DEFAULT NULL,
  `phone` VARCHAR(10) NULL DEFAULT NULL,
  `created_at` DATETIME NOT NULL,
  `last_update` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_users_UNIQUE` (`id` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  UNIQUE INDEX `phone_UNIQUE` (`phone` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 114
DEFAULT CHARACTER SET = utf8mb4;

-- ----------------------------------------------------------------------------
-- Table mundo_mascota.users_role
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `mundo_mascota`.`users_role` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` VARCHAR(45) NOT NULL,
  `role_id` VARCHAR(45) NOT NULL,
  `role_start_time` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  UNIQUE INDEX `user_id_UNIQUE` (`user_id` ASC),
  UNIQUE INDEX `role_id_UNIQUE` (`role_id` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;
SET FOREIGN_KEY_CHECKS = 1;
