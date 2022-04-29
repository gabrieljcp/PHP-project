-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Abr-2022 às 01:35
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendente`
--

CREATE TABLE `atendente` (
  `id_atendente` int(10) UNSIGNED NOT NULL,
  `nome_atendente` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(10) UNSIGNED NOT NULL,
  `nome_categoria` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `usuario_id_usuario` int(10) UNSIGNED NOT NULL,
  `livro_id_livro` int(10) UNSIGNED NOT NULL,
  `atendente_id_atendente` int(10) UNSIGNED NOT NULL,
  `data_emprestimo` date DEFAULT NULL,
  `devolucao_emprestimo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `id_livro` int(10) UNSIGNED NOT NULL,
  `titulo_livro` varchar(45) DEFAULT NULL,
  `autor_livro` varchar(45) DEFAULT NULL,
  `editora_livro` varchar(45) DEFAULT NULL,
  `edicao_livro` char(4) DEFAULT NULL,
  `ano_livro` year(4) DEFAULT NULL,
  `localidade_livro` varchar(45) DEFAULT NULL,
  `categoria_id_categoria` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `nome_usuario` varchar(45) DEFAULT NULL,
  `email_usuario` varchar(45) DEFAULT NULL,
  `telefone_usuario` varchar(45) DEFAULT NULL,
  `data_nasc_usuario` date DEFAULT NULL,
  `cpf_usuario` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atendente`
--
ALTER TABLE `atendente`
  ADD PRIMARY KEY (`id_atendente`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`usuario_id_usuario`,`livro_id_livro`,`atendente_id_atendente`),
  ADD KEY `fk_usuario_has_livro_livro1_idx` (`livro_id_livro`),
  ADD KEY `fk_usuario_has_livro_usuario_idx` (`usuario_id_usuario`),
  ADD KEY `fk_emprestimo_atendente1_idx` (`atendente_id_atendente`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id_livro`,`categoria_id_categoria`),
  ADD KEY `fk_livro_categoria1_idx` (`categoria_id_categoria`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD CONSTRAINT `fk_emprestimo_atendente1` FOREIGN KEY (`atendente_id_atendente`) REFERENCES `atendente` (`id_atendente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_livro_livro1` FOREIGN KEY (`livro_id_livro`) REFERENCES `livro` (`id_livro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_livro_usuario` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `livro`
--
ALTER TABLE `livro`
  ADD CONSTRAINT `fk_livro_categoria1` FOREIGN KEY (`categoria_id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
