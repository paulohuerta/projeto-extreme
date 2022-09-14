-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Ago-2022 às 04:42
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
-- Banco de dados: `extremeinfoservice`
--

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
  `outros` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastrotecnico`
--

INSERT INTO `cadastrotecnico` (`id`, `nome`, `email`, `telefone`, `sexo`, `data_nasc`, `endereco`, `cidade`, `estado`, `ponto_fixo`, `acesso_remoto`, `domicilio`, `formatacao`, `serv_plmae_pc`, `serv_plmae_not`, `venda_ac`, `inst_cam`, `inst_alarm`, `manut_monitor`, `manut_impressora`, `outros`) VALUES
(1, 'teste1', 'teste@teste', '123456', 'masculino', '2022-07-12', 'amazonas', 'teste1 123', 'manaus', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', ''),
(2, 'teste2', 'adsf@sdadsf.ad', '4567876543', 'feminino', '2022-03-04', 'av professor paulo graça', 'manaus', 'Amazonas', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'DKAJF LKDASJ FLKÇDSAJ'),
(3, 'TESTE3', 'teste3@gmail.com', '92994561314', 'masculino', '2022-07-06', 'adsf adsfa ', 'ads fsad fs', 'ads fdsa fa', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'akdsj fçadskf klçasj dfkl'),
(4, 'TESTE3', 'teste3@gmail.com', '92994561314', 'masculino', '2022-07-06', 'adsf adsfa ', 'ads fsad fs', 'ads fdsa fa', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'akdsj fçadskf klçasj dfkl'),
(5, 'teste2', 'adsf@sdadsf.ad', '4567876543', 'feminino', '2022-03-04', 'av professor paulo graça', 'manaus', 'Amazonas', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'DKAJF LKDASJ FLKÇDSAJ'),
(6, 'TESTE3', 'teste3@gmail.com', '92994561314', 'masculino', '2022-07-06', 'adsf adsfa ', 'ads fsad fs', 'ads fdsa fa', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'akdsj fçadskf klçasj dfkl'),
(7, 'teste 4', 'dsaklf @kdsafj .com', '234567', 'masculino', '2022-07-08', 'ads fdsaf das', 'ads fads fsda', 'ads fdasf sda', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'das fdas fas'),
(8, 'asdf dsfsa f', 'ds fdgfdsg', 'dsf gdsfg dsf', 'feminino', '2022-07-14', 'fdsg ds ', ' fdsg fds gs', 'sdf gfdsg ds', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'sdf gdsg dsfg ds'),
(9, 'dsfsad fads', 'dsa fdas f', 'ads fdas fdas', 'feminino', '2022-07-15', 'ads fdsaf', 'ads fdsa', 'saadsf sda', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'ads fasf'),
(10, 'TESTE10', 'ASD FDASF SADF ', 'ASD FADSF DSAF ', 'feminino', '2022-07-20', 'ASDF DSA', 'ADS FDAS FSA', ' ADSF AS', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'SAD FDSA F'),
(11, 'd fhf hgdh ', 'gh gfh h ', '4567', 'feminino', '2022-07-07', 'd gfdsg fds', 'dsf gdsf gdsf', ' sdfgdsf gsd', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', ' fghjgf jgh '),
(12, 's gfds gdsfg dsf g', 'sfd gdsfg sdf', '56787654', 'masculino', '2022-07-19', 's dfgsdg ', ' sdf gdsfg ', 'sdsf gdsfg sd', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'nfdskl gfdk gn'),
(13, 'sfd g dsf g', 'sdf gdsf g', 'dsf g dsf g', 'feminino', '2022-07-14', 'fds gfds g', ' fdsg fdsgdsf ', 'fds gdfsg dsf ', '', 'on', 'on', '', '', 'on', '', '', 'on', '', 'on', 'das fdsa fdas f'),
(14, 'das fdasf', 'fd gdsf gds d', '565325342', 'feminino', '2022-07-12', ' dasfdasf', 'adsf dasfs', 'adsf sadf ', '', '', 'on', '', '', '', '', '', '', 'on', '', 'dsa fas'),
(15, 'das fdasf', 'fd gdsf gds d', '565325342', 'feminino', '2022-07-12', ' dasfdasf', 'adsf dasfs', 'adsf sadf ', '', '', 'on', '', '', '', '', '', '', 'on', '', 'dsa fas'),
(16, 'das fdasf', 'fd gdsf gds d', '565325342', 'feminino', '2022-07-12', ' dasfdasf', 'adsf dasfs', 'adsf sadf ', '', '', 'on', '', '', '', '', '', '', 'on', '', 'dsa fas'),
(17, 'testes101', 'ads fads ', '56765434', 'feminino', '2022-07-14', 'trey erty', 'ry teyey ', 'tey try tryrey', '', 'on', 'on', '', '', '', '', '', '', 'on', '', ' fd  hfd'),
(18, 'paulo huertas abc', 'poadsp@k.sodaf jpo', '65623132131', 'masculino', '2022-07-05', 'adsf das', ' fsdaf sda', 'f dsaf das', '', 'on', '', '', '', '', '', 'on', '', 'on', '', 'das fsad'),
(19, 'paulo huertas abc123', 'asdfasdf@dsafasdf', '65623132131', 'masculino', '2022-07-05', 'adsf das', ' fsdaf sda', 'f dsaf das', '', 'on', '', '', '', '', '', 'on', '', 'on', '', 'das fsad'),
(20, 'PAULO HUERTA', 'paulothiagoth@gmail.com', '92993845613', 'masculino', '1985-03-23', 'AV PROFESSOR PAULO GRAÇA 1302', 'MANAUS', 'AMAZONAS', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'ASDF'),
(21, 'paulo huerta 21', 'paulothiagoth@gmail.com', '92993845613', 'masculino', '2022-08-03', 'AV PROFESSOR PAULO GRAÇA 1302', 'manaus', 'amazonas', 'on', 'on', '', 'on', 'on', 'on', '', '', '', '', '', 'dasf dsf'),
(22, 'paulo huerta 21', 'paulothiagoth@gmail.com', '92993845613', 'masculino', '2022-08-03', 'AV PROFESSOR PAULO GRAÇA 1302', 'manaus', 'amazonas', 'on', 'on', '', 'on', 'on', 'on', '', '', '', '', '', 'dasf dsf'),
(23, 'PAULO HUERTA', 'paulothiagoth@gmail.com', '92993845613', 'masculino', '2022-08-02', 'AV PROFESSOR PAULO GRAÇA 1302', 'MANAUS', 'AMAZONAS', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'fdhfh'),
(24, 'PAULO HUERTA', 'paulothiagoth@gmail.com', '92993845613', 'masculino', '2022-08-02', 'AV PROFESSOR PAULO GRAÇA 1302', 'MANAUS', 'AMAZONAS', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'fdhfh'),
(25, 'teste25', 'fjgj@teste', 'hfdhdf', 'feminino', '2022-08-09', 'AV PROFESSOR PAULO GRAÇA 1302', 'MANAUS', 'AMAZONAS', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'teste');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastrotecnico`
--
ALTER TABLE `cadastrotecnico`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastrotecnico`
--
ALTER TABLE `cadastrotecnico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
