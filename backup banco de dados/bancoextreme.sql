-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Set-2022 às 19:22
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
-- Banco de dados: `extremebanco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroclientefree`
--

CREATE TABLE `cadastroclientefree` (
  `idcadastroclientefree` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` int(11) NOT NULL,
  `data_ag` date NOT NULL,
  `hora_ag` time NOT NULL,
  `cidade` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrotecnico`
--

CREATE TABLE `cadastrotecnico` (
  `idcadastrotecnico` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` int(11) NOT NULL,
  `sexo` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nasc` date NOT NULL,
  `endereco` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ponto_fixo` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acesso_remoto` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domicilio` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `formatacao` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serv_plmae_pc` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serv_plmae_not` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `venda_ac` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inst_cam` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inst_alarm` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manut_monitor` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manut_impressora` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manut_eletro` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outros` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastroclientefree`
--
ALTER TABLE `cadastroclientefree`
  ADD PRIMARY KEY (`idcadastroclientefree`);

--
-- Índices para tabela `cadastrotecnico`
--
ALTER TABLE `cadastrotecnico`
  ADD PRIMARY KEY (`idcadastrotecnico`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastroclientefree`
--
ALTER TABLE `cadastroclientefree`
  MODIFY `idcadastroclientefree` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cadastrotecnico`
--
ALTER TABLE `cadastrotecnico`
  MODIFY `idcadastrotecnico` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
