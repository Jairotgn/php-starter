-- Volcando estructura para tabla php-starter.cars

CREATE TABLE IF NOT EXISTS `car` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8,
  `brand` varchar(255) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

INSERT INTO `car` (`id`, `name`, `brand`, `photo`, `price`) VALUES
	(1, 'Ibiza', 'Seat', NULL, 19000),
	(2, 'Leon', 'Seat', NULL, 210000),
	(3, 'Ford', 'Fiesta', NULL, 22000),
	(4, 'Megane', 'Renault', NULL, 25000),
	(5, '306', 'Peugeot', NULL, 29000);

  CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `text` text,
  `dateInsert` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
)ENGINE=InnoDB;

INSERT INTO `blog` (`id`, `title`, `url`, `text`, `dateInsert`) VALUES
	(1, 'Blog welcome', 'welcome', 'Text blog welcome', '2023-04-03 19:35:01'),
	(2, 'Blog How to start', 'hpw-to-start', 'How to start text blog', '2023-04-03 19:36:30');

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `roleId` int(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `user` (`id`, `name`, `roleId`, `email`, `password`) VALUES
	(1, 'admin', 1, 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3');