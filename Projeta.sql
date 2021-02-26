-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Nov-2019 às 02:54
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeta`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carga_horaria`
--

CREATE TABLE `carga_horaria` (
  `c_horaria` int(11) DEFAULT NULL,
  `cod_proj` int(11) DEFAULT NULL,
  `mat_emp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `carga_horaria`
--

INSERT INTO `carga_horaria` (`c_horaria`, `cod_proj`, `mat_emp`) VALUES
(251, 1, 11),
(125, 2, 111),
(59, 3, 101),
(95, 2, 209),
(125, 5, 129),
(985, 4, 149),
(259, 6, 254),
(354, 2, 165),
(30, 2, 101);

-- --------------------------------------------------------

--
-- Estrutura da tabela `depto`
--

CREATE TABLE `depto` (
  `cod_depto` int(11) NOT NULL,
  `endereco` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `depto`
--

INSERT INTO `depto` (`cod_depto`, `endereco`) VALUES
(123, 'RUA A, 25'),
(125, 'RUA C,125'),
(221, 'RUA B, 36'),
(232, 'RUA G,127'),
(257, 'RUA D,225'),
(854, 'RUA F,27'),
(859, 'RUA E,285');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empregado`
--

CREATE TABLE `empregado` (
  `mat_emp` int(11) NOT NULL,
  `nome_emp` varchar(40) DEFAULT NULL,
  `endereco` varchar(40) DEFAULT NULL,
  `rg` varchar(15) DEFAULT NULL,
  `cpf` int(15) DEFAULT NULL,
  `cod_depto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empregado`
--

INSERT INTO `empregado` (`mat_emp`, `nome_emp`, `endereco`, `rg`, `cpf`, `cod_depto`) VALUES
(11, 'JOAO', 'AV. CLIMERIO N. 45', '2781230', 126563987, 123),
(101, 'JOAQUIM', 'RUA DA PRAIA S/N', '1582650', 168572598, 123),
(103, 'ERICA', 'RUA FLORIANO, 982', '1236578', 367895128, 859),
(111, 'CARLOS', 'AV PAULISTA 1236', '1215191', 126874598, 221),
(129, 'MARIA', 'RUA PADRE CAFÉ, 125', '1800589', 125987720, 221),
(149, 'JOSE', 'RUA LOPES,154', '1245789', NULL, 859),
(165, 'PAULA', 'RUA SILVA JARDIM, 2', '1534648', 363524198, 232),
(167, 'JULIA', 'RUA JK, 1512', '1805874', 369857147, 854),
(185, 'MARCOS', 'RUA LOPES MENDES 152', '1115489', 364578518, 854),
(194, 'EDUARDO', 'RUA LOPES MENDES 578', '1789589', 195678968, 232),
(209, 'ANA', 'RUA LOPES MENDES 12', '1800589', 369857198, 221),
(254, 'PEDRO', 'RUA BATISTA, 222', '3601551', 124567898, 221),
(259, 'PEDRO', 'RUA BOM JARDIM,254', '1459758', 125478998, 221),
(296, 'PAULO', 'RUA RIO BRANCO, 1284', '1459758', 125478998, 221),
(952, 'ANDREIA', 'RUA MARECHAL, 112', '1254698', 325145698, 859);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empregado_dependente`
--

CREATE TABLE `empregado_dependente` (
  `dependente` int(11) NOT NULL,
  `nome_dep` varchar(40) DEFAULT NULL,
  `data_nasc` varchar(10) DEFAULT NULL,
  `tipo` varchar(15) DEFAULT NULL,
  `mat_emp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empregado_dependente`
--

INSERT INTO `empregado_dependente` (`dependente`, `nome_dep`, `data_nasc`, `tipo`, `mat_emp`) VALUES
(1, 'João Carlos', '04/05/1978', 'Cônjuge', 129),
(2, 'Marcos', '01/04/2009', 'Filho(a)', 11),
(3, 'Mariana', '08/09/2011', 'Filho(a)', 11),
(4, 'Matheus', '09/04/2006', 'Filho(a)', 103),
(5, 'João Carlos', '04/05/1978', 'Cônjuge', 129);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `cod_proj` int(11) NOT NULL,
  `descricao` varchar(20) DEFAULT NULL,
  `cod_depto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`cod_proj`, `descricao`, `cod_depto`) VALUES
(1, 'ENGENHARIA', 123),
(2, 'URBANISMO', 221),
(3, 'TRANSPORTE', 123),
(4, 'INFORMATICA', 854),
(5, 'TELEMARKETING', 859),
(6, 'REDES', 232);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carga_horaria`
--
ALTER TABLE `carga_horaria`
  ADD KEY `cod_proj` (`cod_proj`),
  ADD KEY `mat_emp` (`mat_emp`);

--
-- Índices para tabela `depto`
--
ALTER TABLE `depto`
  ADD PRIMARY KEY (`cod_depto`);

--
-- Índices para tabela `empregado`
--
ALTER TABLE `empregado`
  ADD PRIMARY KEY (`mat_emp`),
  ADD KEY `cod_depto` (`cod_depto`);

--
-- Índices para tabela `empregado_dependente`
--
ALTER TABLE `empregado_dependente`
  ADD PRIMARY KEY (`dependente`),
  ADD KEY `mat_emp` (`mat_emp`);

--
-- Índices para tabela `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`cod_proj`),
  ADD KEY `cod_depto` (`cod_depto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `depto`
--
ALTER TABLE `depto`
  MODIFY `cod_depto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=860;

--
-- AUTO_INCREMENT de tabela `empregado`
--
ALTER TABLE `empregado`
  MODIFY `mat_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=953;

--
-- AUTO_INCREMENT de tabela `empregado_dependente`
--
ALTER TABLE `empregado_dependente`
  MODIFY `dependente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `projeto`
--
ALTER TABLE `projeto`
  MODIFY `cod_proj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `carga_horaria`
--
ALTER TABLE `carga_horaria`
  ADD CONSTRAINT `carga_horaria_ibfk_1` FOREIGN KEY (`cod_proj`) REFERENCES `projeto` (`cod_proj`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carga_horaria_ibfk_2` FOREIGN KEY (`mat_emp`) REFERENCES `empregado` (`mat_emp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `empregado`
--
ALTER TABLE `empregado`
  ADD CONSTRAINT `empregado_ibfk_1` FOREIGN KEY (`cod_depto`) REFERENCES `depto` (`cod_depto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `empregado_dependente`
--
ALTER TABLE `empregado_dependente`
  ADD CONSTRAINT `empregado_dependente_ibfk_1` FOREIGN KEY (`mat_emp`) REFERENCES `empregado` (`mat_emp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `projeto`
--
ALTER TABLE `projeto`
  ADD CONSTRAINT `projeto_ibfk_1` FOREIGN KEY (`cod_depto`) REFERENCES `depto` (`cod_depto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
