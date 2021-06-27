-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jun-2021 às 04:47
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vendaimoveis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cod_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(255) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cod_cliente`, `nome_cliente`, `cpf`, `email`, `telefone`) VALUES
(162, 'Allan Victor Pereira', '123.456.789.00', 'allanvictor2000@gmail.com', '(84) 99900-8877'),
(163, 'Maria Fernanda Lopes', '123.456.789.01', 'fernanda.m@gmail.com', '(51) 98709-8990'),
(164, 'Cristina Pereira', '123.456.789.02', 'cristina23@gmail.com', '(84) 99444-5555'),
(165, 'José Carlos de Almeida', '123.456.789.03', 'carlos.j@gmail.com', '(84) 98167-9090'),
(166, 'Victor Lucas', '098.890.765-12', 'v.lucas34@gmail.com', '(51) 99789-0909'),
(167, 'Caio Fernando Abreu', '123.456.789.45', 'caio.f.abreu@hotmail.com', '(55) 96789-0987'),
(168, 'Claudio', '123.456.789.87', 'claudio@hotmail.com', '(84) 99170-59854'),
(169, 'IZABELE ', '123.456.789.99', 'iza33@gmail.com', '(84) 99170-5930'),
(170, 'Maria Clara Nunes', '123.456.789.23', 'maria@gmail.com', '(84) 99999-9999'),
(171, 'Maria ', '123.456.789.90', 'maria2@gmail.com', '(84) 99170-5935');

-- --------------------------------------------------------

--
-- Estrutura da tabela `corretor`
--

CREATE TABLE `corretor` (
  `cod_corretor` int(11) NOT NULL,
  `nome_corretor` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `corretor`
--

INSERT INTO `corretor` (`cod_corretor`, `nome_corretor`, `senha`) VALUES
(1, 'admin', 'admin0101');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `cod_venda` int(11) NOT NULL,
  `imovel` varchar(255) NOT NULL,
  `valor` double NOT NULL,
  `cod_corretor` int(11) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `forma_pagamento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`cod_venda`, `imovel`, `valor`, `cod_corretor`, `cliente`, `forma_pagamento`) VALUES
(1, 'Apartamento - Rio de Janeiro / 003 ', 130, 1, 'Allan Victor', 'A vista'),
(2, 'Apartamento - Minas Gerais / 004', 180, 1, 'Victor Lucas', 'Parcelado em 180x'),
(3, 'Apartamento - Natal / 004', 18000000, 1, 'José Carlos de Almeida', 'A vista');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cod_cliente`);

--
-- Índices para tabela `corretor`
--
ALTER TABLE `corretor`
  ADD PRIMARY KEY (`cod_corretor`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`cod_venda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cod_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT de tabela `corretor`
--
ALTER TABLE `corretor`
  MODIFY `cod_corretor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `cod_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
