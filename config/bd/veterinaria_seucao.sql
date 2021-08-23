-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 23-Ago-2021 às 21:27
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `veterinaria_seucao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animais`
--

DROP TABLE IF EXISTS `animais`;
CREATE TABLE IF NOT EXISTS `animais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(15) NOT NULL,
  `raca` varchar(45) DEFAULT NULL,
  `tipo` char(1) NOT NULL,
  `users_id` int(11) NOT NULL,
  `procedimentos_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`users_id`),
  KEY `fk_animais_users_idx` (`users_id`),
  KEY `fk_animais_procedimentos1_idx` (`procedimentos_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `animais`
--

INSERT INTO `animais` (`id`, `nome`, `raca`, `tipo`, `users_id`, `procedimentos_id`) VALUES
(1, 'Max', 'Golden Retriever', 'M', 3, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `procedimentos`
--

DROP TABLE IF EXISTS `procedimentos`;
CREATE TABLE IF NOT EXISTS `procedimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  `previsao` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `procedimentos`
--

INSERT INTO `procedimentos` (`id`, `tipo`, `previsao`) VALUES
(1, 'Vacina', NULL),
(2, 'Tosa', NULL),
(3, 'Cirurgia', NULL);

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `tblexibir`
-- (Veja abaixo para a view atual)
--
DROP VIEW IF EXISTS `tblexibir`;
CREATE TABLE IF NOT EXISTS `tblexibir` (
`id` int(11)
,`nome` varchar(15)
,`raca` varchar(45)
,`sexo` char(1)
,`nome_dono` varchar(45)
,`tipo_procedimento` varchar(45)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `cpf` char(11) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `funcao` char(1) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `cpf`, `endereco`, `funcao`, `senha`) VALUES
(1, 'ADM-MASTER', '11111111111', 'XXX', 'A', '123'),
(3, 'Augusto', '10999870670', 'Alameda dos Pelicanos 285', 'C', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Estrutura para vista `tblexibir`
--
DROP TABLE IF EXISTS `tblexibir`;

DROP VIEW IF EXISTS `tblexibir`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tblexibir`  AS  select `a`.`id` AS `id`,`a`.`nome` AS `nome`,`a`.`raca` AS `raca`,`a`.`tipo` AS `sexo`,`u`.`nome` AS `nome_dono`,`p`.`tipo` AS `tipo_procedimento` from ((`animais` `a` join `users` `u` on((`a`.`users_id` = `u`.`id`))) join `procedimentos` `p` on((`a`.`procedimentos_id` = `p`.`id`))) ;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `animais`
--
ALTER TABLE `animais`
  ADD CONSTRAINT `fk_animais_procedimentos1` FOREIGN KEY (`procedimentos_id`) REFERENCES `procedimentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_animais_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
