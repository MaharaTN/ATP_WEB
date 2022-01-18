-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/01/2022 às 14:58
-- Versão do servidor: 10.4.21-MariaDB
-- Versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `atp_web`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `devolucao`
--

CREATE TABLE `devolucao` (
  `id_devolucao` int(11) NOT NULL,
  `id_emprestimo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `id_emprestimo` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `nome_item` varchar(255) DEFAULT NULL,
  `data_emprestimo` date NOT NULL,
  `data_devolucao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `emprestimo`
--

INSERT INTO `emprestimo` (`id_emprestimo`, `id_item`, `id_login`, `nome_item`, `data_emprestimo`, `data_devolucao`) VALUES
(1, 3, 2, 'Redmi note 8', '2021-11-02', '2021-11-16'),
(2, 2, 2, 'BOX_TOG', '2021-11-20', '2021-11-27'),
(4, 4, 2, 'Xbox', '2021-11-18', '2021-11-26'),
(11, 7, 6, 'Cama', '2021-12-14', '2021-12-22');

-- --------------------------------------------------------

--
-- Estrutura para tabela `item`
--

CREATE TABLE `item` (
  `id_item` int(11) NOT NULL,
  `nome_item` varchar(255) NOT NULL,
  `type_item` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `item`
--

INSERT INTO `item` (`id_item`, `nome_item`, `type_item`) VALUES
(1, 'BOX_ACOTAR', 'Livro'),
(2, 'BOX_TOG', 'Livro'),
(3, 'Redmi note 8', 'Celular'),
(4, 'Xbox', 'Console'),
(5, 'Caixa de som falsificada', 'Eletrônico'),
(6, 'PC', 'PC'),
(7, 'Cama', 'Móvel');

-- --------------------------------------------------------

--
-- Estrutura para tabela `logando`
--

CREATE TABLE `logando` (
  `id_login` int(11) NOT NULL,
  `nome_cad` varchar(255) NOT NULL,
  `sobrenome_cad` varchar(255) NOT NULL,
  `cpf_cad` int(11) NOT NULL,
  `dtnasc_cad` date NOT NULL,
  `cel_cad` varchar(255) NOT NULL,
  `rua_cad` varchar(255) NOT NULL,
  `bairro_cad` varchar(255) NOT NULL,
  `email_cad` varchar(255) NOT NULL,
  `password_cad` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `logando`
--

INSERT INTO `logando` (`id_login`, `nome_cad`, `sobrenome_cad`, `cpf_cad`, `dtnasc_cad`, `cel_cad`, `rua_cad`, `bairro_cad`, `email_cad`, `password_cad`) VALUES
(5, 'Josete', 'Dos Santos', 2147483647, '2003-02-13', '12944543245', 'Marechal Floriano Peixoto', 'Hauer', 'teste@teste.com', '14e1b600b1fd579f47433b88e8d85291'),
(6, 'Mahara', 'Nunes', 2147483647, '2007-01-30', '12944543233', 'david tows', 'Xaxim', 'm1@teste.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `devolucao`
--
ALTER TABLE `devolucao`
  ADD PRIMARY KEY (`id_devolucao`,`id_emprestimo`);

--
-- Índices de tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`id_emprestimo`,`id_item`,`id_login`);

--
-- Índices de tabela `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`);

--
-- Índices de tabela `logando`
--
ALTER TABLE `logando`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `devolucao`
--
ALTER TABLE `devolucao`
  MODIFY `id_devolucao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `id_emprestimo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `item`
--
ALTER TABLE `item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `logando`
--
ALTER TABLE `logando`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
