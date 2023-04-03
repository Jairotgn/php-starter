-- Volcando estructura para tabla php-starter.cars
CREATE TABLE IF NOT EXISTS `car` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8,
  `brand` varchar(255) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- Volcando datos para la tabla php-starter.cars: ~5 rows (aproximadamente)
INSERT INTO `car` (`id`, `name`, `brand`, `photo`, `price`) VALUES
	(1, 'Ibiza', 'Seat', NULL, 19000),
	(2, 'Leon', 'Seat', NULL, 210000),
	(3, 'Ford', 'Fiesta', NULL, 22000),
	(4, 'Megane', 'Renault', NULL, 25000),
	(5, '306', 'Peugeot', NULL, 29000);

-- Volcando estructura php-starter.blog: ~5 rows (aproximadamente)
  CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `text` text,
  `dateInsert` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
)ENGINE=InnoDB;

-- Volcando datos para la tabla php-starter.blog: ~0 rows (aproximadamente)
INSERT INTO `blog` (`id`, `title`, `url`, `text`, `dateInsert`) VALUES
	(1, 'Blog welcome', 'welcome', 'Text blog welcome', '2023-04-03 19:35:01'),
	(2, 'Blog How to start', 'hpw-to-start', 'How to start text blog', '2023-04-03 19:36:30');