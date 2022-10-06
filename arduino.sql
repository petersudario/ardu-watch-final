-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Out-2022 às 01:38
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `arduino`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `gps`
--

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `oximetro`
--

CREATE TABLE `oximetro` (
  `oxigenacao` double NOT NULL,
  `bp` int(11) NOT NULL COMMENT 'batimentos',
  `bpm` int(11) NOT NULL COMMENT 'batimento por minuto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `oximetro`
--

INSERT INTO `oximetro` (`oxigenacao`, `bp`, `bpm`) VALUES
(0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `rtc`
--

CREATE TABLE `rtc` (
  `tempo` time NOT NULL,
  `dia` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='tempo';

--
-- Extraindo dados da tabela `rtc`
--

INSERT INTO `rtc` (`tempo`, `dia`) VALUES
('20:20:00', NULL),
('19:40:21', '2022-10-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
