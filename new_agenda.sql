-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 26-Abr-2021 às 14:15
-- Versão do servidor: 8.0.23-0ubuntu0.20.04.1
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `new_agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contatos`
--

CREATE TABLE `tb_contatos` (
  `id_contatos` int NOT NULL,
  `nome_contatos` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `fone_contatos` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `email_contatos` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_contatos` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_contatos`
--

INSERT INTO `tb_contatos` (`id_contatos`, `nome_contatos`, `fone_contatos`, `email_contatos`, `foto_contatos`) VALUES
(3, 'Leandro Costa', '(85) 99999 9999', 'leandro@gmail.com', '6023ce082e395.jpg'),
(4, 'Lucas Costa', '(85) 90000 9999', 'lucas@gmail.com', '6023ce2164e52.jpg'),
(7, 'Ana', '(85) 98888 4455', 'ana@bol.com.br', '6076eb7c7c4ab.jpg'),
(9, 'ZeKa', '(88) 98744 2020', 'zeKa@gmail.com', '6076ec05e2080.jpg'),
(10, 'Júlio', '(85) 98855 4444', 'julio@yahoo.com.br', '6076f7d354464.jpg'),
(12, 'Carlos', '(85) 98855 4477', 'carlos@bol.com.br', '6076f81746364.jpg'),
(13, 'Amanda', '(85) 98855 4488', 'amanda@gmail.com', '6076f85e54c72.jpg'),
(14, 'Isabel', '(85) 98855 4444', 'isabel@gmail.com', '6076f88197484.jpg'),
(15, 'Beatriz', '(85) 98855 4411', 'bia@gmail.com', '6076f8a9ad506.jpg'),
(16, 'Camila', '(85) 98855 4422', 'camila@hotmail.com.br', '6076f8d11a519.jpg'),
(17, 'Maria Isabel', '(85)99155669988', 'maria@gmail.com', '6086c3eda47e0.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int NOT NULL,
  `foto_user` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `nome_user` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `email_user` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `senha_user` varchar(150) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `foto_user`, `nome_user`, `email_user`, `senha_user`) VALUES
(1, '602eb69e4a59b.jpg', 'Leandro Costa LTI', 'leandro@gmail.com', 'TVRJek5EVTI='),
(2, '606dc5b620ab8.jpg', 'João Lucas', 'lucas@gmail.com', 'MTIz'),
(3, '602eb77327cd7.jpg', 'Brena', 'brena@gmail.com', 'MTIzNDU2Nzg='),
(4, '604767a0679d5.jpg', 'Maria', 'maria@gmail.com', 'MTIzNDU2'),
(5, '6086c09256741.jpg', 'Lucas Costa', 'lucas@gmail.com', 'cXdlMTIz');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_contatos`
--
ALTER TABLE `tb_contatos`
  ADD PRIMARY KEY (`id_contatos`);

--
-- Índices para tabela `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_contatos`
--
ALTER TABLE `tb_contatos`
  MODIFY `id_contatos` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
