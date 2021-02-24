SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `menu` (
                        `id` int(11) NOT NULL,
                        `name` varchar(30) DEFAULT NULL,
                        `size` char(1) DEFAULT NULL,
                        `price` int(11) DEFAULT NULL,
                        `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `menu` (`id`, `name`, `size`, `price`, `image`) VALUES
(1, 'chocolate', 'L', 50000, '<img src=\"1.png\" height=\"250\" width=\"250\"/>'),
(2, 'black coffee', 'M', 40000, '<img src=\"2.png\" height=\"250\" width=\"250\"/>'),
(3, 'creamy halzenut', 'M', 45000, '<img src=\"3.png\" height=\"250\" width=\"250\"/>'),
(4, 'expresso almond', 'L', 55000, '<img src=\"4.png\" height=\"250\" width=\"250\"/>'),
(5, 'black tea', 'M', 50000, '<img src=\"5.png\" height=\"250\" width=\"250\"/>');

ALTER TABLE `menu`
    ADD PRIMARY KEY (`id`);
COMMIT;
