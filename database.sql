
# Character set
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

#
# Table schema for MySQL
#
CREATE TABLE urls (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`url` text NOT NULL,
    created DATETIME NOT NULL,
    accessed DATETIME,
    hits INT UNSIGNED NOT NULL DEFAULT 0,
    PRIMARY KEY (id)
)
