-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Ago-2021 às 14:28
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formulario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `form`
--

CREATE TABLE `form` (
  `codigo` int(2) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nascimento` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `filhos` int(3) NOT NULL,
  `a` varchar(100) NOT NULL,
  `salario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `form`
--

INSERT INTO `form` (`codigo`, `nome`, `nascimento`, `email`, `filhos`, `a`, `salario`) VALUES
(1, 'Rennan Guilherme Dos Santos Lima', '0000-00-00', 'rennan.guilherme63@gmail.com', 1, 'R$3500', ''),
(2, 'Rennan Guilherme Dos Santos Lima', '0000-00-00', 'rennan.guilherme63@gmail.com', 1, 'R$3500', ''),
(3, 'Rennan Guilherme Dos Santos Lima', '0000-00-00', 'rennan.guilherme63@gmail.com', 1, 'R$3500', ''),
(4, 'Rennan Guilherme Dos Santos Lima', '0000-00-00', 'rennan.guilherme63@gmail.com', 1, 'R$3500', ''),
(5, 'Rennan Guilherme Dos Santos Lima', '0000-00-00', 'rennan.guilherme63@gmail.com', 2, 'R$3500', ''),
(6, 'Rennan Guilherme Dos Santos Lima', '0000-00-00', 'rennan.guilherme63@gmail.com', 2, 'R$3500', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `form`
--
ALTER TABLE `form`
  MODIFY `codigo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
