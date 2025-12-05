CREATE DATABASE IF NOT EXISTS `astrodatabase` CHARACTER SET utf8;  
USE `astrodatabase`;  

CREATE TABLE IF NOT EXISTS `astros` (  
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,  
  `name` VARCHAR(50) NOT NULL,  
  `description` VARCHAR(600) NOT NULL,  
  `type` VARCHAR(50) NOT NULL,  
  `diameter` FLOAT NOT NULL,  
  `mass` FLOAT NOT NULL,  
  `discovery_year` INT UNSIGNED NOT NULL,  
  `discovered_by` VARCHAR(100) NOT NULL, 
  `temperature` FLOAT NOT NULL,
  `image` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`id`)  
) DEFAULT CHARSET = utf8;
