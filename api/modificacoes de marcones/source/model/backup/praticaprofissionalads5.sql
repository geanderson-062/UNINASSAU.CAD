-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Abr-2022 às 20:06
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `praticaprofissionalads5`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastra_visitas`
--

CREATE TABLE `cadastra_visitas` (
  `usuario` varchar(120) NOT NULL,
  `setor` varchar(120) NOT NULL,
  `escola` varchar(120) NOT NULL,
  `alunos` varchar(120) NOT NULL,
  `conteudo` varchar(120) NOT NULL,
  `professor` varchar(120) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_adm`
--

CREATE TABLE `login_adm` (
  `usuario_id` int(11) NOT NULL,
  `cpf` varchar(32) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login_adm`
--

INSERT INTO `login_adm` (`usuario_id`, `cpf`, `senha`) VALUES
(1, '123456', 'c33367701511b4f6020ec61ded352059');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_coordenador`
--

CREATE TABLE `login_coordenador` (
  `usuario_id` int(11) NOT NULL,
  `cpf` varchar(32) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login_coordenador`
--

INSERT INTO `login_coordenador` (`usuario_id`, `cpf`, `senha`) VALUES
(1, '123456', 'f1cd367f44fe5f4f7f2c9e8a3abf744b');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `login_adm`
--
ALTER TABLE `login_adm`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Índices para tabela `login_coordenador`
--
ALTER TABLE `login_coordenador`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `login_adm`
--
ALTER TABLE `login_adm`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `login_coordenador`
--
ALTER TABLE `login_coordenador`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
