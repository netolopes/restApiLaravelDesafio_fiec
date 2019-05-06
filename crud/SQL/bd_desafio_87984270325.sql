-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 05-Maio-2019 às 23:48
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_desafio_87984270325`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `dataNasc` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpf`, `dataNasc`, `created_at`, `update_at`) VALUES
(1, 'Carlos Drummond de Andrade', 8550724076, '1980-05-01', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Ana Maria Machado', 12833464002, '1968-12-12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Martha Medeiros', 92660260001, '1955-01-22', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Marcelino Freire', 6846431039, '1939-05-23', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'OSMARINA Maria Goncalves', 12912315018, '1999-03-11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'MARIA Veronica Stigger', 56183310042, '2005-05-15', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Luisa Geisler', 69617840030, '2009-05-05', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Raphael Montes', 4464619037, '1995-05-18', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Daniel Galera', 27388594027, '2010-05-28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Ricardo Terto', 29521669004, '1949-05-09', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Nicholas Sparks', 67120022067, '1971-05-21', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Agatha Christie', 41555399002, '1905-05-28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Fernando Pessoa', 60811830098, '1962-05-13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'MARIA Austen', 22100163043, '1944-05-08', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Vinicius de Moraes', 87362695063, '1988-05-31', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'JORGE AMADO', 5136183098, '1973-07-17', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'GREGORIO DE MATOS', 6247482000, '1912-05-13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'BASILIO DA GAMA', 50933707037, '1989-05-14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'JOSE DE ALENCAR', 52155569033, '2005-07-25', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'EUCLIDES DA CUNHA', 99052442045, '2001-05-14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'AUGUSTO DOS ANJOS', 78853047011, '2002-10-23', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'MANUEL BANDEIRA', 27721548071, '2009-05-20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'EDSON DA SILVA GOMES', 41820369056, '1899-12-18', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'INGRIDE MARIA DAS FLORES', 96545522051, '1888-05-22', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'JOAO DA SILVA COSTA', 84895131099, '1980-05-01', '2019-05-05 18:47:57', '2019-05-05 18:47:57'),
(33, 'DANIAL AGUIAR', 84895131099, '1975-07-29', '2019-05-05 18:49:49', '2019-05-05 18:49:49'),
(34, 'SUSANA PEREIRA', 84895131099, '1975-07-29', '2019-05-05 18:50:42', '2019-05-05 18:50:42'),
(35, 'LUCIA DAVILA', 64645645, '2000-05-14', '2019-05-05 23:29:05', '2019-05-05 23:29:05'),
(36, 'MARLU GOMES', 8978978979, '1977-05-21', '2019-05-05 23:29:05', '2019-05-05 23:29:05'),
(37, 'REGIANALDO DANTAS', 565454654, '1949-05-22', '2019-05-05 23:29:58', '2019-05-05 23:29:58'),
(38, 'CARLOS DAVI', 54654654, '1919-05-28', '2019-05-05 23:29:58', '2019-05-05 23:29:58'),
(39, 'rodrigo maia', 5464654564, '1975-07-29', '2019-05-05 23:39:23', '2019-05-05 23:39:23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

DROP TABLE IF EXISTS `endereco`;
CREATE TABLE IF NOT EXISTS `endereco` (
  `idEnd` int(11) NOT NULL AUTO_INCREMENT,
  `cep` varchar(15) NOT NULL,
  `logradouro` varchar(150) NOT NULL,
  `complemento` varchar(150) NOT NULL,
  `localidade` varchar(150) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `unidade` varchar(100) DEFAULT NULL,
  `ibge` varchar(100) DEFAULT NULL,
  `gia` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idEnd`),
  KEY `cliente` (`cliente`),
  KEY `tipo` (`tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`idEnd`, `cep`, `logradouro`, `complemento`, `localidade`, `uf`, `tipo`, `cliente`, `unidade`, `ibge`, `gia`, `bairro`) VALUES
(1, '60711031', 'Travessa Menezes Pimentel', '24 - Centro', 'FORTALEZA', 'CE', 1, 18, NULL, NULL, NULL, NULL),
(2, '60711032', 'Rua Getulio Vargas', '207 - Centro', 'FORTALEZA', 'CE', 1, 18, NULL, NULL, NULL, NULL),
(5, '60711035', 'Rua Coronel Alexandrino', '564 - Centro', 'FORTALEZA', 'CE', 1, 27, NULL, NULL, NULL, NULL),
(6, '60711036', 'RUA DAS FLORESS', '55 CENTRO', 'FORTALEZA', 'CE', 1, 27, NULL, NULL, NULL, NULL),
(7, '60711038', 'AV DAS OLIVEIRAS', '88 PARANGABA', 'FORTALEZA', 'CE', 1, 24, NULL, NULL, NULL, NULL),
(8, '60711039', 'AV DAS PALMEIRAS', '12 MONTESE', 'FORTALEZA', 'CE', 1, 24, NULL, NULL, NULL, NULL),
(15, '60711055', 'TRAVESSA SOL NASCENTE', 'SEM NUMERO', 'FORTALEZA', 'CE', 1, 15, NULL, NULL, NULL, NULL),
(16, '60711056', 'RUA DAS ROSAS', 'NUM 500', 'FORTALEZA', 'CE', 1, 15, NULL, NULL, NULL, NULL),
(17, '60711060', 'Rua 44, 61 ', 'Conjunto C Jereissati I II', 'FORTALEZA', 'CE', 1, 29, NULL, NULL, NULL, NULL),
(18, '60711061', 'Rua Poeta Pedro Cesario', '176 - Centro', 'FORTALEZA', 'CE', 1, 29, NULL, NULL, NULL, NULL),
(19, '60711070', 'Rua Dos Tabajaras', '543 - Praia de Iracema', 'FORTALEZA', 'CE', 2, 26, NULL, NULL, NULL, NULL),
(20, '60711072', 'Rua Getulio Vargas', '207 - Centro', 'FORTALEZA', 'CE', 2, 26, NULL, NULL, NULL, NULL),
(21, '60711080', 'RUA FORMOSA', 'NUM 500', 'FORTALEZA', 'CE', 1, 19, NULL, NULL, NULL, NULL),
(22, '60711088', 'AV ENGENHEIRO JR', 'NUM 100', 'FORTALEZA', 'CE', 1, 19, NULL, NULL, NULL, NULL),
(25, '60711030', 'AV MARIA MAIA', 'NUM 70', 'FORTALEZA', 'CE', 1, 23, NULL, NULL, NULL, NULL),
(26, '60700044', 'RUA SENADOR POMPEU', 'NUM 900', 'FORTALEZA', 'CE', 1, 23, NULL, NULL, NULL, NULL),
(27, '60500041', 'RUA DAS ALAMEIDAS', 'N 55', 'FORTALEZA', 'CE', 2, 30, NULL, NULL, NULL, NULL),
(28, '60720035', 'RUA CARMELITAS', 'N 70', 'FORTALEZA', 'CE', 2, 30, NULL, NULL, NULL, NULL),
(29, '60710066', 'AV DESEMBARGADOR MOREIRA', 'NUM 400', 'FORTALEZA', 'CE', 1, 20, NULL, NULL, NULL, NULL),
(30, '60811025', 'AV SENADOR OLIVEIRA', 'NUMERO 700', 'FORTALEZA', 'CE', 1, 20, NULL, NULL, NULL, NULL),
(31, '60711050', 'RUA TAMBAU', 'SEM NUMERO', 'FORTALEZA', 'CE', 1, 23, NULL, NULL, NULL, NULL),
(32, '60711030', 'RUA DOS ANJOS', 'NUM 10', 'FORTALEZA', 'CE', 1, 12, NULL, NULL, NULL, NULL),
(33, '60711034', 'RUA SOROCABA', 'NUM 100', 'FORTALEZA', 'CE', 1, 12, NULL, NULL, NULL, NULL),
(36, '60711060', 'RUA TREES CORACOES', 'NUM 556', 'FORTALEZA', 'CE', 1, 17, NULL, NULL, NULL, NULL),
(37, '60700044', 'AV GENERAL BRUNO', 'NUM 88', 'FORTALEZA', 'CE', 1, 17, NULL, NULL, NULL, NULL),
(40, '60711030', 'AV RAQUEL DIAS', 'NUM 7', 'FORTALEZA', 'CE', 2, 14, NULL, NULL, NULL, NULL),
(41, '60720035', 'RUA SENADOR ALENCAR', 'NUM 10', 'FORTALEZA', 'CE', 2, 14, NULL, NULL, NULL, NULL),
(42, '60710066', 'RUA JOSE DE OLIVEIRA', 'NUM 400', 'FORTALEZA', 'CE', 1, 16, NULL, NULL, NULL, NULL),
(43, '60720036', 'AV TRAJANO ALVES', 'NUM 56', 'FORTALEZA', 'CE', 1, 16, NULL, NULL, NULL, NULL),
(46, '60500041', 'AV DO IMPERADOR', 'NUM 1000', 'FORTALEZA', 'CE', 1, 21, NULL, NULL, NULL, NULL),
(47, '60711072', 'RUA RUI BARBOSA', 'NUM 75', 'FORTALEZA', 'CE', 1, 21, NULL, NULL, NULL, NULL),
(48, '60711055', 'RUA PASCOAL', 'NUM 10', 'FORTALEZA', 'CE', 1, 13, NULL, NULL, NULL, NULL),
(49, '60711061', 'RUA DO ROSARIO', 'NUM 79', 'FORTALEZA', 'CE', 1, 13, NULL, NULL, NULL, NULL),
(56, '60500041', 'RUA TRINDADE', 'NUM 77', 'FORTALEZA', 'CE', 1, 22, NULL, NULL, NULL, NULL),
(57, '60711088', 'RUA AMADEUS COSTA', 'NUM 55', 'FORTALEZA', 'CE', 1, 22, NULL, NULL, NULL, NULL),
(58, '60711055', 'AV SOUZA LIMA', 'NUM 733', 'FORTALEZA', 'CE', 1, 25, NULL, NULL, NULL, NULL),
(59, '60711034', 'RUA ROSA CRUZ', 'NUM 122', 'FORTALEZA', 'CE', 1, 25, NULL, NULL, NULL, NULL),
(60, '60710066', 'RUA DAS PALMEIRAS', 'NUM 100', 'FORTALEZA', 'CE', 1, 28, NULL, NULL, NULL, NULL),
(61, '60700044', 'RUA DOS SANTOS', 'NUM 500', 'FORTALEZA', 'CE', 1, 28, NULL, NULL, NULL, NULL),
(72, '60731-532', 'Rua Três Marias', '', 'Fortaleza', 'CE', 1, 1, '', '2304400', '', 'Bom Jardim'),
(73, '63100-970', 'Rua Tristão Gonçalves', '399', 'Crato', 'CE', 1, 1, '', '2304202', '', 'Centro'),
(74, '60035-970', 'Avenida Duque de Caxias', '1063', 'Fortaleza', 'CE', 1, 7, '', '2304400', '', 'Centro'),
(75, '63500-970', 'Rua Doutor João Pessoa', '811', 'Iguatu', 'CE', 1, 7, '', '2305506', '', 'Centro'),
(76, '60840-970', 'Rua Joaquim Felício', '266', 'Fortaleza', 'CE', 2, 9, '', '2304400', '', 'Messejana'),
(77, '63010-970', 'Rua da Conceição', '354', 'Juazeiro do Norte', 'CE', 2, 9, '', '2307304', '', 'Centro'),
(78, '60721-970', 'Avenida João Pessoa', '7189', 'Fortaleza', 'CE', 2, 10, '', '2304400', '', 'Parangaba'),
(79, '60325-970', 'Avenida Bezerra de Menezes', '479', 'Fortaleza', 'CE', 2, 10, '', '2304400', '', 'Farias Brito'),
(80, '60822-970', 'Avenida Oliveira Paiva', '2800', 'Fortaleza', 'CE', 2, 11, '', '2304400', '', 'Cambeba'),
(81, '60410-970', 'Avenida Professor Gomes de Matos', '798', 'Fortaleza', 'CE', 2, 11, '', '2304400', '', 'Montese');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_05_03_124742_create_cliente_table', 0),
(2, '2019_05_03_124742_create_endereco_table', 0),
(3, '2019_05_03_124742_create_tipoendereco_table', 0),
(4, '2019_05_03_124743_add_foreign_keys_to_endereco_table', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoendereco`
--

DROP TABLE IF EXISTS `tipoendereco`;
CREATE TABLE IF NOT EXISTS `tipoendereco` (
  `idTipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(15) NOT NULL,
  PRIMARY KEY (`idTipo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipoendereco`
--

INSERT INTO `tipoendereco` (`idTipo`, `tipo`) VALUES
(1, 'RESIDENCIAL'),
(2, 'COMERCIAL');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `cliente_id_fk` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipoendereco` (`idTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
