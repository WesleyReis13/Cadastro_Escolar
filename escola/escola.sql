-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Ago-2023 às 17:15
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `alunoID` int(11) NOT NULL,
  `nomecompleto` varchar(30) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `idade` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`alunoID`, `nomecompleto`, `endereco`, `idade`) VALUES
(16, 'João', 'Rua B, Numero 5', '10'),
(17, 'Pedro', 'Rua C, Numero 13', '9');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `professorID` int(11) NOT NULL,
  `nomecompleto` varchar(30) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `materia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`professorID`, `nomecompleto`, `endereco`, `materia`) VALUES
(22, 'Sandra', 'Rua Z, numero 10', 'Matematica'),
(23, 'Maria', 'Rua H, Numero 13', 'Portugues');

-- --------------------------------------------------------

--
-- Estrutura da tabela `respondaveis`
--

CREATE TABLE `respondaveis` (
  `responsavelID` int(11) NOT NULL,
  `nomecompleto` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `datanascimento` date NOT NULL,
  `estado` varchar(15) NOT NULL,
  `endereco` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `respondaveis`
--

INSERT INTO `respondaveis` (`responsavelID`, `nomecompleto`, `email`, `telefone`, `cpf`, `datanascimento`, `estado`, `endereco`) VALUES
(7, 'Jose', 'jose@gmail.com', '222222222', '333333333', '1960-02-01', 'Minas Gerais', 'Rua J, Numero 22');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`alunoID`);

--
-- Índices para tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`professorID`);

--
-- Índices para tabela `respondaveis`
--
ALTER TABLE `respondaveis`
  ADD PRIMARY KEY (`responsavelID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `alunoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `professorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `respondaveis`
--
ALTER TABLE `respondaveis`
  MODIFY `responsavelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
