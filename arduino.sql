

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `gps` (
  `geox` double NOT NULL COMMENT 'eixo X',
  `geoy` double NOT NULL COMMENT 'eixo Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='eixo X e Y';

--
-- Extraindo dados da tabela `gps`
--

INSERT INTO `gps` (`geox`, `geoy`) VALUES
(-25.50762891328653, -49.28670807759453),
(-25.50762891328653, -31.28670807759453),

CREATE TABLE `oximetro` (
  `oxigenacao` double NOT NULL,
  `bp` int(11) NOT NULL COMMENT 'batimentos',
  `bpm` int(11) NOT NULL COMMENT 'batimento por minuto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `oximetro` (`oxigenacao`, `bp`, `bpm`) VALUES
(0, 0, 0);


CREATE TABLE `rtc` (
  `tempo` time NOT NULL,
  `dia` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='tempo';



INSERT INTO `rtc` (`tempo`, `dia`) VALUES
('20:20:00', NULL),
('19:40:21', '2022-10-01');
COMMIT;

