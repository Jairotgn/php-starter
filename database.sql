

-- Volcando estructura para tabla php-starter.cars
CREATE TABLE IF NOT EXISTS `cars` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='A simple example of cars page';

-- Volcando datos para la tabla php-starter.cars: ~5 rows (aproximadamente)
INSERT INTO `cars` (`id`, `name`, `brand`, `photo`, `price`) VALUES
	(1, 'Ibiza', 'Seat', NULL, 19000),
	(2, 'Leon', 'Seat', NULL, 210000),
	(3, 'Ford', 'Fiesta', NULL, 22000),
	(4, 'Megane', 'Renault', NULL, 25000),
	(5, '306', 'Peugeot', NULL, 29000);

