-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/09/2023 às 21:44
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `listacompras`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `item`
--

CREATE TABLE `item` (
  `codigo` int(11) NOT NULL COMMENT 'Código de item da lista de compras',
  `datahora` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Data e hora do item',
  `descricao` varchar(200) NOT NULL COMMENT 'Descrição do item na lista de compras',
  `quantidade` decimal(12,2) DEFAULT NULL COMMENT 'Quantidade do item para comprar',
  `codigo_lista` int(11) NOT NULL COMMENT 'Código da lista que o item pertence'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `item`
--

INSERT INTO `item` (`codigo`, `datahora`, `descricao`, `quantidade`, `codigo_lista`) VALUES
(1, '2023-09-18 14:18:33', 'arroz', 2.00, 1),
(2, '2023-09-18 14:43:55', 'carne', 1.00, 1),
(7, '2023-09-18 17:04:37', 'boracha', 1.00, 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `lista`
--

CREATE TABLE `lista` (
  `codigo` int(11) NOT NULL COMMENT 'Códico da lista compras',
  `nome` varchar(100) NOT NULL COMMENT 'Nome da lista de compras'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Lista de compras';

--
-- Despejando dados para a tabela `lista`
--

INSERT INTO `lista` (`codigo`, `nome`) VALUES
(3, 'Carro'),
(9, 'Casa'),
(1, 'Compras'),
(10, 'escola'),
(12, 'Festa de Natal'),
(2, 'Trabalho');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `lista_fk` (`codigo_lista`);

--
-- Índices de tabela `lista`
--
ALTER TABLE `lista`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `nome_lista` (`nome`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `item`
--
ALTER TABLE `item`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código de item da lista de compras', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `lista`
--
ALTER TABLE `lista`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Códico da lista compras', AUTO_INCREMENT=13;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `lista_fk` FOREIGN KEY (`codigo_lista`) REFERENCES `lista` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
