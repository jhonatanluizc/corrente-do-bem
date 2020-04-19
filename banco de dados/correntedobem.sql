-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 19/04/2020 às 04:40
-- Versão do servidor: 10.4.11-MariaDB
-- Versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `correntedobem`
--
CREATE DATABASE IF NOT EXISTS `correntedobem` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `correntedobem`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `beneficiarios`
--

CREATE TABLE `beneficiarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `datanascimento` varchar(25) NOT NULL,
  `cpf` varchar(25) NOT NULL,
  `nomemae` varchar(255) NOT NULL,
  `telefone` varchar(25) NOT NULL,
  `endereco` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `doadores`
--

CREATE TABLE `doadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data` varchar(25) NOT NULL,
  `endereco` varchar(500) NOT NULL,
  `telefone` varchar(25) NOT NULL,
  `descricaoitens` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `beneficiarios`
--
ALTER TABLE `beneficiarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `doadores`
--
ALTER TABLE `doadores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `beneficiarios`
--
ALTER TABLE `beneficiarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `doadores`
--
ALTER TABLE `doadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
