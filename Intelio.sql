-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 22/07/2017 às 20:24
-- Versão do servidor: 5.7.18-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Intelio`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `estoque`
--

CREATE TABLE `estoque` (
  `id` int(20) NOT NULL,
  `Nome_Estoque` varchar(255) NOT NULL,
  `Preco_Cliente` varchar(255) NOT NULL,
  `Quantidade_Estoque` int(20) NOT NULL,
  `Categoria_Estoque` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(20) NOT NULL,
  `id_revendedor` int(20) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Preco` varchar(255) NOT NULL,
  `Quantidade` int(20) NOT NULL,
  `Categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `revendedor`
--

CREATE TABLE `revendedor` (
  `id` int(15) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Empresa` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `revendedor`
--

INSERT INTO `revendedor` (`id`, `Email`, `Empresa`, `Senha`) VALUES
(1, 'matheus@matheus.com', 'Ambev', '12345'),
(2, 'wanderson@wanderson.com', 'M4U', 'hack2017'),
(3, 'wanderson@wanderson.com', 'M4U', 'hack2017'),
(4, 'matheus@matheus.com', 'Facebook', '14567'),
(5, 'matheus@matheus.com', 'Facebook', '14567'),
(6, 'matheus@matheus.com', 'Facebook', '122222'),
(7, 'matheus@matheus.com', 'Facebook', '111111111');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_revendedor`);

--
-- Índices de tabela `revendedor`
--
ALTER TABLE `revendedor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `revendedor`
--
ALTER TABLE `revendedor`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
