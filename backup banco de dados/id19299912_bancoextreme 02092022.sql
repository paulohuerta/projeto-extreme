-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 02-Set-2022 às 04:27
-- Versão do servidor: 10.5.16-MariaDB
-- versão do PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id19299912_bancoextreme`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroclientefree`
--

CREATE TABLE `cadastroclientefree` (
  `id` int(11) NOT NULL,
  `nome` char(45) NOT NULL,
  `email` char(45) NOT NULL,
  `telefone` int(11) NOT NULL,
  `data_ag` date NOT NULL,
  `hora_ag` time NOT NULL,
  `cidade` char(45) NOT NULL,
  `estado` char(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastroclientefree`
--

INSERT INTO `cadastroclientefree` (`id`, `nome`, `email`, `telefone`, `data_ag`, `hora_ag`, `cidade`, `estado`) VALUES
(1, 'paulo123', 'paulo@gmail.com', 123456, '2022-05-25', '15:55:00', 'manaus', 'am');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrotecnico`
--

CREATE TABLE `cadastrotecnico` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(110) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `data_nasc` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `ponto_fixo` varchar(45) DEFAULT NULL,
  `acesso_remoto` varchar(45) DEFAULT NULL,
  `domicilio` varchar(45) DEFAULT NULL,
  `formatacao` varchar(45) DEFAULT NULL,
  `serv_plmae_pc` varchar(45) DEFAULT NULL,
  `serv_plmae_not` varchar(45) DEFAULT NULL,
  `venda_ac` varchar(45) DEFAULT NULL,
  `inst_cam` varchar(45) DEFAULT NULL,
  `inst_alarm` varchar(45) DEFAULT NULL,
  `manut_monitor` varchar(45) DEFAULT NULL,
  `manut_impressora` varchar(45) DEFAULT NULL,
  `manut_eletro` varchar(10) DEFAULT NULL,
  `outros` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastrotecnico`
--

INSERT INTO `cadastrotecnico` (`id`, `nome`, `email`, `telefone`, `sexo`, `data_nasc`, `endereco`, `cidade`, `estado`, `ponto_fixo`, `acesso_remoto`, `domicilio`, `formatacao`, `serv_plmae_pc`, `serv_plmae_not`, `venda_ac`, `inst_cam`, `inst_alarm`, `manut_monitor`, `manut_impressora`, `manut_eletro`, `outros`) VALUES
(37, 'Yentl Micael ferreira Bulcão ', 'yentl.micael@hotmail.com', '92993383100', 'masculino', '1996-08-08', 'Rua Charlotte\"75', 'Manaus', 'Amazononas', '', 'on', 'on', 'on', '', '', '', 'on', 'on', 'on', 'on', NULL, ''),
(38, 'HELLITON SOCORRO DE FREITAS', 'hf73h@gmail.com', '92988483188', 'masculino', '1973-10-17', 'RUA 51, NUERO 22 BAIRRO CIDADE NOVA 2', 'MANAUS', 'AMAZONAS', 'on', '', '', '', '', '', '', '', '', '', '', NULL, 'MANUTENÇÃO DE TV E MICROONDAS'),
(59, 'ROBERTO TEIXEIRA HUERTA', 'rthservico@gmail.com', '92991634363', 'masculino', '1983-04-09', 'Rua Murutinga do Sul, 85 - Zumbi dos Palmares', 'Manaus', 'AM', 'on', 'on', 'on', 'on', '', '', 'on', '', '', '', '', '', 'Venda de Software para Gestão Comercial'),
(65, 'paulo 01092022', 'dsaf@sdadsf.com', '21321321', 'masculino', '2022-09-07', 'ads dadsf ', 'asd fsdaf', 'dasf das', 'on', 'on', '', '', '', '', '', 'on', '', '', '', 'on', ''),
(66, 'paulo', 'paulo@gamil.com', '21321321', 'masculino', '2022-09-21', 'ads dadsf', 'manaus', 'am', 'on', 'on', '', '', '', '', '', '', '', '', '', 'on', ''),
(67, 'paulo 01092022', 'paulo@gamil.com', '21321321', '', '', '', 'manaus', 'am', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(68, 'paulo', 'paulo@gamil.com', '21321321', 'masculino', '2022-09-14', 'ads dadsf', 'manaus', 'am', '', '', 'on', '', '', '', '', '', '', 'on', '', '', ''),
(69, 'paulo', 'paulo@gamil.com', '21321321', 'masculino', '2022-09-14', 'ads dadsf', 'manaus', 'am', '', '', 'on', '', '', '', '', '', '', 'on', '', '', ''),
(70, 'paulo', 'paulo@gamil.com', '21321321', 'masculino', '2022-09-14', 'ads dadsf', 'manaus', 'am', '', '', 'on', '', '', '', '', '', '', 'on', '', '', ''),
(71, 'paulo', 'paulo@gamil.com', '926666', 'masculino', '2022-09-22', 'ads dadsf', 'sadfasd', 'am', '', 'on', '', '', '', '', '', '', '', '', '', 'on', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastroclientefree`
--
ALTER TABLE `cadastroclientefree`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cadastrotecnico`
--
ALTER TABLE `cadastrotecnico`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastroclientefree`
--
ALTER TABLE `cadastroclientefree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cadastrotecnico`
--
ALTER TABLE `cadastrotecnico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
