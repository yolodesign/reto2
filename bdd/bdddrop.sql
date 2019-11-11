ALTER TABLE `productos` DROP FOREIGN KEY `productos_fk0`;

ALTER TABLE `productos` DROP FOREIGN KEY `productos_fk1`;

ALTER TABLE `etiquetas` DROP FOREIGN KEY `etiquetas_fk0`;

ALTER TABLE `perfiles` DROP FOREIGN KEY `perfiles_fk0`;

DROP TABLE IF EXISTS `usuarios`;

DROP TABLE IF EXISTS `productos`;

DROP TABLE IF EXISTS `etiquetas`;

DROP TABLE IF EXISTS `perfiles`;

DROP TABLE IF EXISTS `categoria`;
