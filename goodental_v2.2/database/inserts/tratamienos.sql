-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.25-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla sitesmar_goodental.treatments
CREATE TABLE IF NOT EXISTS `treatments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ACTIVE','CANCELED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sitesmar_goodental.treatments: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `treatments` DISABLE KEYS */;
INSERT INTO `treatments` (`id`, `name`, `amount`, `description`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Odontología General', 2000.00, 'La odontología genera y restauradora consiste en el diagnóstico de todos los problemas relacionados con la salud dental.', 'ACTIVE', '2018-04-12 15:53:56', '2018-04-12 15:53:58'),
	(2, 'Periodoncia', 2500.00, 'El tratamiento de todas las encías.', 'ACTIVE', '2018-04-12 21:42:18', '2018-04-12 21:42:18'),
	(3, 'Endodoncia', 3700.00, 'Consiste en la extirpación de paquete del nervio.', 'ACTIVE', '2018-04-12 21:44:00', '2018-04-13 04:30:23'),
	(4, 'Endodoncia', 3000.00, 'Consiste en la extirpación de paquete del nervio.', 'ACTIVE', '2018-04-12 21:44:55', '2018-04-12 21:44:55'),
	(5, 'Prótesis Dental', 2570.00, 'Son dientes artificiales que se emplean cuando se ha perdido una, varias o todas las piezas dentales Las prótesis dentales pueden ser: fijas, removibles o con implantes.', 'ACTIVE', '2018-04-13 03:13:13', '2018-04-13 04:28:07');
/*!40000 ALTER TABLE `treatments` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
