DROP DATABASE   IF     EXISTS yolo;
CREATE DATABASE IF NOT EXISTS yolo;
USE yolo;

CREATE TABLE `usuarios` (
	`id` int NOT NULL AUTO_INCREMENT,
	`usuario` varchar(255) NOT NULL AUTO_INCREMENT,
	`contraseña` varchar(255) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `productos` (
	`id` int NOT NULL AUTO_INCREMENT,
	`nombre` varchar(255) NOT NULL,
	`descripcion` varchar(255) NOT NULL,
	`foto` varchar(255) NOT NULL,
	`direccion` varchar(255),
	`fecha` DATE NOT NULL,
	`id_categoria` int NOT NULL,
	`id_perfiles` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `etiquetas` (
	`id` int NOT NULL AUTO_INCREMENT,
	`usos` int NOT NULL,
	`nombre` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `perfiles` (
	`id` int NOT NULL AUTO_INCREMENT,
	`nombre` varchar(255) NOT NULL AUTO_INCREMENT,
	`apellido` varchar(255) NOT NULL AUTO_INCREMENT,
	`correo` varchar(255) NOT NULL AUTO_INCREMENT,
	`sexo` varchar(255) NOT NULL AUTO_INCREMENT,
	`valoracion` int(255),
	`opinion` varchar(255),
	PRIMARY KEY (`id`)
);

CREATE TABLE `categoria` (
	`id` bigint NOT NULL AUTO_INCREMENT,
	`nombre` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `productoEtiquetas` (
	`id_producto` int NOT NULL AUTO_INCREMENT,
	`id_etiquetas` int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id_producto`,`id_etiquetas`)
);

ALTER TABLE `productos` ADD CONSTRAINT `productos_fk0` FOREIGN KEY (`id_categoria`) REFERENCES `categoria`(`id`);

ALTER TABLE `productos` ADD CONSTRAINT `productos_fk1` FOREIGN KEY (`id_perfiles`) REFERENCES `perfiles`(`id`);

ALTER TABLE `productoEtiquetas` ADD CONSTRAINT `productoEtiquetas_fk0` FOREIGN KEY (`id_producto`) REFERENCES `productos`(`id`);

ALTER TABLE `productoEtiquetas` ADD CONSTRAINT `productoEtiquetas_fk1` FOREIGN KEY (`id_etiquetas`) REFERENCES `etiquetas`(`id`);

