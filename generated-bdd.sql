DROP DATABASE IF EXISTS `magasin`;
CREATE DATABASE `magasin`;
USE `magasin`;


-- ---
-- Table 'produits'
-- Liste des produits
-- ---

DROP TABLE IF EXISTS `produits`;
		
CREATE TABLE `produits` (
  `idpr` INTEGER NOT NULL AUTO_INCREMENT ,
  `titre` VARCHAR(45) NOT NULL,
  `ref` VARCHAR(50) NOT NULL,
  `prix` DOUBLE NOT NULL DEFAULT 0.0,
  `photo` VARCHAR(255) NULL DEFAULT NULL,
  `description` VARCHAR(250) NULL DEFAULT NULL,
  `idcat` INTEGER NOT NULL,
  PRIMARY KEY (`idpr`)
) COMMENT 'Liste des produits';

-- ---
-- Table 'paniers'
-- 
-- ---

DROP TABLE IF EXISTS `paniers`;
		
CREATE TABLE `paniers` (
  `idpa` INTEGER NOT NULL AUTO_INCREMENT,
  `date` DATETIME NULL DEFAULT now(),
  `idcl` INTEGER NOT NULL,
  PRIMARY KEY (`idpa`)
);

-- ---
-- Table 'etre_dans'
-- 
-- ---

DROP TABLE IF EXISTS `etre_dans`;
		
CREATE TABLE `etre_dans` (
  `idpr` INTEGER NOT NULL,
  `idpa` INTEGER NOT NULL,
  `quantite` INTEGER NOT NULL DEFAULT 1,
  PRIMARY KEY (`idpr`, `idpa`)
);

-- ---
-- Table 'categories'
-- 
-- ---

DROP TABLE IF EXISTS `categories`;
		
CREATE TABLE `categories` (
  `idcat` INTEGER NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(45) NOT NULL,
  `description` VARCHAR(150) NULL DEFAULT NULL,
  PRIMARY KEY (`idcat`)
);

-- ---
-- Table 'clients'
-- 
-- ---

DROP TABLE IF EXISTS `clients`;
		
CREATE TABLE `clients` (
  `idcl` INTEGER NOT NULL AUTO_INCREMENT ,
  `nom` VARCHAR(50) NOT NULL,
  `prenom` VARCHAR(50) NULL DEFAULT NULL,
  `mail` VARCHAR(50) NULL DEFAULT NULL,
  `adresse` VARCHAR(150) NULL DEFAULT NULL,
  `login` VARCHAR(50) NULL DEFAULT NULL,
  `mdp` VARCHAR(250) NULL DEFAULT NULL,
  PRIMARY KEY (`idcl`)
);

-- ---
-- Foreign Keys 
-- ---

ALTER TABLE `produits` ADD FOREIGN KEY (idcat) REFERENCES `categories` (`idcat`);
ALTER TABLE `paniers` ADD FOREIGN KEY (idcl) REFERENCES `clients` (`idcl`);
ALTER TABLE `etre_dans` ADD FOREIGN KEY (idpr) REFERENCES `produits` (`idpr`);
ALTER TABLE `etre_dans` ADD FOREIGN KEY (idpa) REFERENCES `paniers` (`idpa`);

