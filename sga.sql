-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 12-Nov-2018 às 23:53
-- Versão do servidor: 5.7.12-log
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sga`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrar`
--

CREATE TABLE `administrar` (
  `cod_admin` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administrar`
--

INSERT INTO `administrar` (`cod_admin`, `nome`, `login`, `senha`, `status`) VALUES
(1, 'Danilo', '1111549', 'educacao', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `cod_aluno` int(11) NOT NULL,
  `matricula` varchar(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `cod_turma` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`cod_aluno`, `matricula`, `nome`, `telefone`, `cod_turma`) VALUES
(2, '2018-00002', 'Felipe Lima', '(00) 00000-000', 7),
(3, '2018-00003', 'Monnaliza Albuquerque', '(00) 00000-000', 6),
(4, '2018-00004', 'Matias dos Santos', '(00) 00000-000', 6),
(5, '2018-00005', 'Kelly dos Santos', '(00) 00000-000', 5),
(6, '2018-00006', 'Breno da Silva Moreira', '(00) 00000-000', 7),
(8, '2018-00008', 'Germano Augusto', '(00) 00000-000', 7),
(9, '2018-00009', 'Natali Walters', '(00) 00000-000', 6),
(10, '2018-00010', 'SebastiÃ£o Pereira da Silva', '(00) 00000-000', 6),
(11, '2018-00011', 'Bruno Alvarenda mendes', '(00) 00000-000', 6),
(20, '2018-000-1', 'Luciana Ferreira', '(33) 3522-2222', 7),
(13, '2018-00013', 'Cristine Silva', '(00) 00000-000', 6),
(14, '2018-00014', 'Simon Oliveira', '(00) 00000-000', 6),
(15, '2018-00015', 'Carlos dos Santos Pereira', '(00) 00000-000', 5),
(16, '2018-00016', 'Matheus Almeida', '(00) 00000-000', 7),
(19, '2018-000-1', 'Giovanni Camargo', '3522147983', 7),
(17, '2018-00024', 'Pedro Junior dos Santos', '(00) 00000-000', 5),
(21, '2018-000-1', 'NATALIA SILVA', '33352217993', 5),
(22, '2018-000-1', 'Luciana Ferreira', '3398873-5888', 5),
(23, '2018-20018', 'Paula Starick', '000000', 6),
(24, '2018-000-1', 'Lorene Loiola', '(33) 3522-2222', 6),
(30, '45665656', 'Antônio Adolfo', '3333333666', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno_turma`
--

CREATE TABLE `aluno_turma` (
  `cod_aluno` int(11) NOT NULL,
  `cod_turma` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno_turma`
--

INSERT INTO `aluno_turma` (`cod_aluno`, `cod_turma`) VALUES
(0, 5),
(0, 5),
(1, 5),
(1, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `cod_curso` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sigla` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`cod_curso`, `nome`, `sigla`) VALUES
(3, 'Sistemas de Informação', 'S.I'),
(4, 'Tecnologo em Processos Administrativos', 'TPA'),
(5, 'Agronomia', 'Agro'),
(6, 'Ensino Médio', 'E.M'),
(7, 'Ensino Fundamental', 'E.F');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `painel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `status`, `code`, `senha`, `nome`, `painel`) VALUES
(18, 'Ativo', 'admin', 'admin', '', 'secretaria'),
(19, 'Ativo', 'admin2', 'admin', '', 'secretaria'),
(22, 'Ativo', 'contato@admin.com', 'educacao', 'Danilo Ferraz', 'secretaria'),
(23, 'Ativo', 'admin@admin.com', 'admin', 'AdministraÃ§Ã£o de Sistemas', 'administrador'),
(24, 'Ativo', 'embranco', 'embranco', 'embranco', 'secretaria'),
(25, 'Ativo', 'felipe', '123', 'Felipe Lima', 'administrador'),
(26, 'Ativo', 'danilof@etmds.edu.br', 'danilo', 'Danilo Ferraz', 'administrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `cod_turma` int(11) NOT NULL,
  `letra` varchar(1) NOT NULL,
  `periodo` int(11) NOT NULL,
  `cod_curso` int(11) NOT NULL,
  `ano` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `nome_curso` varchar(56) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`cod_turma`, `letra`, `periodo`, `cod_curso`, `ano`, `semestre`, `nome_curso`) VALUES
(5, 'P', 3, 7, 2018, 1, NULL),
(6, 'A', 2, 4, 2018, 1, NULL),
(7, 'F', 1, 4, 2017, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrar`
--
ALTER TABLE `administrar`
  ADD PRIMARY KEY (`cod_admin`);

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`cod_aluno`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`cod_curso`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`cod_turma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrar`
--
ALTER TABLE `administrar`
  MODIFY `cod_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `cod_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `cod_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `cod_turma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
